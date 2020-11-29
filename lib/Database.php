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


    public function deleteProduct($id){
        $query = "DELETE FROM dvd WHERE id =".$id;
        mysqli_query($this->conn, $query);
        echo "run";
        $this->conn->close();
    }

}