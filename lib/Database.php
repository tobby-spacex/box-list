<?php

class Database{
    // private $host = DB_HOST;
    // private $user = DB_USER;
    // private $pass = DB_PASS;
    // private $dbname = DB_NAME;

    private $host = "localhost";
    private $user = "root";
    private $pass = "root";
    private $dbname = "sh_product";

    protected $conn;


    public function __construct()
    {
        $this->connection();

    }

    public function connection(){
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        } catch (Exception $e) {
            echo "Database connection error". $e->getMessage();
        }
    }

    public function data_input($query){
        $this->conn->query($query);
        $this->conn->close();
    }



    public function selectProduct($table_name){
        $array = array();
        $query = "SELECT * FROM " .$table_name. "";
        $result = mysqli_query($this->conn, $query);

        while($row = mysqli_fetch_assoc($result)){
            $array[] = $row;
        }
        return $array;
    }

 // Funtion to remove DVD product
    public function deleteRecordById($conn,$id) {
        $query = "DELETE FROM dvd WHERE id='$id'";
        $result = mysqli_query($this->conn, $query) or die("DataBase Error". $this->conn);
        return $result;
    }


 // Funtion to remove Book product
    public function deleteBookById($conn,$id) {
        $query = "DELETE FROM book WHERE id='$id'";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }


 // Funtion to remove Furniture product
    public function deleteFurnitureById($conn,$id) {
        $query = "DELETE FROM furniture WHERE id='$id'";
        $result = mysqli_query($this->conn, $query) or die("DataBase Error". $this->conn);
        return $result;
    }



}