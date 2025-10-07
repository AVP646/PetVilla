<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../partial/_database.php";

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE username='$user'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($pass, $row['password'])) {
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['name'] = $row['fname'];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['sur'] = $row['lname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['Mno'] = $row['Mno'];

                header("location:index.php");
                exit;
            } else {
                $error = "invalid_pass";
            }
        }
    } else {
        $error = "user_not_found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - PetVilla</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>

  <style>
    body {
      background: linear-gradient(135deg, #ffe9d6, #ffd6e0);
      color: #333;
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(12px);
      border: 2px solid rgba(255, 182, 193, 0.4);
      border-radius: 25px;
      padding: 40px;
      max-width: 430px;
      width: 100%;
      text-align: center;
      box-shadow: 0 0 25px rgba(255, 192, 203, 0.4);
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-10px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .logo {
      width: 100px;
      margin-bottom: 1rem;
    }

    h2 {
      color: #ff69b4;
      font-weight: 700;
      margin-bottom: 1.5rem;
    }

    .form-control {
      background: rgba(255,255,255,0.8);
      border: 1px solid #ffc0cb;
      border-radius: 10px;
      color: #333;
      padding: 12px;
    }

    .form-control:focus {
      border-color: #ff69b4;
      box-shadow: 0 0 10px rgba(255, 105, 180, 0.4);
    }

    .btn-login {
      background: linear-gradient(135deg, #ffb6c1, #ff69b4);
      border: none;
      border-radius: 12px;
      padding: 12px;
      color: white;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 0 15px rgba(255, 105, 180, 0.5);
    }

    .signup-link {
      margin-top: 1rem;
      font-size: 0.95rem;
    }

    .signup-link a {
      color: #ff69b4;
      text-decoration: none;
      font-weight: 500;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }

    /* === Aesthetic Pet-Themed Alerts === */
    .custom-alert {
      position: fixed;
      top: 30px;
      left: 50%;
      transform: translateX(-50%);
      padding: 16px 25px;
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      min-width: 340px;
      color: #333;
      font-weight: 500;
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(12px);
      border: 2px solid #ffb6c1;
      box-shadow: 0 0 25px rgba(255, 182, 193, 0.5);
      animation: slideDown 0.6s ease forwards;
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

    .custom-alert.warning {
      border-color: #ffa94d;
      box-shadow: 0 0 25px rgba(255, 169, 77, 0.4);
    }

    .alert-icon {
      font-size: 1.4rem;
      margin-right: 10px;
      color: #ff69b4;
    }

    .close-btn {
      background: none;
      border: none;
      color: #555;
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

  <div class="login-card">
    <img src="../images/logo.png" alt="PetVilla Logo" class="logo">
    <h2>Welcome Back to PetVilla 🐾</h2>

    <form action="login.php" method="post">
      <div class="mb-3 text-start">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="user" placeholder="Enter your username" required>
      </div>

      <div class="mb-3 text-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" placeholder="Enter your password" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-login">Login</button>
      </div>
    </form>

    <div class="signup-link">
      Don’t have an account? <a href="register.php">Sign up now</a>
    </div>
  </div>

  <?php if(isset($error) && $error == "user_not_found"): ?>
    <div class="custom-alert warning">
      <span><i class="alert-icon bi bi-exclamation-triangle-fill"></i> Account not found. Please sign up first.</span>
      <button class="close-btn" onclick="this.parentElement.style.display='none'">&times;</button>
    </div>
  <?php elseif(isset($error) && $error == "invalid_pass"): ?>
    <div class="custom-alert error">
      <span><i class="alert-icon bi bi-x-circle-fill"></i> Invalid password. Please try again.</span>
      <button class="close-btn" onclick="this.parentElement.style.display='none'">&times;</button>
    </div>
  <?php endif; ?>

  <script>
    // Optional: auto-hide alerts after 3 seconds
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
