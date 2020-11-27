<?php include 'root/header.php';?>

<div class="container">

<h3 class="page-header" id="text1"> Product Add</h3>

<!-- <form> -->
<form name="dvd" method="post" action="../lib/product-create.php">
    <div class="text-right">
        <button type="submit" class="btn btn-secondary" id="button1">Save</button>
        <button type="button" class="btn btn-secondary" id="button2">Cancele</button>
    </div>

<div class="about-border"></div>


<div class="form-group">
        <label>SKU</label>
            <input type="text" name="sku">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div class="form-group">
           <label>Price($)</label>
        <input type="text" name="price">
</div>


<div class="option">
    <div class="form-group">
      <label for="inputState">Type Switcher</label>
      <select id="inputState" class="form-group">
        <option selected>Type Switcher</option>
        <option value="dvd">DVD</option>
        <option value="book">Book</option>
        <option value="furniture">Furniture</option>
      </select>
    </div>
</div>

<div class="boxs">

    <div id="dvd" class="form">
            <label>Size (MB)</label>
            <input type="text" name="size_mb">
            <p class="">"Product description"</p>



    </div>



    <div id="furniture" class="form">
            <label>Height (CM)</label>
            <input type="text" name="height">

            <label>Width (CM)</label>
            <input type="text" name="width">

            <label>Length (CM)</label>
            <input type="text" name="length">

            <p class="">"Product description"</p>
    </div>


    <div id="book" class="form">
            <label>Weight (KG)</label>
            <input type="text" name="b_weight">
            <p class="">"Product description"</p>
    </div>


</div>

   </form>  <!--</form>-->

</div>  <!-- container -->


<?php include 'root/footer.php';?>