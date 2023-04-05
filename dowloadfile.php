<?php
   include("connect.php");
   $mafile = $_GET['id'];
  
    $sql = "SELECT * FROM tbl_baocao where MaFile ='".$mafile."'";
    $exec = mysqli_query($conn, $sql);
    $tenfile = mysqli_fetch_object($exec) -> TenFile;
    $code = mysqli_fetch_object($exec) -> Code;
    
    header('Content-Type: application/xls');
    header("Content-Disposition: attachment; filename=".$tenfile.".xls");
;?>