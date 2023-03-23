
<?php include'../../config/config.php'; 

if (!isset($_SESSION) || !isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
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


<style>

  table {
    width: 100%;
    padding-right: 20px; /* Add padding to the right */
    border-collapse: collapse; /* Remove the border between table cells */
  }
  
  th, td {
    border: 1px solid #dddddd; /* Add a border to the cells */
    text-align: left; /* Align the text to the left */
    padding: 8px; /* Add padding to the cells */
  }
  
  th {
    background-color: #f2f2f2; /* Add a background color to the header cells */
  }

  .table_div{
    padding-top: 6rem;
  }

  </style>
  





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
        <a href="index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">
            Dashboard
          </span>
        </a>
      </li>
      <li>
        <a href="customers.php" class="active">
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
      <?php $_SESSION['admin'] = false; ?>
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

    <!-- start the table for the customers -->
    <div class="table_div">
    <table id="customers"> 

      <?php 
          $query = "SELECT * FROM client";


          echo '<table border="0" cellspacing="2" cellpadding="2"> 
                <tr> 
                    <th> <font face="Arial">ID</font> </th> 
                    <th> <font face="Arial">Username</font> </th> 
                    <th> <font face="Arial">Email</font> </th> 
                    <th> <font face="Arial">Password</font> </th> 
                    <th> <font face="Arial">Is Admin</font> </th> 
                    <th> <font face="Arial">Registration Date</font> </th> 
                </tr>';

                if ($result = $conn->query($query)) {
                  while ($row = $result->fetch_assoc()) {
                      $field1name = $row["id"];
                      $field2name = $row["username"];
                      $field3name = $row["email"];
                      $field4name = $row["password"];
                      $field5name = $row["is_admin"]; 
                      $field6name = $row["registration_date"]; 

                      echo '<tr> 
                      <td>'.$field1name.'</td> 
                      <td>'.$field2name.'</td> 
                      <td>'.$field3name.'</td> 
                      <td>'.$field4name.'</td> 
                      <td>'.$field5name.'</td>
                      <td>'.$field6name.'</td> 
                  </tr>';
                }
                $result->free();
            } 
            ?>       
  </table>
  <!-- end the table for the customers -->
  </div>









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