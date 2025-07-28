<?php include "../partial/_database.php"; ?>
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
    .card-hover {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-hover:hover {
  transform: scale(1.05);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
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
      <h2 class="mb-4">Welcome, <?php 
      // echo $_SESSION['user']; ?> 🐾</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <a href="admin_order.php">
          <div class="card card-hover">
            <div class="card-body text-center">
              <?php
              $query1 = "SELECT * FROM orders";
              $resul1 = mysqli_query($conn,$query1);
              $no1 = mysqli_num_rows($resul1);
              ?>
              <h5>Total Orders</h5>
              <p class="fs-4 text-primary"><?php echo $no1; ?></p>
            </div>
          </div>
        </a>
        </div>
<div class="col-md-4">
          <a href="admin_users.php">
          <div class="card card-hover">
            <div class="card-body text-center">
              <?php
              $query1 = "SELECT * FROM users";
              $resul1 = mysqli_query($conn,$query1);
              $no2 = mysqli_num_rows($resul1);
              ?>
              <h5>Total Users</h5>
              <p class="fs-4 text-success"><?php echo $no2; ?></p>
            </div>
          </div>
        </a>
        </div>
<div class="col-md-4">
          <a href="admin_pets.php">
          <div class="card card-hover">
            <div class="card-body text-center">
              <?php
              $query1 = "SELECT * FROM pets";
              $resul1 = mysqli_query($conn,$query1);
              $no3 = mysqli_num_rows($resul1);
              ?>
              <h5>Total Pets</h5>
              <p class="fs-4 text-warning"><?php echo $no3; ?></p>
            </div>
          </div>
        </a>
        </div>
<div class="col-md-4">
          <a href="admin_Product.php">
          <div class="card card-hover">
            <div class="card-body text-center">
              <?php
              $query1 = "SELECT * FROM food";
              $resul1 = mysqli_query($conn,$query1);
              $no4 = mysqli_num_rows($resul1);
              ?>
              <h5>Total Products</h5>
              <p class="fs-4 text-warning"><?php echo $no4; ?></p>
            </div>
          </div>
        </a>
        </div>
      </div>
    </div>
  </div>


  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
