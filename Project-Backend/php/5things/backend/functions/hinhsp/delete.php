<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once(__DIR__ . '/../../../connectdb.php');

    $hsp_ma = $_GET['hsp_ma'];
    $sqlSelect = "SELECT * FROM `hinhsanpham` WHERE hsp_ma=$hsp_ma;";

    $resultSelect = mysqli_query($conn, $sqlSelect);
    $hinhsanphamRow = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC); // 1 record

    $upload_dir = __DIR__ . "/../../../assets/images/products/bricks/";
    $subdir = 'floor/';

    $exit_file = $upload_dir . $subdir . $hinhsanphamRow['hsp_tentaptin'];
    if (file_exists($exit_file)) {
        unlink($exit_file);
    }


    $hsp_ma = $_GET['hsp_ma'];
    $sql = "DELETE FROM `hinhsanpham` WHERE hsp_ma=" . $hsp_ma;

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    header('location:index.php');
?>