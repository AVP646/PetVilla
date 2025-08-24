<?php include 'login_session.php'; ?>
<?php include '../partial/_database.php'; ?>

<?php
// Handle category filter and pagination
$filterCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

$limit = 6;
$offset = ($page - 1) * $limit;

// Normalize category for filtering
$filterCategoryLower = strtolower($filterCategory);

// Prepare query
if ($filterCategory !== 'all') {
    $stmt = $conn->prepare("SELECT * FROM food WHERE LOWER(`food-category`) = ? LIMIT ? OFFSET ?");
    $stmt->bind_param("sii", $filterCategoryLower, $limit, $offset);

    $countStmt = $conn->prepare("SELECT COUNT(*) as total FROM food WHERE LOWER(`food-category`) = ?");
    $countStmt->bind_param("s", $filterCategoryLower);
} else {
    $stmt = $conn->prepare("SELECT * FROM food LIMIT ? OFFSET ?");
    $stmt->bind_param("ii", $limit, $offset);

    $countStmt = $conn->prepare("SELECT COUNT(*) as total FROM food");
}

// Execute both
$stmt->execute();
$result1 = $stmt->get_result();

$countStmt->execute();
$totalItems = $countStmt->get_result()->fetch_assoc()['total'];
$totalPages = ceil($totalItems / $limit);
?>


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
      background: #E5E0D8;
      color: black;
      padding: 60px 20px;
      text-align: center;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }
    /* .filter-buttons {
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
    } */
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
  <?php include "../partial/_navbar.php"; ?>

  <!-- Hero Banner -->
  <div class="hero my-5">
    <h1>Pet Food </h1>
    <p>Healthy & Delicious Food for Every Pet.</p>
  </div>

  <!-- Filter Buttons -->
<div class="filter-buttons container">
  <div class="d-flex flex-wrap justify-content-center gap-2">
    <a href="?category=all" class="filter-btn">All</a>
    <a href="?category=Dog" class="filter-btn">Dog Food</a>
    <a href="?category=Cat" class="filter-btn">Cat Food</a>
    <a href="?category=Fish" class="filter-btn">Fish Food</a>
    <a href="?category=Bird" class="filter-btn">Bird Food</a>
    <a href="?category=Turtle" class="filter-btn">Turtle Food</a>
    <a href="?category=Rabbit" class="filter-btn">Rabbit Food</a>
  </div>
</div>




  <!-- Food Grid Section -->
  <div class="container food-section">
    <div class="row g-4">

      <!-- Food Card 1 -->
           <?php 
if ($result1->num_rows > 0) {
  while ($row = $result1->fetch_assoc()) {

        echo "
               <div class='col-md-4 food-item' data-type='". $row['food-category'] ."'>
        <div class='card food-card'>
        <a href='detail2.php?id=" . $row['food_id'] . "'><img src='". $row['food-image'] ."' class='card-img-top'></a>
          <div class='card-body'>
            <h5 class='card-title'>". $row['food-name'] ."</h5>
            <p class='price'>₹". $row['food-price'] ."</p>
            <p class='card-text'>". $row['food-description'] .".</p>
           <form action='addtocart.php' method='POST' class='mt-3'>
  <input type='hidden' name='product_id' value='". $row['food_id']."'>
  <input type='hidden' name='product_type' value='food'>
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


  <div class="text-center my-4">
  <nav>
    <ul class="pagination justify-content-center">
      <?php
        $baseUrl = "?category=$filterCategory&page=";

        // Previous
        if ($page > 1) {
          echo "<li class='page-item'><a class='page-link' href='". $baseUrl . ($page - 1) ."'>Previous</a></li>";
        }

        // Page numbers
        for ($i = 1; $i <= $totalPages; $i++) {
          $active = ($i == $page) ? "active" : "";
          echo "<li class='page-item $active'><a class='page-link' href='". $baseUrl . $i ."'>$i</a></li>";
        }

        // Next
        if ($page < $totalPages) {
          echo "<li class='page-item'><a class='page-link' href='". $baseUrl . ($page + 1) ."'>Next</a></li>";
        }
      ?>
    </ul>
  </nav>
</div>


  
  <!-- Filter Script -->
  <!-- <script>
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
  </script> -->
<script>
  const currentCategory = "<?php echo $filterCategory; ?>".toLowerCase();
  document.querySelectorAll('.filter-btn').forEach(btn => {
    if (btn.textContent.toLowerCase().includes(currentCategory)) {
      btn.style.background = '#D1A980';
      btn.style.fontWeight = 'bold';
    }
  });
</script>


</body>
</html>

<?php include "../partial/_footer.php"; ?>