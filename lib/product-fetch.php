<?php require_once 'lib/Database.php';?>

<?php
$product = new Database();
$data = $product->selectProduct('dvd');
$data2 = $product->selectProduct('book');
$data3 = $product->selectProduct('furniture');
?>