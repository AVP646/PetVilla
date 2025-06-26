<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Poppins:wght@400;600&display=swap');

    /* .container-catgari{
      padding-top:100px;
      display:flex;
      align-items:center;
      justify-content:center;
     } */
    /* .container-catgari1{
      padding-top:20px;
      border:3px solid green;
     } */
    .container-catgari2 {
      margin: 5px 5px;
      height: 130px;
      width: 380px;
      border-radius: 100px;
    }

    .main-categori {
      /* height:500px; */
      background: url('../images/categori-bg.png');
      background-size: auto;
      justify-content: center;
      margin-bottom: 10px;
      margin-left: 1px;
    }

    #main-cate-title {
      padding: 50px 0 0 20px;
      position: relative;
      bottom: 15px;
      font-family: "Baloo 2", cursive;
    }

    #main-cate-title i {
      padding: 0 0 0 15px;
      transform: rotate(30deg);
    }

    .cate-imges {
      height: 130px;
      width: 365px;
      border-radius: 100px;
    }

    .container-catgari2:hover {

      .cate-imges:hover {
        transform: scale(1.1);
        transition: 0.4s ease;
      }

      .cate-name {
        position: relative;
        width: 160px;
        top: -100px;
        left: 180px;
        transition: 0.4s ease;
        /* border:1px solid black; */
      }

      .cate-name h5 {
        color: #fa8d11;
        font-weight: 900;
      }

      .cate-arrow {
        background: #fa8d11;
      }

    }


    .cate-name {
      position: relative;
      width: 100px;
      top: -100px;
      left: 160px;
      color: white;
      font-family: "Poppins", sans-serif;
      font-style: normal;
      font-weight: 500;
    }

    .cate-arrow {
      padding: 10px;
      border-radius: 50%;
      position: relative;
      left: 100px;
      bottom: 40px;
      background: white;
      color: black;
    }
  </style>
</head>

<body>
  <!-- Category Item  -->

  <div class="container-fluid main-categori row g-4">
    <h2 id="main-cate-title">Shop By Pet<i class="fa-solid fa-paw" style="color: #ffac38;"></i><i class="fa-solid fa-paw" style="color: #ffac38;"></i></h2>

    <div class="col-md-4 col-12 container-catgari2">
      <img src="../images/dog-cate.jpg" class="cate-imges" alt="Dog">
      <div class="cate-name">
        <h5>Dogs</h5>
        <h6 class="">6 types</h6>
        <i class="fa-solid fa-arrow-right cate-arrow"></i>
      </div>
    </div>

    <div class="col-md-4 col-12 container-catgari2">
      <img src="../images/cate-cate.jpg" class="cate-imges" alt="Dog">
      <div class="cate-name">
        <h5>Cats</h5>
        <h6 class="">2 types</h6>
        <i class="fa-solid fa-arrow-right cate-arrow"></i>
      </div>
    </div>

    <div class="col-md-4 col-12 container-catgari2">
      <img src="../images/fish-cate.jpg" class="cate-imges" alt="Dog">
      <div class="cate-name">
        <h5>Fishes</h5>
        <h6 class="">10 types</h6>
        <i class="fa-solid fa-arrow-right cate-arrow"></i>
      </div>
    </div>

    <div class="col-md-4 col-12 container-catgari2">
      <img src="../images/bird-cate.jpg" class="cate-imges" alt="Dog">
      <div class="cate-name">
        <h5>Birds</h5>
        <h6 class="">7 types</h6>
        <i class="fa-solid fa-arrow-right cate-arrow"></i>
      </div>
    </div>

    <div class="col-md-4 col-12 container-catgari2">
      <img src="../images/turtle-cat.jpg" class="cate-imges" alt="Dog">
      <div class="cate-name">
        <h5>Turtles</h5>
        <h6 class="">3 types</h6>
        <i class="fa-solid fa-arrow-right cate-arrow"></i>
      </div>
    </div>

    <div class="col-md-4 col-12 container-catgari2">
      <img src="../images/rabit-cat.jpg" class="cate-imges" alt="Dog">
      <div class="cate-name">
        <h5>Rabits</h5>
        <h6 class="">2 types</h6>
        <i class="fa-solid fa-arrow-right cate-arrow"></i>
      </div>
    </div>
  </div>
</body>

</html>