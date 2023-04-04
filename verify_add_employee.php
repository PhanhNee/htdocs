<?php
    include("connect.php");
    $manv = $_POST['manv'];
    $gioitinh = $_POST['gioitinh'];
    $tennv = $_POST['tennv'];
    $ngaysinh = $_POST['ngaysinh'];
    $sdt =$_POST['sdt'];
    $capbac = $_POST['capbac'];
    $diachi = $_POST['diachi'];
    $phongban = $_POST['phongban'];
    $trangthai = $_POST['trangthai'];

    $sql = "INSERT INTO `tbl_nhanvien`(`MaNV`, `TenNV`, `GioiTinh`, `NgaySinh`, `DiaChi`, `SDT`, `NgayLamViec`, `TrangThai`, `MaCB`, `MaPB`) 
    VALUES ('".$manv."','".$tennv."','".$gioitinh."','".$ngaysinh."','".$diachi."','".$sdt."','','".$trangthai."','".$capbac."','".$phongban."')";

    $exec = mysqli_query($conn,$sql);
    echo "
    <script type='text/javascript'>
    window.alert('Thêm mới thành công!');
    </script>
    ";

    echo "
    <script type='text/javascript'>
    window.location.href='employee.php';
    </script>
    ";
;?>