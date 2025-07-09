 <?php include "../partial/_navbar.php";  ?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        .img-detail img{
            height:400px;
            width:600px;

        }
        .detail{
            border:1px solid black;
        }
        .detail h5,h6,h3{
      font-family: "Poppins", sans-serif;
      font-style: normal;
      font-weight: 500;
      text-transform:capitalize;
      text-align:left;
        }
    </style>
</head>
<body> -->
    <!-- this is main container  -->
<!-- 
    <div class="container text-center">
  <div class="row">
    <div class="col">
      <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner img-detail">
    <div class="carousel-item active">
      <img src="../images/dog.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/cat1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/turtles1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
    <div class="col detail">
      <h3>my name is  Leberar Dog veriety</h3>         
      <h5>Description:</h5>
      <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.  cum ipsam.
      <h5>adoption fee  200$</h5>
      <h6>Available for Adoption</h6>

        <br>
     <button class="btn btn-danger">Adopt Me</button>
     
     </div>
  </div>
</div>
< this is second con  --
<div class="container text-center">
  <div class="row align-items-start">
    <h1>Fact about Me</h1>
    <div class="col">
      <h5>Breed: BullDog</h5>
      <h5>Age: 2 years</h5>
      <h5>size: 25kg</h5>

      
    </div>
    <div class="col">
      <h5>color: white</h5>
      <h5>gender: Male</h5>
      
    </div>
  </div>
</div> -->

<!-- 
<h5>breed: BullDog</h5> -->
<!-- </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Detail</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
  <style>
    body {
      background-color: #fefefe;
    }

    .pet-container {
      background: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      margin-top: 30px;
    }

    .pet-image {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .price {
      font-size: 1.5rem;
      color: #28a745;
      font-weight: bold;
    }

    .rating {
      color: #ffc107;
      font-size: 1.2rem;
    }

    .quantity-selector {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .quantity-selector input {
      width: 60px;
      text-align: center;
    }

    .btn-add {
      background-color: #007bff;
      color: white;
    }

    .btn-add:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container pet-container">
    <div class="row">
      <!-- Pet Image Section -->
      <div class="col-md-5">
        <img src="../images/dog.jpg" alt="Golden Retriever" class="pet-image"/>
      </div>

      <!-- Pet Details Section -->
      <div class="col-md-7">
        <h3>Golden Retriever Puppy</h3>
        <p class="text-muted">Category: Dog • Breed: Golden Retriever</p>
        <div class="rating mb-2">★ ★ ★ ★ ☆ (52 reviews)</div>
        <p class="price">₹3,999</p>

        <p>This playful and affectionate golden retriever puppy is perfect for families. Vaccinated, healthy, and ready to bring joy to your home.</p>

        <div class="quantity-selector my-3">
          <label for="qty">Qty:</label>
          <input type="number" id="qty" class="form-control" value="1" min="1" />
        </div>

        <button class="btn btn-add btn-lg">Add to Cart</button>
        <button class="btn btn-add btn-lg">checkout </button>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
  // include "../partial/_footer.php";  ?>