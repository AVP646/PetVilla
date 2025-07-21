 <?php 
include 'login_session.php' ?>
<?php 
// include "../partial/_navbar.php" ?>
<?php
 include "../partial/_database.php"; 
//  session_start();
 ?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $fullname = $_POST['fullName']; 
  $address = $_POST['address']; 
  $city = $_POST['city'];
  $mobile = $_POST['mobile'];
  $payment = $_POST['payment'];
  $user = $_SESSION['user'];


    $query4 = "INSERT INTO orders (`user`, `fullname`,`address`, `city`, `mobile`, `p-method`,`date`) VALUES ('$user', '$fullname', '$address', '$city', '$mobile','$payment',current_timestamp())";
    $result4 = mysqli_query($conn,$query4);
     if($result4){
        $queryCart = "SELECT * FROM cart WHERE user = '$user'";
        $resultCart = mysqli_query($conn, $queryCart);
        if(mysqli_num_rows($resultCart) > 0){
              $no = 0;

         while($row = mysqli_fetch_assoc($resultCart)){
           $name = $row['name'];
           $total = $no;

          $queryItem = " INSERT INTO `order_id` (`product-name`, `total`,`user`) VALUES ('$name', '$total','$user')";
          $result9 =  mysqli_query($conn, $queryItem);
              $no = $no + $row['price'];             

         }
             $dl = "DELETE FROM cart WHERE user= '".$_SESSION['user']."'";
    $result6 = mysqli_query($conn,$dl);
    header("location:index.php");


        }
            


    }
    else{
        echo "bc";
    }

     $dl = "DELETE FROM cart WHERE user= '".$_SESSION['user']."'";
    $result6 = mysqli_query($conn,$dl);
    header("location:index.php");

}
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pet Shop Checkout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background: linear-gradient(135deg, #f8f9fa, #e3f2fd);
      background-image: url('https://i.ibb.co/9G08HnS/pawprints.png');
      background-repeat: repeat;
      background-size: 100px;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', sans-serif;
      padding: 20px;
    }
    .checkout-card {
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      padding: 2rem;
      width: 100%;
      max-width: 700px; /* wider than before */
      text-align: center;
      animation: fadeIn 0.8s ease-in-out;
    }
    .logo {
      width: 80px;
      margin-bottom: 1rem;
    }
    .item-summary {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 1rem;
      text-align: left;
    }
    .item-summary img {
      width: 100px; /* bigger image for wider card */
      height: 100px;
      max-width: 100%;
      object-fit: cover;
      border-radius: 0.5rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .item-name {
      flex: 1;
      font-weight: 600;
      font-size: 1.2rem;
      color: #333;
      word-break: break-word;
    }
    .total {
      text-align: right;
      font-weight: 600;
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
      color: #333;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .checkout-card h2 {
      margin-bottom: 1rem;
      font-weight: 600;
      color: #333;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #6c63ff;
    }
    .btn-primary {
      background: #6c63ff;
      border: none;
    }
    .btn-primary:hover {
      background: #574fd6;
    }
  </style>
</head>
<body>
  <div class="checkout-card">
    <!-- Logo -->
    <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" alt="Pet Paw Logo" class="logo">
    <h2>Checkout</h2>

    <!-- Item Summary -->
     
  <?php
            $query1 = "SELECT * FROM cart where user = '". $_SESSION['user']."'";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) > 0){
              $no = 0;

             while($row = mysqli_fetch_assoc($result1)){
              $no = $no + $row['price'];

              echo "
              <div class='item-summary'>
                <img src='".$row['image']."' alt='Golden Retriever Puppy'>
      <div class='item-name'>".$row['name']." Puppy</div>
    </div>
              ";
            }
          }
           ?>

    <!-- Total -->
    <div class="total">
      Total: <?php 
      if(mysqli_num_rows($result1) > 0){
          echo"₹".$no;
            }
            else{
              echo "add item first";
            } ?>
    </div>

    <!-- Checkout Form -->
    <form method="POST" action="check.php">
      <div class="mb-3 text-start">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name">
      </div>
      <div class="mb-3 text-start">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
      </div>
      <div class="mb-3 text-start">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
      </div>
      <div class="mb-3 text-start">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number">
      </div>
      <div class="mb-3 text-start">
        <label for="payment" class="form-label">Payment Method</label>
        <select class="form-select" id="payment" name="payment">
          <option selected disabled>Choose payment method</option>
          <option value="cod">Cash on Delivery</option>
          <option value="card">Credit/Debit Card</option>
          <option value="upi">UPI</option>
        </select>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Place Order</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
