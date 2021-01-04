<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">

</head>

<body>
    <div class="backgroundfunctions">

        <div class="container-fluid">
            <div class="row">
                <main role="main" class="listTypeProducts">
                    <?php
if (session_id() === '') {
    session_start();
}


        include_once(__DIR__ . '/../../connectdb.php');
        include_once(__DIR__.'/../../backend/js/styleJSbackend.php');
        include_once(__DIR__.'/../../backend/css/stylebackend.php');
        include_once(__DIR__.'/../../backend/css/StyleLinks.php');
        include_once(__DIR__.'/../../backend/css/stylebackenIntro.php');
        

?>
<?php 
if(!isset($_SESSION['kh_tendangnhap_logged']) || empty($_SESSION['kh_tendangnhap_logged'])){
    echo'Bạn hãy đăng nhập trước khi thanh toán!<a href="/Project-Backend/php/5things/Signin.php"></a>';
    die;
}else{
    if(!isset($_SESSION['giohangdata']) || empty($_SESSION['giohangdata'])){
        echo'Giỏ hàng rỗng!!!. Vui lòng chọn sản phẩm trước khi tahnh toán!';
        die;
    }

    $kh_tendangnhap = $_SESSION['kh_tendangnhap_logged'];
    $sqlSelectKhachhang = <<<EOT
        SELECT * FROM `khachhang` kh 
        WHERE kh.kh_tendangnhap = '$kh_tendangnhap'
EOT;

    $resultKhachhang = mysqli_query($conn, $sqlSelectKhachhang);


    $khachhangRows;
    while($row = mysqli_fetch_array($resultKhachhang, MYSQLI_ASSOC)){
        $khachhangRows = array(
            'kh_tendangnhap' => $row['kh_tendangnhap'],
            'kh_ten' => $row['kh_ten'],
            'kh_email' => $row['kh_email'],
            'kh_dienthoai' => $row['kh_dienthoai'],
            'kh_diachi' => $row['kh_diachi'],
        );
    }

    $dh_ngaylap = date('Y-m-d');
    $dh_ngaygiao = date('Y-m-d');
    $dh_noigiao = '';
    $dh_trangthaithanhtoan = 0;
    $httt_ma = 1;


    $sqlInsertDonHang = <<<EOT
    INSERT INTO `dondathang` (`dh_ngaylap`, `dh_ngaygiao`, `dh_noigiao`, `dh_trangthaithanhtoan`, `httt_ma`, `kh_tendangnhap`) 
    VALUES ('$dh_ngaylap', '$dh_ngaygiao', N'$dh_noigiao', '$dh_trangthaithanhtoan', '$httt_ma', '$kh_tendangnhap');
EOT;

    mysqli_query($conn, $sqlInsertDonHang);

    $dh_ma = $conn->insert_id;
    echo $dh_ma;
    $giohangdata = $_SESSION['giohangdata'];

    foreach($giohangdata as $item){
        $sp_ma = $item['sp_ma'];
        $sp_dh_soluong = $item['sp_soluong'];
        $sp_dh_dongia = $item['sp_gia'];

        if($item['kh_tendangnhap']==$_SESSION['kh_tendangnhap_logged']){
            $sqlInsertSanPhamDonDatHang = <<<EOT
            INSERT INTO `sp_dondathang` (`sp_ma`, `dh_ma`, `sp_dh_soluong`, `sp_dh_gia`) 
            VALUES ($sp_ma, $dh_ma, $sp_dh_soluong, $sp_dh_dongia);
EOT;

            mysqli_query($conn, $sqlInsertSanPhamDonDatHang);

            unset($_SESSION['giohangdata'][$sp_ma]);
                   
        }
}
}
?>
                    <div class="titleTypeProducts">
                        <h1 class="titleTypeProducts">Thanh toán thành công</h1><br />
                        <a href="/Project-Backend/php/5things/backend/pages/index.php" class="btn btn-info btn-md">Quay
                            về trang chủ</a>
                        <a href="lichsu_donhang.php?dh_ma=<?=$dh_ma?>" class="btn btn-info btn-md">Lịch sử đơn hàng</a>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>