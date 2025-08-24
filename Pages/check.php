<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$user_id = $_SESSION['user_id'];

// Get cart items

include 'login_session.php';
include "../partial/_database.php";

$user_id = $_SESSION['user_id'];

// Get address info from checkout form
$phone   = $_POST['phone'];
$address = $_POST['address'];
$city    = $_POST['city'];
$state   = $_POST['state'];
$pincode = $_POST['pincode'];

// Get cart items
$cart_query = "SELECT * FROM cart WHERE user_id='$user_id'";
$cart_result = mysqli_query($conn, $cart_query);

$total_amount = 0;
$cart_items = [];

while ($row = mysqli_fetch_assoc($cart_result)) {
    $cart_items[] = $row;
    $product_id = $row['product_id'];
    $product_type = $row['product_type'];
    $quantity = intval($row['quantity']);

    if ($product_type == 'pet') {
        $price_query = "SELECT `pet-price` FROM pets WHERE pets_id='$product_id'";
        $price_column = 'pet-price';
    } else {
        $price_query = "SELECT `food-price` FROM food WHERE food_id='$product_id'";
        $price_column = 'food-price';
    }

    $price_result = mysqli_query($conn, $price_query);
    $price = mysqli_fetch_assoc($price_result)[$price_column];
    $price = floatval($price);

    $subtotal = $price * $quantity;
    $total_amount += $subtotal;
}

// 1️⃣ Insert order first
$insert_order = "INSERT INTO orders 
(user_id, order_date, total_amount, payment_status, phone, address, city, state, pincode) 
VALUES ('$user_id', NOW(), '$total_amount', 'pending', '$phone', '$address', '$city', '$state', '$pincode')";

if (!mysqli_query($conn, $insert_order)) {
    die("Order insert failed: " . mysqli_error($conn));
}

$order_id = mysqli_insert_id($conn); // Get the newly created order ID

// 2️⃣ Insert order items
foreach ($cart_items as $item) {
    $product_id = $item['product_id'];
    $product_type = $item['product_type'];
    $quantity = intval($item['quantity']);

    if ($product_type == 'pet') {
        $price_query = "SELECT `pet-price` FROM pets WHERE pets_id='$product_id'";
        $price_column = 'pet-price';
    } else {
        $price_query = "SELECT `food-price` FROM food WHERE food_id='$product_id'";
        $price_column = 'food-price';
    }

    $price_result = mysqli_query($conn, $price_query);
    $price = mysqli_fetch_assoc($price_result)[$price_column];
    $price = floatval($price);

    mysqli_query($conn, "INSERT INTO order_items 
    (order_id, product_id, product_type, quantity, price) 
    VALUES ('$order_id', '$product_id', '$product_type', '$quantity', '$price')");
}

// 3️⃣ Clear cart
mysqli_query($conn, "DELETE FROM cart WHERE user_id='$user_id'");

// 4️⃣ Redirect after success
header("Location:index.php?order=success");
exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    
<form action="check.php" method="POST">
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="text" name="address" placeholder="Address" required>
    <input type="text" name="city" placeholder="City" required>
    <input type="text" name="state" placeholder="State" required>
    <input type="text" name="pincode" placeholder="Pincode" required>
    <button type="submit">Place Order</button>
</form>


</body>
</html>


