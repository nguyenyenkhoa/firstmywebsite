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
    <title>Chi tiết giỏ hàng</title>

    <!-- Datatable CSS -->

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
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch 60x60</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch ôp tường La Mã</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch men sứ trắng</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch nung đất sét</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch tàu</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch bê tông cốt liệu</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch vân giả gỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch ốp tường đá nổi</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch men gốm</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch đặc</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch thông gió</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch bê tông khí chưng áp</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch vân trắng</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch ốp tường vẽ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch men vân nổi</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch 6 lỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch xây nhà</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch bê tông bọt</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch vân đen</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch ốp tường 3D</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch men nghệ thuật</a>
                                        </td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch 3 lỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch ống 4 lỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanPham.php">Gạch bê tông giả đá</a></td>
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

        
        $giohangdata = [];
        if (isset($_SESSION['giohangdata'])) {
            $giohangdata = $_SESSION['giohangdata'];
        } else {
            $giohangdata = [];
        }
        ?>
        <div class="backgroundfunctions">
            <div class="container-fluid">
                <div class="row">
                    <main role="main" class="listTypeProducts">

                        <div class="titleTypeProducts">
                            <h1 class="titleTypeProducts">Chi tiết giỏ hàng</h1>
                        </div>
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
                                    <?php if (!empty($giohangdata)) : 
                                $toltal = 0;?>
                                    <div class="formStyle">

                                        <table id="tblGioHang" class="table table-bordered table-hover mt-2 tableForm"
                                            style="width:100%">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Đơn giá</th>
                                                    <th>Thành tiền</th>
                                                    <th>Tùy chỉnh</th>
                                                </tr>
                                            </thead>
                                            <tbody id="datarow" style="background-color: #f2f2f2;">
                                                <?php $stt = 1; ?>
                                                <?php foreach ($giohangdata as $sanpham) : ?>
                                                <?php if($sanpham['kh_tendangnhap']==$_SESSION['kh_tendangnhap_logged']): ?>
                                                <tr>
                                                    <td><?= $stt++ ?></td>
                                                    <td>
                                                        <?= $sanpham['sp_ten'] ?>
                                                        <?= $sanpham['kh_tendangnhap'] ?>

                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control"
                                                            id="soluong_<?= $sanpham['sp_ma'] ?>" name="soluong"
                                                            value="<?= $sanpham['sp_soluong'] ?>" />
                                                        <button class="btn btn-info btn-sm btn-capnhat-soluong"
                                                            data-sp-ma="<?= $sanpham['sp_ma'] ?>">Cập nhật</button>
                                                    </td>
                                                    <td><?= number_format($sanpham['sp_gia'], 2, ".", ",")?> VNĐ</td>
                                                    <td><?= number_format($sanpham['sp_soluong'] * $sanpham['sp_gia'], 2, ".", ",")?>
                                                        VNĐ
                                                    </td>
                                                    <td>
                                                        <a id="delete_<?= $stt ?>" data-sp-ma="<?= $sanpham['sp_ma'] ?>"
                                                            class="btn btn-warning btnDelete btn-delete-sanpham">
                                                            <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                                        </a>
                                                    </td>
                                                </tr>
                                                <input type="hidden"
                                                    <?= $toltal += ($sanpham['sp_gia'] * $sanpham['sp_soluong'])?> />

                                                    <?php endif;?>

                                                <?php endforeach; ?>
                                                <tr>
                                                    <td colspan="4" style="text-align: right; "><strong>Tổng
                                                            cộng:</strong>
                                                    </td>
                                                    <td colspan="2">
                                                        <?=number_format($toltal, 2, ".", ",") ?> VNĐ

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php else : ?>
                                    <h2>Giỏ hàng rỗng!!!</h2>
                                    <?php endif; ?>
                                    <a href="chitiet-donhang.php" class="btn btn-info btn-md"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i>
                                        Đặt hàng</a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

    </main>
    <script>
    $(document).ready(function() {

        function removeSanPhamVaoGioHang(id) {
            var dulieugoi = {
                sp_ma: id
            };

            $.ajax({
                url: '/Project-Backend/php/5things/frontend/api/giohang-xoasp.php',
                method: "POST",
                dataType: 'json',
                data: dulieugoi,
                success: function(data) {
                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    var htmlString = `<h1>Không thể xử lý</h1>`;
                    $('#thongbao').html(htmlString);
                    $('.alert').removeClass('d-none').addClass('show');
                }
            });
        };

        $('#tblGioHang').on('click', '.btn-delete-sanpham', function(event) {
            event.preventDefault();
            var id = $(this).data('sp-ma');

            console.log(id);
            removeSanPhamVaoGioHang(id);
        });

        function capnhatSanPhamTrongGioHang(id, soluong) {
            var dulieugoi = {
                sp_ma: id,
                sp_soluong: soluong
            };

            $.ajax({
                url: '/Project-Backend/php/5things/frontend/api/giohang-capnhatsp.php',
                method: "POST",
                dataType: 'json',
                data: dulieugoi,
                success: function(data) {
                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    var htmlString = `<h1>Không thể xử lý</h1>`;
                    $('#thongbao').html(htmlString);
                    $('.alert').removeClass('d-none').addClass('show');
                }
            });
        };
        $('#tblGioHang').on('click', '.btn-capnhat-soluong', function(event) {
            event.preventDefault();
            var id = $(this).data('sp-ma');
            var soluongmoi = $('#soluong_' + id).val();
            capnhatSanPhamTrongGioHang(id, soluongmoi);
        });
    });
    </script>
    <section>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                    <h1 class="logotxt">
                        <span>5</span>Things
                    </h1>
                    <p>Thay mặt cho Công ty vật liệu xây dựng TNHHMTV 5Things, Ban Lãnh đạo chân
                        thành cảm ơn
                        quý khách hàng, đối tác, đại lý và nhà phân phối đồng hành cùng 5Things trong suốt nhiều
                        năm
                        qua.</p>
                    <div class="contact">
                        <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> &nbsp;
                            123-456-789</span>
                        <span><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;
                            info@5Things.com.vn</span>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; 123/30 đường ABC, phường
                            XX,
                            quận Ninh Kiều, thành phố Cần Thơ.</span>
                    </div>

                    <div class="socials">
                        <a href="#" class="colorLinks"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="colorLinks"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" class="colorLinks"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="footer-section links">
                    <h2>Lối tắc</h2><br>
                    <ul>
                        <li><a href="products.html" target="_blank" class="fastLinks">Sản phẩm</a></li>
                        <li><a href="news.html" target="_blank" class="fastLinks">Tin tức</a></li>
                        <li><a href="news.html" target="_blank" class="fastLinks">Khuyến mãi</a></li>
                    </ul>


                </div>
                <div class="footer-section contact-form">
                    <h2>Liên hệ</h2><br>

                    <form action="index.html" method="POST">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="text-input contact-input form-control"
                                placeholder="Địa chỉ email của bạn là...">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="text-input contact-input form-control"
                                placeholder="Hãy nhập nội dung ở đây."></textarea>
                            <button type="button" class="btn btn-info btn-big contact-btn">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                Gửi
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; 5Things.com | by Yen Khoa Nguyen
            </div>
        </div>
    </section>
    <script>
    AOS.init();
    </script>

    <script type="text/javascript">
    let progress = document.getElementById('processbar');
    let totalHeight = document.body.scrollHeight - window.innerHeight;
    window.onscroll = function() {
        let processHeight = (window.pageYOffset / totalHeight) * 100;
        progress.style.height = processHeight + "%";

    }
    </script>
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