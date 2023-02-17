
<!-- include config db and connect it + session empty one-->
<?php include 'config/config.php'; 
      
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

</head>
<body>
    
    <form action="signup.php" method="POST">
        <div class="loging-card-container">
            <div class="login-card">
                <div class="login-card-logo">
                <div class="message">
                    <!-- here the php for registration -->

                    <?php 

                    // if(!empty($_SESSION["id"])){
                    //     header("Location: index.php"); }

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
                            echo "<script>alert('Registration Successful');</script>";
                            echo "<script> window.open('login.php','_self') </script>";
                            $_SESSION["username"] = $username;
                            // $_SESSION["id"] = $row["id"];
                            // header('location: index.php');
                        }
                        else{
                            echo
                            "<script> alert('Password Does Not Match'); </script>";
                        }
                        }
                    }
                    
                    ?> 
      
      
    </div>
                    <a href="index.php">
                    <img src="./assets/Newlogo.png" alt="logo">
                    <br>
                    </a>
                </div>
                <div class="login-card-form">
                        <br>
                    <div class="form-item">
                        <input type="text" name="username" required>
                        <span class="form-item-icon material-symbols-outlined"> Person</span>
                        <div class="label" > Choose Username </div>
                    </div>

                    <div class="form-item">
                        <input type="text" name="email" required>
                        <span class="form-item-icon material-symbols-outlined">mail</span>
                        <div class="label"> Enter your Email </div>
                    </div>
                    

                    <div class="form-item">
                        <input type="password" name="password" required>
                        <span class="form-item-icon material-symbols-outlined">lock </span>
                        <div class="label"> Choose Password </div>
                    </div>
                     <div class="form-item">
                        <input type="password" name="confirmPassword" required>
                        <span class="form-item-icon material-symbols-outlined">lock </span>
                        <div class="label"> Confirm Password </div>
                    </div>

                    <input type="hidden" name="is_admin" value="0" required>

                    <label class="terms-checkbox" name="checked">
                    <input  type="checkbox" required > I agree to the terms and conditions
                    </label>
                        <p style="font-size:17px; text-align:center"><b> Already have an account? </b> <a href="login.php"> Log in Now!</a> </p>     
                    <button type="submit" class="form-button" name="submit">Create Account</button>
                </div>
            </div>
      </div>
    </form>

        <?php include 'footer.php'; ?>

</body>
</html>


