<?php include 'login_session.php'; ?>
<?php include '../partial/_database.php'; ?>

<?php
// Get filter and pagination parameters
$filterCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$limit = 6; // Number of pets per page
$offset = ($page - 1) * $limit;

// Build query with optional category filtering
if ($filterCategory !== 'all') {
    $stmt = $conn->prepare("SELECT * FROM pets WHERE `pet-category` = ? LIMIT ? OFFSET ?");
    $stmt->bind_param("sii", $filterCategory, $limit, $offset);

    $countStmt = $conn->prepare("SELECT COUNT(*) AS total FROM pets WHERE `pet-category` = ?");
    $countStmt->bind_param("s", $filterCategory);
} else {
    $stmt = $conn->prepare("SELECT * FROM pets LIMIT ? OFFSET ?");
    $stmt->bind_param("ii", $limit, $offset);

    $countStmt = $conn->prepare("SELECT COUNT(*) AS total FROM pets");
}

// Execute main query
$stmt->execute();
$result = $stmt->get_result();

// Execute count query
$countStmt->execute();
$countResult = $countStmt->get_result();
$totalPets = $countResult->fetch_assoc()['total'];
$totalPages = ceil($totalPets / $limit);
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
  .filter-btn.active {
  background: #D1A980;
  font-weight: 700;
}

.filter-btn {
  display: inline-block;
  background: #E5E0D8;
  color: black;
  border: 1px solid black;
  border-radius: 50px;
  padding: 10px 20px;
  margin: 5px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  text-decoration: none;
  white-space: nowrap;
}

.filter-btn:hover {
  background: #D1A980;
  color: black;
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
  <!-- Pet Filters -->
<div class="filter-buttons container">
  <div class="d-flex flex-wrap justify-content-center gap-2">
    <a href="?category=all" class="filter-btn">All</a>
    <a href="?category=Dog" class="filter-btn">Dog</a>
    <a href="?category=Cat" class="filter-btn">Cat</a>
    <a href="?category=Fish" class="filter-btn">Fish</a>
    <a href="?category=Bird" class="filter-btn">Bird</a>
    <a href="?category=Turtle" class="filter-btn">Turtle</a>
    <a href="?category=Rabbit" class="filter-btn">Rabbit</a>
  </div>
</div>



  <!-- Pets Grid Section -->
  <div class="container pets-section">
    <div class="row g-4">

      <!-- Pet Card 1 -->
        <?php 
            $query1 = "SELECT * FROM pets";
            $result1 = mysqli_query($conn,$query1);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "
      <div class='col-md-4 pet-item'>
        <div class='card pet-card'>
          <a href='detail.php?id=" . $row['pets_id'] . "'>
            <img src='". $row['pet-image'] ."' class='card-img-top'>
          </a>
          <div class='card-body'>
            <h5 class='card-title'>". $row['pet-name'] ."</h5>
            <p class='card-text'>Breed: ". $row['pet-breed'] ."<br>Age: ". $row['pet-age'] ."</p>
            <p class='price'>₹". $row['pet-price'] ."</p>
            <form action='addtocart.php' method='POST' class='mt-3'>
              <input type='hidden' name='product_id' value='". $row['pets_id']."'>
              <input type='hidden' name='product_type' value='pet'>
              <input type='hidden' name='return_url' value='". $_SERVER['REQUEST_URI'] ."'>
              <div class='d-flex align-items-center gap-2'>
                <input type='number' name='quantity' value='1' min='1' class='form-control quantity-input' />
                <button type='submit' class='btn btn-addtocart'>Add to Cart 🛒</button>
              </div>
            </form>
          </div>
        </div>
      </div>";
  }
} else {
  echo "<p class='text-center'>No pets found.</p>";
}

?>  </div>
  </div>



 <div class="text-center my-4">
  <nav>
    <ul class="pagination justify-content-center">
      <?php
        $baseUrl = "?category=$filterCategory&page=";

        // Previous button
        if ($page > 1) {
          echo "<li class='page-item'><a class='page-link' href='". $baseUrl . ($page - 1) ."'>Previous</a></li>";
        }

        // Page numbers
        for ($i = 1; $i <= $totalPages; $i++) {
          $active = ($i == $page) ? "active" : "";
          echo "<li class='page-item $active'><a class='page-link' href='". $baseUrl . $i ."'>$i</a></li>";
        }

        // Next button
        if ($page < $totalPages) {
          echo "<li class='page-item'><a class='page-link' href='". $baseUrl . ($page + 1) ."'>Next</a></li>";
        }
      ?>
    </ul>
  </nav>
</div>




<script>
  const selectedCategory = "<?php echo $filterCategory; ?>";
  document.querySelectorAll('.filter-btn').forEach(btn => {
    if (btn.textContent.toLowerCase().includes(selectedCategory.toLowerCase())) {
      btn.style.background = '#D1A980';
      btn.style.fontWeight = 'bold';
    }
  });
</script>

</body>
</html>
<?php include "../partial/_footer.php"; ?>
