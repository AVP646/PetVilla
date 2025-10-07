<?php include 'admin_session.php'; ?>
<?php include "../partial/_database.php"; ?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $product_image = $_FILES['product-image'];
    $product_name = $_POST['product-name'];
    $product_category = $_POST['product-category'];
    $product_size = $_POST['product-size'];
    $mfd = $_POST['mfd'];
    $exd = $_POST['exd'];
    $product_instruction = $_POST['product-instruction'];
    $product_availability = $_POST['product-availability'];
    $product_price = $_POST['product-price'];
    $product_description = $_POST['product-description'];

    $target_dir = "../Products/"; 
    $target_file = $target_dir . ($product_image["name"]);
      
    if(move_uploaded_file($product_image['tmp_name'],$target_file)){
       $sql = "INSERT INTO food (`food-image`, `food-name`, `food-category`, `food-size`, `food-mfd`, `food-exd`, `food-instruction`, `food-availability`, `food-price`, `food-description`) 
               VALUES ('$target_file', '$product_name', '$product_category', '$product_size', '$mfd', '$exd', '$product_instruction', '$product_availability', '$product_price', '$product_description')";
       mysqli_query($conn,$sql);
    } else {
        echo "Upload failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pet Shop Admin - Products</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>

<style>
body { font-family: 'Quicksand', sans-serif; background: #f4f6f8; }
#wrapper { display: flex; min-height: 100vh; }

/* Sidebar */
#sidebar {
  width: 240px;
  background: linear-gradient(160deg, #1b1b2f, #0f3460);
  color: #eee;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 2rem 1rem;
  transition: transform 0.3s ease;
  z-index: 1050;
}
#sidebar h3 { font-size: 1.8rem; margin-bottom: 3rem; color: #f8b400; }
.nav-link { color: #eee; padding: 0.75rem 1rem; border-radius: 50px; display: flex; align-items: center; width: 100%; transition: all 0.3s ease; }
.nav-link i { margin-right: 1rem; }
.nav-link:hover { background: #00adb5; transform: translateX(8px); }
.logout { margin-top: auto; background: #e94560; color: #fff; text-align: center; width: 100%; padding: 10px; border-radius: 50px; }
.logout:hover { background: #d63447; }

/* Sidebar Toggle Button */
.sidebar-toggle {
  display: none;
  position: fixed;
  top: 15px;
  left: 15px;
  z-index: 1100;
  width: 35px;
  height: 28px;
  background: transparent;
  border: none;
  flex-direction: column;
  justify-content: space-between;
  cursor: pointer;
}
.sidebar-toggle span {
  display: block;
  height: 4px;
  width: 100%;
  background: #333;
  border-radius: 4px;
  transition: all 0.3s ease;
}
.sidebar-toggle.active span:nth-child(1) { transform: rotate(45deg) translate(6px, 6px); }
.sidebar-toggle.active span:nth-child(2) { opacity: 0; }
.sidebar-toggle.active span:nth-child(3) { transform: rotate(-45deg) translate(6px, -6px); }

/* Overlay */
#overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.45); opacity: 0; visibility: hidden; transition: opacity 0.25s ease, visibility 0.25s ease; z-index: 1040; }

/* Mobile */
@media (max-width: 768px) {
  #sidebar { position: fixed; top: 0; left: 0; transform: translateX(-100%); height: 100vh; }
  #sidebar.open { transform: translateX(0); }
  #overlay.active { opacity: 1; visibility: visible; }
  .sidebar-toggle { display: flex; flex-direction: column; justify-content: space-between; }
  body.no-scroll { overflow: hidden; }
}

/* Table */
.table thead { background-color: #343a40; color: #fff; }
.table tbody tr:hover { background-color: #f1f1f1; }
.btn { border-radius: 20px; }
.table-responsive { box-shadow: 0 4px 20px rgba(0,0,0,0.05); padding: 1rem; background: #fff; border-radius: 10px; }
</style>
</head>
<body>

<!-- Sidebar Toggle -->
<button id="sidebarToggle" class="sidebar-toggle d-md-none" aria-label="Toggle sidebar">
  <span></span>
  <span></span>
  <span></span>
</button>

<div id="wrapper">
  <!-- Sidebar -->
  <?php include 'admin_sidebar.php'; ?>

  <!-- Page Content -->
  <div class="container my-4">
    <form action="admin_Product.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded bg-light shadow">
      <h4 class="mb-3 text-primary">Upload a New Product</h4>
      <div class="mb-3"><label class="form-label">Product Image</label><input type="file" name="product-image" class="form-control" accept="image/*" required></div>
      <div class="mb-3"><label class="form-label">Product Name</label><input type="text" name="product-name" class="form-control" required></div>
      <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="product-category" class="form-select" required>
          <option value="">Select Category</option>
          <option value="Dog">Dog</option>
          <option value="Cat">Cat</option>
          <option value="Fish">Fish</option>
          <option value="Bird">Bird</option>
          <option value="Turtle">Turtle</option>
          <option value="Rabbit">Rabbit</option>
        </select>
      </div>
      <div class="mb-3"><label class="form-label">Size</label><input type="text" name="product-size" class="form-control" required></div>
      <div class="mb-3"><label class="form-label">MFD</label><input type="date" name="mfd" class="form-control" required></div>
      <div class="mb-3"><label class="form-label">EXD</label><input type="date" name="exd" class="form-control" required></div>
      <div class="mb-3"><label class="form-label">Product Instruction</label><textarea name="product-instruction" class="form-control" rows="3" required></textarea></div>
      <div class="mb-3">
        <label class="form-label">Availability</label>
        <select name="product-availability" class="form-select" required>
          <option value="Available">Available</option>
          <option value="Sold">Sold</option>
          <option value="Coming Soon">Coming Soon</option>
        </select>
      </div>
      <div class="mb-3"><label class="form-label">Price</label><input type="number" name="product-price" class="form-control" required></div>
      <div class="mb-3"><label class="form-label">Description</label><textarea name="product-description" class="form-control" rows="3" required></textarea></div>
      <button type="submit" class="btn btn-success">Upload Product</button>
    </form>

    <div class="table-responsive mt-5">
      <h4 class="mb-3 text-primary">Uploaded Products</h4>
      <table class="table table-bordered text-center" id="myTable">
        <thead class="thead-light">
          <tr>
            <th>Product</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query1 = "SELECT * FROM food";
          $result1 = mysqli_query($conn,$query1);
          if(mysqli_num_rows($result1) > 0){
            while($row = mysqli_fetch_assoc($result1)){
              echo "<tr>
                <td><img src='".$row['food-image']."' width='100px'></td>
                <td>".$row['food-name']."</td>
                <td>₹".$row['food-price']."</td>
                <td>
                  <a href='edit_product.php?id=".$row['food_id']."' class='btn btn-warning btn-sm me-1'><i class='fa fa-edit'></i></a>
                  <a href='delete_product.php?id=".$row['food_id']."' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this product?');\"><i class='fa fa-trash'></i></a>
                </td>
              </tr>";
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Overlay -->
<div id="overlay" aria-hidden="true"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
<script>
let table = new DataTable('#myTable');

// Sidebar toggle
(function() {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    const overlay = document.getElementById('overlay');

    function openSidebar() {
        sidebar.classList.add('open');
        overlay.classList.add('active');
        document.body.classList.add('no-scroll');
        toggleBtn.classList.add('active');
    }

    function closeSidebar() {
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
        document.body.classList.remove('no-scroll');
        toggleBtn.classList.remove('active');
    }

    toggleBtn?.addEventListener('click', function(e){
        e.stopPropagation();
        sidebar.classList.contains('open') ? closeSidebar() : openSidebar();
    });

    overlay?.addEventListener('click', closeSidebar);

    window.addEventListener('resize', function(){
        if(window.innerWidth >= 768) closeSidebar();
    });
})();
</script>
</body>
</html>
