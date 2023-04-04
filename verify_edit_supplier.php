<?php
    $mancc = $_POST["mancc"];
    $tenncc = $_POST["tenncc"];
    $sdt = $_POST["sdt"];
    $diachi = $_POST["diachi"];
    include("connect.php");
    
    $sql="UPDATE `tbl_nhacungcap` SET `TenNCC`='".$tenncc."',`SDT`='".$sdt."',`DiaChi`='".$diachi."' WHERE MaNCC = '".$mancc."'";
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