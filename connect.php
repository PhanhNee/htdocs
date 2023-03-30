<?php
    $conn = mysqli_connect("localhost", "root", "", "db_juno_management");
    mysqli_set_charset($conn, 'UTF8');
    if(!$conn)
    {
        die("Connection failed!");
    }
?>