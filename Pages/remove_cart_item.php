<?php
include "../partial/_database.php";
session_start();

if (isset($_GET['id'])) {
    $cart_id = intval($_GET['id']);
    $user_id = $_SESSION['user_id'];

    // Delete only the logged-in user's item
    $query = "DELETE FROM cart WHERE cart_id = '$cart_id' AND user_id = '$user_id'";
    if (mysqli_query($conn, $query)) {
        header("Location: cart.php?removed=1");
        exit();
    } else {
        echo "Error removing item.";
    }
} else {
    header("Location: cart.php");
    exit();
}
?>
