<?php

ob_start();
include 'Database.php';

//the given expression for deletion, if the checkbox is selected, then it calls the class object

if(isset($_POST['delete'])){
     $delt = $_POST['box'];
     $product = new Database();

        foreach($delt as $del_id){
            $delete = $product->deleteRecordById($conn,$del_id);
             $product->deleteBookById($conn, $del_id);
             $product->deleteFurnitureById($conn, $del_id);
            header("Location:http://product-list/");

        }

}