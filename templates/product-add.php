<?php include 'root/header.php';?>

<div class="container">

<h3 class="page-header" id="text1"> Product Add</h3>

<!-- <form> -->
<form id="myForm" name="dvd" method="post" action="../lib/product-create.php" class="needs-validation" novalidate>
    <div class="text-right">
        <button type="submit" class="btn btn-secondary" id="button1" >Save</button>
        <button type="button" class="btn btn-secondary" id="button2">Cancele</button>
    </div>

<div class="about-border"></div>


    <div class="form-group">
            <label>SKU</label>
                <input type="text" name="sku" required>
        <div class="invalid-feedback">
            Please, fill the field SKU
        </div>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" required>
        <div class="invalid-feedback">
            Please, fill the field name
        </div>
            </div>
            <div class="form-group">
            <label>Price($)</label>
            <input type="text" name="price" required>
        <div class="invalid-feedback">
            Please, fill the field price
        </div>
    </div>


<div class="option">
    <div class="form-group">
      <label for="inputState">Type Switcher</label>
      <select id="inputState" class="form-group"> <!-- class="form-group" -->
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
            <input type="text" name="size_mb" required>

        <div class="invalid-feedback">
            You need to input disk size (MB)
        </div>
            <p class="">"Product description"</p>
    </div>



    <div id="furniture" class="form" >
            <label>Height (CM)</label>
            <input type="text" name="height" required>

            <label>Width (CM)</label>
            <input type="text" name="width" required>

            <label>Length (CM)</label>
            <input type="text" name="length" required>

        <div class="invalid-feedback">
         All characteristics must be indicated
        </div>

            <p class="">"Product description"</p>
    </div>


    <div id="book" class="form">
            <label>Weight (KG)</label>
            <input type="text" name="b_weight" required>
    <div class="invalid-feedback">
    You need to enter the weight of the book (KG)
    </div>
            <p class="">"Product description"</p>
    </div>


</div>

   </form>  <!--</form>-->

</div>  <!-- container -->


<?php include 'root/footer.php';?>