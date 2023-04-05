<?php
    session_start();
    include("connect.php");
    $today = getdate(date("U"));
    $tenbaocao = $_POST["tenbaocao"];
    $tungay = $_POST["tungay"];
    $denngay = $_POST["denngay"];
    $output = '';
    
    if($tenbaocao =="Báo cáo doanh thu")
    {
        $file_name = "doanhthu_".$tungay."_".$denngay.".xls";
        $sql = "INSERT INTO `tbl_baocao`(`TenFile`,`MaNV`) VALUES ('".$file_name."','".$_SESSION['username']."')";
        $exec = mysqli_query($conn,$sql);

        $sql = "select hd.MaHD as MaHD,sum(CASE WHEN sp.GiaKM IS NULL THEN sp.NguyenGia * cthd.SoLuong ELSE sp.GiaKM * cthd.SoLuong END) as TongTien, hd.NgayLap as NgayLap
                from tbl_hoadon as hd join tbl_chitiet_hoadon as cthd on hd.MaHD = cthd.MaHD 
                join tbl_sanpham as sp on cthd.MaSP = sp.MaSP where hd.NgayLap BETWEEN '".$tungay."' AND '".$denngay."' 
                GROUP BY cthd.MaHD";
        $exec = mysqli_query($conn,$sql);
        
        $output .= '
            <table>  
                <tr>  
                    <th>Mã hóa đơn</th>  
                    <th>Tổng tiền</th>  
                    <th>Ngày lập hóa đơn</th>
                </tr>
               ';
                while($row = mysqli_fetch_array($exec))
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
    
        $sql = "SELECT * FROM tbl_baocao WHERE TenFile = '".$file_name."' ORDER BY NgayXuat DESC LIMIT 1;";
        $exec = mysqli_query($conn,$sql);
        $mafile = mysqli_fetch_object($exec) -> MaFile;

        $sql ="UPDATE `tbl_baocao` SET `Code`='".$output."' WHERE MaFile = '".$mafile."'";
        $exec = mysqli_query($conn,$sql);
        echo "
                <script type='text/javascript'>
                window.alert('Xuất file thành công!');
                </script>
                ";

        echo "
                <script type='text/javascript'>
                window.location.href='report.php';
                </script>
                ";

    }
    else if($tenbaocao =="Báo cáo tồn kho")
    {
        $file_name = "tonkho_".$today["year"]."-".$today["mon"]."-".$today["mday"].".xls";
        $sql = "Select * from tbl_sanpham";
        $exec = mysqli_query($conn,$sql);
        echo $output;
    }else if($tenbaocao =="Báo cáo nhập kho")
    {
        $file_name = "nhapkho_".$tungay."_".$denngay.".xls";
        
    }else{
        $file_name = "xuatkho_".$tungay."_".$denngay.".xls";
        
    }
    
;?>