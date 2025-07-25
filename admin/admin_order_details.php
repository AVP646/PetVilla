<?php
include '../partial/_database.php';
session_start();

$order_id = $_GET['order_id'];

// Get main order info (optional)
$order_query = "SELECT o.*, CONCAT(u.fname, ' ', u.lname) AS customer_name
                FROM orders o
                JOIN users u ON o.user_id = u.user_id
                WHERE o.order_id = '$order_id'";
$order_result = mysqli_query($conn, $order_query);
$order = mysqli_fetch_assoc($order_result);

// Get order items
$query  = "SELECT oi.*, 
                 p.`pet-name` AS pet_name, 
                 f.`food-name` AS food_name
          FROM order_items oi
          LEFT JOIN pets p ON oi.product_type = 'pet' AND oi.product_id = p.pets_id
          LEFT JOIN food f ON oi.product_type = 'food' AND oi.product_id = f.food_id
          WHERE oi.order_id = '$order_id'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Order Details - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .container {
      margin-top: 40px;
    }
    .table thead {
      background-color: #343a40;
      color: #fff;
    }
    .order-summary {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
<div class="container">
  <div class="order-summary">
    <h2 class="mb-3">📦 Order Details</h2>
    <p><strong>Order ID:</strong> <?php echo $order_id; ?></p>
    <p><strong>Customer:</strong> <?php echo $order['customer_name']; ?></p>
    <p><strong>Total:</strong> ₹<?php echo $order['total_amount']; ?></p>
    <p><strong>Date:</strong> <?php echo $order['order_date']; ?></p>
    <p><strong>Status:</strong> <?php echo ucfirst($order['payment_status']); ?></p>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover text-center">
      <thead>
        <tr>
          <th>Item</th>
          <th>Type</th>
          <th>Quantity</th>
          <th>Price per Unit (₹)</th>
          <th>Subtotal (₹)</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $total = 0;
        while ($item = mysqli_fetch_assoc($result)) {
          $product_name = ($item['product_type'] == 'pet') ? $item['pet_name'] : $item['food_name'];
          $quantity = intval($item['quantity']);
          $price = floatval($item['price']);
          $subtotal = $quantity * $price;
          $total += $subtotal;

          echo "<tr>
                  <td>$product_name</td>
                  <td>{$item['product_type']}</td>
                  <td>$quantity</td>
                  <td>₹$price</td>
                  <td>₹$subtotal</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
