<?php include "../partial/_database.php"; ?>
<?php
//  include "adminLogin_session.php"; ?>
 <?php

    $user = "SELECT * FROM users";
    $query = mysqli_query($conn,$user);

    $users = mysqli_num_rows($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Shop Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Font Awesome for paw & admin icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
  <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
    }

    #wrapper {
      min-height: 100vh;
      display: flex;
    }

    #sidebar {
      width: 240px;
      background: #222831;
      color: #eeeeee;
      display: flex;
      flex-direction: column;
      padding: 2rem 1rem;
      box-shadow: 2px 0 12px rgba(0, 0, 0, 0.1);
    }

    #sidebar h3 {
      font-weight: 700;
      margin-bottom: 3rem;
      text-align: center;
      font-size: 1.6rem;
      color: #00adb5;
    }

    .nav-link {
      color: #eeeeee;
      padding: 0.75rem 1rem;
      margin: 0.3rem 0;
      border-radius: 0.75rem;
      display: flex;
      align-items: center;
      transition: all 0.3s ease;
    }

    .nav-link i {
      margin-right: 0.75rem;
      font-size: 1.2rem;
    }

    .nav-link:hover {
      background: #00adb5;
      color: #ffffff;
      transform: translateX(5px);
    }

    .logout {
      background: #d00000;
      margin-top: auto;
      text-align: center;
    }

    .logout:hover {
      background: #9b0000;
      transform: translateX(5px);
    }

    a {
      text-decoration: none;
    }

    @media (max-width: 768px) {
      #sidebar {
        width: 100%;
        flex-direction: row;
        overflow-x: auto;
      }

      .nav {
        flex-direction: row;
        flex-wrap: nowrap;
      }

      .nav-link {
        margin: 0 0.5rem;
        white-space: nowrap;
      }

      #sidebar h3 {
        display: none;
      }
    }
 
body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fa;
    }
    .table thead {
      background-color: #343a40;
      color: #fff;
    }
    .table tbody tr:hover {
      background-color: #f1f1f1;
    }
    .btn {
      border-radius: 20px;
    }
    .page-header {
      padding: 2rem 1rem;
      background: #343a40;
      color: #fff;
      border-radius: 0 0 10px 10px;
      text-align: center;
    }
    .action-btns button {
      margin-right: 5px;
    }

  </style>
</head>
<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar">
      <h3>🐾 PetVilla</h3>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="index.php" class="nav-link"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
        <li class="nav-item"><a href="admin_order.php" class="nav-link"><i class="bi bi-bag-check"></i> Orders</a></li>
        <li class="nav-item"><a href="admin_users.php" class="nav-link"><i class="bi bi-people"></i> Users</a></li>
        <li class="nav-item"><a href="admin_admins.php" class="nav-link"><i class="fas fa-user-shield"></i> Admins</a></li>
        <li class="nav-item"><a href="admin_Pets.php" class="nav-link"><i class="fas fa-paw"></i> Pets</a></li>
        <li class="nav-item"><a href="admin_Product.php" class="nav-link"><i class="bi bi-box-seam"></i> Products</a></li>
        <li class="nav-item"><a href="admin_logout.php" class="nav-link logout"><i class="bi bi-box-arrow-right"></i> LOGOUT</a></li>
      </ul>
    </div>
   
  <div class="container my-4">
    <div class="table-responsive shadow p-3 bg-white rounded">
      <table class="table table-striped align-middle" id="myTable">
        <thead>
          <tr>
            <th>#ID</th>
            <th>Fisrst Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Username</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>

          <?php
    if (mysqli_num_rows($query) > 0){


       while ($row1 = mysqli_fetch_assoc($query)){
        echo "
        <tr>
            <td>".$row1['user_id']."</td>
            <td>".$row1['fname']."</td>
            <td>".$row1['lname']."</td>
            <td>".$row1['email']."</td>
            <td>".$row1['Mno']."</td>
            <td>".$row1['username']."</td>
            <td class='action-btns'>
              <a href='admin_user_remove.php?id=" . $row1['user_id'] . "'><button class='btn btn-sm btn-danger'>Delete</button></a>
            </td>
        </tr>";
       }
      }
       
       
    ?>
         
        </tbody>
      </table>
    </div>
  </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
    <script>
      let table = new DataTable('#myTable');
    </script>

</body>
</html>
