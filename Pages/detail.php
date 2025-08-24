<?php include 'login_session.php' ?>
<?php include "../partial/_navbar.php";  ?>
<?php include "../partial/_database.php"; ?>

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
      <- Pet Image Section --
       <?php
    // $hint = $_GET['id'];

    // $query = "SELECT * FROM pets WHERE SrNo ='".$hint."'";
    // $result= mysqli_query($conn,$query);
    // if(mysqli_num_rows($result) > 0){
    // $row = mysqli_fetch_assoc($result);
    //   echo "
    //       <div class='col-md-5'>
    //     <img src='".$row['pet-image'] ."' alt='Golden Retriever' class='pet-image'/>
    //   </div>

    //   <!-- Pet Details Section -->
    //   <div class='col-md-7'>
    //     <h3>".$row['pet-name'] ."</h3>
    //     <p class='text-muted'>Category: ".$row['pet-category'] ." • Breed: ".$row['pet-breed'] ."</p>
    //     <p class='text-muted'>Age: ".$row['pet-age'] ." • Size: 10kg</p>
    //     <p class='text-muted'>Color: Black • Gender: ".$row['pet-gender'] ."</p>
    //     <p class='text-muted'>Status: ".$row['pet-availability'] ."</p>


    //     <p class='price'>₹".$row['pet-price'] ."</p>

    //     <p>".$row['pet-description'] ."</p>

    // ";
    
  // }
?>
      
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
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Buddy - Pet Details 🐾 | PetVilla</title>
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
    
    .pet-details {
      padding: 40px 20px;
    }
    .pet-info h2 {
      font-weight: 700;
      margin-bottom: 20px;
    }
    .pet-info p {
      line-height: 1.6;
    }
    .pet-facts {
      background: #fff0f5;
      padding: 20px;
      border-radius: 15px;
      margin-top: 30px;
    }
    .pet-facts h5 {
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


  <!-- Pet Details Section -->
   <?php
    $hint = $_GET['id'];

    $query = "SELECT * FROM pets WHERE pets_id ='".$hint."'";
    $result= mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
      echo "
    <div class='container pet-details'>
    <div class='row g-4 align-items-start'>
      <div class='col-md-6'>
        <img src='".$row['pet-image'] ."'  class='img-fluid rounded-4 shadow'>
      </div>
      <div class='col-md-6 pet-info'>
        <h2>".$row['pet-name'] ."</h2>
        <p><strong>Breed:</strong> ".$row['pet-breed'] ."</p>
        <p><strong>Category:</strong> ".$row['pet-category'] ."</p>
        <p><strong>Age:</strong> ".$row['pet-age'] ."</p>
        <p><strong>Gender:</strong> ".$row['pet-gender'] ."</p>
        <p><strong>Health:</strong> Vaccinated, Microchipped, Neutered</p>
        <p><strong>Status:</strong> ".$row['pet-availability'] ."</p>
        <p class='price'>Adoption Fee: ₹".$row['pet-price'] ."</p>
        <div class='pet-facts'>
          <h5>About Buddy</h5>
          <p>".$row['pet-description'] ."</p>
        </div>
        <!-- For Reserved or Adopted, add class: reserved or adopted -->
        <form action='addtocart.php' method='POST' class='mt-3'>
        <input type='hidden' name='product_id' value='".$row['pets_id']."'>
        <input type='hidden' name='product_type' value='pet'>
        
        <div class='mb-3'>
        <label for='quantity' class='form-label'><strong>Quantity:</strong></label>
        <input type='number' id='quantity' name='quantity' value='1' min='1' class='form-control' style='max-width: 100px;' required>
        </div>
        
        <button type='submit' class='btn-adopt'>Add to Cart 🛒</button>
        </form>
        

      </div>
    </div>
  </div>

    ";
    
  }
?>
 

</body>
</html>


<?php
  // include "../partial/_footer.php";  ?>