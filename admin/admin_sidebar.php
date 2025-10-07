<!-- admin_sidebar.php -->
<style>
  /* Sidebar Container */
  #sidebar {
    width: 250px;
    background: linear-gradient(160deg, #1b1b2f, #0f3460);
    color: #eee;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 2rem 1rem;
    min-height: 100vh;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
    z-index: 1050;
    font-family: 'Quicksand', sans-serif;
  }

  /* Sidebar Heading */
  #sidebar h3 {
    font-weight: 700;
    color: #fff;
    margin-bottom: 1.5rem;
    text-align: center;
  }

  /* Navigation Links */
  #sidebar .nav-link {
    color: #ddd;
    margin: 0.5rem 0;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 15px;
    border-radius: 10px;
    transition: all 0.3s ease;
  }

  #sidebar .nav-link:hover,
  #sidebar .nav-link.active {
    color: #fff;
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  }

  /* Logout Button */
  #sidebar .logout-btn {
    background: #ff4d4f;
    border: none;
    border-radius: 10px;
    padding: 10px 15px;
    font-weight: 600;
    color: #fff;
    width: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s ease;
    margin-top: auto;
  }

  #sidebar .logout-btn:hover {
    background: #d9363e;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  }

  /* Mobile / Toggle Styles */
  @media (max-width: 767.98px) {
    #sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      transform: translateX(-100%);
      box-shadow: none;
    }

    #sidebar.open {
      transform: translateX(0);
      box-shadow: 0 8px 30px rgba(0,0,0,0.2);
    }
  }
</style>

<div id="sidebar">
  <h3>🐾 PetVilla</h3>
  <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
  <ul class="nav flex-column w-100">
    <li class="nav-item">
      <a href="index.php" class="nav-link <?php if($currentPage=='index.php') echo 'active'; ?>">
        <i class="bi bi-speedometer2"></i> Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a href="admin_order.php" class="nav-link <?php if($currentPage=='admin_order.php') echo 'active'; ?>">
        <i class="bi bi-bag-check"></i> Orders
      </a>
    </li>
    <li class="nav-item">
      <a href="admin_users.php" class="nav-link <?php if($currentPage=='admin_users.php') echo 'active'; ?>">
        <i class="bi bi-people"></i> Users
      </a>
    </li>
    <li class="nav-item">
      <a href="admin.php" class="nav-link <?php if($currentPage=='admin.php') echo 'active'; ?>">
        <i class="bi bi-person-circle"></i> Admins
      </a>
    </li>
    <li class="nav-item">
      <a href="admin_admins.php" class="nav-link <?php if($currentPage=='admin.php') echo 'active'; ?>">
        <i class="bi bi-person-circle"></i> Admin
      </a>
    </li>
    <li class="nav-item">
      <a href="admin_pets.php" class="nav-link <?php if($currentPage=='admin_pets.php') echo 'active'; ?>">
        <i class="fas fa-paw"></i> Pets
      </a>
    </li>
    <li class="nav-item">
      <a href="admin_Product.php" class="nav-link <?php if($currentPage=='admin_Product.php') echo 'active'; ?>">
        <i class="bi bi-box-seam"></i> Products
      </a>
    </li>
  </ul>

  <a href="admin_logout.php" class="logout-btn">
    <i class="bi bi-box-arrow-right"></i> Logout
  </a>
</div>
