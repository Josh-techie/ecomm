<?php include '../config/config.php'; ?>



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
        <a href="index.html" class="active">
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
        <a href="../index.php">
          <span class="links_name login_out">
            Log Out
          </span>
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
        <img src="img/user.jpg" alt="">
      </div>
    </div>
    <!-- End Top Bar -->


<!-- start form -->

  <form  method="post" action="testproduct.php">
 
    <label for="productName">Product Name:</label>
    <input type="text" id="productName" name="productName">
    <br>

    <label for="productDescription">Product Description:</label>
    <textarea id="productDescription" name="productDescription"></textarea>
    <br>

    <label for="image1">Image 1:</label>
    <!-- max size to accept 2mo aprrox nothing to handle errors here just html -->
    <input type="file" id="image1" name="image1" accept="image/jpeg, image/png" max-size="2097152">
    <br>

    <label for="image2">Image 2:</label>
    <input type="file" id="image2" name="image2" accept="image/jpg, image/png" max-size="2097152">
    <br>

    <label for="image3">Image 3:</label>
    <input type="file" id="image3" name="image3" accept="image/jpg, image/png" max-size="2097152">
    <br>

    <label for="discountedPrice">Discounted Price:</label>
    <input type="number" id="discountedPrice" name="discountedPrice">
    <br>

    <label for="originalPrice">Original Price:</label>
    <input type="number" id="originalPrice" name="originalPrice">
    <br>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity">
    <br>

    <div class="popup-buttons">
      <button type="submit" name="submit">Submit</button>
      <button type="button" id="cancel" onclick="closePopup()">Cancel</button>
    </div>
  </form>

<!-- end form -->

<?php

if(isset($_POST["submit"])){
  // Retrieve the data from the form
  $productName = $_POST['productName'];
  $productDescription = $_POST['productDescription'];
  $discountedPrice = $_POST['discountedPrice'];
  $originalPrice = $_POST['originalPrice'];
  $quantity = $_POST['quantity'];

$image1 = $_FILES['image1'];
$image2 = $_FILES['image2'];
$image3 = $_FILES['image3'];
  
  $images = array('image1','image2','image3');
  foreach ($images as $image) {
      $target_dir = "../assets/products/";
      $target_file = $target_dir . basename($_FILES[$image]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $imageName = $target_dir . uniqid() . '.' . $imageFileType;
      move_uploaded_file($_FILES[$image]["name"], $imageName);
      $$image = $imageName;
  }
  // create the query
  $query = "INSERT INTO produit (nom_prod, p_desc, img1, img2, img3, p_nprice, p_oprice, qty) 
  VALUES ('$productName', '$productDescription', '$image1', '$image2', '$image3', '$discountedPrice', '$originalPrice', '$quantity')";
  // run the query
  if(mysqli_query($conn, $query)){
      //upload the images to the server
      if(isset($temp_product_img1))
          move_uploaded_file($temp_product_img1,"../assets/products/$product_img1");
      if(isset($temp_product_img2))
          move_uploaded_file($temp_product_img2,"../assets/products/$product_img2");
      if(isset($temp_product_img3))
          move_uploaded_file($temp_product_img3,"../assets/products/$product_img3");
      //redirect the user to the product page
      // header("Location: product.php");
  }else{
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}
?>



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


