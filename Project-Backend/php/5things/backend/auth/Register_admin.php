<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once(__DIR__.'../../../connectdb.php');
        if(isset($_POST['btnDangKyAdmin'])){
   
            $kh_tendangnhap = $_POST['kh_tendangnhap'];
            $kh_matkhau = sha1($_POST['kh_matkhau']);
            $kh_ten = $_POST['kh_ten'];
            $kh_gioitinh = $_POST['kh_gioitinh'];
            $kh_diachi = $_POST['kh_diachi'];
            $kh_dienthoai = $_POST['kh_dienthoai'];
            $kh_email = $_POST['kh_email'];
            $kh_ngaysinh = $_POST['kh_ngaysinh'];
            $kh_thangsinh = $_POST['kh_thangsinh'];
            $kh_namsinh = $_POST['kh_namsinh'];
            $kh_cmnd = $_POST['kh_cmnd'];

    
            $kh_makichhoat = sha1(time());
            $kh_trangthai = 1; 
            $kh_quantri = 1; 

            $sql = "INSERT INTO khachhang(kh_tendangnhap, kh_matkhau, kh_ten, kh_gioitinh, kh_diachi, kh_dienthoai, kh_email, kh_ngaysinh, kh_thangsinh, kh_namsinh, kh_cmnd, kh_makichhoat, kh_trangthai, kh_quantri) 
            VALUES ('$kh_tendangnhap', '$kh_matkhau', '$kh_ten', $kh_gioitinh, '$kh_diachi', '$kh_dienthoai', '$kh_email', $kh_ngaysinh, $kh_thangsinh, $kh_namsinh, '$kh_cmnd', '$kh_makichhoat', $kh_trangthai, $kh_quantri)";

            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);
            echo'<script>
            alert("Bạn đã đăng ký thành công");
            </script>';
            echo '<script>location.href = "/Project-Backend/php/5things/Signin.php";</script>';
        }
?>
<h1>Đăng ký thành công!</h1>
</body>

</html>