<?php include 'login_session.php'; ?>
<?php include '../partial/_database.php'; ?>
<?php
$filterCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
?>

          
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
      color: #333;
    }
    .hero {
      background: #E5E0D8;
      color: black;
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
      background: #E5E0D8;
      color: black;
      border: 1px solid black;
      border-radius: 50px;
      padding: 10px 25px;
      margin: 5px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .filter-btn:hover {
      background: #D1A980;
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
    
  .quantity-input {
    max-width: 60px;
    border-radius: 30px;
    border: 1px solid #ccc;
    text-align: center;
    padding: 6px 10px;
    transition: all 0.3s ease;
  }

  .quantity-input:focus {
    border-color: #ff69b4;
    box-shadow: 0 0 0 2px rgba(255,105,180,0.2);
    outline: none;
  }

  .btn-addtocart {
    background: linear-gradient(135deg, #ff69b4, #ff85c1) !important;
    color: #fff !important;
    border: none;
    border-radius: 30px;
    padding: 8px 20px;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn-addtocart:hover {
    background: linear-gradient(135deg, #ff85c1, #ff69b4) !important;
    transform: translateY(-2px);
  }

  .input-group {
    display: flex;
    align-items: center;
    gap: 10px;
  }
</style>
</head>
<body>

<!-- navbar  -->
    <?php  include '../partial/_navbar.php'; ?>


  <!-- Hero Banner -->
  <div class="hero my-5">
    <h1>Meet Our Lovely Pets</h1>
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
          <a href='detail.php?id=" . $row['pets_id'] . "'><img src='". $row['pet-image'] ."' class='card-img-top'></a>
          <div class='card-body'>
            <h5 class='card-title'>". $row['pet-name'] ."</h5>
            <p class='card-text'>Breed: ". $row['pet-breed'] ."<br>Age: ". $row['pet-age'] ."</p>
            <p class='price'>₹". $row['pet-price'] ."</p>
       <form action='addtocart.php' method='POST' class='mt-3'>
  <input type='hidden' name='product_id' value='". $row['pets_id']."'>
  <input type='hidden' name='product_type' value='pet'>
              
  <input type='hidden' name='return_url' value=". $_SERVER['REQUEST_URI']." >


  <div class='d-flex align-items-center gap-2'>
    <input type='number' name='quantity' value='1' min='1' 
      class='form-control quantity-input' />

    <button type='submit' class='btn btn-addtocart'>Add to Cart 🛒</button>
  </div>
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

  // 👇 Auto run filter when page loads
  const defaultCategory = "<?php echo $filterCategory; ?>";
  filterPets(defaultCategory);
</script>

</body>
</html>
<?php include "../partial/_footer.php"; ?>
