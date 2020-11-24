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
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        } catch (Exception $e) {
            echo "Database connection error". $e->getMessage();
        }

    }
}