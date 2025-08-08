<?php
include "../partial/_database.php";
$pets_id = $_GET['id'];

$res = mysqli_query($conn, "SELECT `pet-image` FROM pets WHERE pets_id = $pets_id");
$row = mysqli_fetch_assoc($res);
if (file_exists($row['pet-image'])) {
    unlink($row['pet-image']);
}

mysqli_query($conn, "DELETE FROM pets WHERE pets_id = $pets_id");
header("Location: admin_pets.php");
?>
