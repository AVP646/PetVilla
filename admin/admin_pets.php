<?php include 'admin_session.php'; ?>
<?php include "../partial/_database.php"; ?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pet_image = $_FILES['pet_image'];
    $pet_name = $_POST['pet_name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];

    $target_dir = "../Pets/"; 
    $target_file = $target_dir . ($pet_image["name"]);
      
    if(move_uploaded_file($pet_image['tmp_name'],$target_file)){
       $sql = "INSERT INTO pets (`pet-image`, `pet-name`, `pet-breed`, `pet-age`, `pet-gender`, `pet-category`, `pet-description`, `pet-price`, `pet-availability`) 
               VALUES ('$target_file', '$pet_name', '$breed', '$age', '$gender', '$category', '$description', '$price', '$availability')";
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
<title>Pet Shop Admin - Pets</title>
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
    <form action="admin_pets.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded bg-light shadow">
      <h4 class="mb-3 text-primary">Upload a New Pet</h4>
      <div class="mb-3"><label class="form-label">Pet Image</label><input type="file" name="pet_image" class="form-control" accept="image/*" required></div>
      <div class="mb-3"><label class="form-label">Pet Name</label><input type="text" name="pet_name" class="form-control" required></div>
      <div class="mb-3"><label class="form-label">Breed</label><input type="text" name="breed" class="form-control" required></div>
      <div class="mb-3"><label class="form-label">Age</label><input type="text" name="age" class="form-control" required></div>
      <div class="mb-3">
        <label class="form-label">Gender</label>
        <select name="gender" class="form-select" required>
          <option value="">Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="category" class="form-select" required>
          <option value="">Select Category</option>
          <option value="Dog">Dog</option>
          <option value="Cat">Cat</option>
          <option value="Fish">Fish</option>
          <option value="Bird">Bird</option>
          <option value="Turtle">Turtle</option>
          <option value="Rabbit">Rabbit</option>
        </select>
      </div>
      <div class="mb-3"><label class="form-label">Description</label><textarea name="description" class="form-control" rows="3" required></textarea></div>
      <div class="mb-3"><label class="form-label">Price</label><input type="number" name="price" class="form-control" required></div>
      <div class="mb-3">
        <label class="form-label">Availability</label>
        <select name="availability" class="form-select" required>
          <option value="Available">Available</option>
          <option value="Sold">Sold</option>
          <option value="Coming Soon">Coming Soon</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Upload Pet</button>
    </form>

    <div class="table-responsive mt-5">
      <h4 class="mb-3 text-primary">Uploaded Pets</h4>
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
          $query1 = "SELECT * FROM pets";
          $result1 = mysqli_query($conn,$query1);
          if(mysqli_num_rows($result1) > 0){
            while($row = mysqli_fetch_assoc($result1)){
              echo "<tr>
                <td><img src='".$row['pet-image']."' width='100px' alt='Pet Image'></td>
                <td>".$row['pet-name']."</td>
                <td>₹".$row['pet-price']."</td>
                <td>
                  <a href='edit_pet.php?id=".$row['pets_id']."' class='btn btn-warning btn-sm me-1'><i class='fa fa-edit'></i></a>
                  <a href='delete_pet.php?id=".$row['pets_id']."' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure?');\"><i class='fa fa-trash'></i></a>
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
