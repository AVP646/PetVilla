<?php include 'admin_session.php' ?>

<?php include "../partial/_database.php";  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PetVilla Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Quicksand', sans-serif;
      background: #f4f6f8;
    }

    /* ---------- Sidebar & responsive behavior ---------- */
#wrapper {
  display: flex;
  min-height: 100vh;
}

/* Base sidebar */
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

/* Ensure main area flexes */
.container-fluid {
  flex: 1;
  padding: 2.5rem;
  transition: padding-left 0.3s ease;
}

/* Toggle button default (hidden by CSS, d-md-none is a backup) */
.sidebar-toggle {
  display: none;
  border-radius: 8px;
  padding: 6px 10px;
  background: #111827;
  color: #fff;
  border: none;
}

/* Overlay */
#overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.45);
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.25s ease, visibility 0.25s ease;
  z-index: 1040;
}

/* Mobile/Small screens (< 768px): sidebar becomes off-canvas */
@media (max-width: 767.98px) {
  /* show toggle button for small screens */
  .sidebar-toggle { display: inline-block; }

  /* make sidebar fixed and hide it off-canvas by default */
  #sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    transform: translateX(-100%); /* hidden by default */
    box-shadow: none;
  }

  /* when open, bring it into view */
  #sidebar.open {
    transform: translateX(0);
    box-shadow: 0 8px 30px rgba(0,0,0,0.2);
  }

  /* main content should take full width on small screens */
  .container-fluid {
    padding: 1.25rem;
  }

  /* overlay visible when active */
  #overlay.active {
    opacity: 1;
    visibility: visible;
  }

  /* hide the sidebar heading inside sidebar for mobile (optional) */
  #sidebar h3 { margin-bottom: 1.25rem; }
}

/* Desktop: ensure sidebar remains in-flow (no overlap) */
@media (min-width: 768px) {
  #sidebar { position: relative; transform: none; }
  .sidebar-toggle { display: none !important; } /* guarantee hidden on desktop */
}

/* Utility: prevent body scroll when sidebar open */
body.no-scroll { overflow: hidden; }


.nav-link{
  text-decoration: none;
}
  </style>
</head>

<body>
  <div id="wrapper">
    <!-- Overlay that appears when sidebar is open on mobile -->
<div id="overlay" aria-hidden="true"></div>

    <div id="sidebar">
      <h3>🐾 PetVilla</h3>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="index.php" class="nav-link"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
        <li class="nav-item"><a href="admin_order.php" class="nav-link"><i class="bi bi-bag-check"></i> Orders</a></li>
        <li class="nav-item"><a href="admin_users.php" class="nav-link"><i class="bi bi-people"></i> Users</a></li>
        <li class="nav-item"><a href="admin_admins.php" class="nav-link">  <i class="bi bi-person-circle"></i> Admin</a></li>
        <li class="nav-item"><a href="admin.php" class="nav-link"><i class="fas fa-user-shield"></i> Admins</a></li>
        <li class="nav-item"><a href="admin_Pets.php" class="nav-link"><i class="fas fa-paw"></i> Pets</a></li>
        <li class="nav-item"><a href="admin_Product.php" class="nav-link"><i class="bi bi-box-seam"></i> Products</a>
        </li>
      </ul>
    </div>
    <div class="container-fluid">
  <!-- Toggle button (visible only on small screens) -->
<button id="sidebarToggle" class="btn sidebar-toggle d-md-none mb-3" aria-label="Toggle sidebar">
  <i class="bi bi-list fs-3"></i>
</button>


  <h2>Welcome,
    <?php echo $_SESSION['name']; ?> 🐾
  </h2>

      <div class="row g-4 mt-4">
        <div class="col-md-3">
          <a href="admin_order.php">
          <div class="card p-4 text-center">
            <h5>Orders</h5>
            <p class="fs-3 text-primary">
              <?php $res1 = mysqli_query($conn, "SELECT * FROM orders"); echo mysqli_num_rows($res1); ?>
            </p>
          </div>
  </a>
        </div>
        <div class="col-md-3">
          <a href="admin_users.php">
          <div class="card p-4 text-center">
            <h5>Users</h5>
            <p class="fs-3 text-success">
              <?php $res2 = mysqli_query($conn, "SELECT * FROM users"); echo mysqli_num_rows($res2); ?>
            </p>
          </div>
  </a>
        </div>
        <div class="col-md-3">
          <a href="admin_pets.php">
          <div class="card p-4 text-center">
            <h5>Pets</h5>
            <p class="fs-3 text-warning">
              <?php $res3 = mysqli_query($conn, "SELECT * FROM pets"); echo mysqli_num_rows($res3); ?>
            </p>
          </div>
  </a>
        </div>
        <div class="col-md-3">
          <a href="admin_Product.php">
          <div class="card p-4 text-center">
            <h5>Products</h5>
            <p class="fs-3 text-danger">
              <?php $res4 = mysqli_query($conn, "SELECT * FROM food"); echo mysqli_num_rows($res4); ?>
            </p>
          </div>
  </a>
        </div>
        <div class="col-md-3">
          <a href="admin.php">
          <div class="card p-4 text-center">
            <h5>Admins</h5>
            <p class="fs-3 text-danger">
              <?php $res4 = mysqli_query($conn, "SELECT * FROM admins"); echo mysqli_num_rows($res4); ?>
            </p>
          </div>
  </a>
        </div>
      </div>
    </div>
  </div>


  <script>
  (function() {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    const overlay = document.getElementById('overlay');

    // Open sidebar (mobile)
    function openSidebar() {
      sidebar.classList.add('open');
      overlay.classList.add('active');
      document.body.classList.add('no-scroll');
    }

    // Close sidebar
    function closeSidebar() {
      sidebar.classList.remove('open');
      overlay.classList.remove('active');
      document.body.classList.remove('no-scroll');
    }

    // Toggle
    if (toggleBtn) {
      toggleBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        if (sidebar.classList.contains('open')) closeSidebar();
        else openSidebar();
      });
    }

    // Close when clicking overlay
    if (overlay) overlay.addEventListener('click', closeSidebar);

    // Keep state consistent on resize (important)
    function handleResize() {
      if (window.innerWidth >= 768) {
        // Desktop: ensure sidebar visible/in-flow and overlay off
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
        document.body.classList.remove('no-scroll');
      } else {
        // Mobile: keep sidebar hidden by default (no action)
      }
    }

    window.addEventListener('resize', handleResize);
    // Initial check
    handleResize();
  })();
</script>

</body>

</html>