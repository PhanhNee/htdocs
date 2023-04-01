<?php
    include("connect.php");
    $mancc = $_POST["mancc"];
    $tenncc = $_POST["tenncc"];
    $sdt = $_POST["sdt"];
    $diachi = $_POST["diachi"];


    $sql = "SELECT MaNCC FROM tbl_nhacungcap WHERE MaNCC ='".$mancc."'";
    $exec = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($exec);
    if($num >0)
    {
        echo "
            <script type='text/javascript'>
            window.alert('Đã tồn tại nhà cung cấp!');
            window.location.href='supplier.php';
            </script>
            ";
    }else{
        $sql = "INSERT INTO `tbl_nhacungcap`(`MaNCC`, `TenNCC`, `SDT`, `DiaChi`) 
                VALUES ('".$mancc."','".$tenncc."','".$sdt."','".$diachi."')"; 

        $exec = mysqli_query($conn,$sql);
        echo "
                <script type='text/javascript'>
                window.alert('Thêm mới thành công!');
                </script>
                ";

        echo "
                <script type='text/javascript'>
                window.location.href='supplier.php';
                </script>
                ";
    }
    
   
 ;?>  

