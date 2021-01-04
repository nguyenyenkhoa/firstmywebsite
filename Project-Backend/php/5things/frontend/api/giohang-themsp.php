<?php
if (session_id() === '') {
    session_start();
}


include_once(__DIR__ . '/../../connectdb.php');

$sp_ma = $_POST['sp_ma'];
$sp_ten = $_POST['sp_ten'];
$sp_soluong = $_POST['sp_soluong'];
$sp_gia = $_POST['sp_gia'];
$kh_tendangnhap = $_SESSION['kh_tendangnhap_logged'];

if (isset($_SESSION['giohangdata'])) {
    $data = $_SESSION['giohangdata'];
    $data[$sp_ma] = array(
        'kh_tendangnhap' => $kh_tendangnhap,
        'sp_ma' => $sp_ma,
        'sp_ten' => $sp_ten,
        'sp_soluong' => $sp_soluong,
        'sp_gia' => $sp_gia,
        'thanhtien' => ($sp_soluong * $sp_gia),
    );

    $_SESSION['giohangdata'] = $data;
} else { 
    $data[$sp_ma] = array(
        'kh_tendangnhap' => $kh_tendangnhap,
        'sp_ma' => $sp_ma,
        'sp_ten' => $sp_ten,
        'sp_soluong' => $sp_soluong,
        'sp_gia' => $sp_gia,
        'thanhtien' => ($sp_soluong * $sp_gia),
    );

    $_SESSION['giohangdata'] = $data;
}
echo json_encode($_SESSION['giohangdata']);
?>