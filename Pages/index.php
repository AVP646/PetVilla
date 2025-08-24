<?php include 'login_session.php' ?>
<?php include '../partial/_navbar.php' ?> <!-- Navbar -->
<?php include '../partial/_database.php' ?> <!-- Database connection -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PetVilla</title>
    <link rel="stylesheet" href="inde.css">
</head>
<body>

    <section class="bg-main bg-color">
        <div class="slider-container">
            <div id="sliderTrack">
                <!-- Slide 1 -->
                <div class="slide-block">
    <div class="slide-text">
        <h2 class="stroke-heading">Tasty Food</h2>
        <svg viewBox="0 0 500 150">
            <text x="0" y="70" class="animated-text2">Fresh Flavoured</text>
            <text x="0" y="130" class="animated-text2">Dog Food</text>
        </svg>
        <p>
            <a href="food-page.php" class="magic-btn">Explore Products</a>
        </p>
    </div>
    <div class="slide">
        <img src="../images/pet1.png" alt="Pet 1" />
    </div>
</div>


                <!-- Slide 2 -->

                <div class="slide-block">
    <div class="slide-text">
        <h2 class="stroke-heading">Tasty Food</h2>
        <svg viewBox="0 0 500 150">
            <text x="0" y="70" class="animated-text2">Yummy & Tasty</text>
            <text x="0" y="130" class="animated-text2">The Best Food</text>
        </svg>
        <p>
            <a href="food-page.php" class="magic-btn">Explore Products</a>
        </p>
    </div>
    <div class="slide">
        <img src="../images/pet2.png" alt="Pet 2" />
    </div>
</div>

                
                <!-- Slide 3 -->
                 <div class="slide-block">
    <div class="slide-text">
        <h2 class="stroke-heading">Tasty Food</h2>
        <svg viewBox="0 0 500 150">
            <text x="0" y="70" class="animated-text2">Organic Food &</text>
            <text x="0" y="130" class="animated-text2">Tasty</text>
        </svg>
        <p>
            <a href="Food-page.php" class="magic-btn">Explore Products</a>
        </p>
    </div>
    <div class="slide">
        <img src="../images/pet3.png" alt="Pet 3" />
    </div>
</div>

            </div>

            <!-- Next Button -->
            <button class="next-btn" onclick="goNext()">Next <img src="../images/arrow.png" alt="arrow" class="arrow"></button>
        </div>
        <div class="custom-shape-divider-bottom-1750488578">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <!-- this categories container  -->
      
<div class="container-fluid main-categori row g-4">
  <h2 id="main-cate-title">Shop By Pet<i class="fa-solid fa-paw" style="color: #ffac38;"></i><i class="fa-solid fa-paw" style="color: #ffac38;"></i></h2>

    <a href="pet-page.php?category=Dog" class="col-md-4 col-12 container-catgari2 text-decoration-none">
  <img src="../images/dog-cate.jpg" class="cate-imges" alt="Dog">
  <div class="cate-name">
    <h5>Dogs</h5>
    <h6>6 types</h6>
    <i class="fa-solid fa-arrow-right cate-arrow"></i>
  </div>
</a>

    
        <a href="pet-page.php?category=Cat" class="col-md-4 col-12 container-catgari2 text-decoration-none">
  <img src="../images/cate-cate.jpg" class="cate-imges" alt="Dog">
  <div class="cate-name">
    <h5>Cats</h5>
    <h6>6 types</h6>
    <i class="fa-solid fa-arrow-right cate-arrow"></i>
  </div>
</a>

    
        <a href="pet-page.php?category=Fish" class="col-md-4 col-12 container-catgari2 text-decoration-none">
  <img src="../images/fish-cate.jpg" class="cate-imges" alt="Dog">
  <div class="cate-name">
    <h5>Fishes</h5>
    <h6>6 types</h6>
    <i class="fa-solid fa-arrow-right cate-arrow"></i>
  </div>
</a>

        <a href="pet-page.php?category=Bird" class="col-md-4 col-12 container-catgari2 text-decoration-none">
  <img src="../images/bird-cate.jpg" class="cate-imges" alt="Dog">
  <div class="cate-name">
    <h5>Birds</h5>
    <h6>6 types</h6>
    <i class="fa-solid fa-arrow-right cate-arrow"></i>
  </div>
</a>

        <a href="pet-page.php?category=Turtles" class="col-md-4 col-12 container-catgari2 text-decoration-none">
  <img src="../images/turtle-cat.jpg" class="cate-imges" alt="Dog">
  <div class="cate-name">
    <h5>Turtles</h5>
    <h6>6 types</h6>
    <i class="fa-solid fa-arrow-right cate-arrow"></i>
  </div>
</a>

        <a href="pet-page.php?category=Rabbit" class="col-md-4 col-12 container-catgari2 text-decoration-none">
  <img src="../images/rabit-cat.jpg" class="cate-imges" alt="Dog">
  <div class="cate-name">
    <h5>Rabbits</h5>
    <h6>6 types</h6>
    <i class="fa-solid fa-arrow-right cate-arrow"></i>
  </div>
</a>

    </div>
    <!-- this ends here  -->

    <!-- this is catogires for ffood  -->

     <section class="py-5 my-5 food-catt">
    <div class="container">
      <h2 class="text-center mb-4 fw-bold">Looking For Pets Food !</h2>
      <p class="text-center mb-5 text-muted">Explore our wide range of pets food categories and find the best food for your beloved animals.</p>
      <div class="row g-4">
        <!-- Card 1 -->
<div class="col-12 col-sm-6 col-md-4">
  <a href="food-page.php?category=Dog" class="text-decoration-none text-dark">
    <div class="category-card">
      <div class="category-icon">🐶</div>
      <h5>Dog Food</h5>
      <p>Nutritious and delicious meals for dogs.</p>
    </div>
  </a>
</div>

<!-- Card 2 -->
<div class="col-12 col-sm-6 col-md-4">
  <a href="food-page.php?category=Cat" class="text-decoration-none text-dark">
    <div class="category-card">
      <div class="category-icon">🐱</div>
      <h5>Cat Food</h5>
      <p>Healthy and tasty food for cats.</p>
    </div>
  </a>
</div>

        <!-- Card 3 -->
        <div class="col-12 col-sm-6 col-md-4">
  <a href="food-page.php?category=Rabbit" class="text-decoration-none text-dark">

          <div class="category-card">
            <div class="category-icon">🐰</div>
            <h5>Rabbit Food</h5>
            <p>Fresh and nutritious food for rabbits.</p>
          </div>
</a>
        </div>
        <!-- Card 4 -->
        <div class="col-12 col-sm-6 col-md-4">
  <a href="food-page.php?category=Bird" class="text-decoration-none text-dark">

          <div class="category-card">
            <div class="category-icon">🐦</div>
            <h5>Birds Food</h5>
            <p>High-quality seeds and feed for birds.</p>
          </div>
</a>
        </div>
        <!-- Card 5 -->
        <div class="col-12 col-sm-6 col-md-4">
  <a href="food-page.php?category=Turtle" class="text-decoration-none text-dark">

          <div class="category-card">
            <div class="category-icon">🐢</div>
            <h5>Reptile Food</h5>
            <p>Special feed for turtles and reptiles.</p>
          </div>
</a>
        </div>
        <!-- Card 6 -->
        <div class="col-12 col-sm-6 col-md-4">
  <a href="food-page.php?category=Fish" class="text-decoration-none text-dark">

          <div class="category-card">
            <div class="category-icon">🐟</div>
            <h5>Fish Food</h5>
            <p>Premium quality food for aquarium fish.</p>
          </div>
</a>
        </div>
      </div>
    </div>
  </section>
<!-- ends here  -->

<!-- this is why we need pets container  -->
        <section class="container my-5" id="reviews">
        <h2 class="text-center display-5 fw-bold mb-4">Why Wee Need Pets ??</h2>
        <p class="text-center lead text-muted mb-5">Hear inspiring stories & Reviews from pet owners around the world.</p>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
$result = $conn->query("SELECT * FROM reviews ORDER BY created_at DESC");

while ($row = $result->fetch_assoc()):
  $rating = intval($row['rating']);
  $user = htmlspecialchars($row['user_name']);
  $message = htmlspecialchars($row['message']);
?>
<div class="col">
  <div class="p-4 review-card">
    <div class="d-flex align-items-center mb-3">
      <img src="../images/review-user.jpg" class="rounded-circle me-3" alt="<?= $user ?>" width="60" height="60">
      <div>
        <h5 class="mb-0"><?= $user ?></h5>
        <div class="review-rating">
          <?php
          // Show full stars
          for ($i = 1; $i <= $rating; $i++) {
              echo '<i class="bi bi-star-fill"></i>';
          }
          // Show empty stars (if any)
          for ($i = $rating + 1; $i <= 5; $i++) {
              echo '<i class="bi bi-star"></i>';
          }
          ?>
          (<?= $rating ?>/5)
        </div>
      </div>
    </div>
    <p class="text-muted">"<?= $message ?>"</p>
  </div>
</div>
<?php endwhile; ?>

             
        </div>
    </section>

 <!-- this ends here  -->

    <script>
        const sliderTrack = document.getElementById('sliderTrack');
        const totalSlides = sliderTrack.children.length;
        let counter = 0;

        function goNext() {
            counter = (counter + 1) % totalSlides;
            sliderTrack.style.transform = `translateX(-${counter * 100}vw)`;
        }

        setInterval(goNext, 10000);
    </script>
    <script>
  // Check URL for ?order=success
  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.get('order') === 'success') {
    alert('✅ Your order has been placed successfully!');
    // Or use a nicer toast if you have a library like SweetAlert2
    // Swal.fire('Success!', 'Your order has been placed.', 'success');
  }
</script>


</body>

</html>

<?php 
include "../partial/_footer.php"; ?>