<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JUNO - Report</title>

    <!-- Custom fonts for this template-->
    <link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/css/style.css" type="text/css" rel="stylesheet">
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
                <a class="nav-link" href="warehouse.php">
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
                            <h6 class="m-0 font-weight-bold text-primary">XUẤT BÁO CÁO</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- THANH TÌM KIẾM -->
                                <div class="search_box">
                                    <label style="font-weight:bolder;">
                                        Tìm kiếm:
                                        <input class="form-control form-control-sm"></input>
                                    </label>
                                    <button class="add_button" id="btn_add_report">Thêm báo cáo</button>
                                </div>
                                <script>
                                         document.getElementById("btn_add_report").addEventListener("click",function(){
                                        document.forms["add_report_form"]["tungay"].value ="";
                                        document.forms["add_report_form"]["denngay"].value ="";
                                        document.querySelector("#add_report_modal").style.display = "flex"; 
                                        })
                                </script>
                                <!--POPUP THÊM MỚI BÁO CÁO -->
                                <div class="add_modal" id="add_report_modal">
                                    <div class="add_modal_inner">
                                        <!--HEADER POPUP -->
                                        <div class="add_modal_header">
                                        <p>Thêm mới báo cáo</p>
                                        <button class="btn_close" id="close_add_report">
                                        <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <script>
                                        document.getElementById("close_add_report").addEventListener("click",function(){
                                        document.querySelector("#add_report_modal").style.display = "none";
                                            
                                        })   
                                    </script>
                                        <div class="add_modal_body">
                                            <form class="add_form" name="add_report_form" id="add_report_form" method="POST" action="verify_add_report.php">
                                                <table>
                                                    <tr><span style="color:red;padding-left: 10px;">(*)</span> : Thông tin bắt buộc</tr>
                                                    <tr>
                                                        <td><label for="tenbaocao">Tên báo cáo<span style="color:red;"> (*)</span> :</label></td>
                                                        <td>
                                                            <select class="dropdown_box" name="tenbaocao" id="tenbaocao" style="width:260px;">
                                                                <option>Báo cáo doanh thu</option>
                                                                <option>Báo cáo tồn kho</option>
                                                                <option>Báo cáo nhập kho</option>
                                                                <option>Báo cáo xuất kho</option>
                                                            </select>
                                                        </td>
                                                        <td><label for="manv" style="width: 160px;">Người lập<span style="color:red;"> (*)</span> :</label></td>
                                                        <td>
                                                            <select class="dropdown_box" name="manv" id="manv" disabled="disabled">
                                                                <?php
                                                                    include("connect.php");
                                                                    $sql = "SELECT * FROM `tbl_nhanvien` WHERE MaNV = '".$_SESSION["username"]."'"; 
                                        
                                                                    $exec = mysqli_query($conn,$sql);
                                                                    $num_rows = mysqli_num_rows($exec);
                            
                                                                    while($row = mysqli_fetch_array($exec))
                                                                    {
                                                                ;?>
                                                                <option value="<?php echo $row["MaNV"] ;?>"><?php echo $row["MaNV"] ;?> - <?php echo $row["TenNV"] ;?></option>
                                                                <?php
                                                                    } 
                                                                ;?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="tungay">Từ ngày<span style="color:red;"> (*)</span> :</label></td>
                                                        <td><input type="date" class="txtbox" id="tungay" name="tungay" required></td>
                                                        <td><label for="denngay">Đến ngày<span style="color:red;"> (*)</span> :</label></td>
                                                        <td><input type="date" class="txtbox" id="denngay" name="denngay" required></td>
                                                    </tr>
                                                </table>
                                            <div class="add_modal_footer">
                                                <button class="btn_save" id="btn_save_add_report">Xuất file</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>   
                                </div>
                                <script>
                                        document.getElementById("btn_save_add_report").addEventListener("click",function(){
                                        if(document.forms["add_report_form"]["tungay"].value =="")
                                        {
                                            document.getElementById("tungay").style.borderColor="red";
                                        }
                                        if(document.forms["add_report_form"]["denngay"].value =="")
                                        {
                                            document.getElementById("denngay").style.borderColor="red";
                                        }

                                    })   
                                </script>
                                <!--BẢNG DANH SÁCH SẢN PHẨM -->
                                <table class="table table-bordered" /*id="dataTable"*/ width="100%" cellspacing="0">
                                    <thead >
                                        <tr>
                                            <th><center>STT</center></th>
                                            <th><center>Tên file báo cáo</center></th>
                                            <th><center>Thời gian xuất báo cáo</center></th>
                                            <th><center>Mã nhân viên</center></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        
                                        $sql = "SELECT * FROM `tbl_baocao` ORDER BY MaFile DESC"; 
                                        
                                        $exec = mysqli_query($conn,$sql);
                                        $num_rows = mysqli_num_rows($exec);

                                        while($row = mysqli_fetch_array($exec))
                                        {
                                    ;?>
                                    <tbody>
                                        <tr>
                                            <td><center><?php echo $row["MaFile"] ;?></center></td>
                                            <td><center><?php echo $row["TenFile"] ;?></center></td>
                                            <td><center><?php echo $row["NgayXuat"] ;?></center></td>
                                            <td><center><?php echo $row["MaNV"] ;?></center></td>
                                            <th>
                                                <button class="view_button" id="download_file" title="Tải xuống">
                                                    <i class="fas fa-fw fa-download"></i>
                                                </button>
                                                <button class="edit_button" id="delete_file" title="Xóa file">
                                                    <i class="fas fa-fw fa-trash"></i>
                                                </button>
                                            </th>
                                        </tr>
                                        <?php
                                            }
                                            mysqli_close($conn);
                                        ?>
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