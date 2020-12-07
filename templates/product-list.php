<?php include 'root/header.php';?>
<?php include 'lib/Database.php';?>

<div class="container">
<div class="row">

<!-- <div class="col-sm-12 text-center"> -->
<div class="col-sm">


<h3 class="page-header" id="text1"> Product List</h3>

<form action="../lib/product-delete.php" method="post">
    <div class="text-right">
        <button type="button" class="btn btn-secondary" id="button1" onClick="document.location.href ='/templates/product-add.php'">Add</button>
        <button type="submit" class="btn btn-secondary" name="delete" id="button2">Mass Delete</button>
        <!-- <input type="submit"  name="delete" id="delete" value="Mass Delete"> -->
    </div>


    </div>
    <div class="about-border"></div>
    </div>

    <?php
    $product = new Database();
    $data = $product->selectProduct('dvd');
    $data2 = $product->selectProduct('book');
    // foreach($data2 as $book){
    foreach($data as $prod){
      // var_dump($prod['dvd_name']);


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

<!-- Fetching dvd -->
     <!-- <div class="card" style="width: 12rem; height: 12rem;">

    <div class="card-body">
    <label class="checkbox-inline">
        <input type="checkbox" name= "checkbox[]" value="<?php echo $book["id"];?>">

    </label>
    <br>
    <div class="cardt text-center">
      <p class="card-title"><b><?php echo $book["book_sku"];?></b></p>
      <p class=""><?php echo $book["book_name"]; ?></p>
      <p class=""><?php echo $book["book_price"]; ?>$</p>
      <p>Size: <?php echo $book["b_weight"]; ?>Weight</p>
    </div>
    </div>
    </div> -->

    <?php
          }  //}
    ?>

</form>
</div> <!-- container -->


<?php include 'root/footer.php';?>

