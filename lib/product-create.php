<?php

ob_start();
include 'Product.php';

$product = new Product();



    if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['size_mb'])){
        if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['size_mb'])){
            $dvd = $_POST;
            $product->insertDvd($dvd);
            header("Location:http://product-list/");
            die;
        }
    }

    if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['b_weight'])){
        if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['b_weight'])){
            $book = $_POST;
            $product->insertBook($book);
            header("Location:http://product-list/");
            die;
        }
    }

    if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['height']) && isset($_POST['width']) && isset($_POST['length'])){
        if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['height']) && !empty($_POST['width']) && !empty($_POST['length'])){
            $furniture = $_POST;
            $product->insertFurniture($furniture);
            header("Location:http://product-list/");
            die;
        }
    }





