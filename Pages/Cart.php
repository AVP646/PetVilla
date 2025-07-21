<?php include 'login_session.php' ?>
<?php include "../partial/_navbar.php"; ?>
<?php include "../partial/_database.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Your Cart</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .cart-container {
      background: #fff;
      padding: 30px;
      margin-top: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .product-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 5px;
    }

    .total-box {
      background-color: #f1f1f1;
      padding: 15px;
      border-radius: 8px;
    }

    .btn-checkout {
      background-color: #007bff;
      color: white;
    }

    .btn-checkout:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container cart-container">
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="thead-light text-center">
          <tr>
            <th>Product</th>
            <th>Name</th>
            <th>Price</th>
            <th>Cancel</th>
          </tr>
        </thead>
        <tbody>
          <!-- Product 1 -->
           <?php
       $query1 = "SELECT * FROM cart where user = '". $_SESSION['user']."'";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) > 0){
              $no = 0;
             while($row = mysqli_fetch_assoc($result1)){
              $no = $no + $row['price'];
                    echo "
      <tr class='text-center'>
            <td><img src='". $row['image']."' alt='Dog Food' class='product-img'></td>
            <td>". $row['name']."</td>
            <td>". $row['price']."</td>
<td class='subtotal'><a href='removecart.php?id=". $row['SrNo']."'><i class='fa-solid fa-xmark'></i></a></td>
          </tr>";
             }
            }
?>
        </tbody>
      </table>
    </div>

    <!-- Total Box -->
    <div class="row justify-content-end">
      <div class="col-md-4">
        <div class="total-box">
          <h5>Total: <span id="grand-total"><?php 
            if(mysqli_num_rows($result1) > 0){
          echo"₹".$no;
            }
            else{
              echo "add item first";
            }
          ?></span></h5>
         <a href="check.php"> <button class="btn btn-checkout btn-block mt-3">Proceed to Checkout</button></a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
