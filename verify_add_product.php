<?php
    include("connect.php");
    $masp = $_POST["masp"];
    $tensp = $_POST["tensp"];
    $nguyengia = $_POST["gia"];
    $giakm = $_POST["giakm"];
    $maloai = $_POST["maloai"];
    $mausac = $_POST["mausac"];
    $kichthuoc = $_POST["kichthuoc"];

    $folder_img = "img/".basename($_FILES["anh1"]["name"]);
    $folder_img1 = "img/".basename($_FILES["anh2"]["name"]);
    $sql = "SELECT `MaSP` FROM `tbl_sanpham` WHERE `MaSP`='".$masp."'";
    $exec = mysqli_query($conn,$sql);

    $sql = "INSERT INTO `tbl_sanpham`(`MaSP`, `TenSP`, `MaLoai`, `KichThuoc`, `MauSac`, `Anh1`, `Anh2`, `NguyenGia`, `GiaKM`, `TonKho`, `TrangThai`) 
    VALUES ('".$masp."','".$tensp."','".$maloai."','".$kichthuoc."','".$mausac."','".$folder_img."','".$folder_img1."','".$nguyengia."','".$giakm."','0','Hết hàng')"; 

    $exec = mysqli_query($conn,$sql);
    echo "
    <script type='text/javascript'>
    window.alert('Thêm mới thành công!');
    </script>
    ";

    echo "
    <script type='text/javascript'>
    window.location.href='product.php';
    </script>
    ";
   
 ;?>  

