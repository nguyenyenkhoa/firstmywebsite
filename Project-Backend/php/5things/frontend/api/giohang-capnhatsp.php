<?php

if (session_id() === '') {
    session_start();
}


include_once(__DIR__ . '/../../connectdb.php');

$sp_ma = $_POST['sp_ma'];
$sp_soluong = $_POST['sp_soluong'];
$kh_tendangnhap = $_SESSION['kh_tendangnhap_logged'];



if (isset($_SESSION['giohangdata'])) {
    $data = $_SESSION['giohangdata'];
    $sanphamcu = $data[$sp_ma];
    
    $data[$sp_ma] = array(
        'kh_tendangnhap' => $kh_tendangnhap,
        'sp_ma' => $sanphamcu['sp_ma'],
        'sp_ten' => $sanphamcu['sp_ten'],
        'sp_soluong' => $sp_soluong,
        'sp_gia' => $sanphamcu['sp_gia'],
        'thanhtien' => ($sp_soluong * $sanphamcu['sp_gia']),
    );

    $_SESSION['giohangdata'] = $data;
}


echo json_encode($_SESSION['giohangdata']);
?>