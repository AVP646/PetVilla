 <?php  include "../partial/_database.php";  ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$product_image = $_FILES['product-image'];
$product_name = $_POST['product-name'];
$product_category = $_POST['product-category'];
$product_size = $_POST['product-size'];
$mfd = $_POST['mfd'];
$exd = $_POST['exd'];
$product_instruction = $_POST['product-instruction'];
$product_availability = $_POST['product-availability'];
$product_price = $_POST['product-price'];
$product_description = $_POST['product-description'];



$target_dir = "../Products/"; 
$target_file = $target_dir.($product_image["name"]);
  
if(move_uploaded_file($product_image['tmp_name'],$target_file)){
   $sql = "INSERT INTO food (`food-image`, `food-name`, `food-category`, `food-size`, `food-mfd`, `food-exd`, `food-instruction`, `food-availability`, `food-price`, `food-description`) VALUES ('$target_file', '$product_name', '$product_category', '$product_size', '$mfd', '$exd', '$product_instruction', '$product_availability', '$product_price', '$product_description')";
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pet Shop Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">

  <link rel="stylesheet" href="css/style.css" />
  <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <style>
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

    <!-- Page Content -->
     <div class="container">
    <form action="admin_Product.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded bg-light shadow">
  <h4 class="mb-3 text-primary">Upload a New Products</h4>

  <div class="mb-3">
    <label for="petImage" class="form-label">Product Image</label>
    <input type="file" name="product-image" class="form-control" id="petImage" accept="image/*" required>
  </div>

  <div class="mb-3">
    <label for="petName" class="form-label">Product Name</label>
    <input type="text" name="product-name" class="form-control" id="petName" required>
  </div>

  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select name="product-category" class="form-select" required>
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
    <label for="petBreed" class="form-label">Product Size</label>
    <input type="text" name="product-size" class="form-control" id="petBreed" required>
  </div>

 
  <div class="mb-3">
    <label for="age" class="form-label">Product Manu-fact-date</label>
    <input type="text" name="mfd" class="form-control" id="age" required>
  </div>

  <div class="mb-3">
    <label for="age" class="form-label">Product Ex-piry-date</label>
    <input type="text" name="exd" class="form-control" id="age" required>
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Product Instruction</label>
    <textarea name="product-instruction" class="form-control" rows="3" required></textarea>
  </div>

  
  <div class="mb-3">
    <label class="form-label">Availability</label>
    <select name="product-availability" class="form-select" required>
      <option value="Available">Available</option>
      <option value="Sold">Sold</option>
      <option value="Coming Soon">Coming Soon</option>
    </select>
  </div>
  

  
  <div class="mb-3">
      <label for="price" class="form-label">Price (INR)</label>
      <input type="number" name="product-price" class="form-control" id="price" required>
    </div>
    
    
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea name="product-description" class="form-control" rows="3" required></textarea>
    </div>


  <button type="submit" class="btn btn-success">Upload Product</button>
</form>


<div class="table-responsive">
  <h4 class="mb-3 my-5 text-primary">Uploaded Products</h4>

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
            $query1 = "SELECT * FROM food";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) > 0){
             while($row = mysqli_fetch_assoc($result1)){
                    echo "
                       <tr class='text-center'>
            <td><img src='".$row['food-image'] ."' width='100px' alt='Dog Food' class='product-img'></td>
            <td>". $row['food-name'] ."</td>
            <td>". $row['food-price']."</td>
            <td class='subtotal'><i class='fa-solid fa-xmark'></i></td>
          </tr>

                    ";
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
