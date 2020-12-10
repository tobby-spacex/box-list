<?php include 'root/header.php';?>

<div class="container">
<div class="row">
<div class="col-sm">
<h3 class="page-header" id="text1"> Product Add</h3>

<!-- <form> -->
<form id="myForm" name="dvd" method="post" action="../lib/product-create.php" class="needs-validation" novalidate>
    <div class="text-right">
    <h3 class="page-header" id="text1"> Product Add</h3>
        <button type="submit" class="btn btn-primary" id="button1" >Save</button>
        <!-- <button type="button" class="btn btn-secondary" id="button2"><a href="http://product-list/"> Cancel </a></button> -->
        <button type="button" class="btn btn-warning" id="button2" onclick="cancelButton();">Cancel </a></button>

    </div>

</div>
<div class="about-border"></div>
</div>

    <div class="form-group">
        <label>SKU</label>
        <input type="text" name="sku" id="sku" placeholder="sku" value="<?php echo htmlspecialchars($sku)?>">

        <span class="error">* <?php if(isset($sku_error)){?><?php echo $sku_error;?> <?php } ?> </span>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="name" value="<?php echo htmlspecialchars($name)?>">
        <span class="error">* <?php if(isset($name_error)){?><?php echo $name_error;?> <?php } ?> </span>
    </div>


    <div class="form-group">
        <label>Price($)</label>
        <input type="text" name="price" placeholder="123.4" value="<?php echo htmlspecialchars($price)?>">
        <span class="error">* <?php if(isset($price_error)){?><?php echo $price_error;?> <?php } ?> </span>
    </div>


    <div class="option"> <span class="error">* <?php if(isset($mb_error) || isset($h_error) || isset($w_error) || isset($l_error) || isset($boo_error)){?><small><?php echo 'Please, select the type of product.';?></small> <?php } ?> </span>
        <div class="form-group">
        <label for="inputState">Type Switcher</label>
        <select id="inputState" class="form-group" >
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
            <br>
            <span class="error"><small><?php if(isset($mb_error)){?><?php echo $mb_error;?></small> <?php } ?> </span>

            <p class="">"Please, provide size"</p>
    </div>



    <div id="furniture" class="form" >
            <label>Height (CM)</label>
            <input type="text" name="height" >
            <br>
            <span class="error"><?php if(isset($h_error)){?><?php echo $h_error;?><?php } ?> </span>
            <br>

            <label>Width (CM)</label>
            <input type="text" name="width" >
            <br>
            <span class="error"><?php if(isset($w_error)){?><?php echo $w_error;?><?php } ?> </span>
            <br>

            <label>Length (CM)</label>
            <input type="text" name="length" >
            <br>
            <span class="error"><?php if(isset($l_error)){?><?php echo $l_error;?> <?php } ?> </span>
            <br>

            <p class="">"Please,provide dimensions"</p>
    </div>


    <div id="book" class="form">
            <label>Weight (KG)</label>
            <input type="text" name="b_weight">
            <br>
            <span class="error"><?php if(isset($boo_error)){?><?php echo $boo_error;?><?php } ?></span>

            <p class="">"Please, provide weight"</p>
    </div>

</div>

   </form>  <!--</form>-->

</div>  <!-- container -->

<?php include 'root/footer.php';?>
