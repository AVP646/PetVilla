<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include "../partial/_database.php";

  $user = $_POST['user'];
  $pass = $_POST['pass'];

    // $sql = "SELECT * FROM  users WHERE username='$user' AND password='$pass'";
    $sql = "SELECT * FROM admins  WHERE username='$user'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num == 1)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        if(password_verify($pass , $row['password']))
        {
         session_start();
        $_SESSION['log'] = true;
        $_SESSION['admin'] = $user;
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];

        header("location:index.php");
        }
         else
         {
             alert2();
         }
      }
    }
    else{
        alert();
    }
    
}

?>


  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background: linear-gradient(135deg, #f8f9fa, #e3f2fd);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', sans-serif;
    }
    .login-card {
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.5);
      padding: 2rem;
      width: 100%;
      max-width: 500px; /* wider for better look */
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }
    .logo {
      width: 150px;
      margin-bottom: 1rem;
      border-radius:30px;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .login-card h2 {
      margin-bottom: 1.5rem;
      font-weight: 600;
      color: #333;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #6c63ff;
    }
    .btn-primary {
      background: #6c63ff;
      border: none;
    }
    .btn-primary:hover {
      background: #574fd6;
    }
    .signup-link {
      margin-top: 1rem;
    }
    .signup-link a {
      text-decoration: none;
      color: #6c63ff;
      font-weight: 500;
    }
    .signup-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <img src="../images/logo2.png" alt="Pet Paw Logo" class="logo">
    <h2>Welcome Back Sir</h2>
    <form action="admin_log.php" method="post">
      <div class="mb-3 text-start">
        <label for="username" class="form-label">Username </label>
        <input type="text" class="form-control" name="user" id="email" placeholder="Enter Username">
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="password" placeholder="Enter password">
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
    <div class="signup-link">
      Don't have an account? <a href="admin_sign.php">Sign up</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




<?php

  function alert()
  {
      
  echo 
      "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>Failed</strong> You dont have an account please sign up first
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
  }

  function alert2()
  {
      
  echo 
      "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>Failed</strong> invalid password try again
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
  }
?>