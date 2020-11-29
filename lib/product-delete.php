<?php

// include 'Product.php';
include 'Database.php';

$product = new Database();

if(isset($_POST['delete'])){
    $check = $_POST['checkbox'];
    foreach($check as $id){

        // var_dump($check);
        // var_dump($id);
        $product->deleteProduct($id);
    }

    header("Location:index.php");
}