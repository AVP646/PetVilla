<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include "../partial/_database.php";

  $user = $_POST['user'];
  $pass = $_POST['pass'];

    // $sql = "SELECT * FROM  users WHERE username='$user' AND password='$pass'";
    $sql = "SELECT * FROM users  WHERE username='$user'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num == 1)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        if(password_verify($pass , $row['password']))
        {
         session_start();
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['name'] = $row['fname'];
        $_SESSION['sur'] = $row['lname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['Mno'] = $row['Mno'];



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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Poppins:wght@400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color-scheme: light dark;
            font-family: "Baloo 2", cursive;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            flex-direction: column;

            background-color: #dcd7f8;
        }

        .main-register-container {
            width: 100%;
            max-width: 600px;
            height: auto;
            display: flex;
            justify-content: center;
            background-color: rgba(209, 208, 208, 0.5);
            box-shadow: 2px 2px 3px black;
            border: 1px solid transparent;
            border-radius: 5px;
            flex-direction: column;
            position: relative;
            padding: 20px;
        }

        .min-box {
            width: 200px;
            height: 100px;
            background-color: rgba(209, 208, 208, 0.5);
            position: absolute;
            right: 0;
            top: 0;
            border-bottom-left-radius: 50px;
            border: 1px solid transparent;
            box-shadow: -1px 2px 5px rgba(54, 53, 53, 0.64);
        }

        @media (max-width: 768px) {
            .min-box {
                width: 180px;
                height: 100px;
            }
        }

        @media (max-width: 576px) {
            .min-box {
                width: 110px;
                height: 80px;
            }
        }

        .register-logo {
            font-size: 35px;
            position: relative;
            fill: transparent;
            stroke: black;
            stroke-dashoffset: 50;
            stroke-dasharray: 50;
            animation: scrollGradient 5s linear infinite;
        }

        @keyframes scrollGradient {
            0% {
                fill: black;
            }

            50% {
                stroke-dashoffset: 0;
            }

            100% {
                fill: black;
            }
        }

        label{
            font-size: large;
        }
    </style>
</head>

<body>
    <div class="main-register-container container">
        <div class="min-box"></div>
        <svg viewBox="400">
            <text x="49" y="40" class="register-logo"> Login Form</text>
        </svg>

        <form action="login.php" method="POST" class="w-100">

            <div class="row">
                <div class="col-12 mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="user" class="form-control" placeholder="Enter Username" required>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" required minlength="6" placeholder="Enter password" autocomplete="new-password">
                </div>
            </div>

            <div class="row justify-content-center mb-3">
                <div class="col-auto">
                    <button type="submit" class="btn btn-dark">Login</button>
                </div>
            </div>
        </form>
    </div>
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
  