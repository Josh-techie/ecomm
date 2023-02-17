<?php 

$db_name = "mysql:host=localhost;dbname=ecommerce";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>