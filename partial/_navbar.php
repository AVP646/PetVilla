<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar with Smooth Search</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />

  <!-- FontAwesome -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Font -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
  </style>

  <!-- Custom Styles -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
    }

    .nav-i i {
      padding: 5px 10px;
      margin: 0 5px;
      transition: 0.4s ease-in-out;
      cursor: pointer;
    }

    .nav-i i:hover {
      font-size: 18px;
    }

    .nav-item {
      font-size: 16px;
      font-weight: 700;
      transition: 0.4s ease-in-out;
    }

    .nav-item:hover {
      font-size: 18px;
    }

    .nav-links li {
      font-weight: 500;
      padding: 0 10px;
    }

    .nav-links li:hover {
      font-size: 18px;
      transition: 0.3s ease;
    }

    .nav-title {
      padding-left: 30px;
      font-weight: 600;
    }

    .nav-im {
      width: 60px;
      transform: rotate(30deg);
    }

   .navbar {
 background: linear-gradient(to right, #ff9468 70%, #ff8961 100%);

  position: relative;
  z-index: 100;
}



    /* Search Box Smooth Transition */
    .nav-i {
      position: relative;
    }

    #search-box,
    #cancel {
      position: absolute;
      bottom: -55px;
      opacity: 0;
      transform: translateY(20px);
      pointer-events: none;
      transition: all 0.3s ease-in-out;
      z-index: 1000;
    }

    #search-box {
      right: 50px;
      width: 200px;
    }

    #cancel {
      right: 260px;
      font-size: 25px;
      cursor: pointer;
    }

    /* Show class for animation */
    #search-box.show,
    #cancel.show {
      opacity: 1;
      transform: translateY(0px);
      pointer-events: auto;
    }

    /* REMOVE Border from Menu Icon */
    .navbar-toggler {
      border: none !important;
      outline: none !important;
      box-shadow: none !important;
    }

    /*  Optional: White color toggler icon */
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,255,255, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- Brand -->
      <a class="navbar-brand nav-title d-flex align-items-center" href="index.php">
        <img src="../images/logo.png" alt="logo" class="nav-im me-2" />
        PetVilla
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Offcanvas Menu -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

          <!-- Menu Items -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto nav-links">
            <li class="nav-item fw-bolder"><a class="nav-link active" href="index.php">HOME</a></li>
            <li class="nav-item fw-bolder"><a class="nav-link active" href="about_us.php">ABOUT</a></li>
            <li class="nav-item fw-bolder"><a class="nav-link active" href="product.php">PRODUCT</a></li>
            <li class="nav-item fw-bolder"><a class="nav-link active" href="contactUs.php">CONTACT US</a></li>
          </ul>

          <!-- Search & Icons -->
          <form class="d-flex nav-i align-items-center mt-3 mt-lg-0" role="search" id="form_nav">
            <input id="search-box" class="form-control rounded-pill" type="search" placeholder="Search"
              aria-label="Search" />
            <i class="fa-solid fa-xmark" id="cancel"></i>
            <i class="fa-solid fa-magnifying-glass" id="search"></i>
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-user"></i>
          </form>
        </div>
      </div>
    </div>
  </nav>

  <!--  Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>

  <!-- Script -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const icon = document.querySelector('#search');
      const box = document.querySelector('#search-box');
      const cancel = document.querySelector('#cancel');

      icon.addEventListener('click', () => {
        icon.style.display = 'none';
        box.classList.add('show');
        cancel.classList.add('show');
      });

      cancel.addEventListener('click', () => {
        box.classList.remove('show');
        cancel.classList.remove('show');
        setTimeout(() => {
          icon.style.display = 'inline-block';
        }, 300);
      });
    });
  </script>

</body>

</html>