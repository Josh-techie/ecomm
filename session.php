<?php


if(!isset($_SESSION["username"])){
    echo "Welcome :Guest"; 
} 
else
{ 
    echo "Welcome : " . $_SESSION['username'] . "";
}
?>