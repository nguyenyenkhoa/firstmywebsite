<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký admin</title>
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">

</head>

<body>
    <?php
        include_once(__DIR__.'/connectdb.php');
        include_once(__DIR__.'/backend/css/stylebackend.php');
        include_once(__DIR__.'/backend/css/stylebackendForm.php');
        include_once(__DIR__.'/backend/js/styleJSbackend.php');
    ?>
    <div id="processbar"></div>
    <div id="scrollPath"></div>
    <script>
    alert(
        "Lưu ý! Nếu bạn không phải là nhân viên của 5Things thì tài khoản bạn vừa tạo sẽ bị xóa trong dữ liệu của chúng tôi! Hãy nhấn OK nếu bạn muốn tạo!"
        );
    </script>
    <button onclick="topFunction()" id="myBtn-top" title="Go to top"><i class="fa fa-arrow-up btn-ontop"
            aria-hidden="true"></i></button>

    <div class="background2">
        <div class="container-fluid">
            <div class="row">
                <main role="main" class="listTypeProducts">
                    <div class="titleTypeProducts">
                        <h1 class="titleTypeProducts">Đăng ký Admin</h1>
                    </div>
                    <div class="formStyle">
                        <form name="frmdangky" id="frmdangky" method="post"
                            action="/Project-Backend/php/5things/backend/auth/Register_admin.php">
                            <div class="container mt-4">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card mx-4">
                                            <div class="card-body p-4">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Tên tài khoản"
                                                        name="kh_tendangnhap" />
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="password" placeholder="Mật khẩu"
                                                        name="kh_matkhau" />
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Họ tên"
                                                        name="kh_ten" />
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <select name="kh_gioitinh" class="form-control">
                                                        <option value="0">Nam</option>
                                                        <option value="1">Nữ</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Địa chỉ"
                                                        name="kh_diachi" />
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Điện thoại"
                                                        name="kh_dienthoai" />
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="email" placeholder="Email"
                                                        name="kh_email" />
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Ngày sinh"
                                                        name="kh_ngaysinh" />
                                                    <input class="form-control" type="text" placeholder="Tháng sinh"
                                                        name="kh_thangsinh" />
                                                    <input class="form-control" type="text" placeholder="Năm sinh"
                                                        name="kh_namsinh" />
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="CMND"
                                                        name="kh_cmnd" />
                                                </div>
                                                <button class="btn btn-block btn-dark" name="btnDangKyAdmin">Tạo tài
                                                    khoản</button>
                                            </div>
                                            <div class="card-footer p-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p style="text-align: center;">Nếu bạn đã có tài khoản, xin mời đăng nhập!</p>
                                                        <a class="btn btn-info form-control"
                                                            href="/php/twig/frontend/pages/login.php">Đăng nhập</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
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