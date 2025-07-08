<?php include "../partial/_navbar.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
      .mini-slider{
        background:red;
      }
      .im-div{
        height:300px;
        width:230px;
        border:1px solid black;
        margin:10px 10px;
        border-radius:30px;
        transition:0.3s ease-in-out;
      }
      .im-div img{
        height:200px;
        width: 200px;
        border-radius:5px;
        border:1px solid black;
      }
       .im-div button{
        width:100px;
        height:30px;
        text-align:center;
       }
      .im-div:hover{
        transform:scale(1.1,1.1);
      }
      .im-div h6{
      font-family: "Poppins", sans-serif;
      font-style: normal;
      font-weight: 900;
      text-transform:capitalize;
      }
    </style>
</head>
<body>
  <div class="container-fluid overflow-hidden  border my-5">
      <h2><i class="fa-solid fa-sort-down"></i>Filter</h2>
  <div class="row gy-5">
     <div class="col-3 border mini-slider">
      <div class="p-3">Custom column padding</div>
    </div> 
    <div class="col-9 border">
      <div class="p-3">
        <!-- this is second start here  -->
              <div class="container text-center">
  <div class="row align-items-start">
    <div class="col im-div">
        <img src="../images/dog.jpg"  alt="">
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">View</button>
        <button class="btn btn-danger">Add</button>

    </div>
    <div class="col im-div">
        <img src="../images/dog.jpg"  alt="">
        
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">view</button>
        <button class="btn btn-danger">Add</button>
    </div>
    <div class="col im-div">
           <img src="../images/dog.jpg"  alt="">
          
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">view</button>
        <button class="btn btn-danger">Add </button>

    </div>
     <div class="col im-div">
        <img src="../images/dog.jpg"  alt="">
        
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">view</button>
        <button class="btn btn-danger">Add</button>
    </div>
    <div class="col im-div">
        <img src="../images/dog.jpg"  alt="">
        
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">View</button>
        <button class="btn btn-danger">Add</button>
    </div>
    <div class="col im-div">
        <img src="../images/dog.jpg"  alt="">
        
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
        <button class="btn btn-danger">Add</button>
    </div> 
  </div>
</div>
<!-- this second ens here  -->
      </div>
    </div>
  </div>
</div>
    
<!-- ok  -->
    <!-- <div class="container text-center">
  <div class="row">
    <div class="col">
        <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    <div class="col">
  <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>    </div>
    <div class="col">
        <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
  </div>
</div>

< pk  S>

<div class="container-fluid text-center">
  <div class="row">
    <div class="col-3 ok">
      1 of 3
    </div>
    <div class="col-9 border">
            <div class="container overflow-hidden text-center">
  <div class="row gy-5">
    <div class="col-3 border">
      <div class="col">
        <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    </div>
    <div class="col-3 border">
      <div class="col">
        <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    </div>
    <div class="col-3 border">
      <div class="col">
        <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    </div> -->
    <!-- <div class="col-3 border">
      <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    <div class="col-3 border">
      <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="" height="" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    <div class="col-3 border">
      <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    <div class="col-3 border">
      <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    <div class="col-3 border">
      <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    <div class="col-3 border">
      <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    <div class="col-3 border">
      <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    <div class="col-3 border">
      <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    <div class="col-3 border">
      <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div>
    </div>
    <div class="col-3 border">
      <div class="p-3 im-div">
        <img src="../images/dog.jpg" width="200px" height="200px" alt="">
        <i class="fa-solid fa-cart-shopping"></i><br>
          <i class="fa-solid fa-heart"></i>
        <h6>bulldog</h6>
        <h6>400$</h6>
        <button class="btn btn-danger">Adopt me</button>
      </div> -->
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</body>
</html>
<?php include "../partial/_footer.php"; ?>