<?php include 'admin_session.php'; ?>
<?php
include '../partial/_database.php';
session_start();

$order_id = $_GET['order_id'];

// Get main order info (including address/phone)
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

// Update status
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_status'])) {
    $new_status = mysqli_real_escape_string($conn, $_POST['new_status']);
    $update_query = "UPDATE orders SET payment_status = '$new_status' WHERE order_id = '$order_id'";
    if (mysqli_query($conn, $update_query)) {
        header("Location: admin_order_details.php?order_id=$order_id&updated=1");
        exit;
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
}
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

<?php if (isset($_GET['updated'])) : ?>
  <div class="alert alert-success">Order status updated successfully!</div>
<?php endif; ?>

<div class="container">
  <div class="order-summary">
    <h2 class="mb-3">📦 Order Details</h2>
    <p><strong>Order ID:</strong> <?php echo $order_id; ?></p>
    <p><strong>Customer:</strong> <?php echo $order['customer_name']; ?></p>
    <p><strong>Phone:</strong> <?php echo $order['phone']; ?></p>
    <p><strong>Address:</strong> <?php echo $order['address']; ?>, <?php echo $order['city']; ?>, <?php echo $order['state']; ?> - <?php echo $order['pincode']; ?></p>
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

<?php
  $is_final_status = ($order['payment_status'] === 'paid' || $order['payment_status'] === 'cancelled');
?>
<form method="POST" class="mt-3 d-flex justify-content-center">
  <div class="input-group" style="max-width: 400px;">
    <select name="new_status" id="new_status" class="form-select" required <?= $is_final_status ? 'disabled' : '' ?>>
      <option value="">Select status</option>
      <option value="paid" <?= $order['payment_status'] == 'paid' ? 'selected' : '' ?>>Paid</option>
      <option value="shipped" <?= $order['payment_status'] == 'shipped' ? 'selected' : '' ?>>Shipped</option>
      <option value="pending" <?= $order['payment_status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
      <option value="cancelled" <?= $order['payment_status'] == 'cancelled' ? 'selected' : '' ?>>Cancelled</option>
    </select>
    <button type="submit" class="btn btn-primary" <?= $is_final_status ? 'disabled' : '' ?>>Update</button>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
