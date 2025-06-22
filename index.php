<?php include "partial/_navbar.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home Page</title>
  <style>
    .main-sl {
      background: url('images/slider-bg.png');
      background-size: cover;
      background-repeat: no-repeat;
      height: 800px;;
    }

     .main-sl img{
      width:200px;
      transform: scale(1.1);
     }
    .slider-im img{
      width:500px;
    }
    
    .slider-image-div{
     height:auto; 
    }

    .slider-gut{
      margin:115px 0 0 0 ;
    }
    .age-piche{
      position:absolute;
      top:200px;
      /* right: 10px; */
      height:50px;
      width:50px;
      border-radius:50%;
      color:red;
      background:url('images/slider-bg/webp');
     } 

     .slider-buy{
      padding:10px 20px;
      border-radius:15px;
      background:red;
     }
     .container-catgari{
      display:flex;
      align-items:center;
      justify-content:center;
      
     }
     .container-catgari1{
      padding-top:20px;
     }
     .container-catgari2{
      margin:5px 5px;
      background:rgba(255,255,255,0.5);
      height:130px;
      width:380px;
      border-radius:100px;;
     }
     .main-categori{
       height:500px;
      background:url('images/categori-bg.png');
      background-size:container;
      /* display:flex; */
      /* align-items:center; */
      justify-content:center;
     }
     #main-cate-title{
      padding:100px 0 0 50px ;
     }
     #main-cate-title i{
      padding:0 0 0 15px;
      transform:rotate(30deg);
     }
     .cate-imges{
      height:130px;
      width:380px;
      border-radius:100px;
     }
     .container-catgari2:hover{
        .cate-imges:hover{
      transform: scale(1.1);
      transition:0.4s ease;
     }
     .cate-name{
        position:relative;
      width:100px;
      top:-100px;
      left:180px;
      transition:0.4s ease;
     }
     .cate-name h5{
      color:#fa8d11;
      font-weight:900;
     }
     .cate-arrow{
      background:#fa8d11;
     }
     }
     
     /* .cate-name{
      position:relative;
      width:100px;
      top:-100px;
      left:160px;
      color:white;
      font-family: "Poppins", sans-serif;
            font-style: normal;
            font-weight:500;
     }
     .cate-name:hover{
      .cate-imges:hover{
      transform: scale(1.1);
      transition:0.4s ease;
     }
     }
     .cate-arrow{
      padding:10px;
      border-radius:50%;
      position: relative;
      left:100px;
      bottom:40px;
      background:white;
      color:black;
     } */
  </style>
</head>

<body>

  <!-- this is first slider of home page  -->
  <div class="container-fluid main-sl">
      <!-- this is slider code  -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- this is gutter  -->
       <div class="container px-4 text-center ">
  <div class="row gx-5">
    <div class="col">
      <div class="p-3 slider-gut">
        <h2>Yummy & Tasty</h2>
          <br />
          <h3>We Make <br>The Best Food</h3>
          <button class="btn btn-danger slider-buy" id="">Explore</button>
          <br />
      </div>
    </div>
    <div class="col slider-image-div">
      <div class="p-3 slider-im"><img src="images/pet1.png" class="d-block" alt="..."> </div>
    </div>
  </div>
</div>
</div>
<!-- this is second slider  -->
    <div class="carousel-item">
        <div class="containerd px-4 text-center ">
  <div class="row gx-5">
    <div class="col">
      <div class="p-3 slider-gut">
        <h2>Yummy & Tasty</h2>
          <br />
          <h3>We Make <br>The Best Food</h3>
          <button class="btn btn-danger slider-buy">Explore</button>
          <br />
      </div>
    </div>
    <div class="col slider-image-div">
      <div class="p-3 slider-im"> <img src="images/pet2.png" class="d-block" alt="..."></div>
    </div>
  </div>
</div>
    </div>
    <!-- this is third  -->
    <div class="carousel-item">
        <div class="containers px-4 text-center ">
  <div class="row gx-5">
    <div class="col">
      <div class="p-3 slider-gut">
        <h2>Yummy & Tasty</h2>
          <br />
          <h3>We Make <br>The Best Food</h3>
          <button class="btn btn-danger slider-buy">Explore</button>
          <br />
      </div>
    </div>
    <div class="col slider-image-div">
      <div class="p-3 slider-im"> <img src="images/pet3.png" class="d-block" alt="..."></div>
    </div>
  </div>
</div>
  </div>
  </div>
  <button  class="carousel-control-prev age-piche" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next age-piche" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span> 
  </button> 
</div>
  </div>
 <!-- this is end here  -->

 <!-- now creating categories something 6  -->
<!-- <div class="container-fluid main-categori ">
  <h2 id="main-cate-title">Shop By Pet<i class="fa-solid fa-paw" style="color: #ffac38;"></i><i class="fa-solid fa-paw" style="color: #ffac38;"></i></h2>
  <div class="container-fluid container-catgari container-catgari1 ">
    <div class="container-catgari2">
      <img src="images/dog-cate.jpg" class="cate-imges" alt="">
        <div class="cate-name">
          <h5>Dogs</h5>
          <h6>6 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
    <div class="container-catgari2">
      <img src="images/cate-cate.jpg" class="cate-imges" alt="">
      <div class="cate-name">
          <h5>Cat</h5>
          <h6>5 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
    <div class="container-catgari2">
      <img src="images/fish-cate.jpg" class="cate-imges" alt="">
      <div class="cate-name">
          <h5>Fish</h5>
          <h6>10 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
  </div>

 <div class="container-fluid container-catgari ">
  <div class="container-catgari2">
    <img src="images/bird-cate.jpg" class="cate-imges" alt="">
    <div class="cate-name">
          <h5>Bird</h5>
          <h6>10 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
  </div>
  <div class="container-catgari2">
         <img src="images/turtle-cat.jpg" class="cate-imges" alt="">
         <div class="cate-name">
          <h5>Turtle</h5>
          <h6>3 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>

  </div>
  <div class="container-catgari2">
    <img src="images/rabit-cat.jpg" class="cate-imges" alt="">
    <div class="cate-name">
          <h5>Rabbit</h5>
          <h6>2 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
  </div>
 </div>
</div> -->
<!-- its completed here  -->

<div class="container">
  <h2>hhdf</h2>
  <h1>jbdjfh</h1>
</div>


</body>
</html>

<?php include "partial/_footer.php"; ?>