<?php include 'login_session.php' ?>
<?php include "../partial/_database.php"; ?>
<?php 
// session_start(); ?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Profile</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .profile-card {
      background: #fff;
      border-radius: 10px;
      padding: 30px;
      margin-top: 40px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .avatar {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #fff;
      margin-bottom: 15px;
    }

    .nav-tabs .nav-link.active {
      background-color: #007bff;
      color: white !important;
    }

    .info-title {
      font-weight: bold;
      color: #343a40;
    }

    .info-value {
      color: #6c757d;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="profile-card text-center">
      <-- Profile Header --
      <img src="../images/review-user.jpg" alt="User Avatar" class="avatar">
      <h4 class="mb-0"><?php echo $_SESSION['user']; ?></h4>
      -- <small class="text-muted">Frontend Developer • Gujarat, India</small> --
      <div class="mt-3">
          <a href="logout.php">
        <button class="btn btn-outline-danger btn-sm">Logout</button>

          </a>
      </div>
    </div>

    <-- Tabs for Profile Sections --
    <div class="profile-card mt-4">
      <ul class="nav nav-tabs" id="profileTabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab">Overview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab">Orders</a>
        </li>
      </ul>
      <div class="tab-content p-3" id="profileTabsContent">
        <-- Overview --
        <div class="tab-pane fade show active" id="overview" role="tabpanel">
          <h5 class="info-title">First Name</h5>
          <p class="info-value mb-1">📧 <?php  echo $_SESSION['name'] ; ?></p>

          <h5 class="info-title">last name</h5>
          <p class="info-value mb-1">📧 <?php  echo $_SESSION['sur'] ; ?></p>

          <h5 class="info-title">Email</h5>
          <p class="info-value mb-1">📧 <?php  echo $_SESSION['email'] ; ?></p>

          <h5 class="info-title">Mobile No</h5>
          <p class="info-value mb-1">📧 <?php  echo $_SESSION['Mno'] ; ?></p>
        </div>

        <!-- Orders --
        <div class="tab-pane fade" id="orders" role="tabpanel">
          <h5 class="info-title">Recent Purchases</h5>
          <ul class="list-group">
            <li class="list-group-item">Golden Retriever Puppy – ₹3,999 <span class="badge badge-success float-right">Delivered</span></li>
            <li class="list-group-item">NutriBite Dog Food – ₹799 <span class="badge badge-warning float-right">Shipped</span></li>
          </ul>
        </div>

        
      </div>
    </div>
  </div>

  <-- Bootstrap Scripts --
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Profile 🐾 | PetVilla</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Animate.css for animations -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #fdfdfd;
      color: #333;
    }
    .profile-header {
      background: #ff69b4;
      color: #fff;
      text-align: center;
      padding: 50px 20px;
    }
    .profile-header h1 {
      font-weight: 700;
    }
    .profile-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      padding: 30px;
      margin-top: -50px;
      position: relative;
      z-index: 2;
      animation: fadeInUp 1s;
    }
    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #fff;
      margin-bottom: 15px;
    }
    .btn-edit, .btn-logout {
      border-radius: 50px;
      padding: 8px 25px;
      font-weight: 600;
    }
    .btn-edit {
      background: #ff69b4;
      color: #fff;
    }
    .btn-edit:hover {
      background: #ff85c1;
    }
    .btn-logout {
      background: #dc3545;
      color: #fff;
    }
    .btn-logout:hover {
      background: #e55353;
    }
    .order-card {
      background: #fff0f5;
      border-radius: 10px;
      padding: 15px 20px;
      margin-bottom: 15px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      animation: fadeIn 1s;
    }
    .wishlist {
      margin-top: 30px;
    }
    .wishlist h5 {
      font-weight: 600;
      margin-bottom: 15px;
    }
    .wishlist-item {
      display: inline-block;
      margin-right: 15px;
      margin-bottom: 15px;
    }
    .wishlist-item img {
      width: 100px;
      height: 100px;
      border-radius: 10px;
      object-fit: cover;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      transition: transform 0.3s ease;
    }
    .wishlist-item img:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <!-- Profile Header -->
  <div class="profile-header">
    <h1 class="animate__animated animate__fadeInDown">My Profile 🐾</h1>
  </div>

  <!-- Profile Card -->
  <div class="container">
    <div class="profile-card text-center">
      <img src="../images/review-user.jpg" alt="User Photo" class="profile-pic">
      <h3><?php echo $_SESSION['user']; ?> </h3>
      <p>Name: <?php echo $_SESSION['name']; ?><?php echo $_SESSION['sur']; ?></p>
      <p>Email:<?php echo $_SESSION['email']; ?></p>
      <p>Phone: +91 <?php echo $_SESSION['Mno']; ?></p>
      <a href="logout.php" class="btn btn-logout">Logout</a>
    </div>

    <!-- Order History -->
    <div class="mt-5">
      <h4>My Orders</h4>
      <?php 
    $query = "SELECT * FROM orders WHERE user ='".$_SESSION['user']."'";
    $result= mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      echo "
        <div class='order-card'>
        <p><strong>Order ID:</strong>".$row['SrNo']."</p>
        <p><strong>Date:</strong>".$row['date']."</p>
        <p><strong>Total:</strong> ₹1,499</p>
        <p><strong>Status:</strong> Delivered</p>
      </div>";
    }
  }
    
      ?>
          </div>

      </div>

  

</body>
</html>
