<?php
    include("connect.php");
    $maloai =$_POST["maloai"];
    $tenloai = $_POST["tenloai"];

    $sql = "SELECT `MaLoai`, `TenLoai` FROM `tbl_loaisanpham` WHERE `MaLoai`='".$maloai."'";
    $exec = mysqli_query($conn,$sql);

	$num = mysqli_num_rows($exec);
    if($num>0)
    {
        echo "
            <script type='text/javascript'>
            window.alert('Đã tồn tại loại sản phẩm!');
            window.location.href='product.php';
            </script>
            ";

    }else
    {
        $sql = "INSERT INTO `tbl_loaisanpham`(`MaLoai`, `TenLoai`) VALUES ('".$maloai."','".$tenloai."')";
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
    }
    

   

	
;?>