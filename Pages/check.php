 <?php 
include 'login_session.php' ?>
<?php
include "../partial/_database.php";

$user_id = $_SESSION['user_id'];

// Get cart items
$cart_query = "SELECT * FROM cart WHERE user_id='$user_id'";
$cart_result = mysqli_query($conn, $cart_query);

$total_amount = 0;
$cart_items = [];

while ($row = mysqli_fetch_assoc($cart_result)) {
  $cart_items[] = $row;

  $product_id = $row['product_id'];
  $product_type = $row['product_type'];
  $quantity = intval($row['quantity']); // ✅ always get quantity!

  if ($product_type == 'pet') {
    $price_query = "SELECT `pet-price` FROM pets WHERE pets_id='$product_id'";
    $price_column = 'pet-price';
  } else {
    $price_query = "SELECT `food-price` FROM food WHERE food_id='$product_id'";
    $price_column = 'food-price';
  }

  $price_result = mysqli_query($conn, $price_query);
  $price = mysqli_fetch_assoc($price_result)[$price_column];
  $price = floatval($price); // ✅ safe cast

  $subtotal = $price * $quantity;
  $total_amount += $subtotal; // ✅ add subtotal to total
}

// Insert order
mysqli_query($conn, "INSERT INTO orders (user_id, order_date, total_amount) VALUES ('$user_id', NOW(), '$total_amount')");
$order_id = mysqli_insert_id($conn);

// Insert order items
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

  mysqli_query($conn, "INSERT INTO order_items (order_id, product_id, product_type, quantity, price)
                       VALUES ('$order_id', '$product_id', '$product_type', '$quantity', '$price')");
}

// Clear cart
 $js = mysqli_query($conn, "DELETE FROM cart WHERE user_id='$user_id'");

// echo "✅ Order placed! Your Order ID is: $order_id | Total: ₹$total_amount";


// Assume you have order insertion code here
if ($js) {
  header("Location:index.php?order=success");
  exit();
} else {
  echo "Something went wrong.";
}
?>

