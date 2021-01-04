<?php

if (session_id() === '') {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">

</head>

<body>
    <div id="processbar"></div>
    <div id="scrollPath"></div>
    <button onclick="topFunction()" id="myBtn-top" title="Go to top"><i class="fa fa-arrow-up btn-ontop"
            aria-hidden="true"></i></button>
    <section>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light  bg-color ">
            <a class="navbar-brand" href="#">
                <img src="/Project-Backend/php/5things/assets/images/logo/logoicon.png"
                    style="height: 50px; width: 60px; border-radius: 30px;">
                <span class="navbar-brand mb-0 h1">5Things</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-color">
                        <a class="nav-linka" href="/Project-Backend/php/5things/backend/pages/index.php">Trang chủ<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-color">
                        <a class="nav-linka" href="/Project-Backend/php/5things/backend/pages/Gioithieu.php">Giới
                            thiệu</a>
                    </li>
                    <li class="dropdown subnav nav-color">
                        <a class="nav-linka dropdown-toggle"
                            href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">
                            Sản phẩm
                        </a>
                        <div aria-labelledby="navbarDropdown">
                            <div class="subnav-content">
                                <table class="products">
                                    <tr>
                                        <th>
                                            Gạch ốp lát nền
                                        </th>
                                        <th>
                                            Gạch ốp tường
                                        </th>
                                        <th>
                                            Gạch men
                                        </th>
                                        <th>
                                            Gạch nung
                                        </th>
                                        <th>
                                            Gạch ống
                                        </th>
                                        <th>
                                            Gạch bê tông
                                        </th>
                                    </tr>
                                    <tr>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch
                                                60x60</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch ôp
                                                tường La Mã</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch men
                                                sứ trắng</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch nung
                                                đất sét</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch
                                                tàu</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch bê
                                                tông cốt liệu</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch vân
                                                giả gỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch ốp
                                                tường đá nổi</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch men
                                                gốm</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch
                                                đặc</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch
                                                thông gió</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch bê
                                                tông khí chưng áp</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch vân
                                                trắng</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch ốp
                                                tường vẽ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch men
                                                vân nổi</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch 6
                                                lỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch xây
                                                nhà</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch bê
                                                tông bọt</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch vân
                                                đen</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch ốp
                                                tường 3D</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch men
                                                nghệ thuật</a>
                                        </td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch 3
                                                lỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch ống
                                                4 lỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch bê
                                                tông giả đá</a></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </li>
                    <li class="nav-color">
                        <a class="nav-linka" href="/Project-Backend/php/5things/backend/pages/Tintuc.php">Tin sản
                            phẩm</a>
                    </li>
                    <li class="nav-color">
                        <a class="nav-linka" href="/Project-Backend/php/5things/backend/auth/Logout.php">Đăng xuất</a>

                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"
                            aria-hidden="true"></i></button>
                    <a href="#" class="aNavbar colorlinkNav "><i class="fa fa-phone" aria-hidden="true"></i></a>

                    <a href="#" class="aNavbar colorlinkNav "><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="aNavbar colorlinkNav"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" class="aNavbar colorlinkNav"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </form>
            </div>
        </nav>
    </section>

    <main role="main" class="mb-2">

        <?php
    include_once(__DIR__ . '/../../connectdb.php');
    include_once(__DIR__.'/../../backend/js/styleJSbackend.php');
    include_once(__DIR__.'/../../backend/css/stylebackend.php');
    include_once(__DIR__.'/../../backend/css/StyleLinks.php');
    include_once(__DIR__.'/../../backend/css/stylebackenIntro.php');

    if(!isset($_SESSION['kh_tendangnhap_logged']) || empty($_SESSION['kh_tendangnhap_logged'])){
        echo'Bạn hãy đăng nhập trước khi đặt hàng!<a href="/Project-Backend/php/5things/Signin.php"></a>';
        die;
    }else{
        if(!isset($_SESSION['giohangdata']) || empty($_SESSION['giohangdata'])){
            echo'
            <div class="titleTypeProducts">
                <h1 class="titleTypeProducts">Đã đặt hàng thành công!!!. Vui lòng chọn sản phẩm trước khi đặt hàng!</h1><br />
            </div>';
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
                'kh_dienthoai' => $row['kh_dienthoai'],
                'kh_diachi' => $row['kh_diachi'],
            );
        }
        $dh_ma = $conn->insert_id;

        $giohangdata = $_SESSION['giohangdata'];

        foreach($giohangdata as $item){
            $sp_ma = $item['sp_ma'];
            $sp_dh_soluong = $item['sp_soluong'];
            $sp_dh_dongia = $item['sp_gia'];
    }
    
    ?>
        <div class="backgroundfunctions">
            <div class="container-fluid">
                <div class="row">
                    <main role="main" class="listTypeProducts">
                        <div class="container mt-4">
                            <div id="alert-container" class="alert alert-warning alert-dismissible fade d-none"
                                role="alert">
                                <div id="thongbao">&nbsp;</div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="row">
                                <div class="col col-md-12">
                                    <div class="formStyle">
                                        <div class="titleTypeProducts">
                                            <h3 class="titleTypeProducts">Thông tin đơn hàng</h3>
                                        </div>
                                        <table id="tblGioHang" class="table table-bordered table-hover mt-2 tableForm"
                                            style="width:100%">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Họ tên khách hàng</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Số điện thoại</th>
                                                </tr>
                                            </thead>
                                            <tbody id="datarow" style="background-color: #f2f2f2;">
                                                <tr>
                                                    <td><?= $khachhangRows['kh_ten']?></td>
                                                    <td><?= $khachhangRows['kh_diachi']?></td>
                                                    <td><?= $khachhangRows['kh_dienthoai']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="titleTypeProducts">
                                            <h3 class="titleTypeProducts">Chi tiết đơn hàng</h3>
                                        </div>
                                        <table id="tblGioHang" class="table table-bordered table-hover mt-2 tableForm"
                                            style="width:100%">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Giá</th>
                                                    <th>Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody id="datarow" style="background-color: #f2f2f2;">
                                                <?php $stt = 1; ?>
                                                <?php foreach ($giohangdata as $item):?>
                                                <?php if($item['kh_tendangnhap']==$_SESSION['kh_tendangnhap_logged']):?>
                                                <tr>
                                                    <td><?= $stt++ ?></td>
                                                    <td><?= $item['sp_ten']?></td>
                                                    <td><?= $item['sp_soluong']?></td>
                                                    <td><?= number_format($item['sp_gia'], 2, ".", ",")?></td>
                                                    <td><?= number_format($item['sp_soluong'] * $item['sp_gia'], 2, ".", ","). 'VNĐ'?>
                                                    </td>
                                                </tr>
                                                <?php endif;?>
                                                <?php endforeach;?>
                                            </tbody>
                                        </table>

                                        <!-- <p>Đặt hàng thành công</p> -->
                                        <a href="muahang.php" class="btn btn-info btn-md btn-buy"><i
                                                class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            Mua hàng</a>
                                        <a href="/Project-Backend/php/5things/backend/pages/index.php"
                                            class="btn btn-info btn-md">Quay về trang
                                            chủ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </main>



    <?php } ?>

    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
</body>

</html>