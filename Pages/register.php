<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include "../partial/_database.php";
  $fname = $_POST['fname']; 
  $lname = $_POST['lname']; 
  $email = $_POST['email'];
  $user = $_POST['user'];
  $mno = $_POST['mobile'];
  $pass = $_POST['pass'];


  // check the user name exist or not 

  $exsql = "SELECT * FROM users WHERE username='$user'";
  $result2 = mysqli_query($conn,$exsql);
  $num2 = mysqli_num_rows($result2);

  if($num2 > 0)
  {
    alert3();
  }
  else
  {
    $hash = password_hash($pass,PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (`fname`, `lname`, `email`, `Mno`, `password`, `username`) VALUES ('$fname', '$lname', '$email', '$mno', '$hash', '$user')";
    $result = mysqli_query($conn,$sql);
    header ("location:login.php");
  }
  }

?>


 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Shop Register</title>
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
    .signup-card {
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      padding: 2rem;
      width: 100%;
      max-width: 500px; /* wider */
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
    .signup-card h2 {
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
    .login-link {
      margin-top: 1rem;
    }
    .login-link a {
      text-decoration: none;
      color: #6c63ff;
      font-weight: 500;
    }
    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="signup-card">
    <img src="../images/logo2.png" alt="Pet Paw Logo" class="logo">
    <h2>Create Account</h2>
    <form action="register.php" method="post">
      <div class="mb-3 text-start">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" name="fname" id="firstName" placeholder="Enter first name">
      </div>
      <div class="mb-3 text-start">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="lname" id="lastName" placeholder="Enter last name">
      </div>
      <div class="mb-3 text-start">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
      </div>
      <div class="mb-3 text-start">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="user" placeholder="Choose username">
      </div>
      <div class="mb-3 text-start">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="pass" placeholder="Enter password">
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </form>
    <div class="login-link">
      Already have an account? <a href="login.php">Login</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
