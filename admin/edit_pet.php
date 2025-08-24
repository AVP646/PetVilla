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
  <h2 class="mb-4">Edit Pet</h2>

  <form action="update_pet.php" method="POST" enctype="multipart/form-data" class="border p-4 bg-light rounded">
    <input type="hidden" name="pets_id" value="<?= $pet['pets_id'] ?>">

    <!-- Pet Image -->
    <div class="mb-3">
      <label class="form-label">Current Image</label><br>
      <img src="<?= $pet['pet-image'] ?>" width="100" class="mb-2"><br>
      <label class="form-label">Change Image</label>
      <input type="file" name="pet_image" class="form-control">
    </div>

    <!-- Pet Name -->
    <div class="mb-3">
      <label class="form-label">Pet Name</label>
      <input type="text" name="pet_name" value="<?= $pet['pet-name'] ?>" class="form-control" required>
    </div>

    <!-- Breed -->
    <div class="mb-3">
      <label class="form-label">Breed</label>
      <input type="text" name="breed" value="<?= $pet['pet-breed'] ?>" class="form-control" required>
    </div>

    <!-- Age -->
    <div class="mb-3">
      <label class="form-label">Age</label>
      <input type="text" name="age" value="<?= $pet['pet-age'] ?>" class="form-control" required>
    </div>

    <!-- Gender -->
    <div class="mb-3">
      <label class="form-label">Gender</label>
      <select name="gender" class="form-control">
        <option <?= $pet['pet-gender']=='Male'?'selected':'' ?>>Male</option>
        <option <?= $pet['pet-gender']=='Female'?'selected':'' ?>>Female</option>
      </select>
    </div>

    <!-- Category -->
    <div class="mb-3">
      <label class="form-label">Category</label>
      <input type="text" name="category" value="<?= $pet['pet-category'] ?>" class="form-control" required>
    </div>

    <!-- Description -->
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control" rows="4"><?= $pet['pet-description'] ?></textarea>
    </div>

    <!-- Price -->
    <div class="mb-3">
      <label class="form-label">Price (₹)</label>
      <input type="number" name="price" value="<?= $pet['pet-price'] ?>" class="form-control" required>
    </div>

    <!-- Availability -->
    <div class="mb-3">
      <label class="form-label">Availability</label>
      <select name="availability" class="form-control">
        <option <?= $pet['pet-availability']=='Available'?'selected':'' ?>>Available</option>
        <option <?= $pet['pet-availability']=='Sold'?'selected':'' ?>>Sold</option>
        <option <?= $pet['pet-availability']=='Coming Soon'?'selected':'' ?>>Coming Soon</option>
      </select>
    </div>

    <!-- Buttons -->
    <div class="d-flex gap-2">
      <button type="submit" class="btn btn-primary">Update Pet</button>
      <a href="admin_pets.php" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
</body>
</html>
