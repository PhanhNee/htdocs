<?php
    session_start();
    header('Content-Type: text/html; charset=UTF-8');
    session_destroy();
    $_SESSION['checked'] = 0;
    echo "
    <script type='text/javascript'>
    window.location.href='login.php';
    </script>";
?>

