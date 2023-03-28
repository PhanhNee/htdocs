<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>nhap</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <!--<button id="btn_add_categories_product">mo</button>-->
    <!--<div class="add_min_modal">
        <div class="add_min_modal_inner">
            <div class="add_modal_header">
                <p>Thêm loại sản phẩm</p>
                <button class="btn_close" id="close_add_categories_product">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="add_min_modal_body">
                <form action="verify_add_categories_product" method="POST" id="add_categories_product_form">
                    <table>
                        <tr>
                            <td><label for="maloai">Mã loại<span style="color:red;"> (*)</span> :</label></td>
                            <td><input type="textbox" class="txtbox" id="maloai" name="maloai"></td> 
                        </tr>
                        <tr>
                            <td><label for="tenloai">Tên loại<span style="color:red;"> (*)</span> :</label></td>
                            <td><input type="textbox" class="txtbox" id="tenloai" name="tenloai"></td> 
                        </tr>
                    </table>
                    <div class="add_modal_footer">
                        <button class="btn_save" id="btn_save_add_categories_product">Tạo mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        -->
        <form class="row g-3">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">First name</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">City</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">State</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Zip</label>
    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>


</body>
<script>
    document.getElementById("btn_add_categories_product").addEventListener("click",function(){
        document.querySelector(".add_min_modal").style.display = "flex";
    })
    document.getElementById("close_add_categories_product").addEventListener("click",function(){
        document.querySelector(".add_min_modal").style.display = "none";
    })
</script>
</html>

