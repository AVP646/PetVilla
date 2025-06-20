<!DOCTYPE html>
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
        i{
            padding:0 20px;
            
        }
        ul li{
            font-family: "Poppins", sans-serif;
            font-style: normal;
            font-weight:500;
            padding:0 10px;
        }
        .nav-title{
            padding:0 0 0 30px;
        }
        .nav-im{
            width:60px;
            transform:rotate(30deg);
        }
        .nav-o-i{
            margin:12px 0 0 0 ;
        }
        .nav-o-i-1{
            padding-left:200px;

        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg BG-COLOR ">
  <div class="container-fluid">
    <a class="navbar-brand nav-title"  data-aos="fade-down" data-aos-duration="1000" href="#"><img src="../images/logo.png" alt="" class="nav-im" > PetVilla</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a data-aos="fade-down" data-aos-duration="1200" class="nav-link active  nav-links" aria-current="page" href="index.php">HOME</a>
        </li>
        
         <li class="nav-item">
          <a data-aos="fade-down" data-aos-duration="1300" class="nav-link active nav-links" aria-current="page" href="about_us.php">ABOUT</a>
        </li>
          <li class="nav-item">
          <a data-aos="fade-down" data-aos-duration="1400" class="nav-link active nav-links" aria-current="page" href="product.php">PRODUCT</a>
        </li>
         </li>
          <li class="nav-item">
          <a data-aos="fade-down" data-aos-duration="1500" class="nav-link active nav-links" aria-current="page" href="contactUs.php">CONTACT US</a>
        </li>
    </ul>
        

      
      <form class="d-flex" role="search" id="form_nav">
        <i class="fa-solid fa-magnifying-glass nav-o-i nav-o-i-1"></i>
         <i class="fa-solid fa-cart-shopping nav-o-i"></i>
        <i class="fa-solid fa-heart"></i>
        <i class="fa-solid fa-user"></i>
        <!-- <input data-aos="fade-down" data-aos-duration="1600" class="form-control me-2 rounded-pill  " type="search" placeholder="Search" aria-label="Search"/> -->
        <!-- <button data-aos="fade-down" data-aos-duration="1700" class="btn"  type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> -->
      </form>
       
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>