<?php
include 'Database.php';

 class Product {
     protected $db;
     public function __construct(){
         $this->db=new DataBase();
     }

    //  for inserting DVD data
    public function insertDvd($dvd){
        $query = "INSERT INTO dvd(dvd_sku, dvd_name, dvd_price, size_mb ) VALUES('{$dvd['sku']}','{$dvd['name']}', '{$dvd['price']}', {$dvd['size_mb']})";
        $this->db->data_input($query);
        echo "done";

         }

    //  for inserting Book data
    public function insertBook($book){
        $query = "INSERT INTO book(book_sku, book_name, book_price, b_weight) VALUES('{$book['sku']}','{$book['name']}', '{$book['price']}', {$book['b_weight']})";
        $this->db->data_input($query);
        echo "done";
    }

    //for inserting Furniture data
    public function insertFurniture($furniture){
        $query = "INSERT INTO furniture(f_sku, f_name, f_price, f_height, f_width, f_length) VALUES('{$furniture['sku']}','{$furniture['name']}',
        '{$furniture['price']}', '{$furniture['height']}', '{$furniture['width']}', '{$furniture['length']}')";
        $this->db->data_input($query);
        echo "done";
    }


}

