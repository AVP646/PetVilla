<?php
include 'admin_session.php';
include '../partial/_database.php';

if (!isset($_GET['id'])) {
    header("Location: admin_Product.php");
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM food WHERE food_id = $id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product-name'];
    $product_category = $_POST['product-category'];
    $product_size = $_POST['product-size'];
    $mfd = $_POST['mfd'];
    $exd = $_POST['exd'];
    $product_instruction = $_POST['product-instruction'];
    $product_availability = $_POST['product-availability'];
    $product_price = $_POST['product-price'];
    $product_description = $_POST['product-description'];

    if ($_FILES['product-image']['name']) {
        $product_image = $_FILES['product-image'];
        $target_dir = "../Products/";
        $target_file = $target_dir . basename($product_image["name"]);
        move_uploaded_file($product_image["tmp_name"], $target_file);

        // delete old image
        if (file_exists($product['food-image'])) {
            unlink($product['food-image']);
        }

        $image_query = "`food-image` = '$target_file',";
    } else {
        $image_query = "";
    }

    $update_sql = "UPDATE food SET 
        $image_query
        `food-name` = '$product_name',
        `food-category` = '$product_category',
        `food-size` = '$product_size',
        `food-mfd` = '$mfd',
        `food-exd` = '$exd',
        `food-instruction` = '$product_instruction',
        `food-availability` = '$product_availability',
        `food-price` = '$product_price',
        `food-description` = '$product_description'
        WHERE food_id = $id";

    mysqli_query($conn, $update_sql);
    header("Location: admin_Product.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f4f6f8;
      font-family: 'Segoe UI', sans-serif;
    }

    .edit-container {
      max-width: 600px;
      margin: 50px auto;
      background: #fff;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .form-label {
      font-weight: 500;
    }

    .form-control, .form-select {
      border-radius: 10px;
    }

    .form-control:focus, .form-select:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 173, 181, 0.25);
      border-color: #00adb5;
    }

    h4 {
      font-weight: bold;
      color: #0f3460;
    }

    img {
      border-radius: 10px;
    }

    @media (max-width: 576px) {
      .edit-container {
        margin: 20px;
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="edit-container">
    <form action="" method="POST" enctype="multipart/form-data">
      <h4 class="mb-4 text-center">🛠️ Edit Product</h4>

      <div class="mb-3 text-center">
        <label class="form-label">Current Image</label><br>
        <img src="<?= $product['food-image'] ?>" width="150" height="auto" alt="Product Image">
      </div>

      <div class="mb-3">
        <label class="form-label">Change Image (optional)</label>
        <input type="file" name="product-image" class="form-control">
      </div>

      <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="product-name" class="form-control" value="<?= $product['food-name'] ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Category</label>
        <input type="text" name="product-category" class="form-control" value="<?= $product['food-category'] ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Size</label>
        <input type="text" name="product-size" class="form-control" value="<?= $product['food-size'] ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">MFD (Manufacture Date)</label>
        <input type="date" name="mfd" class="form-control" value="<?= $product['food-mfd'] ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">EXD (Expiry Date)</label>
        <input type="date" name="exd" class="form-control" value="<?= $product['food-exd'] ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Instructions</label>
        <textarea name="product-instruction" class="form-control" rows="3" required><?= $product['food-instruction'] ?></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Availability</label>
        <select name="product-availability" class="form-select" required>
          <option value="In Stock" <?= $product['food-availability'] == 'In Stock' ? 'selected' : '' ?>>In Stock</option>
          <option value="Out of Stock" <?= $product['food-availability'] == 'Out of Stock' ? 'selected' : '' ?>>Out of Stock</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Price (₹)</label>
        <input type="number" name="product-price" class="form-control" value="<?= $product['food-price'] ?>" step="0.01" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="product-description" class="form-control" rows="4" required><?= $product['food-description'] ?></textarea>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-success btn-lg rounded-pill">💾 Update Product</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
