<?php 

include'../../config/config.php'; 

$id = $_GET['id'];
$sql = "DELETE FROM sizes WHERE id_size = $id";

if($conn->query($sql) === TRUE) {
    echo "<script>'Record deleted successfully'</script>";
    header("Location: sizes.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
