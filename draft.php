<?php

  $conn = mysqli_connect("localhost", "root", "", "db_juno_management");
   
    if(!$conn)
    {
        die("Connection failed!");
    }
    $sql = "SELECT MaKH FROM `tbl_khachhang` WHERE NgayTao = (SELECT MAX(NgayTao) FROM tbl_khachhang)"; 
                                        
    $exec = mysqli_query($conn,$sql);
    $code = mysqli_fetch_object($exec) -> MaKH;

    echo ++$code;

;?>
<div class="add_min_modal">
                                    <div class="add_min_modal_inner">
                                        <div class="add_modal_header">
                                            <p>Thêm loại sản phẩm</p>
                                            <button class="btn_close" id="close_add_categories_product">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <div class="add_min_modal_body">
                                            <form action="verify_add_categories_product.php" method="POST" id="add_categories_product_form">
                                            <table>
                                                <tr>
                                                   <td><label for="maloai">Mã loại<span style="color:red;"> (*)</span> :</label></td>
                                                    <td><input type="textbox" class="txtbox" id="maloai" name="maloai" required></td> 
                                                </tr>
                                                <tr>
                                                    <td><label for="tenloai">Tên loại<span style="color:red;"> (*)</span> :</label></td>
                                                    <td><input type="textbox" class="txtbox" id="tenloai" name="tenloai" required></td> 
                                                </tr>
                                            </table>
                                        <div class="add_modal_footer">
                                            <button class="btn_save" id="btn_save_add_categories_product">Tạo mới</button>
                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>