<?php include 'admin_session.php' ?>

<?php include "../partial/_database.php";  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PetVilla Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet" />
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
    .row a{
      text-decoration:none;
    }
  </style>
</head>

<body>
  <div id="wrapper">
    <div id="sidebar">
      <h3>🐾 PetVilla</h3>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="index.php" class="nav-link"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
        <li class="nav-item"><a href="admin_order.php" class="nav-link"><i class="bi bi-bag-check"></i> Orders</a></li>
        <li class="nav-item"><a href="admin_users.php" class="nav-link"><i class="bi bi-people"></i> Users</a></li>
        <li class="nav-item"><a href="admin_admins.php" class="nav-link">  <i class="bi bi-person-circle"></i> Admin</a></li>
        <li class="nav-item"><a href="admin.php" class="nav-link"><i class="fas fa-user-shield"></i> Admins</a></li>
        <li class="nav-item"><a href="admin_Pets.php" class="nav-link"><i class="fas fa-paw"></i> Pets</a></li>
        <li class="nav-item"><a href="admin_Product.php" class="nav-link"><i class="bi bi-box-seam"></i> Products</a>
        </li>
      </ul>
    </div>
    <div class="container-fluid">
      <h2>Welcome,
        <?php 
      echo $_SESSION['name']; 
      ?> 🐾
      </h2>

      <div class="row g-4 mt-4">
        <div class="col-md-3">
          <a href="admin_order.php">
          <div class="card p-4 text-center">
            <h5>Orders</h5>
            <p class="fs-3 text-primary">
              <?php $res1 = mysqli_query($conn, "SELECT * FROM orders"); echo mysqli_num_rows($res1); ?>
            </p>
          </div>
  </a>
        </div>
        <div class="col-md-3">
          <a href="admin_users.php">
          <div class="card p-4 text-center">
            <h5>Users</h5>
            <p class="fs-3 text-success">
              <?php $res2 = mysqli_query($conn, "SELECT * FROM users"); echo mysqli_num_rows($res2); ?>
            </p>
          </div>
  </a>
        </div>
        <div class="col-md-3">
          <a href="admin_pets.php">
          <div class="card p-4 text-center">
            <h5>Pets</h5>
            <p class="fs-3 text-warning">
              <?php $res3 = mysqli_query($conn, "SELECT * FROM pets"); echo mysqli_num_rows($res3); ?>
            </p>
          </div>
  </a>
        </div>
        <div class="col-md-3">
          <a href="admin_Product.php">
          <div class="card p-4 text-center">
            <h5>Products</h5>
            <p class="fs-3 text-danger">
              <?php $res4 = mysqli_query($conn, "SELECT * FROM food"); echo mysqli_num_rows($res4); ?>
            </p>
          </div>
  </a>
        </div>
        <div class="col-md-3">
          <a href="admin.php">
          <div class="card p-4 text-center">
            <h5>Admins</h5>
            <p class="fs-3 text-danger">
              <?php $res4 = mysqli_query($conn, "SELECT * FROM admins"); echo mysqli_num_rows($res4); ?>
            </p>
          </div>
  </a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>