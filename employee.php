<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JUNO - Employee</title>

    <!-- Custom fonts for this template-->
    <link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/css/style.css" type="text/css" rel="stylesheet">
    <meta charset="utf-8"/>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- THANH MENU-->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="homepage.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-tie"></i>                
                </div>
                <div class="sidebar-brand-text mx-3">JUNO</div>
            </a>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                BÁN HÀNG
            </div>
             <li class="nav-item">
                <a class="nav-link" href="invoice.php">
                    <i class="fas fa-fw fa-receipt"></i>
                    <span>Hóa đơn</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Quản lý xuất / nhập kho</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="report.php">
                    <i class="fas fa-fw fa-file-excel-o"></i>
                    <span>Lập báo cáo</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                DANH MỤC
            </div>
            <li class="nav-item">
                <a class="nav-link" href="product.php">
                    <i class="fas fa-fw fa-cubes"></i>
                    <span>Sản phẩm</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="supplier.php">
                    <i class="fas fa-fw fa-truck"></i>
                    <span>Nhà cung cấp</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="customer.php">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Khách hàng</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="employee.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Nhân viên</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                NỘI BỘ
            </div>
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Cá nhân</span></a>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- NỘI DUNG TRANG -->
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- THÔNG TIN NGƯỜI DÙNG-->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'];?></span>
                                <img class="img-profile rounded-circle"
                                    src="css/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>

                    </ul>
                </nav>
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DANH SÁCH NHÂN VIÊN</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- THANH TÌM KIẾM -->
                                <div class="search_box">
                                    <label style="font-weight:bolder;">
                                        Tìm kiếm:
                                        <input class="form-control form-control-sm"></input>
                                    </label>
                                    <button class="add_button" id="btn_add_employee" style="height:30px; width:130px">Thêm nhân viên</button>
                                </div>
                                <!--POPUP THÊM MỚI NHÀ CUNG CẤP -->
                                <div class="add_modal">
                                    <div class="add_modal_inner">
                                        <!--HEADER POPUP -->
                                        <div class="add_modal_header">
                                        <p>Thêm mới nhân viên</p>
                                        <button class="btn_close" id="close_add_employee">
                                        <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                        <div class="add_modal_body">
                                            <form class="add_form" name="add_employee_form" id="add_employee_form" method="POST" action="verify_add_employee.php">
                                                <table>
                                                    <tr><span style="color:red;padding-left: 10px;">(*)</span> : Thông tin bắt buộc</tr>
                                                    <tr>
                                                        <td><label for="manv">Mã nhân viên<span style="color:red;"> (*)</span> :</label></td>
                                                        <?php
                                                                include("connect.php");
                                                                $sql = "SELECT MaNV FROM `tbl_nhanvien` WHERE NgayLamViec = (SELECT MAX(NgayLamViec) FROM tbl_nhanvien)"; 
                                        
                                                                $exec = mysqli_query($conn,$sql);
                                                                
                                                                $code = mysqli_fetch_object($exec) -> MaNV;
                                                                    
                                                                ;?>
                                                        <td><input type="textbox" class="txtbox" id="manv" name="manv" disabled="disabled" value="<?php echo ++$code ;?>"></td>
                                                        <td><label for="sdt">Giới tính<span style="color:red;"> (*)</span> :</label></td>
                                                        <td><select class="dropdown_box" id="gioitinh" name="gioitinh">
                                                                <option>Khác</option>
                                                                <option>Nam</option>
                                                                <option>Nữ</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="tennv">Tên nhân viên<span style="color:red;"> (*)</span> : </label></td>
                                                        <td><input type="textbox" class="txtbox" id="tennv" name="tennv" required placeholder="Nhập không quá 50 ký tự..."></td>
                                                        <td><label for="ngaysinh">Ngày sinh<span style="color:red;"> (*)</span> : </label></td>
                                                        <td><input type="date" class="txtbox" id="ngaysinh" name="ngaysinh" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="sdt">Số điện thoại<span style="color:red;"> (*)</span> :</label></td>
                                                        <td><input type="textbox" class="txtbox" id="sdt" name="sdt" required placeholder="Nhập không quá 10 ký tự..."></td>
                                                        <td><label for="capbac">Cấp bậc<span style="color:red;"> (*)</span> : </label></td>
                                                        <td><select class="dropdown_box" id="capbac" name="capbac">
                                                        <?php
                                                                $sql = "SELECT * FROM `tbl_capbac`"; 
                                        
                                                                $exec = mysqli_query($conn,$sql);
                                                                $num = mysqli_num_rows($exec);
                                                                while($row = mysqli_fetch_array($exec))
                                                                {
                                                        ;?>
                                                                <option value="<?php echo $row["MaCB"];?>"><?php echo $row["MaCB"];?> - <?php echo $row["TenCB"];?></option>
                                                        <?php
                                                                } 
                                                        ;?>
                                                            </select>
                                                        </td>  
                                                    </tr>
                                                    <tr>
                                                        <td><label for="diachi">Địa chỉ<span style="color:red;"> (*)</span> : </label></td>
                                                        <td><input type="text" class="txtbox" id="diachi" name="diachi" required></td> 
                                                        <td><label for="phongban">Phòng ban<span style="color:red;"> (*)</span> : </label></td>
                                                        <td><select class="dropdown_box" id="phongban" name="phongban">
                                                    <?php
                                                        $sql = "SELECT * FROM `tbl_phongban`"; 
                                        
                                                                $exec = mysqli_query($conn,$sql);
                                                                $num = mysqli_num_rows($exec);
                                                                while($row = mysqli_fetch_array($exec))
                                                                {
                                                    ;?>
                                                                <option value="<?php echo $row["MaPB"];?>"><?php echo $row["MaPB"];?> - <?php echo $row["TenPB"];?></option>
                                                    <?php
                                                                } 
                                                    ;?>
                                                            </select>
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td></td><td></td>
                                                    <td><label for="trangthai">Trạng thái<span style="color:red;"> (*)</span> :</label></td>
                                                        <td><select class="dropdown_box" id="trangthai" name="trangthai" disabled="disabled">
                                                                <option>Đang hoạt động</option>
                                                            </select>
                                                        </td>
                                                    </tr>            
                                                </table>
                                            <div class="add_modal_footer">
                                                <button class="btn_save" id="btn_save_add_supplier">Tạo mới</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>   
                                </div>
                                <script>
                                    //Chọn thêm nhà cung cấp, hiển thị popup thêm nhà cung cấp
                                    document.getElementById("btn_add_employee").addEventListener("click",function(){
                                        document.querySelector(".add_modal").style.display = "flex";    
                                    })
                                    //Đóng popup thêm sản phẩm
                                    document.getElementById("close_add_employee").addEventListener("click",function(){
                                        document.querySelector(".add_modal").style.display = "none";    
                                    })   
                                </script>
                                <!--BẢNG DANH SÁCH NHÀ CUNG CẤP -->
                                <table class="table table-bordered" /*id="dataTable"*/ width="100%" cellspacing="0">
                                    <thead >
                                        <tr>
                                            <th><center>Mã NV</center></th>
                                            <th><center>Tên NV</center></th>
                                            <th><center>Ngày sinh</center></th>
                                            <th><center>Địa chỉ</center></th>
                                            <th><center>Số điện thoại</center></th>
                                            <th><center>Cấp bậc</center></th>
                                            <th><center>Phòng ban</center></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        
                                        $sql = "SELECT * FROM `tbl_nhanvien`"; 
                                        
                                        $exec = mysqli_query($conn,$sql);
                                        $num_rows = mysqli_num_rows($exec);

                                        while($row = mysqli_fetch_array($exec))
                                        {
                                    ;?>
                                    <tbody>
                                        <tr>
                                            <td><center><?php echo $row["MaNV"] ;?></center></td>
                                            <td><?php echo $row["TenNV"] ;?></td>
                                            <td><center><?php echo $row["NgaySinh"] ;?></center></td>
                                            <td><center><?php echo $row["DiaChi"] ;?></center></td>
                                            <td><center><?php echo $row["SDT"] ;?></center></td>
                                            <td><center><?php echo $row["MaCB"] ;?></center></td>
                                            <td><center><?php echo $row["MaPB"] ;?></center></td>
                                            <th>
                                                <button class="view_button" id="view" title="Xem chi tiết">
                                                    <i class="fas fa-fw fa-eye"></i>
                                                </button>
                                                <button class="edit_button" id="edit">
                                                    <i class="fa fa-pencil-square-o" title="Chỉnh sửa"></i>
                                                </button>
                                            </th>
                                        </tr>
                                        <?php
                                            }
                                            mysqli_close($conn);
                                        ?>
                                        <script>
                                            document.getElementById("view").addEventListener("click",function(){
                                                document.querySelector("supplier_details").style.display ="flex";
                                            })
                                        </script>
                                    </tbody>
                                </table>    
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright Dashboard &copy; JUNO 2023</span>
            </div>
        </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn chắc chắn muốn đăng xuất?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary" href="index.php">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="css/vendor/jquery/jquery.min.js"></script>
    <script src="css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="css/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="css/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="css/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="css/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="css/js/demo/datatables-demo.js"></script>

</body>
</html>