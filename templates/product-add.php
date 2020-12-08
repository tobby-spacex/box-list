<?php include 'root/header.php';?>
<style>
.error {color: #FF0000;}
</style>

<div class="container">

<h3 class="page-header" id="text1"> Product Add</h3>

<!-- <form> -->
<form id="myForm" name="dvd" method="post" action="../lib/product-create.php" class="needs-validation" novalidate>
    <div class="text-right">
        <button type="submit" class="btn btn-secondary" id="button1" >Save</button>
        <button type="button" class="btn btn-secondary" id="button2"><a href="http://product-list/"> Cancel </a></button>
    </div>

<div class="about-border"></div>


    <div class="form-group">
        <label>SKU</label>
        <input type="text" name="sku" id="sku" value="<?php echo htmlspecialchars($sku)?>">

        <span class="error">* <?php if(isset($sku_error)){?><?php echo $sku_error;?> <?php } ?> </span>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name)?>">
        <span class="error">* <?php if(isset($name_error)){?><?php echo $name_error;?> <?php } ?> </span>
    </div>


    <div class="form-group">
        <label>Price($)</label>
        <input type="text" name="price" value="<?php echo htmlspecialchars($price)?>">
        <span class="error">* <?php if(isset($price_error)){?><?php echo $price_error;?> <?php } ?> </span>
    </div>


    <div class="option">
        <div class="form-group">
        <label for="inputState">Type Switcher</label>
        <select id="inputState" class="form-group" > <!-- class="form-group" -->
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
            <input type="text" name="size_mb" >
            <span class="error">* <?php if(isset($mb_error)){?><?php echo $mb_error;?> <?php } ?> </span>

            <p class="">"Product description"</p>
    </div>



    <div id="furniture" class="form" >
            <label>Height (CM)</label>
            <input type="text" name="height" >
            <span class="error">* <?php if(isset($h_error)){?><?php echo $h_error;?> <?php } ?> </span>

            <label>Width (CM)</label>
            <input type="text" name="width" >
            <span class="error">* <?php if(isset($w_error)){?><?php echo $w_error;?> <?php } ?> </span>

            <label>Length (CM)</label>
            <input type="text" name="length" >
            <span class="error">* <?php if(isset($l_error)){?><?php echo $l_error;?> <?php } ?> </span>

            <p class="">"Product description"</p>
    </div>


    <div id="book" class="form">
            <label>Weight (KG)</label>
            <input type="text" name="b_weight">
            <span class="error">* <?php if(isset($boo_error)){?><?php echo $boo_error;?> <?php } ?> </span>

            <p class="">"Product description"</p>
    </div>


</div>

   </form>  <!--</form>-->

</div>  <!-- container -->


<?php include 'root/footer.php';?>
