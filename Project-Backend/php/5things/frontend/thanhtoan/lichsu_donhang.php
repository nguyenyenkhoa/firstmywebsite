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

            $dh_ma = $_GET['dh_ma'];



            $sqlSelectDonDatHang = <<<EOT
            SELECT ddh.dh_ma, ddh.dh_ngaylap, ddh.dh_ngaygiao, kh.kh_ten, kh.kh_dienthoai,kh.kh_diachi
            , SUM(spddh.sp_dh_soluong * spddh.sp_dh_gia) AS TongThanhTien
        FROM `dondathang` ddh
        JOIN `sp_dondathang`spddh ON ddh.dh_ma = spddh.dh_ma
        JOIN `khachhang` kh ON ddh.kh_tendangnhap = kh.kh_tendangnhap
        WHERE ddh.dh_ma=$dh_ma
        GROUP BY ddh.dh_ma, ddh.dh_ngaylap, kh.kh_ten, kh.kh_dienthoai
EOT;

$resultSelectDonDatHang = mysqli_query($conn, $sqlSelectDonDatHang);

    $dataDonDatHang=[];
    while ($row1 = mysqli_fetch_array($resultSelectDonDatHang, MYSQLI_ASSOC)) {
        $dataDonDatHang[] = array(
            'dh_ma' => $row1['dh_ma'],
            'dh_ngaylap' => date('d/m/Y H:i:s', strtotime($row1['dh_ngaylap'])),
            'kh_ten' => $row1['kh_ten'],
            'kh_diachi' => $row1['kh_diachi'],
            'kh_email' => $row['kh_email'],
            'kh_dienthoai' => $row1['kh_dienthoai'],
        );
    }

    $sqlSelectSanPham = <<<EOT
    SELECT 
        sp.sp_ma, sp.sp_ten, spddh.sp_dh_gia, spddh.sp_dh_soluong
    FROM `sp_dondathang` spddh
    JOIN `sanpham` sp ON spddh.sp_ma = sp.sp_ma
    WHERE spddh.dh_ma=$dh_ma
EOT;

$resultSelectSanPham = mysqli_query($conn, $sqlSelectSanPham);
$dataSanPham = [];
while ($rows = mysqli_fetch_array($resultSelectSanPham, MYSQLI_ASSOC)) {
    $dataSanPham[] = array(
        'sp_ma' => $rows['sp_ma'],
        'sp_ten' => $rows['sp_ten'],
        'sp_dh_gia' => $rows['sp_dh_gia'],
        'sp_dh_soluong' => $rows['sp_dh_soluong'],
    );
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
                                            <h3 class="titleTypeProducts">Lịch sử thông tin đơn hàng</h3>
                                        </div>
                                        <table id="tblGioHang" class="table table-bordered table-hover mt-2 tableForm"
                                            style="width:100%">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Họ tên khách hàng</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Điện thoại</th>
                                                    <th>Ngày lập đơn</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($dataDonDatHang as $item):?>
                                            <tbody id="datarow" style="background-color: #f2f2f2;">
                                                <tr>
                                                    <td><?= $item['kh_ten']?></td>
                                                    <td><?= $item['kh_diachi']?></td>
                                                    <td><?= $item['kh_dienthoai']?></td>
                                                    <td><?= $item['dh_ngaylap']?></td>
                                                </tr>
                                            </tbody>
                                            <?php endforeach ?>
                                        </table>
                                        <div class="titleTypeProducts">
                                            <h3 class="titleTypeProducts">lịch sử chi tiết đơn hàng</h3>
                                        </div>
                                        <table id="tblGioHangsp"  class="table table-bordered table-hover mt-2 tableForm"
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
                                            <tbody style="background-color: #f2f2f2;">
                                                <?php $stt = 1; ?>
                                                <?php foreach ($dataSanPham as $item1):?>
                                              
                                                <tr>
                                                    <td><?= $stt++ ?></td>
                                                    <td><?= $item1['sp_ten']?></td>
                                                    <td><?= $item1['sp_dh_soluong']?></td>
                                                    <td><?= number_format($item1['sp_dh_gia'], 2, ".", ","). ' VNĐ'?></td>
                                                    <td><?= number_format($item1['sp_dh_soluong'] * $item1['sp_dh_gia'], 2, ".", ","). ' VNĐ'?>
                                                    </td>
                                                </tr>
                                                
                                                
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                        <table style="border: 0; width:100%">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <small>Xin cám ơn Quý khách đã ủng hộ công ty, Chúc Quý khách
                                                            thật nhiều sức khỏe!</small>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- <p>Đặt hàng thành công</p> -->
                                        <a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php"
                                            class="btn btn-info btn-md btn-buy"><i class="fa fa-shopping-cart"
                                                aria-hidden="true"></i>
                                            Mua hàng tiếp</a>
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
</body>

</html>