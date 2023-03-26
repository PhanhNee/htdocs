<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>nhap</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
        .btn-modal-open
        {
            padding: 10px 5px;
            margin: 5px 5px;
            border: none;
            outline: none;
            border-radius: 5px;
            background-color: green;
            cursor: pointer;
            color: white;
            font-weight: bold;
        }
        .modal
        {
            display: none;
            width: 800px;
            height: 400px;
            background-color: #bfbfbf;
            position:fixed;
            top: 100px;
            left: 400px;
            bottom: 100px;
            right: 300px;
            border-radius: 15px;
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
            height: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 25px;
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
        
        .modal-body
        {
            height: 300px;
            padding: 15px 15px;
            background-color: #f8f9fc;
        }
        .txtbox
        {
            margin: 8px 8px 8px 8px;
            outline: none;
            height: 25px;
        }
        .modal-footer
        {
            height: 70px;
            background-color: #f8f9fc;
            text-align: right;
            padding: 15px 5px 15px 15px;
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
    </style>
</head>

<body>
    <button class="btn-modal-open" id="add-product">+</button>
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