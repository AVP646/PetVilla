<?php include 'admin_session.php' ?>

<?php
include "../partial/_database.php";

$pets_id = intval($_POST['pets_id']);
$pet_name = $_POST['pet_name'];
$breed = $_POST['breed'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$description = $_POST['description'];
$price = $_POST['price'];
$availability = $_POST['availability'];

// Get current image
$res = mysqli_query($conn, "SELECT `pet-image` FROM pets WHERE pets_id = $pets_id");
$row = mysqli_fetch_assoc($res);
$oldImage = $row['pet-image'];

if (!empty($_FILES['pet_image']['name'])) {
    $newImage = "../Pets/" . basename($_FILES['pet_image']['name']);
    move_uploaded_file($_FILES['pet_image']['tmp_name'], $newImage);
    if (file_exists($oldImage)) unlink($oldImage);
} else {
    $newImage = $oldImage;
}

$sql = "UPDATE pets SET 
  `pet-image`='$newImage',
  `pet-name`='$pet_name',
  `pet-breed`='$breed',
  `pet-age`='$age',
  `pet-gender`='$gender',
  `pet-category`='$category',
  `pet-description`='$description',
  `pet-price`='$price',
  `pet-availability`='$availability'
WHERE pets_id = $pets_id";

mysqli_query($conn, $sql);
header("Location: admin_pets.php");
?>
