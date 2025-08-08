<?php include 'admin_session.php' ?>

<?php include "../partial/_database.php";  ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$pet_image = $_FILES['pet_image'];
$pet_name = $_POST['pet_name'];
$breed = $_POST['breed'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$description = $_POST['description'];
$price = $_POST['price'];
$availability = $_POST['availability'];


$target_dir = "../Pets/"; 
$target_file = $target_dir.($pet_image["name"]);
  
if(move_uploaded_file($pet_image['tmp_name'],$target_file)){
   $sql = "INSERT INTO pets (`pet-image`, `pet-name`, `pet-breed`, `pet-age`, `pet-gender`, `pet-category`, `pet-description`, `pet-price`, `pet-availability`) VALUES ('$target_file', '$pet_name', '$breed', '$age', '$gender', '$category', '$description', '$price', '$availability')";
   $result = mysqli_query($conn,$sql);
}
else{
    echo "not uploaded";
}
}

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
        <li class="nav-item"><a href="admin_admins.php" class="nav-link"><i class="fas fa-user-shield"></i> Admins</a>
        </li>
        <li class="nav-item"><a href="admin_Pets.php" class="nav-link"><i class="fas fa-paw"></i> Pets</a></li>
        <li class="nav-item"><a href="admin_Product.php" class="nav-link"><i class="bi bi-box-seam"></i> Products</a>
        </li>
      
      </ul>
    </div>

    <!-- Page Content -->
     <div class="container">
    <form action="admin_pets.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded bg-light shadow">
  <h4 class="mb-3 text-primary">Upload a New Pet</h4>

  <div class="mb-3">
    <label for="petImage" class="form-label">Pet Image</label>
    <input type="file" name="pet_image" class="form-control" id="petImage" accept="image/*" required>
  </div>

  <div class="mb-3">
    <label for="petName" class="form-label">Pet Name</label>
    <input type="text" name="pet_name" class="form-control" id="petName" required>
  </div>

  <div class="mb-3">
    <label for="petBreed" class="form-label">Breed</label>
    <input type="text" name="breed" class="form-control" id="petBreed" required>
  </div>

 
  <div class="mb-3">
    <label for="age" class="form-label">Age (in months/years)</label>
    <input type="text" name="age" class="form-control" id="age" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Gender</label>
    <select name="gender" class="form-select" required>
      <option value="">Select Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select name="category" class="form-select" required>
      <option value="">Select Category</option>
      <option value="Dog">Dog</option>
      <option value="Cat">Cat</option>
      <option value="Fish">Fish</option>
      <option value="Bird">Bird</option>
      <option value="Turtle">Turtle</option>
      <option value="Rabbit">Rabbit</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" rows="3" required></textarea>
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Price (INR)</label>
    <input type="number" name="price" class="form-control" id="price" required>
  </div>

  

  <div class="mb-3">
    <label class="form-label">Availability</label>
    <select name="availability" class="form-select" required>
      <option value="Available">Available</option>
      <option value="Sold">Sold</option>
      <option value="Coming Soon">Coming Soon</option>
    </select>
  </div>

  <button type="submit" class="btn btn-success">Upload Pet</button>
</form>


<div class="table-responsive">
  <h4 class="mb-3 my-5 text-primary">Uploaded Pets</h4>

      <table class="table table-bordered" id="myTable">
        <thead class="thead-light text-center">
          <tr>
            <th>Product</th>
            <th>Name</th>
            <th>Price</th>
            <th>Cancel</th>
          </tr>
        </thead>
        <tbody>
          <!-- Product 1 -->
           <?php 
            $query1 = "SELECT * FROM pets";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) > 0){
             while($row = mysqli_fetch_assoc($result1)){
                    
                       echo "
<tr class='text-center'>
  <td><img src='".$row['pet-image']."' width='100px' alt='Pet Image' class='product-img'></td>
  <td>".$row['pet-name']."</td>
  <td>₹".$row['pet-price']."</td>
  <td>
    <a href='edit_pet.php?id=".$row['pets_id']."' class='btn btn-warning btn-sm me-1'><i class='fa fa-edit'></i></a>
    <a href='delete_pet.php?id=".$row['pets_id']."' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this pet?');\"><i class='fa fa-trash'></i></a>
  </td>
</tr>";
             }

            }

           ?>
         
        </tbody>
      </table>
    </div>

</div>

     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="js/script.js"></script> -->
   <script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
    <script>
      let table = new DataTable('#myTable');
    </script>
</body>
</html>