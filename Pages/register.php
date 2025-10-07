<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  include "../partial/_database.php";

  $fname = $_POST['fname']; 
  $lname = $_POST['lname']; 
  $email = $_POST['email'];
  $user = $_POST['user'];
  $mno = $_POST['mobile'];
  $pass = $_POST['pass'];

  $exsql = "SELECT * FROM users WHERE username='$user'";
  $result2 = mysqli_query($conn, $exsql);
  $num2 = mysqli_num_rows($result2);

  if($num2 > 0) {
    $error = "username_exists";
  } else {
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (`fname`, `lname`, `email`, `Mno`, `password`, `username`) VALUES ('$fname', '$lname', '$email', '$mno', '$hash', '$user')";
    $result = mysqli_query($conn, $sql);
    header("location:login.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - PetVilla</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>

  <style>
    body {
      background: linear-gradient(135deg, #fff5f7, #ffe9d6);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
    }

    .signup-card {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(10px);
      border-radius: 1.5rem;
      border: 2px solid rgba(255, 182, 193, 0.4);
      box-shadow: 0 8px 30px rgba(255, 182, 193, 0.4);
      padding: 2rem;
      width: 100%;
      max-width: 500px;
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .logo {
      width: 120px;
      margin-bottom: 1rem;
      border-radius: 20px;
    }

    .signup-card h2 {
      margin-bottom: 1.5rem;
      font-weight: 600;
      color: #ff69b4;
    }

    .form-control {
      background: rgba(255,255,255,0.8);
      border: 1px solid #ffb6c1;
      border-radius: 10px;
      color: #333;
      padding: 12px;
    }

    .form-control:focus {
      border-color: #ff69b4;
      box-shadow: 0 0 10px rgba(255, 105, 180, 0.3);
    }

    .btn-primary {
      background: linear-gradient(135deg, #ffb6c1, #ff69b4);
      border: none;
      border-radius: 12px;
      padding: 12px;
      color: #fff;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 0 15px rgba(255, 105, 180, 0.4);
    }

    .login-link {
      margin-top: 1rem;
      font-size: 0.95rem;
    }

    .login-link a {
      color: #ff69b4;
      text-decoration: none;
      font-weight: 500;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    /* === Custom Alert (PetVilla style) === */
    .custom-alert {
      position: fixed;
      top: 30px;
      left: 50%;
      transform: translateX(-50%);
      min-width: 340px;
      padding: 16px 25px;
      border-radius: 15px;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      display: flex;
      align-items: center;
      justify-content: space-between;
      border: 2px solid #ffb6c1;
      box-shadow: 0 0 25px rgba(255, 182, 193, 0.5);
      animation: slideDown 0.6s ease forwards;
      font-weight: 500;
      color: #333;
      z-index: 9999;
    }

    @keyframes slideDown {
      0% { transform: translate(-50%, -50px); opacity: 0; }
      100% { transform: translate(-50%, 0); opacity: 1; }
    }

    .custom-alert.error {
      border-color: #ff6b81;
      box-shadow: 0 0 25px rgba(255, 107, 129, 0.5);
    }

    .alert-icon {
      font-size: 1.4rem;
      margin-right: 10px;
      color: #ff69b4;
    }

    .close-btn {
      background: none;
      border: none;
      color: #666;
      font-size: 1.3rem;
      cursor: pointer;
      transition: 0.3s;
    }

    .close-btn:hover {
      color: #ff69b4;
    }
  </style>
</head>
<body>
  <div class="signup-card">
    <img src="../images/logo2.png" alt="PetVilla Logo" class="logo">
    <h2>Create Your PetVilla Account 🐾</h2>

    <form action="register.php" method="post">
      <div class="mb-3 text-start">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" name="fname" id="firstName" placeholder="Enter first name" required>
      </div>
      <div class="mb-3 text-start">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="lname" id="lastName" placeholder="Enter last name" required>
      </div>
      <div class="mb-3 text-start">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
      </div>
      <div class="mb-3 text-start">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="user" placeholder="Choose username" required>
      </div>
      <div class="mb-3 text-start">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number" required>
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="pass" placeholder="Enter password" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </form>

    <div class="login-link">
      Already have an account? <a href="login.php">Login</a>
    </div>
  </div>

  <?php if(isset($error) && $error == "username_exists"): ?>
    <div class="custom-alert error">
      <span><i class="alert-icon bi bi-x-circle-fill"></i> Username already exists. Please choose another.</span>
      <button class="close-btn" onclick="this.parentElement.style.display='none'">&times;</button>
    </div>
  <?php endif; ?>

  <script>
    // Auto-hide alert after 3 seconds
    setTimeout(() => {
      const alert = document.querySelector('.custom-alert');
      if (alert) {
        alert.style.transition = '0.5s';
        alert.style.opacity = '0';
        setTimeout(() => alert.remove(), 500);
      }
    }, 3000);
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
