<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhap</title>
    <script src="/Project-Backend/php/5things/frontend/js/DangKy.js"></script>
</head>

<body>
    <?php
        include_once(__DIR__.'/connectdb.php');
        include_once(__DIR__.'/backend/css/stylebackend.php');
        include_once(__DIR__.'/backend/css/stylebackendForm.php');
        include_once(__DIR__.'/backend/js/styleJSbackend.php');
        include_once(__DIR__.'/backend/css/stylebackendList.php');
    ?>
    <!-- <form name="myform" method="post" action="/Project-Backend/php/5things/backend/auth/Register.php"
        onsubmit="return validateform()">
        Name: <input type="text" name="name"><br>
        <p id="loiName" style="color: red;"></p>
        Password: <input type="password" name="password"><br>
        <p id="loiPass" style="color: red;"></p>

        <input type="submit" value="register">
    </form> -->
    <div class="background2">
        <div class="container-fluid">
            <div class="row">
                <main role="main" class="listTypeProducts">
                    <div class="titleTypeProducts">
                        <h1 class="titleTypeProducts">Đăng ký thành viên</h1>
                    </div>
                    <div class="formStyle">
                        <form name="frmdangky" id="frmdangky" method="post"
                            action="/Project-Backend/php/5things/backend/auth/Register.php"
                            onsubmit="return validateform()">
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
                                                    <p id="loiUser" style="color: red;"></p>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="password" placeholder="Mật khẩu"
                                                        name="kh_matkhau" />
                                                    <p id="loiPassword" style="color: red;"></p>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Họ tên"
                                                        name="kh_ten" />
                                                    <p id="loiName" style="color: red;"></p>
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
                                                    <p id="loiGender" style="color: red;"></p>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Địa chỉ"
                                                        name="kh_diachi" />
                                                        <p id="loiAddress" style="color: red;"></p>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Điện thoại"
                                                        name="kh_dienthoai" />
                                                        <p id="loiPhone" style="color: red;"></p>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="email" placeholder="Email"
                                                        name="kh_email" />
                                                    <p id="loiMail" style="color: red;"></p>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Ngày sinh"
                                                        name="kh_ngaysinh" />
                                                        <p id="loiDate" style="color: red;"></p>
                                                    <input class="form-control" type="text" placeholder="Tháng sinh"
                                                        name="kh_thangsinh" />
                                                        <p id="loiMonth" style="color: red;"></p>
                                                    <input class="form-control" type="text" placeholder="Năm sinh"
                                                        name="kh_namsinh" />
                                                        <p id="loiYear" style="color: red;"></p>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="CMND"
                                                        name="kh_cmnd" />
                                                        <p id="loiID" style="color: red;"></p>
                                                </div>
                                                <button class="btn btn-block btn-dark" name="btnDangKy">Tạo tài
                                                    khoản</button>
                                            </div>
                                            <div class="card-footer p-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p style="text-align: center;">Nếu bạn đã có tài khoản, xin mời
                                                            đăng nhập!</p>
                                                        <a class="btn btn-info form-control" href="Signin.php">Đăng
                                                            nhập</a>
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
</body>

</html>