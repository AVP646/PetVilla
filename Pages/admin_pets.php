<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pet Shop Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
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
        <li class="nav-item"><a href="admin_das.php" class="nav-link text-">Dashboard</a></li>
        <li class="nav-item"><a href="admin_order.php" class="nav-link text-">Orders</a></li>
        <li class="nav-item"><a href="admin_users.php" class="nav-link text-">Users</a></li>
        <li class="nav-item"><a href="admin_Pets.php" class="nav-link text-">Pets</a></li>
        <li class="nav-item"><a href="admin_Product.php" class="nav-link text-">Products</a></li>
        <li class="nav-item"><a href="admin_logout.php" class="nav-link logout">LOGOUT</a></li>
      </ul>
    </div>

    <!-- Page Content -->
     <div class="container">
    <form action="upload_pet.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded bg-light shadow">
  <h4 class="mb-3 text-primary">Upload a New Pet</h4>

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
      <option value="Bird">Bird</option>
      <option value="Other">Other</option>
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
    <label for="petImage" class="form-label">Pet Image</label>
    <input type="file" name="pet_image" class="form-control" id="petImage" accept="image/*" required>
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

      <table class="table table-bordered">
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
          <tr class="text-center">
            <td><img src="../images/dog.jpg" width="100px" alt="Dog Food" class="product-img"></td>
            <td>NutriBite Dog Food</td>
            <td>₹799</td>
            <td class="subtotal"><i class="fa-solid fa-xmark"></i></td>
          </tr>

          <!-- Product 2 -->
          <tr class="text-center">
            <td><img src="../images/dog.jpg" width="100px" alt="Cat Toy" class="product-img"></td>
            <td>Cat Toy Ball Set</td>
            <td>₹199</td>
            <!-- <td><input type="number" class="form-control qty" value="2" min="1"/></td> -->
            <td class="subtotal"><i class="fa-solid fa-xmark"></i></td>
          </tr>
        </tbody>
      </table>
    </div>

</div>

     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
