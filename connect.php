<?php
    $conn = mysqli_connect("localhost", "root", "", "db_juno_management");
   
    if(!$conn)
    {
        die("Connection failed!");
    }
?>