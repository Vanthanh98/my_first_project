<?php
  require_once("entities/product.class.php");
 ?>
<?php
  include_once("header.php");
  $prods = Product::list_product();
  ?>
  <div class="container text-center">
    <h3>SẢN PHẨM CÓ SẴN</h3></br>
    <div class="col-md-6">
      <?php
  foreach ($prods as $item) {
      ?>
  <div class="col-sm-4" >
    <img src="<?php echo "/LAB3&4/".$item["Picture"];?>" class="img-responsive jumbotron alert-primary" style="width:200px; height:300px  " alt="Image">
    <p class="text-danger"><?php echo $item["ProductName"];?></p>
    <p class="text-info"><?php echo $item["Price"];?></p>
    <p>
      <button type="button" class="btn btn-primary">Mua hang</button>
    </p>
  </div>
<?php } ?>
  </div>
</div>

  <?php include_once("entities/footer.php")
 ?>
