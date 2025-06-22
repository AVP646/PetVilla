<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-catgari{
      /* padding-top:100px;
      display:flex;
      align-items:center;
      justify-content:center; */
     }
     /* .container-catgari1{
      padding-top:20px;
      border:3px solid green;
     } */
     .container-catgari2{
      margin:5px 5px;
      /* background:rgba(255,255,255,0.5); */
      height:130px;
      width:380px;
      border-radius:100px;
      /* border:2px solid blue; */
     }
     .main-categori{
      /* height:500px; */
      background:url('../images/categori-bg.png');
      background-size:auto;
      /* background-position:center; */
      justify-content:center;
      margin-bottom:10px;
      /* border:2px solid red; */
      /* margin: 0 0 10px 0; */
     
     }
     #main-cate-title{
      padding:50px 0 0 20px ;
     }
     #main-cate-title i{
      padding:0 0 0 15px;
      transform:rotate(30deg);
     }
     .cate-imges{
      height:130px;
      width:365px;
      border-radius:100px;
     }
     .container-catgari2:hover{
      
     .cate-imges:hover{
      transform: scale(1.2);
      transition:0.4s ease;
     }
        .cate-name{
        position:relative; 
       width:160px;
       top:-100px; 
       left:180px;
      transition:0.4s ease;
      /* border:1px solid black; */
     }
     .cate-name h5{
      color:#fa8d11;
      font-weight:900;
     }
     .cate-arrow{
      background:#fa8d11;
     }
     
     }

     
      .cate-name{
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

     
     }
     .cate-arrow{
      padding:10px;
      border-radius:50%;
      position: relative;
      left:100px;
      bottom:40px;
      background:white;
      color:black;
     } 
    </style>
</head>
<body>
     <!-- <div class="container-fluid py-5" style="background:url('../images/categori-bg.png'); background-size:cover;">
  <h2 class="text-white mb-4"><i class="fa-solid fa-paw text-warning me-1"></i>Shop By Pet</h2>
  <div class="row g-4"> -->
     <!-- Category Item  -->
    
<div class="container-fluid main-categori row g-4">
  <h2 id="main-cate-title">Shop By Pet<i class="fa-solid fa-paw" style="color: #ffac38;"></i><i class="fa-solid fa-paw" style="color: #ffac38;"></i></h2>

    <div class="col-md-4 col-12 container-catgari2">
        <img src="../images/dog-cate.jpg" class="cate-imges" alt="Dog">
        <div class="cate-name">
          <h5 >Dogs</h5>
          <h6 class="">6 types</h6>
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
    
    <div class="col-md-4 col-12 container-catgari2">
        <img src="../images/cate-cate.jpg" class="cate-imges" alt="Dog">
        <div class="cate-name">
          <h5 >Cats</h5>
          <h6 class="">2 types</h6>
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
    
    <div class="col-md-4 col-12 container-catgari2">
        <img src="../images/fish-cate.jpg" class="cate-imges" alt="Dog">
        <div class="cate-name">
          <h5 >Fishes</h5>
          <h6 class="">10 types</h6>
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
    
    <div class="col-md-4 col-12 container-catgari2">
        <img src="../images/bird-cate.jpg" class="cate-imges" alt="Dog">
        <div class="cate-name">
          <h5 >Birds</h5>
          <h6 class="">7 types</h6>
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
    
    <div class="col-md-4 col-12 container-catgari2">
        <img src="../images/turtle-cat.jpg" class="cate-imges" alt="Dog">
        <div class="cate-name">
          <h5 >Turtles</h5>
          <h6 class="">3 types</h6>
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
    
    <div class="col-md-4 col-12 container-catgari2">
        <img src="../images/rabit-cat.jpg" class="cate-imges" alt="Dog">
        <div class="cate-name">
          <h5 >Rabits</h5>
          <h6 class="">2 types</h6>
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
    </div>
<!--     
    <div class="col-md-4 col-12 container-catgari2">
      <div class=" text-center ">
        <img src="../images/cate-cate.jpg" class="cate-imges" alt="Dog">
        <div>
          <h5 class="text-warning fw-bold mb-0">Dogs</h5>
          <small class="text-dark">6 types</small>
          <div class="mt-2">
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 container-catgari2">
      <div class=" text-center ">
        <img src="../images/fish-cate.jpg" class="cate-imges" alt="Dog">
        <div>
          <h5 class="text-warning fw-bold mb-0">Dogs</h5>
          <small class="text-dark">6 types</small>
          <div class="mt-2">
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 container-catgari2">
      <div class=" text-center">
        <img src="../images/dog-cate.jpg" class="cate-imges" alt="Dog">
        <div>
          <h5 class="text-warning fw-bold mb-0">Dogs</h5>
          <small class="text-dark">6 types</small>
          <div class="mt-2">
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-12 container-catgari2">
      <div class="  text-center ">
        <img src="../images/dog-cate.jpg" class="cate-imges" alt="Dog">
        <div>
          <h5 class="text-warning fw-bold mb-0">Dogs</h5>
          <small class="text-dark">6 types</small>
          <div class="mt-2">
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
          </div>
        </div>
      </div>
    </div>
<div class="col-md-4 col-12 container-catgari2 ">
      <div class=" text-center ">
        <img src="../images/dog-cate.jpg" class="cate-imges" alt="Dog">
        <div>
          <h5 class="text-warning fw-bold mb-0">Dogs</h5>
          <small class="text-dark">6 types</small>
            <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
      </div>
    </div>
 -->

    <!-- Repeat for Cat, Fish, etc.  -->
  <!-- </div>
</div>  -->



     <!-- <div class="container-fluid main-categori row g-4">
  <h2 id="main-cate-title">Shop By Pet<i class="fa-solid fa-paw" style="color: #ffac38;"></i><i class="fa-solid fa-paw" style="color: #ffac38;"></i></h2>
  <div class="container-fluid container-catgari col-12 ">
    <div class="container-catgari2 col-md-4 ">
      <img src="../images/dog-cate.jpg" class="cate-imges" alt="">
        <div class="cate-name">
          <h5>Dogs</h5>
          <h6>6 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
    <div class="container-catgari2 col-md-4 ">
      <img src="../images/cate-cate.jpg" class="cate-imges" alt="">
      <div class="cate-name">
          <h5>Cat</h5>
          <h6>5 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
    <div class="container-catgari2 col-md-4 ">
      <img src="../images/fish-cate.jpg" class="cate-imges" alt="">
      <div class="cate-name">
          <h5>Fish</h5>
          <h6>10 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
    </div>
  </div>

 <div class="container-fluid container-catgari col-12 ">
  <div class="container-catgari2 col-md-4 ">
    <img src="../images/bird-cate.jpg" class="cate-imges" alt="">
    <div class="cate-name">
          <h5>Bird</h5>
          <h6>10 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
  </div>
  <div class="container-catgari2 col-md-4 ">
         <img src="../images/turtle-cat.jpg" class="cate-imges" alt="">
         <div class="cate-name">
          <h5>Turtle</h5>
          <h6>3 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>

  </div>
  <div class="container-catgari2 col-md-4 ">
    <img src="../images/rabit-cat.jpg" class="cate-imges" alt="">
    <div class="cate-name">
          <h5>Rabbit</h5>
          <h6>2 types</h6>
          <i class="fa-solid fa-arrow-right cate-arrow"></i>
        </div>
  </div>
 </div>
</div> -->
</body>
</html>