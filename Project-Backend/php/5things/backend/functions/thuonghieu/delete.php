<?php
            include_once(__DIR__.'/../../../connectdb.php');
            $th_ma = $_GET['th_ma'];
            $sql = "DELETE FROM `thuonghieu` WHERE th_ma=" . $th_ma;

            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);
    
            header('location:index.php');?>