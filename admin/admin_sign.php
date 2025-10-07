<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  include "../partial/_database.php";
  $fname = $_POST['fname']; 
  $email = $_POST['email'];
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $exsql = "SELECT * FROM admins WHERE username='$user'";
  $result2 = mysqli_query($conn, $exsql);
  $num2 = mysqli_num_rows($result2);

  if($num2 > 0) {
    echo "<script>alert('Username already exists! Please choose another one.');</script>";
  } else {
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO admins (`name`, `email`, `username`, `password`, `created_at`) 
            VALUES ('$fname', '$email', '$user', '$hash', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    header("Location: admin_log.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PetVilla | Admin Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    /* 🌿 Background & layout */
    body {
      background: linear-gradient(135deg, #fff9f5, #ffe8d9);
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 30px 15px;
    }

    /* 🧩 Card Styling */
    .signup-card {
      background: #ffffffd9;
      backdrop-filter: blur(10px);
      border-radius: 1rem;
      box-shadow: 0 8px 25px rgba(0,0,0,0.08);
      padding: 2rem;
      width: 100%;
      max-width: 430px;
      text-align: center;
      animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(15px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* 🐾 Logo & Title */
    .logo {
      width: 90px;
      margin-bottom: 1rem;
      border-radius: 20px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    h2 {
      font-weight: 600;
      color: #3a3a3a;
      margin-bottom: 1.5rem;
    }

    /* ✏️ Input Fields */
    label {
      font-weight: 500;
      color: #444;
    }

    .form-control {
      border-radius: 10px;
      border: 1px solid #ddd;
      background: #fff;
      padding: 0.75rem;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #ff914d;
      box-shadow: 0 0 8px rgba(255,145,77,0.3);
    }

    /* 🧡 Button */
    .btn-primary {
      background: linear-gradient(135deg, #ff914d, #ffb679);
      border: none;
      border-radius: 10px;
      padding: 0.8rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: 0.3s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, #ff7a33, #ffa861);
      box-shadow: 0 4px 12px rgba(255,145,77,0.4);
      transform: translateY(-2px);
    }

    /* 🔗 Login link */
    .login-link {
      margin-top: 1rem;
      color: #555;
      font-size: 0.95rem;
    }

    .login-link a {
      color: #ff7a33;
      text-decoration: none;
      font-weight: 500;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    /* 📱 Responsive */
    @media (max-width: 576px) {
      .signup-card {
        padding: 1.5rem;
      }
      h2 {
        font-size: 1.4rem;
      }
    }
  </style>
</head>
<body>

  <div class="signup-card">
    <img src="../images/logo2.png" alt="PetVilla Logo" class="logo">
    <h2>Admin Sign Up</h2>

    <form action="admin_sign.php" method="post">
      <div class="mb-3 text-start">
        <label for="firstName" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="fname" id="firstName" placeholder="Enter your full name" required>
      </div>

      <div class="mb-3 text-start">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
      </div>

      <div class="mb-3 text-start">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="user" placeholder="Choose a username" required>
      </div>

      <div class="mb-4 text-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="pass" placeholder="Enter password" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Create Account</button>
      </div>
    </form>

    <div class="login-link">
      Already have an account? <a href="admin_log.php">Login here</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
