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

/* Add some basic styling to the form */
form {
  width: 80%;
  
  margin: 0 auto;
  padding: 10px 20px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
}

/* Style the labels */
label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

/* Style the input fields */
input[type="text"], input[type="number"], textarea {
  width: 100%;
  padding: 12px 20px;
  margin-bottom: 20px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

/* Style the file input fields */
input[type="file"] {
  width: 100%;
  padding: 12px 20px;
  margin-bottom: 20px;
  box-sizing: border-box; }
/* Style the buttons */
button[type="submit"], button[type="button"] {
  width: 100%;
  padding: 12px 20px;
  margin-bottom: 20px;
  box-sizing: border-box;
  border: none;
  border-radius: 4px;
  background-color: #4CAF50; /* Green */
  color: white;
  cursor: pointer;
}

/* Style the "submit" button */
button[type="submit"] {
  background-color: #4CAF50; /* Green */
}

/* Style the "cancel" button */
button[type="button"] {
  background-color: #f44336; /* Red */
}

/* Style the hover state of the buttons */
button:hover {
  background-color: #45a049;
}

/* Add an animation to the buttons */
button {
  transition: background-color 0.3s ease;
}

/* Add a hover effect to the buttons */
button:hover {
  background-color: #3e8e41;
}

.form-container {

  padding-top: 10px;
  padding-bottom: 10px;
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


<!-- start form -->

<div class="form-container">


<form  method="post" action="testproduct2.php" enctype="multipart/form-data">
    <label for="productName">Product Name:</label>
    <input type="text" id="productName" name="productName">
    <br>

    <label for="productDescription">Product Description:</label>
    <textarea id="productDescription" name="productDescription"></textarea>
    <br>

    <label for="image1">Image 1:</label>
    <input type="file" id="image1" name="image1" accept="image/jpg, image/png">
    <br>

    <label for="image2">Image 2:</label>
    <input type="file" id="image2" name="image2" accept="image/jpg, image/png">
    <br>

    <label for="image3">Image 3:</label>
    <input type="file" id="image3" name="image3" accept="image/jpg, image/png">
    <br>

    <label for="discountedPrice">Discounted Price:</label>
    <input type="text" id="discountedPrice" name="discountedPrice" pattern="[0-9]+([\.,][0-9]+)?">
    <br>

    <label for="originalPrice">Original Price:</label>
    <input type="text" id="originalPrice" name="originalPrice" pattern="[0-9]+([\.,][0-9]+)?">
    <br>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity">
    <br>

    <div class="popup-buttons">
        <button type="submit" name="submit">Submit</button>
        <button type="button" id="cancel" onclick="closePopup()">Cancel</button>
    </div>
</form>
  </div>
<!-- end form -->

<?php 

//Add product php code
  
    // check if the form has been submitted
    if (isset($_POST["submit"])) {
        // retrieve form data
        $productName = $_POST['productName'];
        $productDescription = $_POST['productDescription'];
        $discountedPrice = $_POST['discountedPrice'];
        $originalPrice = $_POST['originalPrice'];
        $quantity = $_POST['quantity'];

        $image1 = $_FILES['image1']['name'];
        $image2= $_FILES['image2']['name'];
        $image3= $_FILES['image3']['name'];

        $target1 = "../../assets/products/" .basename($image1);
        $target2 = "../../assets/products/" .basename($image2);
        $target3 = "../../assets/products/" .basename($image3);

        // validate form data
        if (empty($productName) || empty($discountedPrice) || empty($productDescription)) {
            // echo "Please fill in all fields";
            echo "<script> alert('Please fill in all fields'); </script>";
        } else {
            // sanitize form data
            $productName = mysqli_real_escape_string($conn, $productName);
            $discountedPrice = mysqli_real_escape_string($conn, $discountedPrice);
            $productDescription = mysqli_real_escape_string($conn, $productDescription);
            // build SQL query
            // $query = "INSERT INTO produit (date, product_title, product_img1, product_img2, product_img3, product_img4, product_img5, product_price, product_desc) VALUES (now(), '$product_title', 'img/products/$product_img1', 'img/products/$product_img2', 'img/products/$product_img3', 'img/products/$product_img4', 'img/products/$product_img5', '$product_price', '$product_desc')";
            
            $query = "INSERT INTO produit (nom_prod, p_desc, p_cat, img1, img2, img3, p_nprice, p_oprice, qty) 
  VALUES ('$productName', '$productDescription', 0 , '$image1', '$image2', '$image3', '$discountedPrice', '$originalPrice', '$quantity')";
            
            // execute query
            if (mysqli_query($conn, $query)) {
                move_uploaded_file($_FILES['image1']['tmp_name'], $target1);
                move_uploaded_file($_FILES['image2']['tmp_name'], $target2);
                move_uploaded_file($_FILES['image3']['tmp_name'], $target3);

                // echo "Product added successfully";
                echo "<script> alert('Product added successfully'); </script>";
                
                // header("Location: product.php"); // redirect to product page
                echo "<script> window.open('product.php','_self') </script>";
              } else {
                  echo "Error: " . mysqli_error($conn);
                  // echo "<script> alert('Error'. mysqli_error($conn)); </script>";
              }
          }
      }
  ?>




