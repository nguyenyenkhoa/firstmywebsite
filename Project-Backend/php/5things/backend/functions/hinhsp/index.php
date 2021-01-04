<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hình ảnh</title>
    <!-- Datatable CSS -->
    <link href="/Project-Backend/php/5things/assets/vendor/DataTables/datatables.css" type="text/css"
        rel="stylesheet" />
    <!-- <link href="/Project-Backend/php/5things/assets/vendor/DataTables/jquery.dataTables.min.css" type="text/css"
        rel="stylesheet" /> -->
    <link href="/Project-Backend/php/5things/assets/vendor/Buttons/css/buttons.bootstrap4.min.css" type="text/css"
        rel="stylesheet" />
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">
</head>

<body>
    <?php
        include_once(__DIR__.'/../../css/stylebackend.php');
        include_once(__DIR__.'/../../css/stylebackendForm.php');
        include_once(__DIR__.'/../../js/styleJSbackend.php');
    ?>
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
                <img src="/Project-Backend/php/5things/assets/images/logo/logoicon.png" style="height: 50px; width: 60px; border-radius: 30px;">
                <span class="navbar-brand mb-0 h1">5Things</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-color">
                        <a class="nav-linka" href="/Project-Backend/php/5things/frontend/quanli/admin.php">Trang chủ<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-color">
                        <a class="nav-linka" href="/Project-Backend/php/5things/backend/pages/Gioithieu.php">Giới
                            thiệu</a>
                    </li>
                    <li class="dropdown subnav nav-color">
                        <a class="nav-linka dropdown-toggle"
                            href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">
                            Sản phẩm
                        </a>
                        <div aria-labelledby="navbarDropdown">
                            <div class="subnav-content">
                                <table class="products">
                                    <tr>
                                        <th>
                                            Gạch ốp lát
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
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch ốp tường La Mã</a></td>
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
                                        <td><a href="/Project-Backend/php/5things/backend/pages/DsSanpham.php">Gạch men nghệ thuật</a>
                                        </td>
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
                        <a class="nav-linka" onclick="myFunction()">Đăng xuất</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"
                            aria-hidden="true"></i></button>
                    <a href="#" target="_blank" class="aNavbar colorlinkNav "><i class="fa fa-phone"
                            aria-hidden="true"></i></a>
                    <a href="#" class="aNavbar colorlinkNav "><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="aNavbar colorlinkNav"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" class="aNavbar colorlinkNav"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </form>
        </nav>
    </section>
    <script>
    function myFunction() {
        alert("Bạn có muốn đăng xuất?");
        location.href = "/Project-Backend/php/5things/backend/auth/Logout.php";
    }
    </script>
    <div class="backgroundfunctions">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <!-- end sidebar -->

                <main role="main" class="listTypeProducts">
                    <div class="titleTypeProducts">
                        <h1 class="titleTypeProducts">Hình ảnh sản phẩm</h1>
                    </div>

                    <?php       
                        ini_set('display_errors', 1);
                        ini_set('display_startup_errors', 1);
                        error_reporting(E_ALL);

                        include_once(__DIR__ . '/../../../connectdb.php');

      
                        $sql = <<<EOT
                            SELECT *
                                FROM `hinhsanpham` hsp
                                JOIN `sanpham` sp on hsp.sp_ma = sp.sp_ma
EOT;

                        $result = mysqli_query($conn, $sql);      
                        $data = [];
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $sp_tomtat = sprintf(
                                "Sản phẩm %s, giá: %d",
                                $row['sp_ten'],
                                number_format($row['sp_gia'], 2, ".", ",") . ' vnđ'
                            );

                            $data[] = array(
                                'hsp_ma' => $row['hsp_ma'],
                                'hsp_tentaptin' => $row['hsp_tentaptin'],
                                'sp_tomtat' => $sp_tomtat,
                            );
                        }

                        
                    ?>
                    <a href="create.php" class="btn btn-info">
                        Thêm mới
                    </a>
                    <div class="formStyle">
                        <table class="table table-bordered table-hover mt-2 tableForm" id="dataTable" style="width:85%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Mã Hình Sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Sản phẩm</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $hinhsanpham): ?>
                                <tr>
                                    <td><?= $hinhsanpham['hsp_ma'] ?></td>
                                    <td>
                                        <img src="/Project-Backend/php/5things/assets/images/products/bricks/floor/<?= $hinhsanpham['hsp_tentaptin'] ?>"
                                            class="img-fluid" width="100px" />
                                    </td>
                                    <td><?= $hinhsanpham['sp_tomtat'] ?></td>
                                    <td>
                                        <a href="edit.php?hsp_ma=<?= $hinhsanpham['hsp_ma'] ?>" class="btn btn-info">
                                            Cập nhật
                                        </a>

                                        <a href="delete.php?hsp_ma=<?= $hinhsanpham['hsp_ma'] ?>" class="btn btn-light">
                                            Xóa dữ liệu
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </main>
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
    var datatable = $('#dataTable').DataTable({
        dom: 'Blfrtip',
        buttons: []
    });
    </script>

</body>

</html>