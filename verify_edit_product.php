<?php
    $masp = $_POST["masp"];
    $tensp = $_POST["tensp"];
    $nguyengia = $_POST["gia"];
    $giakm = $_POST["giakm"];

    include("connect.php");
    $sql = "UPDATE `tbl_sanpham` SET `TenSP`='".$tensp."',`NguyenGia`='".$nguyengia."',`GiaKM`='".$giakm."' WHERE MaSP = '".$masp."'";
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