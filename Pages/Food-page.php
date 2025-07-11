<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PetVilla | Food</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
      border-top-right-radius: 1rem;
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
<body>
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
  <div class="container my-5">
    <div class="row">
      <!-- Filters -->
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

      <!-- Product Cards -->
      <div class="col-md-9">
        <div class="row g-4">
          <!-- Card -->
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="../images/dog.jpg" class="card-img-top" alt="Pet Food">
              <div class="card-body text-center">
                <h6 class="card-title">Premium Dog Food</h6>
                <p class="card-text text-muted">High quality food for all breeds.</p>
                <p class="fw-bold text-success">₹499</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
              </div>
            </div>
          </div>

          <!-- Repeat cards as needed -->
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="../images/dog.jpg" class="card-img-top" alt="Pet Food">
              <div class="card-body text-center">
                <h6 class="card-title">Kitten Starter Pack</h6>
                <p class="card-text text-muted">Nutritious & delicious.</p>
                <p class="fw-bold text-success">₹299</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
              </div>
            </div>
          </div>

          <!-- Add more cards here -->
           <!-- Repeat cards as needed -->
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="../images/dog.jpg" class="card-img-top" alt="Pet Food">
              <div class="card-body text-center">
                <h6 class="card-title">Kitten Starter Pack</h6>
                <p class="card-text text-muted">Nutritious & delicious.</p>
                <p class="fw-bold text-success">₹299</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- Repeat cards as needed -->
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="../images/dog.jpg" class="card-img-top" alt="Pet Food">
              <div class="card-body text-center">
                <h6 class="card-title">Kitten Starter Pack</h6>
                <p class="card-text text-muted">Nutritious & delicious.</p>
                <p class="fw-bold text-success">₹299</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- Repeat cards as needed -->
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="../images/dog.jpg" class="card-img-top" alt="Pet Food">
              <div class="card-body text-center">
                <h6 class="card-title">Kitten Starter Pack</h6>
                <p class="card-text text-muted">Nutritious & delicious.</p>
                <p class="fw-bold text-success">₹299</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- Repeat cards as needed -->
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="../images/dog.jpg" class="card-img-top" alt="Pet Food">
              <div class="card-body text-center">
                <h6 class="card-title">Kitten Starter Pack</h6>
                <p class="card-text text-muted">Nutritious & delicious.</p>
                <p class="fw-bold text-success">₹299</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- Repeat cards as needed -->
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <img src="../images/dog.jpg" class="card-img-top" alt="Pet Food">
              <div class="card-body text-center">
                <h6 class="card-title">Kitten Starter Pack</h6>
                <p class="card-text text-muted">Nutritious & delicious.</p>
                <p class="fw-bold text-success">₹299</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>