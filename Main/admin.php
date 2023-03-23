
<?php

  include_once 'config/config.php'

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form  </title>
    <link rel="stylesheet" href="styleadmin.css">
  </head>
  <body>

    <h1 style="text-align: center; margin-top: 80px;"> Hello Admin </h1>
    <div class="center">
       <img class="image-container" src="img.svg" alt="login page"> 
  
      <form action="admin.php" method="post">
        <div class="txt_field">
        <?php include 'adminlogin.php' ?>
          <input type="text" name= "username" required>
          <span></span>
          <label>Username/Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <!-- <hidden-admin>
          <input type="hidden" name="my-hidden-field" value="1">
        </hidden-admin> -->
        
        <div class="pass"><a href="forgot-password.php"> Forgot Password? </a></div>
        
        
        <input type="submit" name="submit" value="Login">
      </form>

    </div>

  </body>
</html>
