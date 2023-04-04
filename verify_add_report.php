<?php
    session_start();
    include("connect.php");
    $today = getdate(date("U"));
    $tenbaocao = $_POST["tenbaocao"];
    $tungay = $_POST["tungay"];
    $denngay = $_POST["denngay"];
    $ouput = '';
    
    if($tenbaocao =="Báo cáo doanh thu")
    {
        $file_name = "doanhthu_".$tungay."_".$denngay;
        $sql = "INSERT INTO `tbl_baocao`(`MaFile`, `TenFile`, `NgayXuat`, `MaNV`) VALUES ('','".$file_name."','','".$_SESSION['username']."')";
        $exec = mysqli_query($conn,$sql);

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

        $sql = "select MaFile from tbl_baocao where TenFile = '".$file_name."'";
        $exec = mysqli_query($conn,$sql);
        $mafile = mysqli_fetch_object($exec) -> MaFile;

        $sql ="UPDATE `tbl_baocao` SET `Code`='".$output."' WHERE MaFile = '".$mafile."'";
        echo "
                <script type='text/javascript'>
                window.alert('Thêm mới thành công!');
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
        $file_name = "tonkho_".$today["year"]."-".$today["mon"]."-".$today["mday"];
    }else if($tenbaocao =="Báo cáo nhập kho")
    {
        $file_name = "nhapkho_".$tungay."_".$denngay;
        
    }else{
        $file_name = "xuatkho_".$tungay."_".$denngay;
        
    }
    
;?>