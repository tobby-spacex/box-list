<?php
include 'Database.php';

 class Product {
     protected $db;
     public function __construct(){
         $this->db=new DataBase;
     }

    public function insertDvd(){
        if(isset($_POST['submit'])){
            if(isset($_POST['sku']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['size_mb'])){
                if(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['size_mb'])){

                    $sku = $_POST['sku'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $size_mb = $_POST['size_mb'];

                    $query = "INSERT INTO dvd(dvd_sku, dvd_name, dvd_price, size_mb ) VALUES('$sku', '$name', '$price', '$size_mb' )";
                    $this->db->query($query);
                }
            }
        }
    }
 }