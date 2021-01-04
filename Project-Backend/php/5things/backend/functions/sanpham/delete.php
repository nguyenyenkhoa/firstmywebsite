<?php
            include_once(__DIR__.'/../../../connectdb.php');
            $sp_ma = $_GET['sp_ma'];
            $sql = "DELETE FROM `sanpham` WHERE sp_ma=" . $sp_ma;

            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);
    
            header('location:index.php');?>