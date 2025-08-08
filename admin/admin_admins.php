<?php include 'admin_session.php' ?>

<?php
include "../partial/_database.php";

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
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
  <style>
   
    body {
      background: #f4f6f8;
      font-family: 'Segoe UI', sans-serif;
    }

    .profile-section {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      padding: 40px 60px;
      transition: all 0.3s ease;
    }

    .profile-section:hover {
      transform: translateY(-3px);
    }

    .profile-avatar {
      border-radius: 50%;
      border: 5px solid #00adb5;
      width: 150px;
      height: 150px;
      object-fit: cover;
    }

    .profile-name {
      font-weight: 700;
      font-size: 2rem;
    }

    .profile-role {
      color: #00adb5;
      font-weight: 600;
      font-size: 1.1rem;
    }

    .profile-list {
      margin-top: 30px;
    }

    .profile-list li {
      padding: 15px 0;
      border-bottom: 1px solid #e9ecef;
      font-size: 1.1rem;
    }

    .btn-edit {
      background: #00adb5;
      border: none;
      font-weight: 600;
    }

    .btn-edit:hover {
      background: #007f86;
    }

    @media (max-width: 768px) {
      .profile-section {
        padding: 30px 20px;
      }
      .profile-avatar {
        width: 120px;
        height: 120px;
      }
      .profile-name {
        font-size: 1.7rem;
      }
    }
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
      margin-top:10px;
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
    .btn-logout {
      border-radius: 50px;
      padding: 8px 25px;
      font-weight: 600;
    }
   
    .btn-logout {
      background: #dc3545;
      color: #fff;
    }
    .btn-logout:hover {
      background: #e55353;
    }
     .btn-edit {
  border-radius: 50px;
  padding: 8px 25px;
  font-weight: 600;
  background: #007bff; /* Bootstrap primary */
  color: #fff;
}

.btn-edit:hover {
  background: #0056b3; /* Darker on hover */
}

@media (max-width: 768px) {
  .d-flex.flex-column.flex-md-row {
    flex-direction: column !important;
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
        <li class="nav-item"><a href="admin_admins.php" class="nav-link"><i class="fas fa-user-shield"></i> Admins</a>
        </li>
        <li class="nav-item"><a href="admin_Pets.php" class="nav-link"><i class="fas fa-paw"></i> Pets</a></li>
        <li class="nav-item"><a href="admin_Product.php" class="nav-link"><i class="bi bi-box-seam"></i> Products</a>
        </li>
        
      </ul>
    </div>

  <!-- Page Content -->
   
  <div class="container-fluid py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8 animate__animated animate__fadeIn">
        <div class="profile-section text-center">
          <img src="https://ui-avatars.com/api/?name=<?php  ?>&background=00adb5&color=fff&size=256&rounded=true"
               alt="Admin Avatar" class="profile-avatar mb-4">
          <h2 class="profile-name"><?php ?></h2>
          <p class="profile-role"><?php  ?></p>

          <ul class="list-unstyled profile-list text-start mx-auto" style="max-width: 500px;">

          <?php
            $query = "SELECT * FROM admins WHERE username = '".$_SESSION['admin']."'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($result);
          echo "
              <li><strong>ID:</strong>".$row['id']."</li>
            <li><strong>name:</strong>".$row['name']."</li>
            <li><strong>email:</strong>". $row['email']."</li>
            <li><strong>username:</strong>". $row['username']."</li>
            <li><strong>Joined:</strong> ".$row['created_at']."</li>";
          ?>
            
          </ul>

         <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-4">
  <a href="edit_profile.php" class="btn btn-primary btn-edit">Edit Profile</a>
  <a href="admin_logout.php" class="btn btn-logout">Logout</a>
</div>
        </div>
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

