<?php 

class Product{

    //database connection and table name.
    private $conn;
    private $table_name = "products";

    // object properties.
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_name;
    public $created;

    // constructo with $db as database connection.
    public function _contruct($db){
        $this->conn = $db;
    }
}