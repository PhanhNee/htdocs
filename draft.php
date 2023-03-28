<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>nhap</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style type="text/css">
        .success_massage{
            width: 240px;
            height: 60px;
            background-color: #4da6ff;
            border-radius: 10px;
            display: inline-block;
        }
        p{
            margin: 24px 20px 24px 20px;
            color: white;
        }
        i{
            margin-right: 10px;
            margin-left: 10px;
            color: white;
        }

    </style>
</head>

<body>
    <!--<button class="btn-modal-open" id="add-product">+</button>
    <div class="modal">
        <div class="modal-inner">
            <div class="modal-header">
                <p>Thêm mới sản phẩm</p>
                <button class="btn-close" id="close-modal">
                    <i class="fas fa-times"></i>
                </button>  
            </div>
            <div class="modal-body">
            <table>
                <tr>
                    <td><label for="masp">Mã sản phẩm<span style="color:red;"> (*)</span> :</label></td>
                    <td><input type="textbox" class="txtbox" id="masp"></td> 
                    <td><label for="tensp">Trạng thái<span style="color:red;"> (*)</span> :</label></td>
                    <td><input type="dropdown" class="txtbox" id="trangthai"></td>
                </tr>
                <tr>
                    <td><label for="tensp">Tên sản phẩm<span style="color:red;"> (*)</span> :</label></td>
                    <td><input type="textbox" class="txtbox" id="tensp"></td>
                    <td><label for="tensp">Mã loại<span style="color:red;"> (*)</span> :</label></td>
                    <td><select style="margin:8px 8px 8px 8px;height:25px;width:91%;">
                        <option>Loai 1</option>
                        <option>Loai 2</option>
                        <option>Loai 3</option>
                        <option>Loai 4</option>
                        <option>Loai 5</option>
                    </select></td>
                </tr>
                <tr>
                    
                    <td><label for="tensp">Nguyên giá<span style="color:red;"> (*)</span> :</label></td>
                    <td><input type="textbox" class="txtbox" id="gia"></td>
                    <td><label for="tensp">Giá khuyến mãi:</label></td>
                    <td><input type="textbox" class="txtbox" id="giakm"></td>
                </tr>
                <tr>
                    <td><label for="tensp">Màu sắc:</label></td>
                    <td><input type="textbox" class="txtbox" id="mausac"></td>
                    <td><label for="tensp">Kích thước:</label></td>
                    <td><input type="textbox" class="txtbox" id="kichthuoc"></td>
                </tr>
                <tr>
                   
                </tr>
                <tr>
                    
                    <td><label for="tensp">Tồn kho<span style="color:red;"> (*)</span> :</label></td>
                    <td><input type="textbox"  class="txtbox" id="tonkho"></td>
                </tr>
                <tr>
                    <td><label for="tensp">Ảnh SP 1:</label></td>
                    <td><input type="file" class="txtbox" id="anh1"></td>
                </tr>
                <tr>
                    <td><label for="tensp">Ảnh SP 1:</label></td>
                    <td><input type="file" class="txtbox" id="anh1"></td>
                </tr>                

            </table>
            </div>
            <div class="modal-footer">
                <button class="btn-save">Tạo mới</button>
                <button class="btn-cancel">Hủy</button>
            </div>
        </div>
    </div>
    -->
    <div class="success_massage" style="width: 240px;
            height: 60px;
            background-color: #4da6ff;
            border-radius: 10px;
            display: inline-block;">
        <p style="margin: 24px 20px 24px 20px;
            color: white;"><i class="fas fa-fw fa-check" style="margin-right: 10px;
            margin-left: 10px;
            color: white;"></i>   Thêm mới thành công!</p>
    </div>
</body>
<script type="text/javascript">
   document.getElementById("add-product").addEventListener("click",function(){
    document.querySelector(".modal").style.display = "flex";
   })
   document.getElementById("close-modal").addEventListener("click",function(){
    document.querySelector(".modal").style.display = "none";
   })
</script>
</html>