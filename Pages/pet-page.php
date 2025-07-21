<?php include 'login_session.php'; ?>
<?php include '../partial/_database.php'; ?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PetVilla | Food</title>
  <- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" /> --
  <style>
    body {
      background-color: #fdfdfd;
      font-family: 'Poppins', sans-serif;
    }
    .navbar {
      /* background: linear-gradient(90deg, #ffd6e8, #ffe4c4); */
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
      /* border-top-left-radius: 1rem;
      border-top-right-radius: 1rem; */
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
          
          <-- Card --
           <?php 
            $query1 = "SELECT * FROM pets";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) > 0){
             while($row = mysqli_fetch_assoc($result1)){
                    echo "
                        <div class='col-sm-6 col-lg-4'>
            <div class='card'>
        <a href='detail.php?id=" . $row['SrNo'] . "'><img src='". $row['pet-image'] ."' class='card-img-top' alt='Pet Food'></a>
              <div class='card-body text-center'>
                <h6 class='card-title'>". $row['pet-name'] ."</h6>
                <p class='card-text text-muted'>". $row['pet-description'] ."</p>
                <p class='fw-bold text-success'>". $row['pet-price'] ."</p>
                <a href='addtocart.php?id=". $row['SrNo']."' class='btn btn-outline-primary btn-sm'>Add to Cart</a>
              </div>
            </div>
          </div>";
             }
            }
           ?>
         </div>
      </div>
    </div>
  </div> -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Pets 🐾 | PetVilla</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
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
    .pets-section {
      padding: 20px;
    }
    .pet-card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .price {
      color: #ff69b4;
      font-weight: 700;
      font-size: 1.1rem;
    }
    .pet-card:hover {
      transform: translateY(-8px);
    }
    .pet-card img {
      height: 250px;
      object-fit: cover;
    }
    .pet-card .card-body {
      padding: 20px;
    }
    .btn-adopt {
      background: #ff69b4;
      color: #fff;
      border-radius: 50px;
      padding: 8px 20px;
      font-weight: 600;
      transition: all 0.3s ease;
      text-decoration: none;
    }
    .btn-adopt:hover {
      background: #ff85c1;
      color: #fff;
    }
  </style>
</head>
<body>

  <!-- Hero Banner -->
  <div class="hero">
    <h1>Meet Our Lovely Pets 🐶🐱🐰</h1>
    <p>Find your new best friend at PetVilla.</p>
  </div>

  <!-- Filter Buttons -->
  <div class="filter-buttons">
    <button class="filter-btn" onclick="filterPets('all')">All</button>
    <button class="filter-btn" onclick="filterPets('Dog')">Dogs</button>
    <button class="filter-btn" onclick="filterPets('Cat')">Cats</button>
    <button class="filter-btn" onclick="filterPets('Fish')">Fishes</button>
    <button class="filter-btn" onclick="filterPets('Bird')">Birds</button>
    <button class="filter-btn" onclick="filterPets('Turtle')">Turtles</button>
    <button class="filter-btn" onclick="filterPets('Rabbit')">Rabbits</button>
  </div>

  <!-- Pets Grid Section -->
  <div class="container pets-section">
    <div class="row g-4">

      <!-- Pet Card 1 -->
        <?php 
            $query1 = "SELECT * FROM pets";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) > 0){
             while($row = mysqli_fetch_assoc($result1)){
                    echo "
                <div class='col-md-4 pet-item' data-type='". $row['pet-category'] ."'>
        <div class='card pet-card'>
          <a href='detail.php?id=" . $row['SrNo'] . "'><img src='". $row['pet-image'] ."' class='card-img-top'></a>
          <div class='card-body'>
            <h5 class='card-title'>". $row['pet-name'] ."</h5>
            <p class='card-text'>Breed: ". $row['pet-breed'] ."<br>Age: ". $row['pet-age'] ."</p>
            <p class='price'>₹". $row['pet-price'] ."</p>
            <a href='addtocart.php?id=". $row['SrNo']."' class='btn-adopt'>Adopt Me</a>
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
    function filterPets(type) {
      const pets = document.querySelectorAll('.pet-item');
      pets.forEach(pet => {
        if (type === 'all' || pet.dataset.type === type) {
          pet.style.display = 'block';
        } else {
          pet.style.display = 'none';
        }
      });
    }
  </script>

</body>
</html>
<?php include "../partial/_footer.php"; ?>
