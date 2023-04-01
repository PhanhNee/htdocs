<?php
    session_start();
    if(!$_SESSION['checked'])
    {
        echo "
                <script type='text/javascript'>
                    window.alert('Không có quyền truy cập!');
                </script>
            ";

        echo "
                <script type='text/javascript'>
                    window.location.href='login.php';
                </script>
            ";
    }
?>
