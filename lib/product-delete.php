<?php

ob_start();
include 'Database.php';

// $product = new Database();

if(isset($_POST['delete'])){
     $delt = $_POST['box'];
     $product = new Database();

        foreach($delt as $del_id){
            $delete = $product->deleteRecordById($conn,$del_id);
             $product->deleteBookById($conn, $del_id);
             $product->deleteFurnitureById($conn, $del_id);
            header("Location:http://product-list/");
//     exit();

        }



}




// if(isset($_POST['delete'])){
//     $check = $_POST['box'];
//     foreach($check as $id){

//         // var_dump($check);
//         var_dump($id);
//         $product->deleteProduct($id);
//     }

//     // header("Location:http://product-list/");
//     // exit();
// }

