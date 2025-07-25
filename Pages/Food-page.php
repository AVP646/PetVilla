<?php include 'login_session.php'; ?>
<?php include '../partial/_database.php'; ?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PetVilla | Food</title>
  <-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" /> --
  <style>
    body {
      background-color: #fdfdfd;
      font-family: 'Poppins', sans-serif;
    }
    .navbar {
       background: linear-gradient(90deg, #ffd6e8, #ffe4c4); 
    }
    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .card img {
       border-top-left-radius: 1rem;
      border-top-right-radius: 1rem; *
    }
    .filter-box {
      background: #fff;
      border-radius: 1rem;
      padding: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .filter-box h5 {
      margin-bottom: 20px;
    }
    .price-range {
      width: 100%;
    }
  </style>
</head>
<body> -->
    <?php 
    include '../partial/_navbar.php'; ?>
  <!-- Navbar -->
  <!-- <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">🐾 PetVilla</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Pets</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav> -->

  <!-- Content -->
  <!-- <div class="container my-5">
    <div class="row">
      <-- Filters --
      <div class="col-md-3 mb-4">
        <div class="filter-box">
          <h5>Filters</h5>
          <div class="mb-3">
            <label class="form-label">Animal Type</label>
            <select class="form-select">
              <option>All</option>
              <option>Dog</option>
              <option>Cat</option>
              <option>Bird</option>
              <option>Fish</option>
              <option>Rabbit</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Age</label>
            <select class="form-select">
              <option>All</option>
              <option>Puppy/Kitten</option>
              <option>Adult</option>
              <option>Senior</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Price</label>
            <select class="form-select">
              <option>0-1000</option>
              <option>1000-2000</option>
              <option>2000-3000</option>
              <option>above 3000</option>
            </select>
          </div>
          
          <button class="btn btn-primary w-100">Apply Filters</button>
        </div>
      </div>

      <-- Product Cards --
      <div class="col-md-9">
        <div class="row g-4">
          
          <- Card --
           <?php 
            $query1 = "SELECT * FROM food";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) > 0){
             while($row = mysqli_fetch_assoc($result1)){
                    echo "
                        <div class='col-sm-6 col-lg-4'>
            <div class='card'>
        <a href='detail2.php?id=" . $row['SrNo'] . "'><img src='". $row['food-image'] ."' class='card-img-top' alt='Pet Food'></a>
              <div class='card-body text-center'>
                <h6 class='card-title'>". $row['food-name'] ."</h6>
                <p class='card-text text-muted'>". $row['food-description'] ."</p>
                <p class='fw-bold text-success'>". $row['food-price'] ."</p>
                <a href='#' class='btn btn-outline-primary btn-sm'>Add to Cart</a>
              </div>
            </div>
          </div>";
             }
            }
           ?>
          <-- <a href="detail.php?id['']"></a> --
         </div>
      </div>
    </div>
  </div>
  <-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Food 🐾 | PetVilla</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #fdfdfd;
      color: #333;
    }
    .hero {
      background: #ff69b4;
      color: #fff;
      padding: 60px 20px;
      text-align: center;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }
    .filter-buttons {
      text-align: center;
      margin: 30px 0;
    }
    .filter-btn {
      background: #ff69b4;
      color: #fff;
      border: none;
      border-radius: 50px;
      padding: 10px 25px;
      margin: 5px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .filter-btn:hover {
      background: #ff85c1;
    }
    .food-section {
      padding: 20px;
    }
    .food-card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .food-card:hover {
      transform: translateY(-8px);
    }
    .food-card img {
      height: 200px;
      object-fit: cover;
    }
    .food-card .card-body {
      padding: 20px;
    }
    .food-card .price {
      color: #ff69b4;
      font-weight: 700;
      font-size: 1.1rem;
    }
    .btn-buy {
      background: #ff69b4;
      color: #fff;
      border-radius: 50px;
      padding: 8px 20px;
      font-weight: 600;
      transition: all 0.3s ease;
      text-decoration: none;
    }
    .btn-buy:hover {
      background: #ff85c1;
      color: #fff;
    }
  </style>
</head>
<body>

  <!-- Hero Banner -->
  <div class="hero">
    <h1>Pet Food 🦴🐟🐦</h1>
    <p>Healthy & Delicious Food for Every Pet.</p>
  </div>

  <!-- Filter Buttons -->
  <div class="filter-buttons">
    <button class="filter-btn" onclick="filterFood('all')">All</button>
    <button class="filter-btn" onclick="filterFood('Dog')">Dog Food</button>
    <button class="filter-btn" onclick="filterFood('Cat')">Cat Food</button>
    <button class="filter-btn" onclick="filterFood('Fish')">Fish Food</button>
    <button class="filter-btn" onclick="filterFood('Bird')">Bird Food</button>
    <button class="filter-btn" onclick="filterFood('Turtle')">Turtle Food</button>
    <button class="filter-btn" onclick="filterFood('Rabbit')">Rabbit Food</button>
    
  </div>

  <!-- Food Grid Section -->
  <div class="container food-section">
    <div class="row g-4">

      <!-- Food Card 1 -->
        <?php 
            $query1 = "SELECT * FROM food";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) > 0){
             while($row = mysqli_fetch_assoc($result1)){
                    echo "
               <div class='col-md-4 food-item' data-type='". $row['food-category'] ."'>
        <div class='card food-card'>
        <a href='detail2.php?id=" . $row['food_id'] . "'><img src='". $row['food-image'] ."' class='card-img-top'></a>
          <div class='card-body'>
            <h5 class='card-title'>". $row['food-name'] ."</h5>
            <p class='price'>₹". $row['food-price'] ."</p>
            <p class='card-text'>". $row['food-description'] .".</p>
            <form action='addtocart.php' method='POST'>
      <input type='hidden' name='product_id' value='".$row['food_id']."'>
      <input type='hidden' name='product_type' value='food'>
      <input type='number' name='quantity' value='1' min='1'>
      <button type='submit'>Add to Cart</button>
    </form>
          </div>
        </div>
      </div>";
             }
            }
           ?>
    
    </div>
  </div>

  
  <!-- Filter Script -->
  <script>
    function filterFood(type) {
      const foods = document.querySelectorAll('.food-item');
      foods.forEach(food => {
        if (type === 'all' || food.dataset.type === type) {
          food.style.display = 'block';
        } else {
          food.style.display = 'none';
        }
      });
    }
  </script>

</body>
</html>

<?php include "../partial/_footer.php"; ?>