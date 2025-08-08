<?php include 'admin_session.php' ?>

<?php
include "../partial/_database.php";
$pets_id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM pets WHERE pets_id = $pets_id");
$pet = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Pet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="container py-5">
  <h2>Edit Pet</h2>
  <form action="update_pet.php" method="POST" enctype="multipart/form-data" class="border p-4 bg-light rounded">
    <input type="hidden" name="pets_id" value="<?= $pet['pets_id'] ?>">

    <img src="<?= $pet['pet-image'] ?>" width="100" class="mb-3"><br>
    <input type="file" name="pet_image" class="form-control mb-3">

    <input type="text" name="pet_name" value="<?= $pet['pet-name'] ?>" class="form-control mb-3" required>
    <input type="text" name="breed" value="<?= $pet['pet-breed'] ?>" class="form-control mb-3" required>
    <input type="text" name="age" value="<?= $pet['pet-age'] ?>" class="form-control mb-3" required>

    <select name="gender" class="form-control mb-3">
      <option <?= $pet['pet-gender']=='Male'?'selected':'' ?>>Male</option>
      <option <?= $pet['pet-gender']=='Female'?'selected':'' ?>>Female</option>
    </select>

    <input type="text" name="category" value="<?= $pet['pet-category'] ?>" class="form-control mb-3" required>
    <textarea name="description" class="form-control mb-3"><?= $pet['pet-description'] ?></textarea>
    <input type="number" name="price" value="<?= $pet['pet-price'] ?>" class="form-control mb-3" required>

    <select name="availability" class="form-control mb-3">
      <option <?= $pet['pet-availability']=='Available'?'selected':'' ?>>Available</option>
      <option <?= $pet['pet-availability']=='Sold'?'selected':'' ?>>Sold</option>
      <option <?= $pet['pet-availability']=='Coming Soon'?'selected':'' ?>>Coming Soon</option>
    </select>

    <button class="btn btn-primary">Update Pet</button>
    <a href="admin_pets.php" class="btn btn-secondary">Cancel</a>
  </form>
</body>
</html>
