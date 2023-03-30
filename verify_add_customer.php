<?php


    $tenkh = $_POST["tenkh"];
    $sdt =$_POST["sdt"];
    $diachi =$_POST["diachi"];

    include("connect.php");
    
    $sql = "SELECT MaKH FROM `tbl_khachhang` WHERE NgayTao = (SELECT MAX(NgayTao) FROM tbl_khachhang)"; 
    $exec = mysqli_query($conn,$sql);
    $code = mysqli_fetch_object($exec) -> MaKH;
    $makh = (string) ++$code;

    $sql = "SELECT `MaKH` FROM `tbl_khachhang` WHERE SDT = '".$sdt."'";
    $exec = mysqli_query($conn,$sql);

    $num =mysqli_num_rows($exec);
    if($num >0)
    {
        echo "
            <script type='text/javascript'>
            window.alert('Đã tồn tại khách hàng!');
            window.location.href='customer.php';
            </script>
            ";
    }else{
        $sql = "INSERT INTO `tbl_khachhang`(`MaKH`, `TenKH`, `SDT`, `DiaChi`) 
                VALUES ('".$makh."','".$tenkh."','".$sdt."','".$diachi."')";
        $exec = mysqli_query($conn,$sql);
        echo "
        <script type='text/javascript'>
        window.alert('Thêm mới thành công!');
        </script>
        ";

        echo "
        <script type='text/javascript'>
        window.location.href='customer.php';
        </script>
        ";
    }
;?>