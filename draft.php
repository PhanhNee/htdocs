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
$sql = "select hd.MaHD,sum(CASE WHEN sp.GiaKM IS NULL THEN sp.NguyenGia * cthd.SoLuong ELSE sp.GiaKM * cthd.SoLuong END) as TongTien, hd.NgayLap 
        from tbl_hoadon as hd join tbl_chitiet_hoadon as cthd on hd.MaHD = cthd.MaHD 
        join tbl_sanpham as sp on cthd.MaSP = sp.MaSP where hd.NgayLap BETWEEN '".$tungay."' AND '".$denngay."' 
        GROUP BY cthd.MaHD";
        $exec = mysqli_query($conn,$sql);

        $output .= '
            <table class="table table-bordered" >  
                <tr>  
                    <th>Mã hóa đơn</th>  
                    <th>Tổng tiền</th>  
                    <th>Ngày lập hóa đơn</th>
                    </tr>
       ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
            <tr>  
                <td>'.$row["MaHD"].'</td> 
                <td>'.$row["TongTien"].'</td>  
                <td>'.$row["NgayLap"].'</td>  
            </tr>
            ';
        }
        $output .= '</table>';

        $sql = "INSERT INTO `tbl_xuat_baocao`(`TenFile`, `Code`) VALUES ('[value-1]','[value-2]')";