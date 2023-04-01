<?php
    $manv = $_POST['manv'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    $capbac = $_POST['capbac'];
    $phongban = $_POST['phongban'];
    $trangthai = $_POST['trangthai'];

    include("connect.php");
    $sql = "UPDATE `tbl_nhanvien` SET `DiaChi`='".$diachi."',`SDT`='".$sdt."',`TrangThai`='".$trangthai."',`MaCB`='".$capbac."',`MaPB`='".$phongban."' WHERE MaNV = '".$manv."'";
    $exec = mysqli_query($conn,$sql);
    
    echo "
        <script>
            alert('Cập nhật thành công !');
            window.location.href('employee.php');
        </script>
    ";
;?>