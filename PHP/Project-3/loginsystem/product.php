<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="css/productstyle.css">
    <meta charset="UTF-8">
    <title>Product Page</title>
    <style></style>
  </head>
  <body>
  <?php 
        if(isset($_SESSION["userid"])) 
        {
        ?>
        <center><li><a href = '#'><?php echo 'Welcome ' . $_SESSION["userid"] . '!'; ?></a></li> </center>
        <li><a href = "includes/logout.inc.php" class = "header-login-a">LOGOUT</a></li>
        <?php
        }
        ?>
    <div class="col-lg-6 col-xxl-4 my-5 mx-auto">
    <center><div class="d-grid gap-2">
      <a href="product/add_product.php" target="_blank">
      <button class="btn addp" name= 'add_product' type="button"> Add Product  </button>
      </a>
      <a href="product/delete_product.php" target="_blank">
      <button class="btn deltep" name= 'delete_product' type="button"> Delete Prodcut </button>
      </a>
      <a href="product/edit_product.php" target="_blank">
      <button class="btn editp" name= 'edit_product' type="button">Edit Product</button>
      </a>
      <a href="product/view_product.php" target="_blank">
      <button class="btn viewp" name= 'view_product' type="button">View Product</button>
      </a>
      
      </div>
    </div></center>
      
    </div>
  </body>
</html>

































<?php
// include "includes/header.inc.php";
// if(!isset($_GET['do'])){
//   include "products/product_view.php";
// }
// elseif($_GET['do']=="add"){
//   include "products/product_add.php";
// }elseif($_GET['do']=="edit" && isset($_GET['id'])){
//   include "products/product_edit.php";
// }elseif($_GET['do']=="edit" && !isset($_GET['id'])){
//   include "products/addition_edit.php";
// }elseif($_GET['do']=="delete"){
//   include "products/product_delete.php";
// }
// ?>

</div>



<!-- Bootstrap core JavaScript-->

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

</body>
</html>








