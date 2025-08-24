<?php include 'login_session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - PetVilla</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #f9f9f9, #fff6f0);
            font-family: 'Poppins', sans-serif;
        }
        .checkout-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
            border: 2px solid #ffd5a5;
        }
        .checkout-title {
            text-align: center;
            font-weight: 600;
            color: #ff7f50;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #ffd5a5;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #ff7f50;
            box-shadow: 0 0 10px rgba(255,127,80,0.2);
        }
        .btn-petvilla {
            background: #ff7f50;
            color: white;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            transition: 0.3s;
            width: 100%;
        }
        .btn-petvilla:hover {
            background: #ff6333;
            transform: translateY(-2px);
        }
        .icon-input {
            position: relative;
        }
        .icon-input i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #ff7f50;
        }
        .icon-input input {
            padding-left: 40px;
        }
    </style>
</head>
<body>

<div class="checkout-container">
    <h2 class="checkout-title"><i class="fa-solid fa-paw"></i> Checkout</h2>
    <form action="check.php" method="POST">

        <div class="mb-3 icon-input">
            <i class="fa-solid fa-phone"></i>
            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
        </div>

        <div class="mb-3 icon-input">
            <i class="fa-solid fa-location-dot"></i>
            <input type="text" class="form-control" name="address" placeholder="Address" required>
        </div>

        <div class="mb-3 icon-input">
            <i class="fa-solid fa-city"></i>
            <input type="text" class="form-control" name="city" placeholder="City" required>
        </div>

        <div class="mb-3 icon-input">
            <i class="fa-solid fa-map"></i>
            <input type="text" class="form-control" name="state" placeholder="State" required>
        </div>

        <div class="mb-3 icon-input">
            <i class="fa-solid fa-map-pin"></i>
            <input type="text" class="form-control" name="pincode" placeholder="Pincode" required>
        </div>

        <button type="submit" class="btn btn-petvilla">
            <i class="fa-solid fa-shopping-cart"></i> Place Order
        </button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
