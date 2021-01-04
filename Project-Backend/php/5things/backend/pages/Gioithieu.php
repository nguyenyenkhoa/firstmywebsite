<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">

</head>

<body>
    <!-- Kết nối đến database -->
    <?php
        
        include_once(__DIR__.'/../../connectdb.php');
        include_once(__DIR__.'/../css/stylebackend.php');
        include_once(__DIR__.'/../js/styleJSbackend.php');
        include_once(__DIR__.'/../css/stylebackenIntro.php');

    ?>
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
    <div class="backgroundP1">
        <div class="caption">
            <span class="border-caption">5 Things đồng hành cùng bạn!</span>
        </div>
    </div>
    <div style="color: white;background-color:rgb(15, 62, 62);text-align:center;padding:50px 80px;text-align: justify;">
        <p class="text-intro"> Công ty TNHHMTV 5 Things được thành lập vào năm 1989 dưới sự điều hành của 3 thành viên:
            Ông Nguyễn Văn A, bà Nguyễn thị B và ông Nguyễn Văn C. Vào những thuở đầu, trụ sở công
            ty chỉ là một ao cá nhỏ hoang sơ nhỏ nhoi và công ty cũng chưa phải là một công ty
            chuyên kinh doanh ngành nghề xây dựng mà thực chất là một cửa hàng buôn bán nuôi trồng
            cá giống do 3 thành viên đầu tiên hợp tác cho sự khởi nghiệp đầy gian trung vào lúc bấy
            giờ.</p>
    </div>
    <div class="backgroundP2">
        <div class="caption">
            <span class="border-caption">Niềm tin - Vững chắc - Chất lượng - Hài lòng - Gắn kết</span>
        </div>
    </div>
    <div style="color: #777;background-color:rgb(15, 62, 62);text-align:center;padding:50px 80px;text-align: justify;">
        <p class="text-intro"> Nhiều năm về sau, thời gian và cả những biến động phát triển thị trường Việt Nam ngày
            càng lên đỉnh điểm, đặc biệt là sự thay đổi kết cấu các loại ngành kinh tế nông
            nghiệp cùng nhu cầu của người dân được cải thiện. Chính vì thế, điều này đã mang đến
            cho công ty nhiều sự thay đổi bất ngờ đến chóng mặt. Ban đầu là một ao cá rồi
            thành trại cá, cho đến cửa hàng, doanh nghiệp và cuối cùng là công ty TNHHMT 5
            Things ra
            đời.</p>
    </div>
    <div class="backgroundP3">
        <div class="caption">
            <span class="border-caption">Chúng tôi không ngừng cố gắng và phát triển</span>
        </div>
    </div>
    <div style="color: #777;background-color:rgb(15, 62, 62);text-align:center;padding:50px 80px;text-align: justify;">
        <p class="text-intro"> Qua hơn 30 năm phấn đấu thành lập và phát triển, giờ đây công ty TNHHMT 5 Things
            chúng tôi rất tự hào khi đã đồng hành cùng quý khách hàng, các đối tác nhãn hành,
            thương hiệu trong suốt cả chặn đường dài. Ngoài dịch vụ cung cấp nguyên vật liệu xây
            dựng ra, chúng tôi cõn hướng đến phần trang trí nội thất gia đình,hi vọng quý khách
            sẽ hài lòng phương thức phục vụ cũng như trong quá trình hợp tác làm việc với chúng
            tôi.</p>
    </div>
    <div class="backgroundP4">
        <div class="caption">
            <span class="border-caption">Cảm ơn các đối tác và quý khách hàng đã tin dùng sản phẩm!</span>
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

    <!-- <div class="modal fade" id="SignupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="assets/images/products/introduce/ava.png" style="height: 50px; width: 50px;"
                        class="modal-title" id="exampleModalLabel">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="myForm" action="/frontend/auth/register.php" method="post">
                        <div class="form-group">
                            <label for="Signup-name" class="col-form-label">Tạo tên tài khoản:
                            </label>
                            <input type="text" name="fname" class="form-control" id="Upname">
                            <p id="nameError" style="color: red;"></p>
                            <p id="infoError" style="color: red;"></p>

                        </div>
                        <div class="form-group">
                            <label for="mail-name" class="col-form-label">Email: </label>
                            <input type="email" name="femail" class="form-control" id="Upmail">
                            <p id="emailError" style="color: red;"></p>
                            <p id="infoError" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                            <label for="user-name" class="col-form-label">Họ tên: </label>
                            <input type="text" name="fusername" class="form-control" id="Upmail">
                            <p id="emailError" style="color: red;"></p>
                            <p id="infoError" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                            <label for="user-name" class="col-form-label">Địa chỉ khách hàng: </label>
                            <input type="text" name="fusername" class="form-control" id="Upmail">
                            <p id="emailError" style="color: red;"></p>
                            <p id="infoError" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                            <label for="user-name" class="col-form-label">Số điện thoại: </label>
                            <input type="text" name="fusername" class="form-control" id="Upmail">
                            <p id="emailError" style="color: red;"></p>
                            <p id="infoError" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                            <label for="user-name" class="col-form-label">Chứng minh thư: </label>
                            <input type="text" name="fusername" class="form-control" id="Upmail">
                            <p id="emailError" style="color: red;"></p>
                            <p id="infoError" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                            <label for="user-name" class="col-form-label">Ngày sinh: </label>
                            <input type="text" name="fusername" class="form-control" id="Upmail">
                            <p id="emailError" style="color: red;"></p>
                            <p id="infoError" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                            <label for="user-name" class="col-form-label">Giới tính: </label>
                            <input type="text" name="fusername" class="form-control" id="Upmail">
                            <p id="emailError" style="color: red;"></p>
                            <p id="infoError" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                            <label for="pass-name" class="col-form-label"> Tạo mật khẩu: </label>
                            <input type="password" name="fpassword" class="form-control" id="Uppsw">
                            <p id="pswError" style="color: red;"></p>
                            <p id="infoErrorr" style="color: red;"></p>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="register" onclick="validateForm()">Tạo tài
                        khoản</button>
                </div>
            </div>
        </div>
    </div> -->









    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="assets/images/products/introduce/ava.png" style="height: 50px; width: 50px;"
                        class="modal-title" id="exampleModalLabel">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="myLogin" action="" method="post">
                        <div class="form-group">
                            <label for="Signin-name" class="col-form-label">Tên đăng
                                nhập:</label>
                            <input type="text" name="fnameLogin" class="form-control" id="Signin-name">
                            <p id="ErrorName_Login" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                            <label for="psw-name" class="col-form-label">Mật khẩu:</label>
                            <input type="password" name="fpswLogin" class="form-control" id="Signin-password">
                            <p id="ErrorPsw_Login" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                            <label for="email-name" class="col-form-label">Email:</label>
                            <input type="email" name="femailLogin" class="form-control" id="Sigin-email">
                            <p id="ErrorEmail_Login" style="color: red;"></p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="Login" onclick="validateFormLogin()">Đăng
                        nhập</button>
                </div>
            </div>
        </div>
    </div> -->
    <script>
    /* overlay sliders */
    $('.carousel').carousel({
        interval: 5000
    });
    </script>
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