<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">

</head>

<body>
    <?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        include_once(__DIR__.'/../../connectdb.php');
        include_once(__DIR__.'/../css/stylebackend.php');
        include_once(__DIR__.'/../css/stylebackendList.php');
        include_once(__DIR__.'/../js/styleJSbackend.php');
        include_once(__DIR__.'/../../backend/css/stylebackenIntro.php');
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


    <div class="bodymain">
        <?php
            $sp_ma = $_GET['sp_ma'];
            $sqlSelectSanPham = <<<EOT
                SELECT sp.sp_ma, sp.sp_ten, sp.sp_gia, sp.sp_giacu, sp.sp_mota_ngan, sp.sp_mota_chitiet, sp.sp_soluong, lsp.lsp_ten
                FROM `sanpham` sp
                JOIN `loaisanpham` lsp ON sp.lsp_ma = lsp.lsp_ma
                WHERE sp.sp_ma = $sp_ma
EOT;
            $resultSelectSanPham = mysqli_query($conn, $sqlSelectSanPham);

            $sanphamRow;
            while ($row = mysqli_fetch_array($resultSelectSanPham, MYSQLI_ASSOC)) {
                $sanphamRow = array(
                    'sp_ma' => $row['sp_ma'],
                    'sp_ten' => $row['sp_ten'],
                    'sp_gia' => $row['sp_gia'],
                    'sp_gia_formated' => number_format($row['sp_gia'], 2, ".", ",") . ' vnđ',
                    'sp_giacu_formated' => number_format($row['sp_giacu'], 2, ".", ",") . ' vnđ',
                    'sp_mota_ngan' => $row['sp_mota_ngan'],
                    'sp_mota_chitiet' => $row['sp_mota_chitiet'],
                    'sp_soluong' => $row['sp_soluong'],
                    'lsp_ten' => $row['lsp_ten']
                );
            }

            $sqlSelect = <<<EOT
            SELECT hsp.hsp_ma, hsp.hsp_tentaptin
            FROM `hinhsanpham` hsp
            WHERE hsp.sp_ma = $sp_ma
EOT;

            $result = mysqli_query($conn, $sqlSelect);


            $danhsachhinhanh = [];
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $danhsachhinhanh[] = array(
                        'hsp_ma' => $row['hsp_ma'],
                        'hsp_tentaptin' => $row['hsp_tentaptin']
                    );
                }
                $sanphamRow['danhsachhinhanh'] = $danhsachhinhanh;
        ?>
        <div class="ssElements">
            <div class="product-detail">
                <div class="container margintop">
                    <div id="alert-container" class="alert alert-primary alert-dismissible fade d-none" role="alert">
                        <div id="thongbao">&nbsp;</div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-6 product-detail-left">
                            <?php
                                $hinhsanphamdautien = empty($sanphamRow['danhsachhinhanh'][0]) ? '' : $sanphamRow['danhsachhinhanh'][0];
                            ?>
                            <input type="hidden" name="sp_ma" id="sp_ma" value="<?= $sanphamRow['sp_ma'] ?>" />
                            <input type="hidden" name="sp_ten" id="sp_ten" value="<?= $sanphamRow['sp_ten'] ?>" />
                            <input type="hidden" name="sp_gia" id="sp_gia" value="<?= $sanphamRow['sp_gia'] ?>" />

                            <?php if (count($sanphamRow['danhsachhinhanh']) > 0) : ?>
                            <div class="img-zoom-container display-img">
                                <?php foreach ($sanphamRow['danhsachhinhanh'] as $hinhsanpham) : ?>
                                <div class="tab-pane <?= ($hinhsanpham == $hinhsanphamdautien) ? 'active' : '' ?>"
                                    id="pic-<?= $hinhsanpham['hsp_ma'] ?>">
                                    <img id="myimage"
                                        src="/Project-Backend/php/5things/assets/images/products/bricks/floor/<?= $hinhsanpham['hsp_tentaptin'] ?>"
                                        width="300" height="240">
                                </div>
                                <?php endforeach; ?>
                                <div id="myresult" class="img-zoom-result display-result"></div>
                            </div>
                            <?php else : ?>
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1">
                                    <img src="/Project-Backend/php/5things/assets/images/logo/defaultimg.png" />
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <!-- </div> -->


                        <div class="col-md-6 product-detail-right">
                            <h3 class="newsh3">
                                <?= $sanphamRow['sp_ten'] ?>
                            </h3>
                            <table>
                                <tr>
                                    <td>
                                        <i class="fa fa-star yellowstar"></i>
                                        <i class="fa fa-star yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star-o yellowstar" aria-hidden="true"></i>
                                        <a href="#linkvotes" class="votes">Xem hai đánh giá</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="style-price"><?= $sanphamRow['sp_gia']?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td>Loại Voucher</td>
                                                <td>
                                                    <div class="wrap-voucher">
                                                        <div class="voucher">
                                                            <p>A-voucher</p>
                                                        </div>
                                                        <p class="text-note">Mã Voucher sẽ được gửi đến số
                                                            điện
                                                            thoại
                                                            của
                                                            bạn sau khi
                                                            thanh toán thành công.</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                <td>
                                                    <p>Số điện thoại</p>
                                                </td>
                                                <td>
                                                    <div class="wrap-voucher">
                                                        <input type="tel" placeholder="Nhập số điện thoại của bạn"
                                                            class="input-tel">
                                                    </div>
                                                </td>
                                            </tr> -->
                                            <tr>
                                                <td>Số lượng đặt mua</td>
                                                <td>
                                                    <div class="wrap-voucher">
                                                        <input type="number" id="soluong" name="soluong" value="1"
                                                            size="2" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="wrap-voucher">

                                                        <input type="button" id="btnThemVaoGioHang"
                                                            value="Thêm vào giỏ hàng"
                                                            class="btnAddAction cart-action orderNow" />
                                                        <!-- <a
                                                            href="/Project-Backend/php/5things/frontend/thanhtoan/giohang.php">Xem</a> -->
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <!-- </div> -->


                    </div>
                </div>

            </div>
            <script>
            function addSanPhamVaoGioHang() {
                var dulieugoi = {
                    sp_ma: $('#sp_ma').val(),
                    sp_ten: $('#sp_ten').val(),
                    sp_gia: $('#sp_gia').val(),
                    sp_soluong: $('#soluong').val(),
                };

                $.ajax({
                    url: '/Project-Backend/php/5things/frontend/api/giohang-themsp.php',
                    method: "POST",
                    dataType: 'json',
                    data: dulieugoi,
                    success: function(data) {
                        console.log(data);
                        var htmlString =
                            `Đã thêm vào Giỏ hàng. <a href="/Project-Backend/php/5things/frontend/thanhtoan/giohang.php" target="_blank" class="link-products alert-link">Xem Giỏ hàng</a>.`;
                        $('#thongbao').html(htmlString);
                        $('.alert').removeClass('d-none').addClass('show');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                        var htmlString = `<h1>Không thể xử lý</h1>`;
                        $('#thongbao').html(htmlString);
                        $('.alert').removeClass('d-none').addClass('show');
                    }
                });
            };

            $('#btnThemVaoGioHang').click(function(event) {
                event.preventDefault();
                addSanPhamVaoGioHang();
            });
            </script>
            <hr>
            <div class="ssElements">
                <div class="container">
                    <div class="row">
                        <h2 class="h2products">MÔ TẢ SẢN PHẨM</h2>
                    </div>
                    <div class="row">
                        <div class="write-detail">
                            <p class="text-detail">
                                <?= $sanphamRow['sp_mota_chitiet'] ?>
                            </p>
                        </div>
                        <div class="write-detail">
                            <p class="text-detail">Phòng khách là không gian quan trọng nhất của cả ngôi nhà, để lựa
                                chọn
                                gạch ốp tường phù hợp
                                cần xác định phong cách (modern, minimalist, eclectic…), tone màu chủ đạo, mục đích
                                sử
                                dụng
                                (tạo điểm nhấn, làm rõ phong cách thiết kế, kết hợp chung với gạch lát nền hay chỉ
                                đơn
                                giản
                                là bảo vệ tường không bị bám bẩn, dễ dàng vệ sinh…)</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table-detail">
                                <tr>
                                    <td>
                                        <img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/detail-f0.jpg"
                                            class="fixed-detailimg">
                                    </td>
                                    <td>
                                        <img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/f0-lg.jpg"
                                            class="fixed-detailimg">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/detail-f1.jpg"
                                            class="fixed-detailimg">
                                    </td>
                                    <td>
                                        <img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/detail-f2.jpg"
                                            class="fixed-detailimg">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-detail">Việc sử dụng gạch ốp tường sẽ tạo ra một “màn chắn” chống lại va
                                đập
                                và
                                quá trình di chuyển
                                trong nhà. Vì vậy, các mẫu gạch ốp tường rất được gia chủ yêu thích khi ốp lát cho
                                phòng
                                khách, phòng ngủ, nhà vệ sinh,…<br>
                                Gạch ốp tường mang đến nhiều ứng dụng độc đáo, tạo nên sự sang trọng, tính thẫm mỹ
                                cao.
                                Những vị trí chân tường thường xuyên tích tụ nhiều bụi bẩn. Đặc biệt, đó là địa điểm
                                thường
                                bị ngấm nước và nấm mốc khi mùa mưa đến. Việc sử dụng gạch ốp tường sẽ hạn chế tối
                                đa sự
                                cố
                                này.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="h2products">MỘT SỐ LƯU Ý KHI CHỌN GẠCH</h2>
                                <div class="list-note">
                                    <ul>
                                        <li>Chọn màu sắc gạch ốp tường theo các tiêu chí: Diện tích phòng, phong
                                            thủy,
                                            gạch
                                            màu,
                                            trần màu, màu sơn tường,…để mang lại không gian hoàn hảo.</li>
                                        <li>Chọn những viên gạch màu sáng cho khu vực nhỏ để căn phòng rộng rãi hơn.
                                        </li>
                                        <li>Chọn gam màu trung tính hoặc màu có điểm nhấn để tạo sự ấm cúng.</li>
                                        <li>Nên chọn gạch ốp tường làm từ các vật liệu như: Gốm, sứ, đá granite,…vừa
                                            bền
                                            vừa
                                            sang.</li>
                                        <li>Gạch 30 × 60cm phù hợp nhất với diện tích của hầu hết các phòng khách
                                            hiện
                                            đại.
                                        </li>
                                        <li>Chọn gạch kẻ ngang sẽ tạo cảm giác phòng rộng hơn. Bên cạnh đó, gạch kẻ
                                            sọc
                                            sẽ
                                            khiến
                                            phòng “cao hơn”.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="h2products">Mẫu gạch ốp tường đẹp</h3>
                                <table class="table-detail">
                                    <tr>
                                        <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/wall4.jpg"
                                                class="others">
                                            <div class="note-brands">Qcola</div>
                                        </td>
                                        <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/wall5.jpg"
                                                class="others"></td>
                                        <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/wall6.jpg"
                                                class="others"></td>
                                    </tr>
                                    <tr>
                                        <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/wall7.jpg"
                                                class="others"></td>
                                        <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/wall8.jpg"
                                                class="others"></td>
                                        <td><img src="/Project-Backend/php/5things/assets/images/products/bricks/wall/wall9.jpg"
                                                class="others">
                                            <div class="note-brands">Qcola</div>
                                        </td>
                                    </tr>
                                </table>
                                <button class="btn-more">Xem thêm</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="h2products">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <table class="table-vote">
                                    <tr>
                                        <td>
                                            <textarea placeholder="Để lại đánh giá của bạn ở đây..."
                                                class="vote"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-info">Đánh giá</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="linkvotes">
                            <table class="table-viewvote">
                                <tr>
                                    <td><img src="/Project-Backend/php/5things/assets/images/products/introduce/ava.png"
                                            style="height: 50px; width: 50px;"><br>
                                        <i class="fa fa-star yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star-o yellowstar" aria-hidden="true"></i>
                                        <br>
                                        <p>20/7/2020</p>
                                    </td>
                                    <td>
                                        <p>Sản phẩm tuyệt vời, nhân viên phục vụ tốt.....</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="/Project-Backend/php/5things/assets/images/products/introduce/ava.png"
                                            style="height: 50px; width: 50px;"><br>
                                        <i class="fa fa-star yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o yellowstar" aria-hidden="true"></i>
                                        <i class="fa fa-star-o yellowstar" aria-hidden="true"></i>
                                        <br>
                                        <p>20/7/2020</p>
                                    </td>
                                    <td>
                                        <p>Sản phẩm tuyệt vời, nhân viên phục vụ tốt.....</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
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
        // Initiate zoom effect:
        imageZoom("myimage", "myresult");
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