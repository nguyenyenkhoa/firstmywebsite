<?php
if (session_id() === '') {
    session_start();
}


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once(__DIR__.'/../../connectdb.php');
    if(isset($_POST['btnLogin'])){
        $kh_tendangnhap = $_POST['kh_tendangnhap'];
        $kh_matkhau = sha1($_POST['kh_matkhau']);

//         $sqlSelect = <<<EOT
//                         SELECT *
//                         FROM `khachhang` kh
//                         WHERE kh.kh_tendangnhap = '$kh_tendangnhap' AND kh.kh_matkhau = '$kh_matkhau';
// EOT;

//         $result = mysqli_query($conn, $sqlSelect);

//         if (mysqli_num_rows($result) > 0) {
//             $_SESSION['kh_tendangnhap_logged'] = $kh_tendangnhap;
//             echo '<script>location.href = "/Project-Backend/php/5things/backend/pages/index.php";</script>';
//         }
        
//         else {
//             echo '<script>
//             alert("Đăng nhập thất bại! Mời quay lại để kiểm tra đăng nhập hoặc đăng ký tài khoản!");
//             </script>';
//             echo '<script>location.href = "/Project-Backend/php/5things/Signin.php";</script>';
//         }


$sqlSelect = <<<EOT
            SELECT *
            FROM `khachhang` kh
            WHERE kh.kh_tendangnhap = '$kh_tendangnhap' AND kh.kh_matkhau = '$kh_matkhau'; 
EOT;
            $result = mysqli_query($conn, $sqlSelect);
            
            
            $result_check = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($result_check > 0){
                if($result_check['kh_quantri'] == '1'){
                    $_SESSION['kh_tendangnhap_logged'] = $kh_tendangnhap;
                    echo '<script>location.href = "/Project-Backend/php/5things/frontend/quanli/admin.php";</script>';
                    exit();
                }
                else{
                    $_SESSION['kh_tendangnhap_logged'] = $kh_tendangnhap;
                    echo '<script>location.href = "/Project-Backend/php/5things/backend/pages/index.php";</script>';
                    exit();
                }
            }
            else{
                echo '<script>
                alert("Đăng nhập thất bại! Mời quay lại để kiểm tra đăng nhập hoặc đăng ký tài khoản!");
                </script>';
                echo '<script>location.href = "/Project-Backend/php/5things/Signin.php";</script>';
            }

    }
?>