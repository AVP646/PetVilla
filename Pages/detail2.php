<?php include 'login_session.php' ?>
<?php include "../partial/_navbar.php";  ?>
<?php include "../partial/_database.php"; ?>
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

<!-- 
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
      <!- Pet Image Section --
            <?php
  //   $hint = $_GET['id'];

  //   $query = "SELECT * FROM food WHERE SrNo ='".$hint."'";
  //   $result= mysqli_query($conn,$query);
  //   if(mysqli_num_rows($result) > 0){
  //   $row = mysqli_fetch_assoc($result);
  //     echo "
  //         <div class='col-md-5'>
  //       <img src='".$row['food-image'] ."' alt='Golden Retriever' class='pet-image'/>
  //     </div>

  //     <!-- Pet Details Section -->
  //     <div class='col-md-7'>
  //       <h3>".$row['food-name'] ."</h3>
  //       <p class='text-muted'>Category: ".$row['food-category'] ." • size: ".$row['food-size'] ."</p>
  //       <p class='text-muted'>mfd: ".$row['food-mfd'] ." • exd:  ".$row['food-exd'] ."</p>
  //       <p class='text-muted'>instruction: ".$row['food-instruction'] ."</p>
  //       <p class='text-muted'>Status: ".$row['food-availability'] ."</p>


  //       <p class='price'>₹".$row['food-price'] ."</p>

  //       <p>".$row['food-description'] ."</p>


  //   ";
    
  // }
?> -->
<!-- 
      <div class="col-md-5">
        <img src="../images/pedigree.webp" alt="Golden Retriever" class="pet-image"/>
      </div>

      <!- Pet Details Section --
      <div class='col-md-7'>
        <h3>Pedigree</h3>
        <p class='text-muted'>Category: Dog • Size: 10kg </p>
        <p class='text-muted'>mfd: 11/2/25 </p>
        <p class='text-muted'>Exd:12/1/27 </p>
        <p class='text-muted'>Instruction: 20gram Per day </p>
        <p class='text-muted'>Status: Available</p>


        <p class='price'>₹3,999</p>

        <p>This playful and affectionate golden retriever puppy is perfect for families. Vaccinated, healthy, and ready to bring joy to your home.</p>
 -->
        <!-- <div class="quantity-selector my-3">
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
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Premium Dog Food - Details 🦴 | PetVilla</title>
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
    
    .food-details {
      padding: 40px 20px;
    }
    .food-info h2 {
      font-weight: 700;
      margin-bottom: 20px;
    }
    .food-info p {
      line-height: 1.6;
    }
    .food-facts {
      background: #fff0f5;
      padding: 20px;
      border-radius: 15px;
      margin-top: 30px;
    }
    .food-facts h5 {
      font-weight: 600;
    }
    .price {
      font-size: 1.3rem;
      color: #ff69b4;
      font-weight: 700;
      margin: 10px 0;
    }
    .status {
      display: inline-block;
      padding: 5px 15px;
      border-radius: 50px;
      background: #28a745; /* Available = green */
      color: #fff;
      font-weight: 600;
      font-size: 0.9rem;
    }
    .status.reserved {
      background: #ffc107; /* Reserved = yellow */
      color: #333;
    }
    .status.adopted {
      background: #dc3545; /* Adopted = red */
    }
    .btn-adopt {
      background: #ff69b4;
      color: #fff;
      border-radius: 50px;
      padding: 12px 30px;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
      margin-top: 20px;
      transition: all 0.3s ease;
    }
    .btn-adopt:hover {
      background: #ff85c1;
      color: #fff;
    }
  </style>
</head>
<body>

  

  <!-- Food Details Section -->


   <?php
    $hint = $_GET['id'];

    $query = "SELECT * FROM food WHERE food_id ='".$hint."'";
    $result= mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
      echo "
        <div class='container food-details'>
    <div class='row g-4 align-items-start'>
      <div class='col-md-6'>
        <img src='".$row['food-image'] ."' class='img-fluid rounded-4 shadow'>
      </div>
      <div class='col-md-6 food-info'>
        <h2>".$row['food-name'] ."</h2>
        <p><strong>Pet Type:</strong> ".$row['food-category'] ."</p>
        <p><strong>MFD:</strong>  ".$row['food-mfd'] ."</p>
        <p><strong>EXD:</strong>  ".$row['food-exd'] ."</p>
        <p><strong>Weight:</strong> ".$row['food-size'] ." Pack</p>
        <p class='price'>Price: ₹".$row['food-price'] ."</p>
        <span class='status'>".$row['food-availability'] ."</span>
        <div class='food-facts'>
          <h5>Product Description</h5>
          <p>".$row['food-description'] ."</p>
        </div>
        <form action='addtocart.php' method='POST' class='mt-3'>
        <input type='hidden' name='product_id' value='".$row['food_id']."'>
        <input type='hidden' name='product_type' value='food'>
        
        <div class='mb-3'>
        <label for='quantity' class='form-label'><strong>Quantity:</strong></label>
        <input type='number' id='quantity' name='quantity' value='1' min='1' class='form-control' style='max-width: 100px;' required>
        </div>
        
        <button type='submit' class='btn-adopt'>Add to Cart 🛒</button>
        </form>
        
        

      </div>
    </div>
  </div>";
    
  }
?> 
  
</body>
</html>


<?php
  // include "../partial/_footer.php";  ?>