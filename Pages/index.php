<?php include '../partial/_navbar.php' ?> <!-- Navbar -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PetVilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Poppins:wght@400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            font-family: "Poppins", sans-serif;
        }

        .bg-main {
            position: relative;
        }

        .bg-color {
            background: linear-gradient(to right, #ff9468 70%, #ff8961 100%);
            /* background-color: #dcd7f8; */
            width: 100vw;
            /* height: 650px; */
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;

        }

        .slider-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        #sliderTrack {
            display: flex;
            transition: transform 0.6s ease-in-out;
            width: 300%;
            /* 3 slides */
        }

        .slide-block {
            width: 100vw;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            padding: 20px;
        }

        .slide img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(2px 5px 5px grey);
        }

        .slide-text {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        h2.stroke-heading {
            font-size: 30px;
            font-weight: 600;
            color: black;
            opacity: 0;
            bottom: -20px;
            animation: fadeIn 3s ease forwards;
            position: relative;
        }

        h2.stroke-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 80px;
            height: 6px;
            background-color: red;
            border-radius: 50%;
            transform: rotate(-5deg);
        }

        .slide-text p {
            font-size: 16px;
            color: rgb(71, 69, 69);
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 2s ease forwards;
            animation-delay: 1.5s;
        }

        svg {
            width: 100%;
            height: 150px;
        }

        .animated-text2 {
            font-size: 70px;
            font-family: "Baloo 2", cursive;
            fill: transparent;
            stroke: black;
            stroke-width: 1;
            stroke-dasharray: 400;
            stroke-dashoffset: 400;
            animation: textAnimation 4s ease forwards;
        }

        @keyframes textAnimation {
            to {
                stroke-dashoffset: 0;
                fill: black;
                text-shadow: 2px 2px 5px white;
            }
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                text-shadow: 2px 2px 5px white;
            }
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);

            }
        }

        .next-btn {
            position: absolute;
            bottom: 20px;
            right: 30px;
            z-index: 10;
        }

        @media (max-width: 1068px) {
            .slide-block {
                flex-direction: column;
                text-align: center;
            }

            .bg-color {
                background: linear-gradient(to right, #ff9468 70%, #ff8961 100%);
                width: 100vw;
                /* height: 890px; */
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }

            h2.stroke-heading {
                font-size: 30px;
                font-weight: 600;
                color: black;
                text-align: start;
                opacity: 0;
                animation: fadeIn 3s ease forwards;
                position: relative;
            }

        }

        .custom-shape-divider-bottom-1750488578 {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1750488578 svg {
            position: relative;
            display: block;
            width: calc(168% + 1.3px);
            height: 140px;
        }

        .custom-shape-divider-bottom-1750488578 .shape-fill {
            fill: #FFFFFF;
        }

        button.next-btn {
            position: relative;
            top: -40px;
            left: 30px;
            outline: none;
            border: none;
            background-color: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(80%);
            padding: 5px 8px;
            border-radius: 20px;
            text-transform: uppercase;
            font-family: "Baloo 2", cursive;
            font-size: 20px;
            filter: drop-shadow(2px 5px 5px grey);
            display: flex;
            box-shadow: 1px 1px 2px white;
        }

        .arrow {
            width: 30px;
            animation: Blip 3s ease-in-out infinite;
        }

        @keyframes Blip {
            0% {
                filter: drop-shadow(0 0 0 white);
            }

            50% {
                filter: drop-shadow(1px 1px 3px white);
            }

            100% {
                filter: drop-shadow(0 0 0 white);
            }
        }
        /* this is categories div styling  */
             .container-catgari2{
      margin:5px 5px;
      height:130px;
      width:380px;
      border-radius:100px;
     }
     .main-categori{
      background:url('../images/categori-bg.png');
      background-size:auto;
      justify-content:center;
      margin-bottom:10px;
      margin-left:1px;
     
     }
     #main-cate-title{
      padding:50px 0 0 20px ;
      position: relative;
      bottom:15px;
      font-family: "Baloo 2", cursive;
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
      transform: scale(1.1);
      transition:0.4s ease;
     }
        .cate-name{
        position:relative; 
       width:160px;
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

     
      .cate-name{
      position:relative;
      width:100px;
      top:-100px;
      left:160px;
      color:white;
      font-style: normal;
      font-weight:500;
            font-family: "Baloo 2", cursive;
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
     /* this ends here  */
      /* this is pet-food cta  */
     .pet-food{
        background:red;
        margin:10px 0;
     }
     .pet-food-d{
        margin:30px 0;
        background:url('../images/bg.jpg');
        background-repeat:no-repeat;
        background-size:cover;
        border-radius:30px;
     }
     .pet-food-d img{
        width:350px;
        margin:10px 0;
        border-radius:30px;
        transition:0.4s ease-in-out;
     }
     .pet-food-d img:hover{
        transform:scale(1.1,1.1);
     }
     /* ends here  */
     .slider{
        /* width:200px;
        height:200px; */
                 background:url('../images/bg.jpg');

        border-radius:30px;
        /* margin:10px 0; */
        /* transition:0.4s ease-in-out; */
        margin-bottom:20px;

     }
     .slider:hover{
        /* transform:scale(1.1,1.1); */

     }

     .slider img{
        width:200px;
        height:200px;
        /* background:red;  */
        /* border:1px solid black; */
        border-radius:50%;
        margin:5px 45px;
        transition:0.4s ease-in-out;
        border:1px solid black;

     }
     .slider img:hover{
        transform:scale(1.1,1.1);
     }

    </style>
</head>

<body>

    <section class="bg-main bg-color">
        <div class="slider-container">
            <div id="sliderTrack">
                <!-- Slide 1 -->
                <div class="slide-block">
                    <div class="slide-text">
                        <h2 class="stroke-heading">Tasty Food</h2>
                        <svg viewBox="0 0 500 150">
                            <text x="0" y="70" class="animated-text2">Fresh Flavoured</text>
                            <text x="0" y="130" class="animated-text2">Dog Food</text>
                        </svg>
                        <p>Sedquis nis eleentum rhoncus sit amet in nisi. Phasellus tmpor.</p>
                    </div>
                    <div class="slide">
                        <img src="../images/pet1.png" alt="Pet 1" />
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide-block">
                    <div class="slide-text">
                        <h2 class="stroke-heading">Yummy & Tasty</h2>
                        <svg viewBox="0 0 500 150">
                            <text x="0" y="70" class="animated-text2">We Make</text>
                            <text x="0" y="130" class="animated-text2">The Best Food</text>
                        </svg>
                        <p>Sedquis nis eleentum rhoncus sit amet in nisi. Phasellus tmpor.</p>
                    </div>
                    <div class="slide">
                        <img src="../images/pet2.png" alt="Pet 2" />
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide-block">
                    <div class="slide-text">
                        <h2 class="stroke-heading">Budget Friendly</h2>
                        <svg viewBox="0 0 500 150">
                            <text x="0" y="70" class="animated-text2">Organic Food &</text>
                            <text x="0" y="130" class="animated-text2">Supplements</text>
                        </svg>
                        <p>Sedquis nis eleentum rhoncus sit amet in nisi. Phasellus tmpor.</p>
                    </div>
                    <div class="slide">
                        <img src="../images/pet3.png" alt="Pet 3" />
                    </div>
                </div>
            </div>

            <!-- Next Button -->
            <button class="next-btn" onclick="goNext()">Next <img src="../images/arrow.png" alt="arrow" class="arrow"></button>
        </div>
        <div class="custom-shape-divider-bottom-1750488578">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <!-- this categories container  -->
      
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
    <!-- this ends here  -->

     <!-- this is pets food main container with link and images  -->

        <div class="container-fluid px-4 pet-food-d text-center">
  <div class="row gx-5">
    <div class="col">
      <div class=""><img src="../images/pppp.png" width="380px" alt=""></div>
    </div>
    <div class="col">
      <div class=""><img src="../images/pppp.png" width="380px" alt=""></div>
    </div>
  </div>
</div>

<!-- ends here  -->
 <!-- last slider-pet-food  -->


<div class="container text-center slider">
  <h2 id="main-cate-title">Food For Pets<i class="fa-solid fa-paw" style="color: #ffac38;"></i><i class="fa-solid fa-paw" style="color: #ffac38;"></i></h2>

  <div class="row">
    <div class="col">
            <img src="../images/dog.jpg"  alt="">
      
    </div>
    <div class="col">
            <img src="../images/dog.jpg"  alt="">
      
    </div>
    <div class="col">
            <img src="../images/dog.jpg"  alt="">
      
    </div>
    <div class="col">
            <img src="../images/dog.jpg"  alt="">
      
    </div>
    <div class="col">
            <img src="../images/dog.jpg"  alt="">
      
    </div>
    <div class="col">
            <img src="../images/dog.jpg"  alt="">
      
    </div>
  </div>
</div>








<!-- <div class="container-fluid "> -->
       
     <!-- <div class="grid  slider">
  <div class="g-col-4">
            <img src="../images/dog.jpg"  alt="">

  </div>
  <div class="g-col-4">
            <img src="../images/dog.jpg"  alt="">

  </div>
  <div class="g-col-4">
            <img src="../images/dog.jpg"  alt="">

  </div> -->
<!-- </div> -->
<!-- <div class="slider">
            <img src="../images/dog.jpg"  alt="">
        </div>
        <div class="slider">
            <img src="../images/cat.webp"  alt="">

        </div>
        <div class="slider">
            <img src="../images/fish.png"  alt="">

        </div>
        <div class="slider">
            <img src="../images/bird.jpg"  alt="">

        </div>
        <div class="slider">
            <img src="../images/turtle.webp"  alt="">

        </div>
        <div class="slider">
            <img src="../images/rabit.webp"  alt="">

            </div> -->
</div>

<!-- here its end  -->



    <script>
        const sliderTrack = document.getElementById('sliderTrack');
        const totalSlides = sliderTrack.children.length;
        let counter = 0;

        function goNext() {
            counter = (counter + 1) % totalSlides;
            sliderTrack.style.transform = `translateX(-${counter * 100}vw)`;
        }

        setInterval(goNext, 10000);
    </script>

</body>

</html>

<?php include "../partial/_footer.php"; ?>