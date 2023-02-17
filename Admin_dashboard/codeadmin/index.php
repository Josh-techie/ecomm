<?php

 include '../../config/config.php'; 
 
//  session_start();


    
// session if true otheerwise redirect to main page
if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
  // redirect to main page
  echo "<script> window.open('../../index.php','_self') </script>";
  exit();
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Admin & Dashboard</title>
  <link rel="stylesheet" href="main.css">
  <!-- box icon -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

  <!-- here start of the sidebar -->
  <div class="sidebar">
    <div class="logo_details">
      <i class='bx bx-code-alt'></i>
      <div class="logo_name">
        Poly Dev
      </div>
    </div>
    <ul>
      <li>
        <a href="index.php" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">
            Dashboard
          </span>
        </a>
      </li>
      <li>
        <a href="customers.php" >
          <i class='bx bx-user'></i>
          <span class="links_name">
            Customers
          </span>
        </a>
      </li>
      <li>
        <a href="categories.php">
          <i  class="material-symbols-outlined"> category</i>
          <span class="links_name">
            Categories
          </span>
        </a>
      </li>
      <li>
        <a href="sizes.php">
          <i  class="material-symbols-outlined"> widgets  </i>
          <span class="links_name">
            Sizes
          </span>
        </a>
      </li>
      <li>
        <a href="product.php">
          <i class='bx bxs-user-plus'></i>
          <span class="links_name">
            Product
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cart-alt'></i>
          <span class="links_name">
            Orders
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-heart'></i>
          <span class="links_name">
            Saved
          </span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">
            Settings
          </span>
        </a>
      </li>
      
  <li class="login">
    <a href="../../index.php">
      <span class="links_name login_out" onclick="event.preventDefault(); window.location.href='../../index.php';">
        Log Out
      </span>
       <!-- unset the session of the admin -->
      <?php unset($_SESSION['admin']); ?>
      <i class='bx bx-log-out' id="log_out"></i>
    </a>
  </li>
</ul>

  </div>
  <!-- End Sidebare -->


  <section class="home_section">
    <div class="topbar">
      <div class="toggle">
        <i class='bx bx-menu' id="btn"></i>
      </div>
      <div class="search_wrapper">
        <label>
          <span>
            <i class='bx bx-search'></i>
          </span>
          <input type="search" placeholder="Search...">
        </label>
      </div>
      <div class="user_wrapper">
        <img src="../img/user.jpg" alt="">
      </div>
    </div>
    <!-- End Top Bar -->
    <div class="card-boxes">
      <div class="box">
        <div class="right_side">
          <div class="numbers">9.99</div>
          <div class="box_topic">Total Order</div>
        </div>
        <i class='bx bx-cart-alt'></i>
      </div>
      <div class="box">
        <div class="right_side">
          <div class="numbers">15.9</div>
          <div class="box_topic">Total Sales</div>
        </div>
        <i class='bx bxs-cart-add'></i>
      </div>
      <div class="box">
        <div class="right_side">
          <div class="numbers">30.20</div>
          <div class="box_topic">Total Projects</div>
        </div>
        <i class='bx bx-cart'></i>
      </div>
      <div class="box">
        <div class="right_side">
          <div class="numbers">50.9</div>
          <div class="box_topic">Total Return</div>
        </div>
        <i class='bx bxs-cart-download'></i>
      </div>
    </div>
    <!-- End Card Boxs -->

    
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      // call function
      changeBtn();
    });

    function changeBtn() {
      if(sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
  </script>
</body>
</html>



?>