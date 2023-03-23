<?php

if(isset($_POST["submit"])){

  $username = $_POST["username"];
  $username = filter_var($username, FILTER_SANITIZE_STRING);

  $email = $_POST["email"];
  $email = filter_var($email, FILTER_SANITIZE_STRING);

  $password = $_POST["password"];
  $password = filter_var($password, FILTER_SANITIZE_STRING);
  $password = SHA1($password);

  $confirmpassword = $_POST["confirmPassword"];
  $confirmpassword = filter_var($confirmpassword, FILTER_SANITIZE_STRING);
  $confirmpassword = SHA1($confirmpassword);
  

  $duplicate = mysqli_query($conn, "SELECT * FROM client WHERE username = '$username' OR email = '$email'");

  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO client VALUES('','$username','$email','$password','',now())";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header('location: index.php');
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>



