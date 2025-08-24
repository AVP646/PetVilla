<?php include 'admin_session.php'; ?>
<?php include "../partial/_database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Shop Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: 'Quicksand', sans-serif;
      background: #f4f6f8;
    }
    #wrapper {
      display: flex;
      min-height: 100vh;
    }
    #sidebar {
      width: 240px;
      background: linear-gradient(160deg, #1b1b2f, #0f3460);
      color: #eee;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem 1rem;
    }
    #sidebar h3 {
      font-size: 1.8rem;
      margin-bottom: 3rem;
      color: #f8b400;
    }
    .nav-link {
      color: #eee;
      padding: 0.75rem 1rem;
      border-radius: 50px;
      display: flex;
      align-items: center;
      width: 100%;
      transition: all 0.3s ease;
    }
    .nav-link i {
      margin-right: 1rem;
    }
    .nav-link:hover {
      background: #00adb5;
      transform: translateX(8px);
    }
    .logout {
      margin-top: auto;
      background: #e94560;
    }
    .logout:hover {
      background: #d63447;
    }
    .container-fluid {
      flex: 1;
      padding: 4rem;
    }
    .card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-10px);
    }
    @media (max-width: 768px) {
      #wrapper {
        flex-direction: column;
      }
      #sidebar {
        flex-direction: row;
        width: 100%;
        justify-content: space-around;
      }
      #sidebar h3 {
        display: none;
      }
    }
  </style>
</head>
<body>
<div id="wrapper">
  <!-- Sidebar -->
  <div id="sidebar">
    <h3>🐾 PetVilla</h3>
    <ul class="nav flex-column">
      <li class="nav-item"><a href="index.php" class="nav-link"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
      <li class="nav-item"><a href="admin_order.php" class="nav-link"><i class="bi bi-bag-check"></i> Orders</a></li>
      <li class="nav-item"><a href="admin_users.php" class="nav-link"><i class="bi bi-people"></i> Users</a></li>
      <li class="nav-item"><a href="admin_admins.php" class="nav-link"><i class="bi bi-person-circle"></i> Admin</a></li>
      <li class="nav-item"><a href="admin_Pets.php" class="nav-link"><i class="fas fa-paw"></i> Pets</a></li>
      <li class="nav-item"><a href="admin_Product.php" class="nav-link"><i class="bi bi-box-seam"></i> Products</a></li>
    </ul>
  </div>

  <!-- Page Content -->
  <div class="container-fluid p-4">
    <h2 class="mb-4">📋 All Orders</h2>
    <div class="table-responsive">
      <table class="table table-striped table-hover order-table" id="myTable">
        <thead class="table-dark">
          <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Phone</th>
            <th>Address</th>
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
          // Status badge
          $status_class = match($order['payment_status']) {
            'paid'      => 'badge bg-success',
            'shipped'   => 'badge bg-info text-dark',
            'pending'   => 'badge bg-warning text-dark',
            'cancelled' => 'badge bg-danger',
            default     => 'badge bg-secondary'
          };

          echo "<tr>
                  <td>{$order['order_id']}</td>
                  <td>{$order['customer_name']}</td>
                  <td>{$order['phone']}</td>
                  <td>{$order['address']}, {$order['city']}, {$order['state']} - {$order['pincode']}</td>
                  <td>₹{$order['total_amount']}</td>
                  <td>{$order['order_date']}</td>
                  <td><span class='{$status_class}'>".ucfirst($order['payment_status'])."</span></td>
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
<script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
<script>
  let table = new DataTable('#myTable');
</script>
</body>
</html>
