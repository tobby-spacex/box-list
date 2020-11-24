<?php include 'root/header.php';?>

<div class="container">

<div class="col-sm">


<h3 class="page-header" id="text1"> Product Add</h3>


    <div class="text-right">
        <button type="button" class="btn btn-secondary" id="button1">Save</button>
        <button type="button" class="btn btn-secondary" id="button2">Cancele</button>
    </div>



<div class="about-border"></div>
</div>

<!-- first form to fill in data -->

<div class="container-1">

    <form>
        <div class="form-group">
            <label>SKU</label>
            <input type="text" placeholder="sku">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" placeholder="name">
        </div>
        <div class="form-group">
            <label>Price($)</label>
            <input type="text" placeholder="price">
        </div>

        <div class="form-group">
      <label for="inputState">Type Switcher</label>
      <select id="inputState" class="form-group">
        <option selected>Type Switcher</option>
        <option>DVD</option>
        <option>Book</option>
        <option>Furniture</option>
      </select>
    </div>

    </form>

<!-- box with displied data -->
<div id="box">HEEY</div>



<div class="container-2">
    <div class="form-1">
            <label>Size (MB)</label>
            <input type="text" placeholder=" ">
            <p class="">"Product description"</p>
    </div>
    <div class="form-2">
            <label>Height (CM)</label>
            <input type="text" placeholder=" ">

            <label>Width (CM)</label>
            <input type="text" placeholder=" ">

            <label>Length (CM)</label>
            <input type="text" placeholder=" ">

            <p class="">"Product description"</p>
    </div>

    <div class="form-3">
            <label>Weight (KG)</label>
            <input type="text" placeholder=" ">
            <p class="">"Product description"</p>
    </div>
</div>

</div> <!-- container-1 -->

</div> <!-- container -->

<?php include 'root/footer.php';?>