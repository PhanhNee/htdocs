<?php
    session_start();
    $masp =$_GET['id'];
    echo"
        <script>
            alert('".$masp."');
            window.location.href='product.php';
        </script>;
    ";
?>
