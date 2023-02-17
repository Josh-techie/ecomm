
<?php include'../../config/config.php'; 

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
      padding-top: 3rem;
    }

    .container-buttons {
    width: 100%;
    display: flex;
    padding-top:2rem;
    padding-right: 2rem;
    justify-content: right;
    /* padding-left: 70%; */

          }

      .addcat-button {
          background-color: #777b7e;
          color: white;
          font-size: 1rem;
        padding: 0.5em 1em;
        border-radius: 0.25em;
        border:none;
        transition: background-color 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        transform: scale(1);
                  }


.addcat-button:hover {
    background-color: darken(red/green,10%);
}

.addcat-button:active {
    transform: scale(0.8);
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

    </style>



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
        <a href="index.php" >
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
        <a href="categories.php" class="active">
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

    <!-- here the button add cat -->
    <div class="container-buttons">
         <button type="button" class="addcat-button">Add Category</button>
    </div>
    
    <!-- start table categories -->
    <div class="table_div">
      <table id="categories">
        
      <?php 

$query = "SELECT * FROM category LIMIT 5";

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <th> <font face="Arial">ID Category</font> </th> 
          <th> <font face="Arial">Nom Category</font> </th> 
          <th> <font face="Arial">Edit</font> </th> 
          <th> <font face="Arial">Delete</font> </th> 
      </tr>';

if ($result = $conn->query($query)) {
  while ($row = $result->fetch_assoc()) {
      $field1name = $row["id_cat"];
      $field2name = $row["nom_cat"];

      echo '<tr> 
        <td>'.$field1name.'</td> 
        <td>'.$field2name.'</td> 
        <td><a href="#"> Edit</a></td>
        <td> <a href="deletecat.php?id='.$field1name.'">Delete</a> </td> 
      </tr>';
  }
  $result->free();
} 
?>
</table>
<!-- end the tale for categories -->
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


//  pop up window when clicked on add cat
var button = document.querySelector(".addcat-button");

// Add an event listener to the button
button.addEventListener("click", function() {
    // Open a pop-up window
    window.open("addcat.php", "Pop-up Window", "width=300,height=200");
});


  </script>
</body>
</html>