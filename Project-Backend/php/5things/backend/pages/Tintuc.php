<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức khuyến mãi</title>
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">

</head>

<body>
    <?php
        include_once(__DIR__.'/../../connectdb.php');
        include_once(__DIR__.'/../css/stylebackend.php');
        include_once(__DIR__.'/../css/stylebackendSale.php');
        include_once(__DIR__.'/../js/styleJSbackend.php');
    ?>

    <div id="processbar"></div>
    <div id="scrollPath"></div>
    <button onclick="topFunction()" id="myBtn-top" title="Go to top"><i class="fa fa-arrow-up btn-ontop"
            aria-hidden="true"></i></button>

    <div class="background2">
        <section>
            <nav class="navbar fixed-top navbar-expand-lg navbar-light  bg-color ">
                <a class="navbar-brand" href="#">
                    <img src="/Project-Backend/php/5things/assets/images/logo/logoicon.png"
                        style="height: 50px; width: 60px; border-radius: 30px;">
                    <span class="navbar-brand mb-0 h1">5Things</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-color">
                            <a class="nav-linka" href="index.php">Trang chủ<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-color">
                            <a class="nav-linka" href="Gioithieu.php">Giới thiệu</a>
                        </li>
                        <li class="dropdown subnav nav-color">
                            <a class="nav-linka dropdown-toggle" href="DsSanpham.php">
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
                                            <td><a href="DsSanpham.php">Gạch 60x60</a></td>
                                            <td><a href="DsSanpham.php">Gạch ôp tường La Mã</a></td>
                                            <td><a href="DsSanpham.php">Gạch men sứ trắng</a></td>
                                            <td><a href="DsSanpham.php">Gạch nung đất sét</a></td>
                                            <td><a href="DsSanpham.php">Gạch tàu</a></td>
                                            <td><a href="DsSanpham.php">Gạch bê tông cốt liệu</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="DsSanpham.php">Gạch vân giả gỗ</a></td>
                                            <td><a href="DsSanpham.php">Gạch ốp tường đá nổi</a></td>
                                            <td><a href="DsSanpham.php">Gạch men gốm</a></td>
                                            <td><a href="DsSanpham.php">Gạch đặc</a></td>
                                            <td><a href="DsSanpham.php">Gạch thông gió</a></td>
                                            <td><a href="DsSanpham.php">Gạch bê tông khí chưng áp</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="DsSanpham.php">Gạch vân trắng</a></td>
                                            <td><a href="DsSanpham.php">Gạch ốp tường vẽ</a></td>
                                            <td><a href="DsSanpham.php">Gạch men vân nổi</a></td>
                                            <td><a href="DsSanpham.php">Gạch 6 lỗ</a></td>
                                            <td><a href="DsSanpham.php">Gạch xây nhà</a></td>
                                            <td><a href="DsSanpham.php">Gạch bê tông bọt</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="DsSanpham.php">Gạch vân đen</a></td>
                                            <td><a href="DsSanpham.php">Gạch ốp tường 3D</a></td>
                                            <td><a href="DsSanpham.php">Gạch men nghệ thuật</a></td>
                                            <td><a href="DsSanpham.php">Gạch 3 lỗ</a></td>
                                            <td><a href="DsSanpham.php">Gạch ống 4 lỗ</a></td>
                                            <td><a href="DsSanpham.php">Gạch bê tông giả đá</a></td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </li>
                        <li class="nav-color">
                            <a class="nav-linka" href="Tintuc.php">Tin sản phẩm</a>
                        </li>
                        <li class="nav-color">
                            <a class="nav-linka" onclick="myFunction()">Đăng xuất</a>

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
                        <a href="/Project-Backend/php/5things/frontend/thanhtoan/giohang.php"
                            class="aNavbar colorlinkNav"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </form>
                </div>
            </nav>
        </section>
        <script>
        function myFunction() {
            alert("Bạn có muốn đăng xuất?");
            location.href = "/Project-Backend/php/5things/backend/auth/Logout.php";
        }
        </script>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="newsh1">Tin tức sản phẩm cập nhật mỗi tháng</h1>
                    </div>
                    <div class="col-md-4">
                        <ul class="listnews">
                            <li>
                                Thông tin khuyến mãi tháng.
                            </li>
                            <li>
                                Thông tin ra mắt sản phẩm mới.
                            </li>
                            <li>
                                Cập nhật giá sản phẩm mới nhất.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="bodymain">
        <section class="ssElements">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <img src="/Project-Backend/php/5things/assets/images/products/news/news2.jpg"
                            class="backgroundcol1">
                        <div class="content-relative">
                            <div class="text">
                                <p>Từ ngày 27/7 5Things giới thiệu chương trình ưu đãi đến 50%, áp dụng cho hàng
                                    loạt sản phẩm gạch ốp lát. Đây là cơ hội để các chủ nhà có thể làm mới không gian
                                    sống với gần hơn 1.500 bộ sưu tập gạch ốp lát từ các thương hiệu hàng đầu thế giới.
                                    Các bộ sưu tập gạch ốp lát đa dạng bề mặt từ gạch vân đá marble, gạch vân đá tự
                                    nhiên, gạch thiết kế xi măng đến gạch trang trí, gạch vân gỗ hứa hẹn sẽ đem đến
                                    nhiều lựa chọn phong cách đa dạng cho mọi không gian ngoại, nội thất nhà ở và các
                                    công trình thương mại.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="newsh3">Bảng giá gạch ốp lát cập nhật tháng 7/2020 </h3>
                        <div class="accordion" id="accordionExample">
                            <div class="card-color">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn-links btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Giá gạch lát Prime 40×40 cm (400×400 mm)
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <table class="tablenews">
                                            <tr>
                                                <th>Mã SP</th>
                                                <th>Đơn giá (VNĐ/m2)</th>
                                                <th>Hình ảnh</th>
                                            </tr>
                                            <tr>
                                                <td>333</td>
                                                <td>79.000</td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/f1.JPG"
                                                        class="bricks">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>407</td>
                                                <td>89.000</td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/f2.JPG"
                                                        class="bricks">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>408</td>
                                                <td>88.000</td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/f3.JPG"
                                                        class="bricks">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="card-color">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn-links btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Gạch ốp tường
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <table class="tablenews">
                                            <tr>
                                                <th>Mã SP</th>
                                                <th>Đơn giá (VNĐ/m2)</th>
                                                <th>Hình ảnh</th>
                                            </tr>
                                            <tr>
                                                <td>123</td>
                                                <td>80.000</td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/f4.JPG"
                                                        class="bricks">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>779</td>
                                                <td>98.000</td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/f5.JPG"
                                                        class="bricks">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3110</td>
                                                <td>67.000</td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/f6.JPG"
                                                        class="bricks">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card-color">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn-links btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Gạch lát nền
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <table class="tablenews">
                                            <tr>
                                                <th>Mã SP</th>
                                                <th>Đơn giá (VNĐ/m2)</th>
                                                <th>Hình ảnh</th>
                                            </tr>
                                            <tr>
                                                <td>9776</td>
                                                <td>199.000</td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/f7.JPG"
                                                        class="bricks">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12030</td>
                                                <td>209.000</td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/f8.JPG"
                                                        class="bricks">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8265</td>
                                                <td>262.000</td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/f9.JPG"
                                                        class="bricks">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="backgroundsuprow1">
                                <p>Giá gạch lát nền phòng khách bao nhiêu tiền là quan tâm hàng đầu của
                                    người dùng khi mua gạch. Trong bài viết dưới đây, <strong>5Things</strong> xin gửi
                                    tới
                                    bạn bảng báo giá gạch lát phòng khách <strong>MỚI NHẤT 2020</strong>. Các bạn có thể
                                    tham
                                    khảo bảng giá bán gạch lát trên đây để lựa chọn được sản phẩm phù
                                    hợp nhất với điều kiện tài chính.<br>
                                    60×60 là kích thước gạch lát nền phòng khách thông dụng nhất. Kích thước gạch này
                                    phù hợp với đa số diện tích phòng khách của các công trình nhà ở hiện nay. Không chỉ
                                    vậy, gạch lát nền 60×60 còn có mẫu mã rất đa dạng. Phù hợp với mọi phong cách thiết
                                    kế phòng khách.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-relative">
                            <div class="backgroundsuprow2">
                                <div class="hero-text">
                                    <h1 style="font-size:50px">Chương trình khuyến mãi gạch ốp tường tháng 7/2020 đầy
                                        hấp
                                        dẫn!
                                    </h1>
                                    <p>Đừng bỏ lỡ cơ hội làm đẹp cho ngôi nhà của bạn với mức chi phí thấp nhất</p>
                                </div>
                                <div class="overlay">
                                    <div class="text-news">
                                        <table class="table-saleoff">
                                            <tr>
                                                <th colspan="2">Các sản phẩm khuyến mãi</th>
                                            </tr>
                                            <tr>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/kmr0.JPG"
                                                        class="saleoff">
                                                </td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/kmr1.JPG"
                                                        class="saleoff">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/kmr2.JPG"
                                                        class="saleoff">
                                                </td>
                                                <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/kmr3.JPG"
                                                        class="saleoff">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsfeed">
                            <h2 class="newsh2">
                                Đừng bỏ lỡ cơ hội mua sắm các sản phẩm gạch ốp lát nhập khẩu với giá ưu đãi tại 5Things!
                            </h2>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/wall4.jpg"
                            style="height: 550px; width: 450px;">
                    </div>
                    <div class="col-md-7">
                        <div class="padding-news">
                            <p><strong><i>Thông tin ưu đãi:</i></strong></p>
                            <ul>
                                <li><em style="color: red;">*Áp dụng từ 27/7/2020 đến khi hết hàng.</em></li>
                                <li>Chương trình ưu đãi lên đến 50% dành cho các bộ sưu tập gạch ốp lát 2020.</li>
                                <li><em style="color: red;">*Áp dụng từ 27/7 – 4/8/2020</em></li>
                                <li>Chương trình ưu đãi 25% dành cho các bộ sưu tập gạch châu Âu mới nhất 2020.</li>
                                <li>Chương trình ưu đãi 20% dành cho các bộ sưu tập gạch châu Á mới nhất 2020.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
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
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; 123/30 đường ABC, phường XX,
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
                                <input type="email" name="email" id="email"
                                    class="text-input contact-input form-control"
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