<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5Things.com</title>
    <!-- Datatable CSS -->
    <link href="/Project-Backend/php/5things/assets/vendor/DataTables/datatables.css" type="text/css"
        rel="stylesheet" />
    <link href="/Project-Backend/php/5things/assets/vendor/Datatables/css/jquery.dataTables.min.css" type="text/css"
        rel="stylesheet" />
    <link href="/Project-Backend/php/5things/assets/vendor/Buttons/css/buttons.bootstrap4.min.css" type="text/css"
        rel="stylesheet" />
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">
</head>

<body>
    <?php
        include_once(__DIR__.'/../../connectdb.php');
        include_once(__DIR__.'/../../backend/css/stylebackend.php');
        include_once(__DIR__.'/../../backend/js/styleJSbackend.php');
        include_once(__DIR__.'/../../backend/css/stylebackendList.php');
        include_once(__DIR__.'/../../backend/css/stylebackenIntro.php');
    ?>
    <div id="processbar"></div>
    <div id="scrollPath"></div>
    <button onclick="topFunction()" id="myBtn-top" title="Go to top"><i class="fa fa-arrow-up btn-ontop"
            aria-hidden="true"></i></button>

    <!-- Datatale JS -->
    <script src="/Project-Backend/php/5things/assets/vendor/DataTables/datatables.min.js"></script>
    <script src="/Project-Backend/php/5things/assets/vendor/Buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/Project-Backend/php/5things/assets/vendor/pdfmake/pdfmake.min.js"></script>
    <script src="/Project-Backend/php/5things/assets/vendor/pdfmake/vfs_fonts.js"></script>



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
                        <a class="nav-linka" href="#">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-color">
                        <a class="nav-linka" href="/Project-Backend/php/5things/backend/pages/Gioithieu.php">Giới thiệu</a>
                    </li>
                    <li class="dropdown subnav nav-color">
                        <a class="nav-linka dropdown-toggle" href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">
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
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch 60x60</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch ôp tường La Mã</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch men sứ trắng</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch nung đất sét</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch tàu</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch bê tông cốt liệu</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch vân giả gỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch ốp tường đá nổi</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch men gốm</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch đặc</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch thông gió</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch bê tông khí chưng áp</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch vân trắng</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch ốp tường vẽ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch men vân nổi</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch 6 lỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch xây nhà</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch bê tông bọt</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch vân đen</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch ốp tường 3D</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch men nghệ thuật</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch 3 lỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch ống 4 lỗ</a></td>
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch bê tông giả đá</a></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </li>
                    <li class="nav-color">
                        <a class="nav-linka" href="/Project-Backend/php/5things/backend/pages/Tintuc.php">Tin sản phẩm</a>
                    </li>
                    <li class="nav-color">
                        <a class="nav-linka" onclick="myFunction()">Đăng
                            xuất</a>

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
    <script>
    function myFunction() {
        alert("Bạn có muốn đăng xuất?");
        location.href = "/Project-Backend/php/5things/backend/auth/Logout.php";
    }
    </script>
    <div class="background1">
        <div class="captionHome">

            <div style="color: #777;text-align:center;padding:50px 80px;text-align: justify;">
                <h2 class="border-captionHome">Danh sách trang quản lí</h2>
                <div class="container">
                    <div class="card-deck">
                        <div class="card-border col h-100 " style="width: 20rem;">
                            <a href="/Project-Backend/php/5things/backend/functions/sanpham/index.php"
                                class="link-products">
                                <div class="card-border col h-100 margincards" style="width: 15rem;">
                                    <img class="card-img-top"
                                        src="/Project-Backend/php/5things/assets/images/admin/ad1.jpg" />
                                    <h5 class="card-title">Quản lí sản phẩm</h5>
                                </div>
                            </a>
                        </div>
                        <div class="card-border col h-100 " style="width: 20rem;">
                            <a href="/Project-Backend/php/5things/backend/functions/hinhsp/index.php"
                                class="link-products">
                                <div class="card-border col h-100 margincards" style="width: 15rem;">
                                    <img class="card-img-top"
                                        src="/Project-Backend/php/5things/assets/images/admin/ad2.jpg" />
                                    <h5 class="card-title">Quản lí hình sản phẩm</h5>
                                </div>
                            </a>
                        </div>
                        <div class="card-border col h-100 " style="width: 20rem;">
                            <a href="/Project-Backend/php/5things/backend/functions/loaisanpham/index.php"
                                class="link-products">
                                <div class="card-border col h-100 margincards" style="width: 15rem;">
                                    <img class="card-img-top"
                                        src="/Project-Backend/php/5things/assets/images/admin/ad3.jpg" />
                                    <h5 class="card-title">Quản lí loại sản phẩm</h5>
                                </div>
                            </a>
                        </div>
                        <div class="card-border col h-100 " style="width: 20rem;">
                            <a href="/Project-Backend/php/5things/backend/functions/thuonghieu/index.php"
                                class="link-products">
                                <div class="card-border col h-100 margincards" style="width: 15rem;">
                                    <img class="card-img-top"
                                        src="/Project-Backend/php/5things/assets/images/admin/ad4.jpg" />
                                    <h5 class="card-title">Quản lí thương hiệu</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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