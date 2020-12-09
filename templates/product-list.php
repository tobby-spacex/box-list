<?php include 'root/header.php';?>
<?php require_once 'lib/product-fetch.php';?>

<div class="container">
<div class="row">

<div class="col-sm">




<form action="../lib/product-delete.php" method="post">



    <div class="text-right">
    <h3 class="page-header" id="text1"> Product List</h3>
        <button type="button" class="btn btn-primary" id="button1" onClick="document.location.href ='/templates/product-add.php'">Add</button>
        <button type="submit" class="btn btn-danger" name="delete" id="button2" onclick="return validateForm();">Mass Delete</button>
    </div>



    </div>
    <div class="about-border"></div>
    </div>

    <?php
    foreach($data as $prod){

    ?>


    <!-- Fetching dvd -->
  <div class="card" style="width: 12rem; height: 12rem;">

      <div class="card-body">
      <label class="checkbox-inline">
      <input  name="box[]" type="checkbox" value="<?php echo $prod["id"];?>">


      </label>
      <br>
      <div class="cardt text-center">
        <p class="card-title"><b><?php echo $prod["dvd_sku"];?></b></p>
        <p class=""><?php echo $prod["dvd_name"]; ?></p>
        <p class=""><?php echo $prod["dvd_price"]; ?>$</p>
        <p>Size: <?php echo $prod["size_mb"]; ?>MB</p>
      </div>
      </div>
  </div>

    <?php
          }
    ?>


<!-- Fetching book -->
    <?php
      foreach($data2 as $book){
    ?>

     <div class="card" style="width: 12rem; height: 12rem;">

    <div class="card-body">
    <label class="checkbox-inline">
        <input type="checkbox" name= "box[]" value="<?php echo $book["id"];?>">

    </label>
    <br>
    <div class="cardt text-center">
      <p class="card-title"><b><?php echo $book["book_sku"];?></b></p>
      <p class=""><?php echo $book["book_name"]; ?></p>
      <p class=""><?php echo $book["book_price"]; ?>$</p>
      <p>Size: <?php echo $book["b_weight"]; ?>Weight</p>
    </div>
    </div>
    </div>

    <?php
          }
    ?>

    <!-- Fetching furniture -->
    <?php
      foreach($data3 as $furniture){
    ?>

     <div class="card" style="width: 12rem; height: 12rem;">

    <div class="card-body">
    <label class="checkbox-inline">
        <input type="checkbox" name= "box[]" value="<?php echo $furniture["id"];?>">

    </label>
    <br>
    <div class="cardt text-center">
      <p class="card-title"><b><?php echo $furniture["f_sku"];?></b></p>
      <p class=""><?php echo $furniture["f_name"]; ?></p>
      <p class=""><?php echo $furniture["f_price"]; ?>$</p>
      <p>Dimension:<small> <?php echo $furniture["f_height"]; ?> x <?php echo $furniture["f_width"]; ?> x <?php echo $furniture["f_length"]; ?></small></p>
    </div>
    </div>
    </div>

    <?php
          }
    ?>



</form>
</div> <!-- container -->


<?php include 'root/footer.php';?>

