<?php

include_once 'config/config.php';

// session_start();

if(isset($_POST["submit"])){

  //take inputs and secure them
  $username = $_POST["username"];
  $username = filter_var($username, FILTER_SANITIZE_STRING);

  $password = $_POST["password"];
  $password = filter_var($password, FILTER_SANITIZE_STRING);



  $query = "SELECT * FROM client WHERE username = '$username' OR email = '$username'";
  
  //send query look for email or username that matches what user inputed.
  $result = mysqli_query($conn,$query);

  $row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result) > 0){
    if ($row['is_admin'] == 1){

      if($password == $row['password']){

        //need session here
        $_SESSION['admin'] = true;
        isset($_SESSION['admin']) == true;
        echo "<script> alert('Login successful'); </script>";
        echo "<script> window.open('Admin_dashboard/codeadmin/index.php','_self') </script>";
          }
      else{
        echo
        "<script> alert('Wrong Password'); </script>";
      }
    }
    else{
      echo
      "<script> alert('User Not Registered'); </script>";
    }
  }
  
}
?>



