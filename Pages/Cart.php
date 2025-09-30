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
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css"/> -->
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
    body {
  background-color: #f8f9fa;
  font-family: 'Poppins', sans-serif;
}

.cart-container {
  background: #fff;
  padding: 30px;
  margin-top: 40px;
  border-radius: 15px;
  box-shadow: 0 6px 25px rgba(0,0,0,0.1);
}

.table thead {
  background: linear-gradient(90deg, #007bff, #6610f2);
  color: #fff;
}

.table td, .table th {
  vertical-align: middle;
}

.btn-remove {
  color: #fff;
  background: #dc3545;
  border-radius: 25px;
  padding: 6px 14px;
  font-size: 0.9rem;
  transition: 0.3s ease;
  text-decoration: none;
  display: inline-block;
}

.btn-remove:hover {
  background: #b02a37;
  transform: scale(1.05);
}

.total-box {
  background: #f1f1f1;
  padding: 20px;
  border-radius: 10px;
  font-size: 1.2rem;
  text-align: right;
}

.btn-checkout {
  background: #28a745;
  color: white;
  font-weight: 600;
  border-radius: 30px;
  padding: 12px 25px;
  transition: 0.3s ease;
}

.btn-checkout:hover {
  background: #218838;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

/* Responsiveness */
@media (max-width: 768px) {
  .cart-container {
    padding: 20px;
  }
  .table thead {
    display: none; /* Hide table header */
  }
  .table tr {
    display: block;
    margin-bottom: 15px;
    border-bottom: 2px solid #eee;
  }
  .table td {
    display: flex;
    justify-content: space-between;
    padding: 10px;
    border: none;
  }
  .table td::before {
    content: attr(data-label);
    font-weight: 600;
    color: #555;
  }
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
          <th>Action</th>
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
        <td data-label='Product'>$product_name</td>
        <td data-label='Type'>{$row['product_type']}</td>
        <td data-label='Quantity'>$quantity</td>
        <td data-label='Price'>₹$price</td>
        <td data-label='Subtotal'>₹$subtotal</td>
        <td data-label='Action'>
          <a href='remove_cart_item.php?id={$row['cart_id']}' 
             class='btn btn-remove' 
             onclick=\"return confirm('Remove this item from cart?')\">✖ Remove</a>
        </td>
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
  <?php if ($total_amount > 0) { ?>
    <form action="checkout.php" method="POST">
      <button type="submit" class="btn btn-checkout btn-lg">Proceed to Checkout</button>
    </form>
  <?php } else { ?>
    <p class="text-muted">Your cart is empty 🐾</p>
  <?php } ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

