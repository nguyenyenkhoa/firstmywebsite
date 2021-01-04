<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">
</head>

<body>
    <!-- Kết nối đến database -->
    <?php
        include_once(__DIR__.'/connectdb.php');
        include_once(__DIR__.'/backend/css/stylebackend.php');
        include_once(__DIR__.'/backend/css/stylebackendList.php');
        include_once(__DIR__.'/backend/js/styleJSbackend.php');
    ?>
    <div id="processbar"></div>
    <div id="scrollPath"></div>
    <button onclick="topFunction()" id="myBtn-top" title="Go to top"><i class="fa fa-arrow-up btn-ontop"
            aria-hidden="true"></i></button>
    <section>

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-color">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo/logoicon.png" style="height: 50px; width: 60px; border-radius: 30px;">
                <span class="navbar-brand mb-0 h1">5Things</span>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-color">
                        <a class="nav-linka" href="index.php">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-color">
                        <a class="nav-linka" href="Introduce.php">Giới thiệu</a>
                    </li>
                    <li class="dropdown subnav nav-color">
                        <a class="nav-linka dropdown-toggle" href="ListProducts.php">
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
                                        <td><a href="ListProducts.php">Gạch 60x60</a></td>
                                        <td><a href="ListProducts.php">Gạch ôp tường La Mã</a></td>
                                        <td><a href="ListProducts.php">Gạch men sứ trắng</a></td>
                                        <td><a href="ListProducts.php">Gạch nung đất sét</a></td>
                                        <td><a href="ListProducts.php">Gạch tàu</a></td>
                                        <td><a href="ListProducts.php">Gạch bê tông cốt liệu</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="ListProducts.php">Gạch vân giả gỗ</a></td>
                                        <td><a href="ListProducts.php">Gạch ốp tường đá nổi</a></td>
                                        <td><a href="ListProducts.php">Gạch men gốm</a></td>
                                        <td><a href="ListProducts.php">Gạch đặc</a></td>
                                        <td><a href="ListProducts.php">Gạch thông gió</a></td>
                                        <td><a href="ListProducts.php">Gạch bê tông khí chưng áp</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="ListProducts.php">Gạch vân trắng</a></td>
                                        <td><a href="ListProducts.php">Gạch ốp tường vẽ</a></td>
                                        <td><a href="ListProducts.php">Gạch men vân nổi</a></td>
                                        <td><a href="ListProducts.php">Gạch 6 lỗ</a></td>
                                        <td><a href="ListProducts.php">Gạch xây nhà</a></td>
                                        <td><a href="ListProducts.php">Gạch bê tông bọt</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="ListProducts.php">Gạch vân đen</a></td>
                                        <td><a href="ListProducts.php">Gạch ốp tường 3D</a></td>
                                        <td><a href="ListProducts.php">Gạch men nghệ thuật</a></td>
                                        <td><a href="ListProducts.php">Gạch 3 lỗ</a></td>
                                        <td><a href="ListProducts.php">Gạch ống 4 lỗ</a></td>
                                        <td><a href="ListProducts.php">Gạch bê tông giả đá</a></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </li>
                    <li class="nav-color">
                        <a class="nav-linka" href="saleProducts.php">Tin sản phẩm</a>
                    </li>
                    <li class="nav-color">
                        <a class="nav-linka" href="Signup.php" target="_blank">Đăng ký</a>

                    </li>
                    <li class="nav-color">
                        <a href="Signin.php" target="_blank" class="aNavbar nav-linka">Đăng
                            nhập
                        </a>

                    </li>
                    <li class="nav-color">
                        <a href="Signup_admin.php" target="_blank" class="aNavbar nav-linka">Đăng
                            ký Admin
                        </a>

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
    <div class="background1">
        <div class="captionHome">
            <h1 class="border-captionHome">5Things Company</h1>
            <p class="text-home">Thay mặt cho Công ty vật liệu xây dựng TNHHMTV 5Things, ban Lãnh đạo chân
                thành cảm ơn
                quý khách hàng, đối tác, đại lý và nhà phân phối đồng hành cùng 5Things trong suốt nhiều
                năm
                qua.<br>
            <h6>Mọi thông tin thắc mắc xin liên hệ về chúng tôi</h6>
            </p>
            <div class="contact-home">
                <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> &nbsp;
                    123-456-789</span><br>
                <span><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;
                    info@5Things.com.vn</span><br>
                <span><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; 123/30 đường ABC, phường XX,
                    quận Ninh Kiều, thành phố Cần Thơ.</span>
            </div>
            <br>
            <div class="socials-home">
                <a href="#" class="colorLinks"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="colorLinks"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="colorLinks"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="footer-bottom">
                &copy; 5Things.com | by Yen Khoa Nguyen
            </div>
        </div>
    </div>
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
</body>

</html>