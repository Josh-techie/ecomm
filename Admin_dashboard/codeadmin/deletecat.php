<?php 

include'../../config/config.php';

$id = $_GET['id'];
$sql = "DELETE FROM category WHERE id_cat = $id";

if($conn->query($sql) === TRUE) {
    echo "<script>'Record deleted successfully'</script>";
    header("Location: categories.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
