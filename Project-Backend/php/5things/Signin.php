<?php
    if (session_id() === '') {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="/Project-Backend/php/5things/assets/images/logo/logoicon.png" rel="icon" sizes="40x40" type="image/png">

</head>

<body>
    <?php
        include_once(__DIR__.'/connectdb.php');
        include_once(__DIR__.'/backend/css/stylebackend.php');
        include_once(__DIR__.'/backend/css/stylebackendForm.php');
        include_once(__DIR__.'/backend/js/styleJSbackend.php');
        include_once(__DIR__.'/backend/css/stylebackendList.php');
    ?>
    <div id="processbar"></div>
    <div id="scrollPath"></div>

    <div class="background2">
        <div class="container-fluid">
            <div class="row">
                <main role="main" class="listTypeProducts">
                    <div class="titleTypeProducts">
                        <h1 class="titleTypeProducts">Đăng nhập tài khoản</h1>
                    </div>
                    <div class="formStyle">
                        <form name="frmLogin" id="frmLogin" method="post"
                            action="/Project-Backend/php/5things/backend/auth/Login.php">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card-group">
                                        <div class="card p-4">
                                            <div class="card-body">
                                                <h1>Đăng nhập</h1>
                                                <p class="text-muted">Nhập thông tin Tài khoản</p>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                        </div>
                                                        <input class="form-control" type="text" name="kh_tendangnhap"
                                                            placeholder="Tên đăng nhập">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-lock"></i>
                                                            </span>
                                                        </div>
                                                        <input class="form-control" type="password" name="kh_matkhau"
                                                            placeholder="Mật khẩu">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button class="btn btn-info px-4" name="btnLogin">Đăng
                                                            nhập</button>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <a class="btn btn-link px-0 link-products" href="#">Quên mật
                                                            khẩu?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card text-white bg-info py-5 d-md-down-none" style="width:44%">
                                            <div class="card-body text-center">
                                                <div>
                                                    <h2>Đăng ký</h2>
                                                    <p>Hãy đăng ký làm khách hàng của 5Things để bạn được
                                                        hưởng nhiều quyền lợi hơn nhé! ^^</p>
                                                    <a class="btn btn-info active mt-3" href="Signup.php">Đăng
                                                        ký ngay!</a>
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