<meta charset="UTF-8">
<?php // IDEA:

  require_once("entities/product.class.php");
  require_once("entities/category.class.php");
  if(isset ($_POST["btnsubmit"])){
    $productName = $_POST["txtName"];
    $cateID = $_POST["txtCateID"];
    $price = $_POST["txtprice"];
    $quantity = $_POST["txtquantity"];
    $description = $_POST["txtdesc"];
    $picture = $_FILES["txtpic"];
    $newProduct = new Product($productName,$cateID,$price,$quantity,$description,$picture);

  //  echo ($newProduct);
    $result = $newProduct ->save();
    if(!$result){
      header("Location: add_product.php?failure");
    }
    else{
      header("Location: add_product.php?inserted");
    }
  }
?>
<?php
  if(isset ($_GET["inserted"])){
    echo "<h2> Thêm Sản Phẩm Thành Công! </h2>";
  }
?>
<form width: 43%   margin: 0 auto border: 1px solid grey background-color: #ecb1b1   method="post" action="#" enctype="multipart/form-data">
  <div class="row">
    <div class="lbltitle"
      <label>Tên</label>
    </div>
    <div class="lblinput">
      <input type="text" name="txtName" value="<?php echo isset ($_POST["txtName"])? $_POST["txtName"]:"" ?>" />
    </div>
  </div>

  <div class="row">
    <div class="lblinput">
      <textarea name="txtdesc" cols="21" rows="10" value="<?php echo isset($_POST["txtdesc"])?$_POST["txtdesc"]:"" ?>"> </textarea>
    </div>
  </div>

  <div class="row">
    <div class="lbltitle"
      <label>Số Lượng Sản Phẩm</label>
    </div>
    <div class="lblinput">
      <input type="text" name="txtquantity" value="<?php echo isset ($_POST["txtquantity"])? $_POST["txtquantity"]:"" ?>" />
    </div>
  </div>

  <div class="row">
    <div class="lbltitle"
      <label>Giá Sản Phẩm </label>
    </div>
    <div class="lblinput">
      <input type="text" name="txtprice" value="<?php echo isset ($_POST["txtprice"])? $_POST["txtprice"]:"" ?>" />
    </div>
  </div>

  <div class="row">
    <div class="lbltitle"
      <label>Loại Sản Phẩm </label>
    </div>
    <div class="lblinput">
      <select  name="txtCateID">
        <option value="1"> DT</option>
        <option value="2"> LT</option>

      </select>
    </div>
  </div>

  <div class="row">
    <div class="lbltitle"
      <label>Hình Ảnh Sản Phẩm </label>
    </div>
    <div class="lblinput">
      <input type="file" id="txtpic" name="txtpic" accept=".PNG,.GIF,.JPG">
    </div>
  </div>

  <div class="row">
    <div class="submit">
      <input type="submit" name="btnsubmit" value="Thêm Sản Phẩm" />
    </div>
  </div>
</form>
<?php include_once("entities/footer.php"); ?>
