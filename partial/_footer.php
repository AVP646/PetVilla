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
        <p><a href="#" class=" footer-link">Home</a></p>
        <p><a href="#" class=" footer-link">Shop</a></p>
        <p><a href="#" class=" footer-link">Adopt</a></p>
        <p><a href="#" class=" footer-link">Contact</a></p>
      </div>

      <!-- Useful Links -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 usefull">
        <h5 class="text-uppercase mb-4 font-weight-bold ">Useful</h5>
        <p><a href="#" class=" footer-link">Your Account</a></p>
        <p><a href="#" class=" footer-link">FAQs</a></p>
        <p><a href="#" class=" footer-link">Privacy Policy</a></p>
        <p><a href="#" class=" footer-link">Terms & Conditions</a></p>
      </div>

      <!-- Contact -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 contact">
        <h5 class="text-uppercase mb-4 font-weight-bold ">Contact</h5>
        <p><i class="fas fa-home mr-3"></i> 123 Pet Street, City</p>
        <p><i class="fas fa-envelope mr-3"></i> info@petshop.com</p>
        <p><i class="fas fa-phone mr-3"></i> +91 9876543210</p>
    </div>

    <!-- Social Icons -->
    <div class="row align-items-center mt-4 iconss">
      <div class="">
        <div class="text-center text-md-right">
          <a href="#" class="text- me-4 footer-social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-hite me-4 footer-social"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text- me-4 footer-social"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-wite footer-social"><i class="fab fa-pinterest"></i></a>
        </div>
      </div>
    </div>

  </div>
</footer>

</body>
</html>
