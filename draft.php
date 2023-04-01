<?php  
//export.php  
include("connect.php");
$output = '';
$query = "SELECT * FROM tbl_khachhang";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table table-bordered" >  
                    <tr>  
                        <th>Mã khách hàng</th>  
                        <th>Tên khách hàng</th>  
                        <th>SDT</th>  
                        <th>Địa chỉ</th>
                        <th>Ngày tạo</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
        <td>'.$row["MaKH"].'</td> 
        <td>'.$row["TenKH"].'</td>  
        <td>'.$row["SDT"].'</td>  
        <td>'.$row["DiaChi"].'</td>  
        <td>'.$row["NgayTao"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
?>