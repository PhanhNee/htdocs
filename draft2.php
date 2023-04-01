<div class="add_modal" id="edit_customer_modal" style="display:flex;">
                                    <div class="add_modal_inner">
                                        <div class="add_modal_header">
                                        <p>Chỉnh sửa thông tin khách hàng</p>
                                        <button class="btn_close" id="close_edit_customer">
                                        <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                        <div class="add_modal_body">
                                            <form class="add_form" name="edit_customer_form" id="edit_customer_form" method="POST" action="verify_edit_customer.php">
                                                <table>
                                                            <?php
                                                                $makh = $_GET["id"];
                                                                include("connect.php");
                                                                $sql = "SELECT * FROM `tbl_khachhang` WHERE MaKH = '".$makh."'"; 
                                        
                                                                $exec = mysqli_query($conn,$sql);
                                                                
                                                                $row = mysqli_fetch_array($exec);
                                                                ;?>
                                                    <tr>
                                                        <td><label for="makh">Mã khách hàng<span style="color:red;"> (*)</span> :</label></td>
                                                        <td><input type="textbox" class="txtbox" id="makh" name="makh" disabled="disabled" value="<?php echo $makh ;?>"></td>
                                                        <td><label for="tenkh">Tên khách hàng<span style="color:red;"> (*)</span> : </label></td>
                                                        <td><input type="textbox" class="txtbox" id="tenkh" name="tenkh" required value="<?php echo $row['TenKH'] ;?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="sdt">Số điện thoại<span style="color:red;"> (*)</span> : </label></td>
                                                        <td><input type="textbox" class="txtbox" id="sdt" name="sdt" required disabled="disabled" value="<?php echo $row['SDT'] ;?>"></td>
                                                        <td><label for="diachi">Địa chỉ: </label></td>
                                                        <td><input type="textbox" class="txtbox" id="diachi" name="diachi" value="<?php echo $row['DiaChi'] ;?>"></td>
                                                    </tr>
                                                    <?php
                                                                mysqli_close($conn);
                                                        ?>
                                                    <tr></tr>             
                                                </table>
                                            <div class="add_modal_footer">
                                                <button class="btn_save" id="btn_save_edit_customer">Cập nhật</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>   
                                </div>