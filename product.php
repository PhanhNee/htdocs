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

    <title>JUNO Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body
        {
            height: 100%;
            overflow: hidden;
            background: white;
        }
        .out{
            opacity: 1;
        }
        .out.transparent{
            opacity: 0.2;
        }
        .add_button
        {
            border-radius: 5px;
            border: 0px;
            width: 50px;
            height: 30px;
            font-style: normal;
            color: white;
            background-color: green;
            margin: 5px 5px 5px 5px;
            cursor:pointer;
        }
        .view_button
        {
            border-radius: 5px;
            border: 0px;
            width: 45%;
            font-style: normal;
            color: white;
            background-color: green;
            cursor:pointer;
        }   
          
         .edit_button
        {
            border-radius: 5px;
            border: 0px;
            width: 45%;
            font-style: normal;
            color: white;
            background-color: gray;
            cursor: pointer;
        } 
        .modal
        {
            display: none;
            width: 900px;
            height: 450px;
            background-color: #bfbfbf;
            position:fixed;
            top: 120px;
            left: 400px;
            bottom: 100px;
            right: 300px;
            border-radius: 10px;
        }
        .modal-inner
        {
            height: 100%;
            width: 100%;
            position: relative;
            margin: auto;
            
        }
        .modal-header
        {
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4e73df;
            color: white;
            font-weight: bold;
        }
        .btn-close
        {
            border: none;
            outline: none;
            background-color: #4e73df;
            cursor: pointer;
            color: white;
            font-weight: bold;
        }
        .btn-close:hover
        {
            color: red;
        }
        .modal-body
        {
            height: 320px;
            padding:  10px 10px 10px 10px;
            background-color: #e6e9f4;
            border: none;
        }
        .txtbox
        {
            margin: 8px 8px 8px 8px;
            outline: none;
            height: 28px;
        }
        .modal-footer
        {
            height: 80px;
            background-color:#e6e9f4;
            text-align: right;
            padding: 15px 5px 15px 15px;
            border: none;
        }

        .btn-save
        {
            background-color: green;
            outline: none;
            border: none;
            border-radius: 5px;
            width: 100px;
            height: 40px;
            margin: 5px 5px 5px 5px;
            cursor: pointer;
            color: white;
            font-weight: bold;
        }
        .btn-save:hover{
            background-color: #4eff4e;
        }
        .btn-cancel
        {
            background-color: red;
            outline: none;
            border: none;
            border-radius: 5px;
            width: 60px;
            height: 40px;
            margin: 5px 5px 5px 5px;
            cursor: pointer;
            color: white;
            font-weight: bold;
        }
        .btn-cancel:hover{
            background-color: #ff6262;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" class="out">

        <!-- THANH MENU-->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">JUNO</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
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

            <!-- Heading -->
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

            <!-- Heading -->
            <div class="sidebar-heading">
                NỘI BỘ
            </div>
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Cá nhân</span></a>
            </li>
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- NỘI DUNG TRANG -->
            <div id="content">

                <!-- THANH NGANG-->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
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

            
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">SẢN PHẨM</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- TÌM KIẾM -->
                                <div style="margin:15px 0px 15px 0px;">
                                    <label style="font-weight:bolder;">
                                        Tìm kiếm:
                                        <input class="form-control form-control-sm"></input>
                                    </label>
                                    <button class="add_button" id="btn_add_product">+</button>
                                </div>
                                <div class="modal">
        <div class="modal-inner">
            <div class="modal-header">
                <p style="padding: 5px 5px 5px 5px;height:100%;">Thêm mới sản phẩm</p>
                <button class="btn-close" id="close-modal">
                    <i class="fas fa-times" title="Đóng"></i>
                </button>  
            </div>
            <div class="modal-body">
            <form id="add_product_form" method="POST" action="verify_add_product.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="masp">Mã sản phẩm<span style="color:red;"> (*)</span> :</label></td>
                    <td><input type="textbox" class="txtbox" id="masp" name="masp"></td> 
                    <td><label for="trangthai">Trạng thái:</label></td>
                    <td><select id="trangthai" name="trangthai" style="margin:8px 8px 8px 8px;height:25px;width:92%;" disabled="disabled">
                        <option value="Hết hàng">Hết hàng</option>
                    </select></td>
                </tr>
                <tr>
                    <td><label for="tensp">Tên sản phẩm<span style="color:red;"> (*)</span> :</label></td>
                    <td><input type="textbox" class="txtbox" id="tensp" name="tensp"></td>
                    <td><label for="maloai">Mã loại<span style="color:red;"> (*)</span> :</label></td>
                    <td><select style="margin:8px 8px 8px 8px;height:25px;width:92%;" id="maloai">
                    <?php
                                        include("connect.php");
                                        $sql = "SELECT * FROM `tbl_loaisanpham`"; 
                                        
                                        $exec = mysqli_query($conn,$sql);
                                        $num_rows = mysqli_num_rows($exec);

                                        while($row = mysqli_fetch_array($exec))
                                        {
                                    ;?>
                        <option value="<?php echo $row["MaLoai"] ;?>"><?php echo $row["MaLoai"] ;?> - <?php echo $row["TenLoai"] ;?></option>
                        <?php
                                        }
                                            mysqli_close($conn);
                                        ?>
                        <!--<option value="themloai">Thêm loại khác</option>-->
                    </select></td>
                </tr>
                <tr>
                    
                    <td><label for="gia">Nguyên giá<span style="color:red;"> (*)</span> :</label></td>
                    <td><input type="textbox" class="txtbox" id="gia" name="gia"></td>
                    <td><label for="giakm">Giá khuyến mãi:</label></td>
                    <td><input type="textbox" class="txtbox" id="giakm" name="giakm"></td>
                </tr>
                <tr>
                    <td><label for="mausac">Màu sắc:</label></td>
                    <td><input type="textbox" class="txtbox" id="mausac" name="mausac"></td>
                    <td><label for="kichthuoc">Kích thước:</label></td>
                    <td><input type="textbox" class="txtbox" id="kichthuoc" name="kichthuoc"></td>
                </tr>
                <tr>
                   
                </tr>
                <tr>
                    
                    <td><label for="tonkho">Tồn kho:</label></td>
                    <td><input type="textbox" disabled="disabled" class="txtbox" id="tonkho" value="0"></td>
                </tr>
                <tr>
                    <td><label for="anh1">Ảnh SP 1:</label></td>
                    <td><input type="file" class="txtbox" id="anh1" name="anh1"></td>
                </tr>
                <tr>
                    <td><label for="anh2">Ảnh SP 2:</label></td>
                    <td><input type="file" class="txtbox" id="anh2" name="anh2"></td>
                </tr>                
            </table>
            </form>
            </div>
            <div class="modal-footer">
                <button class="btn-save" id="btn_add_product_save" type="submit">Tạo mới</button>
                <button class="btn-cancel" id="btn_add_product_cancel">Hủy</button>
            </div>
        </div>
    </div>
                                <!-- BẢNG SẢN PHẨM -->
                                <table class="table table-bordered" /*id="dataTable"*/ width="100%" cellspacing="0">
                                    <thead >
                                        <tr>
                                            <th><center>Mã SP</center></th>
                                            <th><center>Tên SP</center></th>
                                            <th><center>Mã loại</center></th>
                                            <th><center>Kích thước</center></th>
                                            <th><center>Màu sắc</center></th>
                                            <th><center>Giá</center></th>
                                            <th><center>Giá KM</center></th>
                                            <th><center>Tồn</center></th>
                                            <th><center>TT</center></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        include("connect.php");
                                        $sql = "SELECT * FROM `tbl_sanpham`"; 
                                        
                                        $exec = mysqli_query($conn,$sql);
                                        $num_rows = mysqli_num_rows($exec);

                                        while($row = mysqli_fetch_array($exec))
                                        {
                                    ;?>
                                    <tbody>
                                        <tr>
                                            <td><center><?php echo $row["MaSP"] ;?></center></td>
                                            <td><?php echo $row["TenSP"] ;?></td>
                                            <td><center><?php echo $row["MaLoai"] ;?></center></td>
                                            <td><center><?php echo $row["KichThuoc"] ;?></center></td>
                                            <td><center><?php echo $row["MauSac"] ;?></center></td>
                                            <td><center><?php echo $row["NguyenGia"] ;?></center></td>
                                            <td><center><?php echo $row["GiaKM"] ;?></center></td>
                                            <td><center><?php echo $row["TonKho"] ;?></center></td>
                                                <?php
                                                    if($row["TonKho"] ==0)
                                                    {
                                                ?>
                                            <td><span style="color:red;font-weight:bolder;">Hết hàng</span></td>
                                            <?php
                                                    }else if($row["TonKho"] <0)
                                                    {
                                            ?>
                                            <td><span style="color:grey;font-weight:bolder;">Ngừng bán</span></td>
                                            <?php
                                                    }else{
                                            ?>
                                            <td><span></span></td>
                                            <?php
                                                    }
                                            ?>
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
                                    </tbody>
                                </table>    
                                <div class="modal">
        
    </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- FOOTER -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright Dashboard &copy; JUNO 2023</span>
                    </div>
                </div>
            </footer>
            


        </div>
    </div>


   <!-- CUỘN TRANG -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


     <!-- ĐĂNG XUẤT-->
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
                    <a class="btn btn-primary" href="login.html">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.getElementById("btn_add_product").addEventListener("click",function(){
            document.querySelector(".modal").style.display = "flex";    
        })
        document.getElementById("close-modal").addEventListener("click",function(){
        document.querySelector(".modal").style.display = "none";
        })
        document.getElementById("btn_add_product_cancel").addEventListener("click",function(){
        document.querySelector(".modal").style.display = "none";})
        document.getElementById("btn_add_product_save").addEventListener("click",function(){
            if(document.forms["add_product_form"]["masp"].value =="")
            {
                document.getElementById("masp").focus();
            }
            if(document.forms["add_product_form"]["tensp"].value =="")
            {
                document.getElementById("tensp").focus();
            }
            if(document.forms["add_product_form"]["gia"].value =="")
            {
                document.getElementById("gia").focus();
            }
            if(document.forms["add_product_form"]["maloai"].value =="themloai")
            {
                alert("them loai");
            }
        })
    </script>

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