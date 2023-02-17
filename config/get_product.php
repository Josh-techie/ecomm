<?php
include 'condb.php';


//get 8 max product for main page
$stmt=$conn->prepare("SELECT * FROM produit LIMIT 8");

//get all product for the category page
$stmt1=$conn->prepare("SELECT * FROM produit");

$stmt->execute();
$stmt1->execute();

$featured_products =$stmt->get_result();
$category_product =$stmt1->get_result();

 
?>