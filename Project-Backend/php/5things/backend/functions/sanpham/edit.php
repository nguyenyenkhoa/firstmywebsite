<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật sản phẩm</title>
    <!-- Datatable CSS -->
    <link href="/Project-Backend/php/5things/assets/vendor/DataTables/datatables.css" type="text/css"
        rel="stylesheet" />
    <link href="/Project-Backend/php/5things/assets/vendor/Buttons/css/buttons.bootstrap4.min.css" type="text/css"
        rel="stylesheet" />
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
                        <a class="nav-linka" href="news.html">Tin sản phẩm</a>
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
                <main role="main" class="listTypeProducts">
                    <div class="titleTypeProducts">
                        <h1 class="titleTypeProducts">Hiệu chỉnh</h1>
                    </div>

                    <?php
                include_once(__DIR__ . '/../../../connectdb.php');

                $sqlLoaiSanPham = "select * from `loaisanpham`";

                // Thực thi câu truy vấn SQL để lấy về dữ liệu
                $resultLoaiSanPham = mysqli_query($conn, $sqlLoaiSanPham);

                // Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
                // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
                // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
                $dataLoaiSanPham = [];
                while ($rowLoaiSanPham = mysqli_fetch_array($resultLoaiSanPham, MYSQLI_ASSOC)) {
                    $dataLoaiSanPham[] = array(
                        'lsp_ma' => $rowLoaiSanPham['lsp_ma'],
                        'lsp_ten' => $rowLoaiSanPham['lsp_ten'],
                        'lsp_mota' => $rowLoaiSanPham['lsp_mota'],
                    );
                }
                /* --- End Truy vấn dữ liệu Loại sản phẩm --- */

                /* --- 
                --- 3. Truy vấn dữ liệu Nhà sản xuất 
                --- 
                */
                // Chuẩn bị câu truy vấn Nhà sản xuất
                $sqlNhaSanXuat = "select * from `nhasanxuat`";
                $resultNhaSanXuat = mysqli_query($conn, $sqlNhaSanXuat);

                // Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
                // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
                // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
                $dataNhaSanXuat = [];
                while ($rowNhaSanXuat = mysqli_fetch_array($resultNhaSanXuat, MYSQLI_ASSOC)) {
                    $dataNhaSanXuat[] = array(
                        'nsx_ma' => $rowNhaSanXuat['nsx_ma'],
                        'nsx_ten' => $rowNhaSanXuat['nsx_ten'],
                    );
                }

                $sqlThuongHieu = "select * from `thuonghieu`";
                $resultThuongHieu = mysqli_query($conn, $sqlThuongHieu);

                $dataThuongHieu = [];
                while($rowThuongHieu = mysqli_fetch_array($resultThuongHieu, MYSQLI_ASSOC)){
                    $dataThuongHieu[] = array('th_ma' => $rowThuongHieu['th_ma'],
                        'th_ten' => $rowThuongHieu['th_ten']);
                }
                /* --- End Truy vấn dữ liệu Nhà sản xuất --- */

                /* --- 
                --- 4. Truy vấn dữ liệu Khuyến mãi
                --- 
                */
                // Chuẩn bị câu truy vấn Khuyến mãi
                $sqlKhuyenMai = "select * from `khuyenmai`";

                // Thực thi câu truy vấn SQL để lấy về dữ liệu
                $resultKhuyenMai = mysqli_query($conn, $sqlKhuyenMai);

                // Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
                // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
                // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
                $dataKhuyenMai = [];
                while ($rowKhuyenMai = mysqli_fetch_array($resultKhuyenMai, MYSQLI_ASSOC)) {
                    $km_tomtat = '';
                    if (!empty($rowKhuyenMai['km_ten'])) {
                        // Sử dụng hàm sprintf() để chuẩn bị mẫu câu với các giá trị truyền vào tương ứng từng vị trí placeholder
                        $km_tomtat = sprintf(
                            "Khuyến mãi %s, nội dung: %s, thời gian: %s-%s",
                            $rowKhuyenMai['km_ten'],
                            $rowKhuyenMai['km_noidung'],
                            // Sử dụng hàm date($format, $timestamp) để chuyển đổi ngày thành định dạng Việt Nam (ngày/tháng/năm)
                            // Do hàm date() nhận vào là đối tượng thời gian, chúng ta cần sử dụng hàm strtotime() để chuyển đổi từ chuỗi có định dạng 'yyyy-mm-dd' trong MYSQL thành đối tượng ngày tháng
                            date('d/m/Y', strtotime($rowKhuyenMai['km_tungay'])),    //vd: '2019-04-25'
                            date('d/m/Y', strtotime($rowKhuyenMai['km_denngay']))
                        );  //vd: '2019-05-10'
                    }
                    $dataKhuyenMai[] = array(
                        'km_ma' => $rowKhuyenMai['km_ma'],
                        'km_tomtat' => $km_tomtat,
                    );
                }
                /* --- End Truy vấn dữ liệu Khuyến mãi --- */

                /* --- 
                --- 5. Truy vấn dữ liệu Sản phẩm theo khóa chính
                --- 
                */
                // Chuẩn bị câu truy vấn $sqlSelect, lấy dữ liệu ban đầu của record cần update
                // Lấy giá trị khóa chính được truyền theo dạng QueryString Parameter key1=value1&key2=value2...
                $sp_ma = $_GET['sp_ma'];
                $sqlSelect = "SELECT * FROM `sanpham` WHERE sp_ma=$sp_ma;";

                // Thực thi câu truy vấn SQL để lấy về dữ liệu ban đầu của record cần update
                $resultSelect = mysqli_query($conn, $sqlSelect);
                $sanphamRow = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC); // 1 record
                /* --- End Truy vấn dữ liệu Sản phẩm theo khóa chính --- */
                ?>

                    <div class="formStyle">
                        <form name="frmsanpham" id="frmsanpham" method="post" class="formAdd"
                            action="edit.php?sp_ma=<?= $sanphamRow['sp_ma'] ?>">
                            <div class="form-group">
                                <label for="sp_ma">Mã Sản phẩm</label>
                                <input type="text" class="form-control" id="sp_ma" name="sp_ma"
                                    placeholder="Mã Sản phẩm" readonly value="<?= $sanphamRow['sp_ma'] ?>">
                                <small id="sp_maHelp" class="form-text text-muted">Mã Sản phẩm không được hiệu
                                    chỉnh.</small>
                            </div>
                            <div class="form-group">
                                <label for="sp_ten">Tên Sản phẩm</label>
                                <input type="text" class="form-control" id="sp_ten" name="sp_ten"
                                    placeholder="Tên Sản phẩm" value="<?= $sanphamRow['sp_ten'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="sp_gia">Giá Sản phẩm</label>
                                <input type="text" class="form-control" id="sp_gia" name="sp_gia"
                                    placeholder="Giá Sản phẩm" value="<?= $sanphamRow['sp_gia'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="sp_giacu">Giá cũ Sản phẩm</label>
                                <input type="text" class="form-control" id="sp_giacu" name="sp_giacu"
                                    placeholder="Giá cũ Sản phẩm" value="<?= $sanphamRow['sp_giacu'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="sp_mota_ngan">Mô tả ngắn</label>
                                <input type="text" class="form-control" id="sp_mota_ngan" name="sp_mota_ngan"
                                    placeholder="Mô tả ngắn Sản phẩm" value="<?= $sanphamRow['sp_mota_ngan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="sp_mota_chitiet">Mô tả chi tiết</label>
                                <input type="text" class="form-control" id="sp_mota_chitiet" name="sp_mota_chitiet"
                                    placeholder="Mô tả chi tiết Sản phẩm" value="<?= $sanphamRow['sp_mota_chitiet'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="sp_ngaycapnhat">Ngày cập nhật</label>
                                <input type="datetime-local" class="form-control" id="sp_ngaycapnhat" name="sp_ngaycapnhat"
                                    placeholder="Ngày cập nhật Sản phẩm" value="<?= $sanphamRow['sp_ngaycapnhat'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="sp_soluong">Số lượng</label>
                                <input type="text" class="form-control" id="sp_soluong" name="sp_soluong"
                                    placeholder="Số lượng Sản phẩm" value="<?= $sanphamRow['sp_soluong'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="lsp_ma">Loại sản phẩm</label>
                                <select class="form-control" id="lsp_ma" name="lsp_ma">
                                    <?php foreach ($dataLoaiSanPham as $loaisanpham) : ?>
                                    <?php if ($loaisanpham['lsp_ma'] == $sanphamRow['lsp_ma']) : ?>
                                    <option value="<?= $loaisanpham['lsp_ma'] ?>" selected>
                                        <?= $loaisanpham['lsp_ten'] ?>
                                    </option>
                                    <?php else : ?>
                                    <option value="<?= $loaisanpham['lsp_ma'] ?>"><?= $loaisanpham['lsp_ten'] ?>
                                    </option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nsx_ma">Nhà sản xuất</label>
                                <select class="form-control" id="nsx_ma" name="nsx_ma">
                                    <?php foreach ($dataNhaSanXuat as $nhasanxuat) : ?>
                                    <?php if ($nhasanxuat['nsx_ma'] == $sanphamRow['nsx_ma']) : ?>
                                    <option value="<?= $nhasanxuat['nsx_ma'] ?>" selected><?= $nhasanxuat['nsx_ten'] ?>
                                    </option>
                                    <?php else : ?>
                                    <option value="<?= $nhasanxuat['nsx_ma'] ?>"><?= $nhasanxuat['nsx_ten'] ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="th_ma">Thương Hiệu</label>
                                <select class="form-control" id="th_ma" name="th_ma">
                                    <?php foreach ($dataThuongHieu as $thuonghieu) : ?>
                                    <?php if ($thuonghieu['th_ma'] == $thuonghieuRow['th_ma']) : ?>
                                    <option value="<?= $thuonghieu['th_ma'] ?>" selected><?= $thuonghieu['th_ten'] ?>
                                    </option>
                                    <?php else : ?>
                                    <option value="<?= $thuonghieu['th_ma'] ?>"><?= $thuonghieu['th_ten'] ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="km_ma">Khuyến mãi</label>
                                <select class="form-control" id="km_ma" name="km_ma">
                                    <option value="">Không áp dụng khuyến mãi</option>
                                    <?php foreach ($dataKhuyenMai as $khuyenmai) : ?>
                                    <?php if ($khuyenmai['km_ma'] == $sanphamRow['km_ma']) : ?>
                                    <option value="<?= $khuyenmai['km_ma'] ?>" selected><?= $khuyenmai['km_tomtat'] ?>
                                    </option>
                                    <?php else : ?>
                                    <option value="<?= $khuyenmai['km_ma'] ?>"><?= $khuyenmai['km_tomtat'] ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button class="btn btn-primary" name="btnSave">Cập nhật</button>
                        </form>
                    </div>

                    <?php
                // 2. Nếu người dùng có bấm nút Đăng ký thì thực thi câu lệnh UPDATE
                if (isset($_POST['btnSave'])) {
                    // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
                    $ten = $_POST['sp_ten'];
                    $gia = $_POST['sp_gia'];
                    $giacu = $_POST['sp_giacu'];
                    $motangan = $_POST['sp_mota_ngan'];
                    $motachitiet = $_POST['sp_mota_chitiet'];
                    $ngaycapnhat = $_POST['sp_ngaycapnhat'];
                    $soluong = $_POST['sp_soluong'];
                    $lsp_ma = $_POST['lsp_ma'];
                    $nsx_ma = $_POST['nsx_ma'];
                    $th_ma = $_POST['th_ma'];
                    $km_ma = empty($_POST['km_ma']) ? 'NULL' : $_POST['km_ma'];

                    // Câu lệnh INSERT
                    $sql = "UPDATE `sanpham` SET sp_ten='$ten', sp_gia=$gia, sp_giacu=$giacu, sp_mota_ngan='$motangan', sp_mota_chitiet='$motachitiet', sp_ngaycapnhat='$ngaycapnhat', sp_soluong=$soluong, lsp_ma=$lsp_ma, nsx_ma=$nsx_ma, th_ma=$th_ma, km_ma=$km_ma WHERE sp_ma=$sp_ma;";

                    // Thực thi INSERT
                    mysqli_query($conn, $sql);

                    // Đóng kết nối
                    mysqli_close($conn);

                    // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
                    echo "<script>location.href = 'index.php';</script>";
                }
                ?>
                    <!-- End block content -->
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

</body>

</html>