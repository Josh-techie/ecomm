<?php
session_start();
include('config/condb.php');
$status="";
if (isset($_POST['id_prod']) && $_POST['id_prod ']!=""){
$id_prod = $_POST['id_prod '];
$result = mysqli_query(
$con,
"SELECT * FROM `produit` WHERE `id_prod `='$id_prod '"
);
$row = mysqli_fetch_assoc($result);
$nom_prod = $row['nom_prod'];
$id_prod  = $row['id_prod'];
$p_nprice = $row['p_nprice'];
$img1 = $row['img1'];

$cartArray = array(
	$code=>array(
	$_POST['nom_prod']=>$nom_prod,
	$_POST['id_prod']=>$id_prod,
	$_POST['p_nprice']=>$p_nprice,
	$_POST['qty']=>1,
	$_POST['img1']=>$img1)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($id_prod,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>