<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>footer </title>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->

<style>
  .bg{
    background:url('../images/footer-bg.webp');
    background-position:center;
    background-size:cover;
    text-align:center;
  }
  .footer-link {
  text-decoration: none;
  color: black;
  transition: text-decoration 0.3s;
}

.footer-link:hover {
   /* or any highlight color */
  border-bottom:1px solid white;
  padding-bottom:5px;
}

.f {
  color: #333; /* or any highlight color */
  transform: scale(1.2);
}

  .footer-social{
  color: black;
  font-size:30px;
  transition: color 0.2s ease-in-out;
  }
  .footer-social:hover{
      color:white;
  }

  .logo{
    color:black;
    font-family: "Poppins", sans-serif;
      font-style: normal;
      font-weight: 500;
      padding: 0 10px;
      
  }
   .logo h5{
      font-weight: 600;
  }
  .linkss{
    color:black;
    font-family: "Poppins", sans-serif;
      font-style: normal;
      font-weight: 500;
      padding: 0 10px; 
  }
  .linkss h5{
      font-weight: 600;
  }
  .usefull{
    color:black;
    font-family: "Poppins", sans-serif;
      font-style: normal;
      font-weight: 500;
      padding: 0 10px;
      
  }
   .usefull h5{
      font-weight: 600;
  }
  .contact{
    color:black;
    font-family: "Poppins", sans-serif;
      font-style: normal;
      font-weight: 500;
      padding: 0 10px;
      
  }
   .contact h5{
      font-weight: 600;
  }
</style>

</head>
<body>

<!-- Bootstrap CSS CDN -->

<footer class="bg  pt-5 pb-4">
  <div class="container text-md-left">
    <div class="row text-md-left">

      <!-- Logo & About -->
      <div class="col-md-3 col-lg-3 col-xl-3 text-center logo mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold ">PetVilla</h5>
        <p>© 2025 PetVilla. All rights reserved.</p>
      </div>

      <!-- Links -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 linkss">
        <h5 class="text-uppercase mb-4 font-weight-bold ">Quick Links</h5>
        <p><a href="index.php" class=" footer-link">Home</a></p>
        <p><a href="pet-page.php" class=" footer-link">Pets</a></p>
        <p><a href="food-page.php" class=" footer-link">Foods</a></p>
        <!-- <p><a href="#" class=" footer-link">cart</a></p> -->
      </div>

      <!-- Useful Links -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 usefull">
        <h5 class="text-uppercase mb-4 font-weight-bold ">Useful</h5>
        <p><a href="about.php" class=" footer-link">About US</a></p>
        <p><a href="contact.php" class=" footer-link">Contact Us</a></p>
        <p><a href="user.php" class=" footer-link">User</a></p>
        <!-- <p><a href="#" class=" footer-link"></a></p> -->
      </div>

      <!-- Contact -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 contact">
        <h5 class="text-uppercase mb-4 font-weight-bold ">Contact</h5>
        <p><i class="fas fa-home mr-3"></i> CUshah, surendranagr</p>
        <p><i class="fas fa-envelope mr-3"></i> pankajmm35@gmail.com</p>
        <p><i class="fas fa-phone mr-3"></i> +91 7490082668</p>
    </div>

    <!-- Social Icons -->
    <div class="row align-items-center mt-4 iconss">
      <div class="">
        <div class="text-center text-md-right">
          <a href="https://www.facebook.com/jaydip.mangroliya.56/" class="text- me-4 footer-social"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/pankaj_hm/" class="text-hite me-4 footer-social"><i class="fab fa-instagram"></i></a>
          <a href="www.linkedin.com/in/pankaj-manganiya-080a30308" class="text- me-4 footer-social"><i class="fab fa-linkedin"></i></a>
          <a href="https://github.com/AVP646" class="text-wite footer-social"><i class="fab fa-github"></i></a>
        </div>
      </div>
    </div>

  </div>
</footer>

</body>
</html>
