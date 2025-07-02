 <?php include "../partial/_navbar.php";  ?>

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
<body>
    <!-- this is main container  -->

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
<!-- this is second con  -->
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
</div>

<!-- 
<h5>breed: BullDog</h5> -->
</body>
</html>



<?php  include "../partial/_footer.php";  ?>