<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-catgari{
      /* padding-top:100px; */
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
      background:url('../images/categori-bg.png');
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
    </style>
</head>
<body>
    <div class="container-fluid main-categori">
  <h2 id="main-cate-title">Shop By Pet<i class="fa-solid fa-paw" style="color: #ffac38;"></i><i class="fa-solid fa-paw" style="color: #ffac38;"></i></h2>
  <div class="container-fluid container-catgari container-catgari1 ">
    <div class="container-catgari2">
      <img src="../images/dog-cate.jpg" class="cate-imges" alt="">
    <!-- <h5>dogs</h5>
    <p>nice</p> -->

    </div>
    <div class="container-catgari2">
      <img src="../images/cate-cate.jpg" class="cate-imges" alt="">
    </div>
    <div class="container-catgari2">
      <img src="../images/fish-cate.jpg" class="cate-imges" alt="">
    </div>
  </div>

 <div class="container-fluid container-catgari ">
  <div class="container-catgari2">
    <img src="../images/bird-cate.jpg" class="cate-imges" alt="">
  </div>
  <div class="container-catgari2">
         <img src="../images/turtle-cat.jpg" class="cate-imges" alt="">

  </div>
  <div class="container-catgari2">
    <img src="../images/rabit-cat.jpg" class="cate-imges" alt="">
  </div>
 </div>

</div>
</body>
</html>