<?php
    session_start();
    include("connect.php");

    $tenbaocao = $_POST["tenbaocao"];
    $tungay = $_POST["tungay"];
    $denngay = $_POST["denngay"];
    
    if($tenbaocao =="Báo cáo doanh thu")
    {
        $file_name = "doanhthu_".$tungay."_".$denngay;
        
    }else if($tenbaocao =="Báo cáo tồn kho")
    {
        $file_name = "tonkho";
        $sql = "SELECT * FROM tbl_sanpham";
    }else if($tenbaocao =="Báo cáo nhập kho")
    {
        $file_name = "nhapkho_".$tungay."_".$denngay;
        
    }else{
        $file_name = "xuatkho_".$tungay."_".$denngay;
        
    }
    
    $sql = "INSERT INTO `tbl_baocao`(`TenFile`,`MaNV`) VALUES ('".$file_name."','".$_SESSION["username"]."')";
    $exec = mysqli_query($conn,$sql);
    echo "
                <script type='text/javascript'>
                    window.location.href='report.php';
                </script>
                ";



;?>