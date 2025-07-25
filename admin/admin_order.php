<?php include "../partial/_database.php"; ?>
<?php
include "../partial/_database.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Shop Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    #wrapper {
      min-height: 100vh;
    }
    #sidebar {
      width: 250px;
    }
    .nav-link {
      text-align: center;
      margin-top: 5px;
      border-radius: 15px;
      transition: 0.3s ease-out;
      color: white;
    }
    .nav-link:hover {
      background: white;
      color: black;
    }
    .logout {
      background: red;
      text-align: center;
      margin-top: 100px;
      border-radius: 5px;
      transition: 0.3s ease-out;
      color: white;
    }
    .order-table {
      margin-top: 40px;
    }
  </style>
</head>
<body>
<div class="d-flex" id="wrapper">
  <!-- Sidebar -->
  <div class="bg-dark text-white p-3" id="sidebar">
    <h3 class="mb-4 text-center">PetVilla</h3>
    <ul class="nav flex-column">
      <li class="nav-item"><a href="index.php" class="nav-link">Dashboard</a></li>
      <li class="nav-item"><a href="admin_order.php" class="nav-link">Orders</a></li>
      <li class="nav-item"><a href="admin_users.php" class="nav-link">Users</a></li>
      <li class="nav-item"><a href="admin_Pets.php" class="nav-link">Pets</a></li>
      <li class="nav-item"><a href="admin_Product.php" class="nav-link">Products</a></li>
      <li class="nav-item"><a href="admin_logout.php" class="nav-link logout">LOGOUT</a></li>
    </ul>
  </div>

  <!-- Page Content -->
  <div class="container-fluid p-4">
    <h2 class="mb-4">📋 All Orders</h2>
    <div class="table-responsive">
      <table class="table table-striped table-hover order-table">
        <thead class="table-dark">
          <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Total (₹)</th>
            <th>Date</th>
            <th>Status</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT o.*, CONCAT(u.fname, ' ', u.lname) AS customer_name 
                  FROM orders o
                  JOIN users u ON o.user_id = u.user_id
                  ORDER BY o.order_date DESC";

        $result = mysqli_query($conn, $query);

        while ($order = mysqli_fetch_assoc($result)) {
          // Color badge for status
          $status_class = ($order['payment_status'] === 'paid') ? 'badge bg-success' : 'badge bg-warning text-dark';

          echo "<tr>
                  <td>{$order['order_id']}</td>
                  <td>{$order['customer_name']}</td>
                  <td>₹{$order['total_amount']}</td>
                  <td>{$order['order_date']}</td>
                  <td><span class='$status_class'>{$order['payment_status']}</span></td>
                  <td><a href='admin_order_details.php?order_id={$order['order_id']}' class='btn btn-primary btn-sm'>View</a></td>
                </tr>";
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

