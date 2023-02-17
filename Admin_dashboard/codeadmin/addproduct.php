<?php include'../config/config.php'; 


if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
    // redirect to main page
    echo "<script> window.open('../../index.php','_self') </script>";
    exit();
  }


if (isset($_SESSION["submit"])) {
// Retrieve the data from the form
$productName = $_POST['productName'];
$productDescription = $_POST['productDescription'];
$discountedPrice = $_POST['discountedPrice'];
$originalPrice = $_POST['originalPrice'];
$quantity = $_POST['quantity'];

// Handle the image upload
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


// Construct the SQL query

$query = "INSERT INTO produit (nom_prod, p_desc, img1, img2, img3, p_nprice, p_oprice, qty) 
          VALUES ('$productName', '$productDescription', '$image1', '$image2', '$image3', '$discountedPrice', '$originalPrice', '$quantity')";

$result = $conn->query($query);

if ($result) {
    echo '<script>alert("Added successfully");</script>';
    header("Location: product.php");
} else {
    // Display an error message
    echo "Error: " . $conn->error;
}
}

$conn->close();

?>
