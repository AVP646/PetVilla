<?php
include 'admin_session.php';
include '../partial/_database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Optional: fetch image path and delete from folder
    $query = "SELECT `food-image` FROM food WHERE food_id = $id";
    $result = mysqli_query($conn, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $imagePath = $row['food-image'];
        if (file_exists($imagePath)) {
            unlink($imagePath); // delete image file
        }
    }

    // Delete from database
    $sql = "DELETE FROM food WHERE food_id = $id";
    mysqli_query($conn, $sql);

    header("Location: admin_Product.php");
    exit();
}
?>
