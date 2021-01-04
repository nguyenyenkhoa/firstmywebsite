<?php
            include_once(__DIR__.'/../../../connectdb.php');
            $lsp_ma = $_GET['lsp_ma'];
            $sql = "DELETE FROM `loaisanpham` WHERE lsp_ma=" . $lsp_ma;

            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);
    
            header('location:index.php');?>