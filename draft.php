<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="haha" name="haha">
    <input type="text" id="search" name="search" placeholder="sdt"></input>
    <button type="submit"> tim kiem</button>
</form>
<br>
<form  id="hihi" name = "hihi">
    <input type="text" id="makh" name="makh" placeholder="makh"></input>
    <input type="text" id="tenkh" name="tenkh" placeholder="tenkh"></input>
    <input type="text" id="diachi" name="diachi" placeholder="diachi"></input>  
    <button type="submit" onclick="hi()">Them moi khach hang</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sdt = $_REQUEST["search"];

    include("connect.php");
    $sql="select * from tbl_khachhang where SDT='".$sdt."'";
    $exec = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($exec);
    if($num > 0)
    {
        $row = mysqli_fetch_array($exec);
        echo"
            <script>
                document.getElementById('makh').value ='".$row["MaKH"]."';
                document.getElementById('tenkh').value ='".$row["TenKH"]."';
                document.getElementById('diachi').value ='".$row["DiaChi"]."';
                document.getElementById('search').value ='".$row["SDT"]."';
            </script>
        ";
    }else{
        echo"
            <script>
                document.forms['haha']['search'].value ='".$sdt."';
                document.getElementById('tenkh').focus();
            </script>
        ";
    }
    $_GET["sdt"] = $sdt;
}
;?>
<script>
    function hi(){
        <?php echo "xin chao ban";?>
    }
</script>
