
<?php

include 'config/config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

</head>
<body>
    <div class="container">
    <div class="loging-card-container">

    <form action="login.php" method="POST">
      <div class="login-card">
        <div class="login-php">
            <?php 

                // $_SESSION["username"] = array();

            
                                // if session not started for back to home page.
                    if (isset($_SESSION["username"])) {

                        header("location:index.php");
                    }

                    if(isset($_POST["submit"])){

                    //take the input and filter it
                    $username = $_POST["username"];
                    $username = filter_var($username, FILTER_SANITIZE_STRING);

                    $password = $_POST["password"];
                    $password = filter_var($password, FILTER_SANITIZE_STRING);
                    // search by username of email
                    $result = mysqli_query($conn, "SELECT * FROM client WHERE username = '$username' OR email = '$username'");
                    $row = mysqli_fetch_assoc($result);

                    if(mysqli_num_rows($result) > 0){
                        
                        if($password == $row['password']){
                        // $_SESSION["username"] = $username;
                        // $_SESSION["id"] = $row["id"];
                        echo "<script> alert('Login successful'); </script>";
                        // header("Location: index.php");
                        echo "<script> window.open('index.php','_self') </script>";
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
        
            ?>
            
        </div>
        <div class="login-card-logo">
            <a href="index.php">
            <!-- <img width="45%" height="45%" src="./img/logo.png" alt="Logo"> -->
            <img src="./assets/Newlogo.png" alt="logo">
            <br>
        </a>
        </div>
        <div class="login-card-header">
            <div><h3>Welcome to Diving Store of Agadir!</h3></div>
            <br>
        </div>
        <div class="login-card-form">
            <div class="form-item">
                <input type="text" name="username" required>
                <span class="form-item-icon material-symbols-outlined"> Person</span>
                <div class="label" > Username </div>
            </div>
            <div class="form-item">
                <input type="password" name="password" required>
                <span class="form-item-icon material-symbols-outlined">lock </span>
                <div class="label"> Password </div>
            </div>
            <div class="form-item-other">
                <div class="checkbox">
                    <input type="checkbox" id="remember_me_check_box">
                    <label for="remember_me_check_box"> Remember Me</label>
                </div>
                <a href="#"> Forgot password?</a>
            </div>
            <button type="submit" name="submit" > Login </button>
        </div>
    </form>
        <div class="login-card-footer">
            Don't have an account? <a href="signup.php"> Sign up Now!</a>
        </div><br>
        <div class="login-card-social">
            <div> <center>Or sign up using</center> </div><br>
            <div class="login-card-social-btn">
                <a class="facebook-logo" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                      </svg>
                </a>
                <a class="google-logo" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" />
                      </svg>
                </a>
                <a class="twitter-logo" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                    </svg>
                </a>
            </div> 
        </div>
      </div>
    </div>
</div>
</div>

</body>
</html>

<?php include 'footer.php'; ?>



