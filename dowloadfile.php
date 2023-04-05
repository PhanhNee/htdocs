<?php
   include("connect.php");
   $mafile = $_GET['id'];

   $query = "SELECT * FROM tbl_baocao where MaFile ='".$mafile."'";
   $result = mysqli_query($conn, $query);
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=download.xls');
;?>