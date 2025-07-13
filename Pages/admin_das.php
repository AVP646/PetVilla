<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pet Shop Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
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

.card-hover {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-hover:hover {
  transform: scale(1.05);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}
.nav-link{
    /* border:1px solid white; */
    text-align:center;
    margin-top:5px;
    border-radius:15px;
    transition: 0.3s ease-out;
    color:white;
}

.nav-link:hover{
    background:white;
    color:black;
}
.logout{
    background:red;
    text-align:center;
    margin-top:100px;
    border-radius:1px;
    transition: 0.3s ease-out;
    color:white;
    
}

  </style>
</head>
<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3  " id="sidebar">
      <h3 class="mb-4 text-center">PetVilla </h3>
      <ul class="nav flex-column"> 
        <li class="nav-item"><a href="admin_das.php" class="nav-link text-">Dashboard</a></li>
        <li class="nav-item"><a href="admin_order.php" class="nav-link text-">Orders</a></li>
        <li class="nav-item"><a href="admin_users.php" class="nav-link text-">Users</a></li>
        <li class="nav-item"><a href="admin_Pets.php" class="nav-link text-">Pets</a></li>
        <li class="nav-item"><a href="admin_Product.php" class="nav-link text-">Products</a></li>
        <li class="nav-item"><a href="admin_logout.php" class="nav-link logout">LOGOUT</a></li>
      </ul>
    </div>

    <!-- Page Content -->
    <div class="container-fluid p-4">
      <h2 class="mb-4">Welcome, Admin 🐾</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card card-hover">
            <div class="card-body text-center">
              <h5>Total Orders</h5>
              <p class="fs-4 text-primary">312</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-hover">
            <div class="card-body text-center">
              <h5>Total Users</h5>
              <p class="fs-4 text-success">180</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-hover">
            <div class="card-body text-center">
              <h5>Total Pets</h5>
              <p class="fs-4 text-warning">75</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-hover">
            <div class="card-body text-center">
              <h5>Total Products</h5>
              <p class="fs-4 text-warning">75</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
