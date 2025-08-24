<?php include 'admin_session.php' ?>

<?php include "../partial/_database.php"; ?>
<?php
//  include "adminLogin_session.php"; ?>
 <?php

    $user = "SELECT * FROM admins";
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
 body {
      font-family: 'Quicksand', sans-serif;
      background: #f4f6f8;
    }

    #wrapper {
      display: flex;
      min-height: 100vh;
    }

    #sidebar {
      width: 240px;
      background: linear-gradient(160deg, #1b1b2f, #0f3460);
      color: #eee;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem 1rem;
    }

    #sidebar h3 {
      font-size: 1.8rem;
      margin-bottom: 3rem;
      color: #f8b400;
    }

    .nav-link {
      color: #eee;
      padding: 0.75rem 1rem;
      border-radius: 50px;
      display: flex;
      align-items: center;
      width: 100%;
      transition: all 0.3s ease;
    }

    .nav-link i {
      margin-right: 1rem;
    }

    .nav-link:hover {
      background: #00adb5;
      transform: translateX(8px);
    }

    .logout {
      margin-top: auto;
      background: #e94560;
    }

    .logout:hover {
      background: #d63447;
    }

    .container-fluid {
      flex: 1;
      padding: 4rem;
    }

    .card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
    }

    @media (max-width: 768px) {
      #wrapper {
        flex-direction: column;
      }

      #sidebar {
        flex-direction: row;
        width: 100%;
        justify-content: space-around;
      }

      #sidebar h3 {
        display: none;
      }
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
        <li class="nav-item"><a href="admin_admins.php" class="nav-link"><i class="bi bi-person-circle"></i> Admin</a>
        </li>
        <li class="nav-item"><a href="admin.php" class="nav-link"><i class="fas fa-user-shield"></i> Admins</a></li>

        <li class="nav-item"><a href="admin_Pets.php" class="nav-link"><i class="fas fa-paw"></i> Pets</a></li>
        <li class="nav-item"><a href="admin_Product.php" class="nav-link"><i class="bi bi-box-seam"></i> Products</a>
        </li>
      </ul>
    </div>
   
  <div class="container my-4">
    <div class="table-responsive shadow p-3 bg-white rounded">
      <table class="table table-striped align-middle" id="myTable">
        <thead>
          <tr>
            <th>#ID</th>
            <th> Name</th>
            <th>Email</th>
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
            <td>".$row1['id']."</td>
            <td>".$row1['name']."</td>
            <td>".$row1['email']."</td>
            <td>".$row1['username']."</td>
            <td class='action-btns'>
              <a href='admin_remove.php?id=" . $row1['id'] . "'><button class='btn btn-sm btn-danger'>Delete</button></a>
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
