<?php

//required headers.
header("Access-Control-Allow-Origin: *");
header("Content-Type: appliction/json; charset=UTF-8");


// include database and object files.
include '../config/database.php';
include '../objects/product.php';

// instantiate database and product object.
$database = new Database();
$db = $database->getConnection();

// initialize the product object.
$product = new Product($db);

