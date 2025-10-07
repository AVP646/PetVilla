<?php
session_start();
include "../partial/_database.php";

$alert = '';

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM admins WHERE username='$user'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if($num == 1) {
    $row = mysqli_fetch_assoc($result);
    if(password_verify($pass, $row['password'])) {
      $_SESSION['log'] = true;
      $_SESSION['admin'] = $user;
      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      header("Location: index.php");
      exit;
    } else {
      $alert = "<div class='alert alert-danger alert-dismissible fade show mt-3' role='alert'>
                  <strong>Incorrect Password!</strong> Please try again.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
    }
  } else {
    $alert = "<div class='alert alert-warning alert-dismissible fade show mt-3' role='alert'>
                <strong>No Account Found!</strong> Please sign up first.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Login | PetVilla</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body {
      background: radial-gradient(circle at top left, #ffecd2, #fcb69f);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
      padding: 15px;
      overflow-x: hidden;
    }

    .login-card {
      background: #fff;
      border-radius: 1.2rem;
      box-shadow: 0 6px 30px rgba(0, 0, 0, 0.15);
      padding: 2.5rem 2rem;
      width: 100%;
      max-width: 440px;
      text-align: center;
      transition: all 0.4s ease;
      animation: fadeIn 0.8s ease-in-out;
    }

    .login-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 35px rgba(0, 0, 0, 0.2);
    }

    .logo {
      width: 110px;
      margin-bottom: 1rem;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-15px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      font-weight: 600;
      color: #333;
      margin-bottom: 1rem;
    }

    .form-control {
      border-radius: 12px;
      padding: 0.7rem;
      transition: all 0.3s ease;
      border: 1.5px solid #ddd;
    }

    .form-control:focus {
      border-color: #ff7e5f;
      box-shadow: 0 0 6px rgba(255,126,95,0.4);
      transform: scale(1.02);
    }

    .btn-primary {
      background: linear-gradient(45deg, #ff7e5f, #feb47b);
      border: none;
      border-radius: 12px;
      font-weight: 600;
      transition: all 0.3s ease;
      padding: 0.7rem;
      font-size: 1rem;
      color: #fff;
    }

    .btn-primary:hover {
      background: linear-gradient(45deg, #feb47b, #ff7e5f);
      transform: translateY(-2px);
    }

    .signup-link {
      margin-top: 1.3rem;
      font-size: 0.95rem;
      color: #333;
    }

    .signup-link a {
      text-decoration: none;
      color: #ff7e5f;
      font-weight: 600;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .login-card {
        padding: 2rem 1.4rem;
      }
      h2 {
        font-size: 1.4rem;
      }
    }
  </style>
</head>
<body>
  <div class="login-card">
    <img src="../images/logo2.png" alt="PetVilla Logo" class="logo">
    <h2>Welcome Back Admin</h2>

    <?php if(!empty($alert)) echo $alert; ?>

    <form action="admin_log.php" method="post" class="mt-3">
      <div class="mb-3 text-start">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="user" id="username" placeholder="Enter Username" required>
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="password" placeholder="Enter Password" required>
      </div>
      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>

    <div class="signup-link">
      Don’t have an account? <a href="admin_sign.php">Sign up</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
