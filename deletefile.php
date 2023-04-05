<?php
    $mafile = $_GET["id"];
    include("connect.php");

    $sql = "DELETE FROM tbl_baocao WHERE MaFile = '".$mafile."'";
    $exec = mysqli_query($conn,$sql);

    echo "
        <script>
            alert('Xóa thành công!');
        </script>
    ";
    echo "
        <script>
            window.location.href('report.php');
        </script>
    ";
;?>