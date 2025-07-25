<?php
session_start();
include '../partial/_database.php'; // your DB connection

// Get user ID from session
$user_id = $_SESSION['user_id']; // ✅ Make sure the user is logged in!

// Get data from the form
$product_id = $_POST['product_id'];
$product_type = $_POST['product_type']; // 'pet' or 'food'
$quantity = $_POST['quantity'];

// ✅ Optional: Check if item already in cart for this user
$check = "SELECT * FROM cart 
          WHERE user_id='$user_id' AND product_id='$product_id' AND product_type='$product_type'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
  // Already in cart → update quantity
  $row = mysqli_fetch_assoc($result);
  $new_quantity = $row['quantity'] + $quantity;

  $update = "UPDATE cart SET quantity='$new_quantity' WHERE cart_id='{$row['cart_id']}'";
  mysqli_query($conn, $update);

} else {
  // Not in cart → insert new
  $insert = "INSERT INTO cart (user_id, product_id, product_type, quantity)
             VALUES ('$user_id', '$product_id', '$product_type', '$quantity')";
  mysqli_query($conn, $insert);
}

// ✅ Redirect to cart page or back to product page
header("Location: cart.php");
exit;
