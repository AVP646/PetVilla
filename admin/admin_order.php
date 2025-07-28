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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Font Awesome for paw & admin icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
  <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
    }

    #wrapper {
      min-height: 100vh;
      display: flex;
    }

    #sidebar {
      width: 240px;
      background: #222831;
      color: #eeeeee;
      display: flex;
      flex-direction: column;
      padding: 2rem 1rem;
      box-shadow: 2px 0 12px rgba(0, 0, 0, 0.1);
    }

    #sidebar h3 {
      font-weight: 700;
      margin-bottom: 3rem;
      text-align: center;
      font-size: 1.6rem;
      color: #00adb5;
    }

    .nav-link {
      color: #eeeeee;
      padding: 0.75rem 1rem;
      margin: 0.3rem 0;
      border-radius: 0.75rem;
      display: flex;
      align-items: center;
      transition: all 0.3s ease;
    }

    .nav-link i {
      margin-right: 0.75rem;
      font-size: 1.2rem;
    }

    .nav-link:hover {
      background: #00adb5;
      color: #ffffff;
      transform: translateX(5px);
    }

    .logout {
      background: #d00000;
      margin-top: auto;
      text-align: center;
    }

    .logout:hover {
      background: #9b0000;
      transform: translateX(5px);
    }

    a {
      text-decoration: none;
    }

    @media (max-width: 768px) {
      #sidebar {
        width: 100%;
        flex-direction: row;
        overflow-x: auto;
      }

      .nav {
        flex-direction: row;
        flex-wrap: nowrap;
      }

      .nav-link {
        margin: 0 0.5rem;
        white-space: nowrap;
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
        <li class="nav-item"><a href="admin_admins.php" class="nav-link"><i class="fas fa-user-shield"></i> Admins</a></li>
        <li class="nav-item"><a href="admin_Pets.php" class="nav-link"><i class="fas fa-paw"></i> Pets</a></li>
        <li class="nav-item"><a href="admin_Product.php" class="nav-link"><i class="bi bi-box-seam"></i> Products</a></li>
        <li class="nav-item"><a href="admin_logout.php" class="nav-link logout"><i class="bi bi-box-arrow-right"></i> LOGOUT</a></li>
      </ul>
    </div>

  <!-- Page Content -->
  <div class="container-fluid p-4">
    <h2 class="mb-4">📋 All Orders</h2>
    <div class="table-responsive">
      <table class="table table-striped table-hover order-table" id='myTable'>
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
<script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
    <script>
      let table = new DataTable('#myTable');
    </script>

</body>
</html>

