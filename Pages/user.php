<?php include 'login_session.php' ?>
<?php 
// session_start(); ?>

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
      <!-- Profile Header -->
      <img src="../images/review-user.jpg" alt="User Avatar" class="avatar">
      <h4 class="mb-0"><?php echo $_SESSION['user']; ?></h4>
      <!-- <small class="text-muted">Frontend Developer • Gujarat, India</small> -->
      <div class="mt-3">
          <a href="logout.php">
        <button class="btn btn-outline-danger btn-sm">Logout</button>

          </a>
      </div>
    </div>

    <!-- Tabs for Profile Sections -->
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
        <!-- Overview -->
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

        <!-- Orders -->
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

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
