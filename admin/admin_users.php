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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pet Shop Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="css/style.css" />
  <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <style>
     body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f8f9fa;
}

#wrapper {
  min-height: 100vh;
}

#sidebar {
  width: 250px;
}

.card-hover {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-hover:hover {
  transform: scale(1.05);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}
.nav-link{
    /* border:1px solid white; */
    text-align:center;
    margin-top:5px;
    border-radius:15px;
    transition: 0.3s ease-out;
    color:white;
}

.nav-link:hover{
    background:white;
    color:black;
}
.logout{
    background:red;
    text-align:center;
    margin-top:100px;
    border-radius:1px;
    transition: 0.3s ease-out;
    color:white;
    
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
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3  " id="sidebar">
      <h3 class="mb-4 text-center">PetVilla </h3>
      <ul class="nav flex-column"> 
        <li class="nav-item"><a href="index.php" class="nav-link text-">Dashboard</a></li>
        <li class="nav-item"><a href="admin_order.php" class="nav-link text-">Orders</a></li>
        <li class="nav-item"><a href="admin_users.php" class="nav-link text-">Users</a></li>
        <li class="nav-item"><a href="admin_Pets.php" class="nav-link text-">Pets</a></li>
        <li class="nav-item"><a href="admin_Product.php" class="nav-link text-">Products</a></li>
        <li class="nav-item"><a href="admin_logout.php" class="nav-link logout">LOGOUT</a></li>
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
            <td>".$row1['SrNo']."</td>
            <td>".$row1['fname']."</td>
            <td>".$row1['lname']."</td>
            <td>".$row1['email']."</td>
            <td>".$row1['Mno']."</td>
            <td>".$row1['username']."</td>
            <td class='action-btns'>
              <a href='admin_user_remove.php?id=" . $row1['SrNo'] . "'><button class='btn btn-sm btn-danger'>Delete</button></a>
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
