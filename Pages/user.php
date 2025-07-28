<?php include 'login_session.php' ?>
<?php include "../partial/_database.php"; ?>
<?php 

?>

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
      background: black;
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
   <!-- Order History -->
<div class="mt-5">
  <h4>My Orders</h4>

  <?php 
  $user_id = $_SESSION['user_id'];

  $query = "SELECT * FROM orders WHERE user_id ='$user_id' ORDER BY order_date DESC";
  $result= mysqli_query($conn,$query);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      echo "
      <div class='order-card'>
        <p><strong>Order ID:</strong> ".$row['order_id']."</p>
        <p><strong>Date:</strong> ".$row['order_date']."</p>
        <p><strong>Total:</strong> ₹".$row['total_amount']."</p>
        <p><strong>Status:</strong> ".$row['payment_status']."</p>
      </div>";
    }
  } else {
    echo "<p>You don’t have any orders yet 🐾</p>";
  }
  ?>
</div>

      </div>

  

</body>
</html>
