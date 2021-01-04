<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">

</head>

<body>
    <?php
        
        include_once(__DIR__.'/../../connectdb.php');
        include_once(__DIR__.'/../css/stylebackend.php');
        include_once(__DIR__.'/../js/styleJSbackend.php');
        include_once(__DIR__.'/../css/stylebackendList.php');
        include_once(__DIR__.'/../css/stylebackenIntro.php');
        // include_once(__DIR__.'/../../assets/vendor/paginationJS/pagination.min.js');

    ?>
    <div id="processbar"></div>
    <div id="scrollPath"></div>
    <button onclick="topFunction()" id="myBtn-top" title="Go to top"><i class="fa fa-arrow-up btn-ontop"
            aria-hidden="true"></i></button>
    <div class="background-product">

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
        <div class="caption">
            <span class="border-caption">Cùng 5Things dạo quanh các sản phẩm mà bạn cần tìm nào!</span>
        </div>
    </div>
    <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 class="productsh3">Danh sách sản phẩm</h3>
        <?php
            $sql = <<<EOT
            SELECT sp.*
                , hsp.hsp_tentaptin
                , sp.sp_ten
                ,sp.sp_gia
                ,sp.sp_mota_ngan
                ,sp_ngaycapnhat
            FROM `sanpham` sp
            JOIN `hinhsanpham` hsp ON sp.sp_ma = hsp.sp_ma
            ORDER BY sp.sp_ma DESC
EOT;
        ?>
        <div>
            <div class="container">
                <div class="card-deck">
                    <?php
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                    ?>

                    <div class="card-border col h-100 " style="width: 15rem;" id="#demo">
                        <a href="chitietSP.php?sp_ma=<?= $row['sp_ma'] ?>" class="link-products">
                            <div class="card-border col h-100 margincards" style="width: 15rem;">
                                <img class="card-img-top"
                                    src="/Project-Backend/php/5things/assets/images/products/bricks/floor/<?= $row['hsp_tentaptin'] ?>"
                                    alt="Card image cap" style="width: 200px; height: 200px">


                                <h5 class="card-title"><?= $row['sp_ten']; ?></h5>
                                <p class="card-text"><?= $row['sp_mota_ngan']?></p>
                                <p class="card-text"><?= $row['sp_gia']?>VNĐ</p>
                                <p class="card-text"><small class="text-muted"><?= $row['sp_ngaycapnhat']?></small></p>

                            </div>
                        </a>
                    </div>
                    <!-- <script>
                    $('#demo').pagination({
                        dataSource: [],
                        pageSize: 5,
                        autoHidePrevious: true,
                        autoHideNext: true,
                        callback: function(data, pagination) {
                            // template method of yourself
                            var html = template(data);
                            dataContainer.html(html);
                        }
                    })
                    </script> -->
                    <?php
                }
            }
        ?>
                </div>
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
                    <form name="myForm" action="" method="post">
                        <div class="form-group">
                            <label for="Signup-name" class="col-form-label">Tên người dùng:
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