<?php include '../../config/config.php'; 

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
    text-align:center;
  }
  
  th {
    background-color: #f2f2f2; /* Add a background color to the header cells */
  }

  .table_div{
    padding-top: 2rem;
  }

  .container-buttons {
    width: 100%;
    display: flex;
    padding-top:2rem;
    padding-right: 2rem;
    justify-content: right;
    /* padding-left: 70%; */

          }

.add-product-button {
  background-color: #777b7e;
  color: white;
  /* padding-right:2rem; */
                  }

.edit-button {
  background-color: #777b7e;
  color: white;
  
  }

  .add-product-button, .edit-button {
        font-size: 1rem;
        padding: 0.5em 1em;
        border-radius: 0.25em;
        border:none;
        transition: background-color 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        transform: scale(1);
                  }

.add-product-button:hover, .edit-button:hover {
    background-color: darken(red/green,10%);
}

.add-product-button:active, .edit-button:active {
    transform: scale(0.8);
}

.container-buttons button {
    margin: 0 10px; /* add 10px of margin to the top, right, bottom, and left of each button */
}

/* to animate the buttons  */
@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.4);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);
    }
}

/* style the toggle bar and hide it by default */
.popup {
    height: 600px;
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    width: 60%;
    padding: 30px;
    border: 2px solid #333;
    background-color: #f1f1f1;
    /* background-image: url(path/to/image); */
    background-size: cover;
    box-shadow: 10px 10px 10px #999;
  }

  .hidden {
  display: none;
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
        <a href="index.php" >
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">
            Dashboard
          </span>
        </a>
      </li>
      <li>
        <a href="customers.php">
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
        <a href="product.php" class="active">
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


    <div class="container-buttons">
      <button type="button" class="add-product-button" onclick="window.location.href='testproduct2.php';">Add Product</button>
      <button type="submit" class="edit-button" >Edit</button>
    </div>


    <!-- start the table for the products -->
    <div class="table_div">
    <table id="products"> 
      <?php 
          $query = "SELECT * FROM produit ";


          echo '<table border="0" cellspacing="2" cellpadding="2"> 
                <tr> 
                    <th> <font face="Arial"><center>ID</center></font> </th> 
                    <th> <font face="Arial"><center>Nom Produit</center></font> </th> 
                    <th> <font face="Arial"><center>Description Produit</center></font> </th> 
                    
                    <th> <font face="Arial"><center>Image 1</center></font> </th> 
                    <th> <font face="Arial"> <center>Image 2</center></font> </th> 
                    <th> <font face="Arial"> <center>Image 3 </center></font> </th>
                    <th> <font face="Arial"><center> Discounted Price </center> </font> </th>
                    <th> <font face="Arial"><center> Original Price </center> </font> </th>
                    <th> <font face="Arial"><center> Quantity </center> </font> </th>
                </tr>';

                if ($result = $conn->query($query)) {
                  while ($row = $result->fetch_assoc()) {
                      $field1name = $row["id_prod"];
                      $field2name = $row["nom_prod"];
                      $field3name = $row["p_desc"];
                    
                      $field5name = $row["img1"]; 
                      $field6name = $row["img2"]; 
                      $field7name = $row["img3"]; 
                      $field8name = $row["p_nprice"]; 
                      $field9name = $row["p_oprice"]; 
                      $field10name = $row["qty"]; 

                      echo '<tr> 
                      <td><center>'.$field1name.'</center></td> 
                      <td><center>'.$field2name.'</center></td> 
                      <td><center>'.$field3name.'</center></td> 
                      
                      <td><img height="120px" width="90px" src="../../assets/products/'.$field5name.' "alt="IMG"></td>
                      <td><img height="120px" width="90px" src="../../assets/products/'.$field6name.'" ALT="IMG"/></td>
                      <td><img height="120px" width="90px" src="../../assets/products/'.$field7name.'" ALT="IMG"/></td>
                
                      <td><center>'.$field8name.'</center></td>  
                      <td><center>'.$field9name.'</center></td> 
                      <td><center>'.$field10name.'</center></td>

                  </tr>';
                }
                $result->free();
            } 
            ?>       
  </table>
  <!-- end the table for the products -->
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


