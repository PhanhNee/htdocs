<?php
    include("connect.php");

    $makh = $_POST["makh"];
    $tenkh = $_POST["tenkh"];
    $diachi = $_POST["diachi"];
    

    $sql = "UPDATE `tbl_khachhang` SET `TenKH`='".$tenkh."',`DiaChi`='".$diachi."' WHERE MaKH = '".$makh."'";
    $exec = mysqli_query($conn,$sql);
    echo "
        <script>
            alert('Cập nhật thành công !');
        </script>
    ";
    echo "
    <script type='text/javascript'>
    window.location.href='employee.php';
    </script>
    ";
;?>