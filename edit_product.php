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

    <title>JUNO - Product</title>

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
                            <h6 class="m-0 font-weight-bold text-primary">DANH SÁCH SẢN PHẨM</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- THANH TÌM KIẾM -->
                                <div class="search_box">
                                    <label style="font-weight:bolder;">
                                        Tìm kiếm:
                                        <input class="form-control form-control-sm"></input>
                                    </label>
                                    <button title="Thêm loại sản phẩm" id="btn_add_categories_product">+</button>
                                    <button class="add_button" id="btn_add_product">Thêm sản phẩm</button>
                                </div>
                                <!--POPUP THÊM MỚI LOẠI SẢN PHẨM -->
                                <div class="add_modal" id="add_categories_product_modal">
                                    <div class="add_modal_inner">
                                        <div class="add_modal_header">
                                            <p>Thêm loại sản phẩm</p>
                                            <button class="btn_close" id="close_add_categories_product">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <div class="add_modal_body">
                                            <form action="verify_add_categories_product.php" method="POST" id="add_categories_product_form">
                                            <table>
                                                <tr><span style="color:red;padding-left: 10px;">(*)</span> : Thông tin bắt buộc</tr>
                                                <tr>
                                                    <td><label for="maloai">Mã loại<span style="color:red;"> (*)</span> :</label></td>
                                                    <td><input type="textbox" class="txtbox" id="maloai" name="maloai" required placeholder="Nhập không quá 6 ký tự..."></td> 
                                                </tr>
                                                <tr>
                                                    <td><label for="tenloai">Tên loại<span style="color:red;"> (*)</span> :</label></td>
                                                    <td><input type="textbox" class="txtbox" id="tenloai" name="tenloai" required placeholder="Nhập không quá 50 ký tự..."></td> 
                                                </tr>
                                            </table>
                                        <div class="add_modal_footer">
                                            <button class="btn_save" id="btn_save_add_categories_product">Tạo mới</button>
                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById("btn_add_categories_product").addEventListener("click",function(){
                                            document.querySelector("#add_categories_product_modal").style.display ="flex";
                                        })
                                    document.getElementById("btn_save_add_categories_product").addEventListener("click",function(){
                                        if(document.forms["add_categories_product_form"]["maloai"].value =="")
                                        {
                                            document.getElementById("maloai").style.borderColor="red";
                                            document.getElementById("maloai").focus();
                                        }
                                        if(document.forms["add_categories_product_form"]["tenloai"].value =="")
                                        {
                                            document.getElementById("tenloai").style.borderColor="red";
                                            document.getElementById("tenloai").focus();
                                        }

                                    })
                                    document.getElementById("close_add_categories_product").addEventListener("click",function(){
                                            document.querySelector("#add_categories_product_modal").style.display = "none";
                                            })
                                </script>
                                <!--POPUP THÊM MỚI SẢN PHẨM -->
                                <div class="add_modal" id="edit_product_modal" style="display:flex;">
                                    <div class="add_modal_inner">
                                        <!--HEADER POPUP -->
                                        <div class="add_modal_header">
                                        <p>Thông tin sản phẩm</p>
                                        <button class="btn_close" id="close_edit_product">
                                        <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                        <div class="add_modal_body">
                                            <form class="add_form" name="add_product_form" id="add_product_form" method="POST" action="verify_edit_product.php">
                                                <table>
                                                        <?php
                                                                $masp = $_GET["id"];
                                                                include("connect.php");
                                                                $sql = "SELECT * FROM `tbl_sanpham` where MaSP ='".$masp."'"; 
                                        
                                                                $exec = mysqli_query($conn,$sql);
                                                                
                                                                $row = mysqli_fetch_array($exec);
                                                        
                                                                ;?>
                                                    <tr>
                                                        <td><label for="masp">Mã sản phẩm<span style="color:red;"> (*)</span> :</label></td>
                                                        <td><input type="textbox" class="txtbox" id="masp" name="masp" required value="<?php echo $row['MaSP'] ;?>"></td> 
                                                        <td><label for="trangthai">Trạng thái<span style="color:red;"> (*)</span> :</label></td>
                                                        <td><select class="dropdown_box" id="trangthai" name="trangthai" >
                                                        <?php
                                                            if($row["TonKho"] ==0)
                                                            {
                                                        ?>
                                                            <option>Hết hàng</option>
                                                        <?php
                                                            }else if($row["TonKho"] >0)
                                                            {
                                                        ?>
                                                            <option>Còn hàng</option>
                                                            <?php
                                                            }
                                                        ?>
                                                            <option>Ngừng bán</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="tensp">Tên sản phẩm<span style="color:red;"> (*)</span> : </label></td>
                                                        <td><input type="textbox" class="txtbox" id="tensp" name="tensp" required value="<?php echo $row['TenSP'] ;?>"></td>
                                                        <td><label for="maloai">Mã loại<span style="color:red;"> (*)</span> :</label></td>
                                                        <td>
                                                            <select class="dropdown_box" name="maloai" id="maloai">
                                                                <option value="<?php echo $row["MaLoai"] ;?>"><?php echo $row["MaLoai"] ;?></option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="gia">Nguyên giá<span style="color:red;"> (*)</span> :</label></td>
                                                        <td><input type="textbox" class="txtbox" id="gia" name="gia" required value="<?php echo $row['NguyenGia'] ;?>"></td>
                                                        <td><label for="giakm">Giá khuyến mãi: </label></td>
                                                        <td><input type="textbox" class="txtbox" id="giakm" name="giakm" value="<?php echo $row['GiaKM'] ;?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="mausac">Màu sắc:</label></td>
                                                        <td><input type="textbox" class="txtbox" id="mausac" name="mausac" value="<?php echo $row['MauSac'] ;?>"></td>
                                                        <td><label for="kichthuoc">Kích thước:</label></td>
                                                        <td><input type="textbox" class="txtbox" id="kichthuoc" name="kichthuoc" value="<?php echo $row['KichThuoc'] ;?>"></td>
                                                    </tr>
                                                    <tr></tr>   
                                                </table>
                                            <div class="add_modal_footer">
                                                <button class="btn_save" id="btn_save_edit_product">Cập nhật</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>   
                                </div>
                                <script>
                                    document.getElementById("close_edit_product").addEventListener("click",function(){
                                        document.querySelector("#edit_product_modal").style.display = "none";
                                        window.location.href("product.php");    
                                    })   
                                </script>
                                <!--BẢNG DANH SÁCH SẢN PHẨM -->
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
                                            <td><span style="color:green;font-weight:bolder;">Còn hàng</span></td>
                                            <?php
                                                    }
                                            ?>
                                            <th>
                                                <center><button class="edit_button" id="edit_product" style="width:80px;">
                                                    <a href="edit_product.php?id=<?php echo $row['MaSP'];?>">Chỉnh sửa</a>
                                                </button></center>
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