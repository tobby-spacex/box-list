<?php

ob_start();
include 'Product.php';
// $product = new Product();

    $sku = filter_input(INPUT_POST, 'sku');
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price');
    $size_mb = filter_input(INPUT_POST, 'size_mb');

    $book_weight = filter_input(INPUT_POST, 'b_weight');

    $height = filter_input(INPUT_POST, 'height');
    $width = filter_input(INPUT_POST, 'width');
    $length = filter_input(INPUT_POST, 'length');

    if(empty($sku)){
        $sku_error = 'Please insert SKU.';
    }elseif(iconv_strlen($sku)<5){
        $sku_error = 'sku must be at least 5 characters.';
    }

    if(empty($name)){
        $name_error = 'Please insert name.';
    }elseif(iconv_strlen($name)<3){
        $name_error = 'name must be at least 3 characters.';
    }

    if(empty($price)){
        $price_error = 'Please insert price.';
    }elseif(preg_match( "/[^0-9,.]/", $price)){
        $price_error = 'Only integers and rational numbers are allowed.';
    }

    // DVD input validation
    if(empty($size_mb)){
        $mb_error = 'Please insert DVD size.';
    }elseif(preg_match( "/[^0-9]/", $size_mb)){
        $mb_error = 'Only integer numbers are allowed..';
    }

    // Book input validation
    if(empty($book_weight)){
        $boo_error = 'Please insert Book size.';
    }elseif(preg_match( "/[^0-9,.]/", $book_weight)){
        $boo_error = 'Only integers and rational numbers are allowed.';
    }


    // Furniture input validation

    if(empty($height) && empty($width) && empty($length)){
        $h_error = 'Please insert Furniture height.';
        $w_error = 'Please insert Furniture width.';
        $l_error = 'Please insert Furniture lenght.';
    }elseif(preg_match( "/[^0-9,.]/", $height)){
        $h_error = 'Only integers and rational numbers are allowed.';
    }elseif(preg_match( "/[^0-9,.]/", $width)){
        $w_error = 'Only integers and rational numbers are allowed.';
    }elseif(preg_match( "/[^0-9,.]/", $length)){
        $l_error = 'Only integers and rational numbers are allowed.';
    }


    require_once('../templates/product-add.php');



    if(empty($sku_error) && empty($name_error) && empty($price_error) && empty($mb_error)){

        $p_dvd = array("sku", "name", "price", "size_mb");

        $dvd = compact($p_dvd);
        $product = new Product();
        $product->insertDvd($dvd);
        header("Location:http://product-list/");

    }


    // if(empty($sku_error) && empty($name_error) && empty($price_error) && empty($boo_error)){
    //     $book_array = array("sku", "name", "price", "book_weight");
    //     $book = compact($book_array);
    //     var_dump($book);
    //     die;
    //     $product = new Product();
    //     $product->insertBook($book);
    //     header("Location:http://product-list/");
    // }


    if(empty($sku_error) && empty($name_error) && empty($price_error) && empty($h_error) && empty($w_error) && empty($l_error)){

        $fur_array = array("sku", "name", "price", "height", "width", "length");

        $furniture = compact($fur_array);
        $product = new Product();
        $product->insertFurniture($furniture);
        header("Location:http://product-list/");
    }


    if(empty($sku_error) && empty($name_error) && empty($price_error) && empty($boo_error)){
    if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['b_weight'])){
        if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['b_weight'])){
            $book = $_POST;
            $product = new Product();
            $product->insertBook($book);
            header("Location:http://product-list/");

        }
      }
    }
















    // Clear code

    // if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['size_mb'])){
    //     if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['size_mb'])){
    //         $dvd = $_POST;
    //         $product->insertDvd($dvd);
    //         header("Location:http://product-list/");
    //         die;
    //     }
    // }

    // if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['b_weight'])){
    //     if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['b_weight'])){
    //         $book = $_POST;
    //         var_dump($book);

    //         $product->insertBook($book);
    //         die;
    //         header("Location:http://product-list/");
    //         die;
    //     }
    // }

    // if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['height']) && isset($_POST['width']) && isset($_POST['length'])){
    //     if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['height']) && !empty($_POST['width']) && !empty($_POST['length'])){
    //         $furniture = $_POST;
    //         $product->insertFurniture($furniture);
    //         header("Location:http://product-list/");
    //         die;
    //     }
    // }





