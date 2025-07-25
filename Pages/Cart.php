<?php include 'login_session.php' ?>
<?php include "../partial/_navbar.php"; ?>
<?php include "../partial/_database.php"; ?>
<?php

$user_id = $_SESSION['user_id'];

$query = "SELECT c.*,
                 p.`pet-name` AS `pet-name`,
                 p.`pet-price` AS `pet-price`,
                 f.`food-name` AS `food-name`,
                 f.`food-price` AS `food-price`
          FROM cart c
          LEFT JOIN pets p ON c.product_type = 'pet' AND c.product_id = p.pets_id
          LEFT JOIN food f ON c.product_type = 'food' AND c.product_id = f.food_id
          WHERE c.user_id = '$user_id'";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Your Cart</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css"/>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .cart-container {
      background: #fff;
      padding: 40px;
      margin-top: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .table thead {
      background-color: #343a40;
      color: #fff;
    }
    .btn-remove {
      color: #dc3545;
      font-weight: bold;
      border: none;
      background: none;
    }
    .btn-remove:hover {
      color: #a71d2a;
    }
    .total-box {
      background: #f1f1f1;
      padding: 20px;
      border-radius: 8px;
      font-size: 1.2rem;
      text-align: right;
    }
    .btn-checkout {
      background-color: #28a745;
      color: white;
      font-weight: 500;
    }
    .btn-checkout:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

<div class="container cart-container">
  <h2 class="mb-4">🛒 Your Cart</h2>
  <div class="table-responsive">
    <table class="table table-bordered table-hover text-center">
      <thead>
        <tr>
          <th>Product</th>
          <th>Type</th>
          <th>Quantity</th>
          <th>Price (₹)</th>
          <th>Subtotal (₹)</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $total_amount = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          if ($row['product_type'] == 'pet') {
            $product_name = $row['pet-name'];
            $price = $row['pet-price'];
          } else {
            $product_name = $row['food-name'];
            $price = $row['food-price'];
          }

          $quantity = intval($row['quantity']);
          $subtotal = floatval($price) * $quantity;
          $total_amount += $subtotal;

          echo "<tr>
                  <td>$product_name</td>
                  <td>{$row['product_type']}</td>
                  <td>$quantity</td>
                  <td>₹$price</td>
                  <td>₹$subtotal</td>
                </tr>";
        }
      ?>
      </tbody>
    </table>
  </div>

  <div class="total-box mb-3">
    <strong>Total Amount: ₹<?php echo $total_amount; ?></strong>
  </div>

  <div class="text-right">
    <form action="check.php" method="POST">
      <button type="submit" class="btn btn-checkout btn-lg">Proceed to Checkout</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

