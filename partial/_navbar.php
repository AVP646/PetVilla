<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navabr</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>
  <style>

    /* color for website here  */
    /* #748873
    #D1A980
    #E5E0D8
    #F8F8F8 */
    * {
      padding: 0;
      margin: 0;
    }
    .navbar-color{
      background-color:   #D1A980;
      /* z-index: 1111;
      position:relative; */
    }
    .nav-i i {
      padding: 0 20px;
      margin: 10px 10px;
      transition: 0.3s ease-in-out;
      color: black;
      cursor: pointer;

    }

    .nav-i input {
      display: none;
      transition: 0.5 linear;
      width: 180px;
    }

    .nav-i i:hover {
      /* font-size: 18px; */
      transform: scale(1.2);
    }

    .nav-links li {
      font-family: "Poppins", sans-serif;
      font-style: normal;
      font-weight: 500;
      padding: 0 10px;
      transition: 0.3s ease-in-out;
    }

    .nav-links li:hover {
      transform: scale(1.1);

    }

    .nav-title {
      padding: 0 0 0 30px;
      font-family: "Poppins", sans-serif;
      font-style: normal;
      font-weight: 500;
    }

    .nav-im {
      width: 60px;
      transform: rotate(30deg);
    }

    #cancel {
      display: none;
      transition: 0.5 ease;
    }
  </style>
</head>

<body>

  <!-- this is navabr and it work with bootstrap  -->
  <nav class="navbar navbar-expand-lg  navbar-color">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="index.php"><img src="../images/logo.png" alt="" class="nav-im"> PetVilla</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto nav-links ">
          <li class="nav-item">
            <a data-aos="fade-down" data-aos-duration="1200"
              class="nav-link active  nav-links" aria-current="page" href="../Pages/index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a data-aos="fade-down" data-aos-duration="1200"
              class="nav-link active  nav-links" aria-current="page" href="../Pages/pet-page.php">PETS</a>
          </li>
          <li class="nav-item">
            <a data-aos="fade-down" data-aos-duration="1400"
              class="nav-link active nav-links" aria-current="page" href="../pages/food-page.php">PRODUCT</a>
          </li>
          <li class="nav-item">
            <a data-aos="fade-down" data-aos-duration="1300"
              class="nav-link active nav-links" aria-current="page" href="../Pages/about.php">ABOUT</a>
          </li>
          </li>
          <li class="nav-item">
            <a data-aos="fade-down" data-aos-duration="1500"
              class="nav-link active nav-links" aria-current="page" href="../Pages/contact.php">CONTACT US</a>
          </li>
          <li class="nav-item">
            <a data-aos="fade-down" data-aos-duration="1600"
              class="nav-link active nav-links" aria-current="page" href="../Pages/review.php">REVIEW</a>
          </li>
        </ul>

        <form class="d-flex nav-i " role="search" id="form_nav">
          <input data-aos="fade-down" id="search-box" data-aos-duration="1600" class="form-control me-2 rounded-pill  " type="search" placeholder="Search" aria-label="Search" />
          <i class="fa-solid fa-xmark" id="cancel"></i>
          <i class="fa-solid fa-magnifying-glass " id="search"></i>
          <a href="../pages/Cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
          <a href="../Pages/user.php"><i class="fa-solid fa-user"></i></a>
        </form>
      </div>
    </div>
  </nav>
  <!-- here its ends  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <script>
    let icon = document.querySelector('#search');
    let box = document.querySelector('#search-box');
    let cancel = document.querySelector('#cancel');
    icon.addEventListener('click', function() {
      this.style.display = 'none';
      box.style.display = 'block';
      cancel.style.display = 'block';
      console.log("hello");
    });

    cancel.addEventListener('click', function() {
      box.style.display = 'none';
      icon.style.display = 'block';
      this.style.display = 'none';
    });
  </script>

</body>

</html>