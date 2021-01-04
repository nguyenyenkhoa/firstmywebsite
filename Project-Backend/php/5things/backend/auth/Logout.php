<?php
if (session_id() === '') {
    session_start();
}
if(isset($_SESSION['kh_tendangnhap_logged'])) {
    unset($_SESSION['kh_tendangnhap_logged']);
    header('location:/Project-Backend/php/5things/Signin.php');
}
else {
    echo'<script>
            alert("Bạn chưa đăng nhập nên không thể đăng xuất được!");
            </script>'; die;
}