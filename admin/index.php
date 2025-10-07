<?php include 'admin_session.php'; ?>
<?php include "../partial/_database.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetVilla Admin Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Quicksand', sans-serif;
      background: #f4f6f8;
      margin: 0;
      overflow-x: hidden;
    }

    #wrapper {
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar */
    #sidebar {
      width: 240px;
      background: linear-gradient(160deg, #1b1b2f, #0f3460);
      color: #eee;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem 1rem;
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
      z-index: 1050;
    }

    #sidebar h3 {
      font-weight: 700;
      color: #fff;
      margin-bottom: 1.5rem;
    }

    #sidebar .nav-link {
      color: #ddd;
      margin: 0.5rem 0;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: color 0.3s, background 0.3s;
      border-radius: 8px;
      padding: 8px 12px;
    }

    #sidebar .nav-link:hover {
      color: #fff;
      background: rgba(255, 255, 255, 0.1);
    }

    /* Toggle Button */
    .toggle-btn {
      position: fixed;
      top: 15px;
      left: 15px;
      width: 35px;
      height: 28px;
      display: none;
      flex-direction: column;
      justify-content: space-between;
      cursor: pointer;
      z-index: 1100;
      background: transparent;
      border: none;
    }

    .toggle-btn span {
      display: block;
      height: 4px;
      width: 100%;
      background: #333;
      border-radius: 4px;
      transition: all 0.3s ease;
    }

    .toggle-btn.active span:nth-child(1) {
      transform: rotate(45deg) translate(6px, 6px);
    }

    .toggle-btn.active span:nth-child(2) {
      opacity: 0;
    }

    .toggle-btn.active span:nth-child(3) {
      transform: rotate(-45deg) translate(6px, -6px);
    }

    /* Overlay */
    #overlay {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.45);
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.25s ease, visibility 0.25s ease;
      z-index: 1040;
    }

    /* Main content */
    .container-fluid {
      flex: 1;
      padding: 2.5rem;
      transition: all 0.3s ease;
    }

    /* Mobile */
    @media (max-width: 767.98px) {
      #sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        transform: translateX(-100%);
      }

      #sidebar.open {
        transform: translateX(0);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
      }

      .toggle-btn {
        display: flex;
      }

      #overlay.active {
        opacity: 1;
        visibility: visible;
      }

      body.no-scroll {
        overflow: hidden;
      }
    }

    /* Cards */
    .card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    #sidebar {
  display: flex;
  flex-direction: column;
  justify-content: space-between; /* This keeps logout button at bottom */
}

  </style>
</head>

<body>
  <button id="toggleSidebar" class="toggle-btn" aria-label="Toggle sidebar">
    <span></span><span></span><span></span>
  </button>

  <div id="overlay"></div>

  <div id="wrapper">
    <?php include 'admin_sidebar.php'; ?>

    <div class="container-fluid">
      <h2>Welcome, <?php echo $_SESSION['name']; ?> 🐾</h2>

      <div class="row g-4 mt-4">
        <div class="col-md-3">
          <a href="admin_order.php" class="text-decoration-none">
            <div class="card p-4 text-center">
              <h5>Orders</h5>
              <p class="fs-3 text-primary"><?php $res1 = mysqli_query($conn, "SELECT * FROM orders"); echo mysqli_num_rows($res1); ?></p>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="admin_users.php" class="text-decoration-none">
            <div class="card p-4 text-center">
              <h5>Users</h5>
              <p class="fs-3 text-success"><?php $res2 = mysqli_query($conn, "SELECT * FROM users"); echo mysqli_num_rows($res2); ?></p>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="admin_pets.php" class="text-decoration-none">
            <div class="card p-4 text-center">
              <h5>Pets</h5>
              <p class="fs-3 text-warning"><?php $res3 = mysqli_query($conn, "SELECT * FROM pets"); echo mysqli_num_rows($res3); ?></p>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="admin_Product.php" class="text-decoration-none">
            <div class="card p-4 text-center">
              <h5>Products</h5>
              <p class="fs-3 text-danger"><?php $res4 = mysqli_query($conn, "SELECT * FROM food"); echo mysqli_num_rows($res4); ?></p>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="admin.php" class="text-decoration-none">
            <div class="card p-4 text-center">
              <h5>Admins</h5>
              <p class="fs-3 text-secondary"><?php $res5 = mysqli_query($conn, "SELECT * FROM admins"); echo mysqli_num_rows($res5); ?></p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script>
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('toggleSidebar');
    const overlay = document.getElementById('overlay');

    toggle.addEventListener('click', () => {
      sidebar.classList.toggle('open');
      overlay.classList.toggle('active');
      toggle.classList.toggle('active');
      document.body.classList.toggle('no-scroll');
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.remove('open');
      overlay.classList.remove('active');
      toggle.classList.remove('active');
      document.body.classList.remove('no-scroll');
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth >= 768) {
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
        toggle.classList.remove('active');
        document.body.classList.remove('no-scroll');
      }
    });
  </script>
</body>
</html>
