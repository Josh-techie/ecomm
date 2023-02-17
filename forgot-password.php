
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form  </title>
    <link rel="stylesheet" href="styleadmin.css">
  </head>
  <body>

    
    <div class="center">
        <br>
       <img class="image-container" src="img.svg" alt="login page"> 
  
      <form action="forgot-password.php" method="post">
        <div class="txt_field">
        <input type="text" name= "username" required>
          <span></span>
          <label>Enter your email:</label>
        </div>
        <input type="submit" name="ResetPass" value="Reset Password">
      </form>
      </body>
</html>


<?php

include_once 'config/config.php';



if (isset($_POST['ResetPass'])) {
    // Escape the email to prevent SQL injection attacks
    $email = $_POST['username'];

    // Select the email from the table
    $query = "SELECT email FROM client WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    // Check if the email was found
    if (mysqli_num_rows($result) > 0) {
        // Email was found, send the email
        // (replace with your own email sending code)
        $to = $email;
        $subject = 'Test Email';
        $message = 'This is a test email.';
        $headers = 'From: youse2002@outlook.fr';
        
        mail($to, $subject, $message, $headers);

        // mail(to, subject, message, headers, parameters);
        mail($email, 'Password Reset', 'Your password has been reset');

        // Display a message saying the email was sent
        echo "<script> alert('An email was sent to with instructions to reset your password.'); </script>";
        // echo 'An email was sent to ' . $email . ' with instructions to reset your password.';
    } else {
        // Email was not found, display an error message
        echo "<script> alert('Sorry, we could not find that email in our database.'); </script>";
        // echo 'Sorry, we could not find that email in our database.';
    }
}

?>