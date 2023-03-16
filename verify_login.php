<?php
	include("connect.php");

	
	$username =$_POST["username"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM `tbl_taikhoan` WHERE `MaNV` = '".$username."' and `MatKhau` = '".$password."' 
	";

	$exec = mysqli_query($conn,$sql);

	$num = mysqli_num_rows($exec);

	if($num > 0)
	{
		session_start();
		$_SESSION['checked'] = 1;

	 	echo "
            	<script type='text/javascript'>
            		window.location.href='index.php';
            	</script>
            ";

	}else{
		echo "
            	<script type='text/javascript'>
            		window.alert('Mã nhân viên hoặc mật khẩu không đúng!');
            	</script>
            ";

        echo "
            	<script type='text/javascript'>
            		window.location.href='login.php';
            	</script>
            ";
	}
?>
