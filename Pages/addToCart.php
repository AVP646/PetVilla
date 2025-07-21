<?php require "../partial/_database.php"; ?>
<?php

$id = $_GET['id'];
$query = " SELECT * FROM pets where SrNo='". $id ."'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);

    session_start();

    $image = $row['pet-image'];
    $name = $row['pet-name'];
    $prize = $row['pet-price'];
    $user1 = $_SESSION['user'];

    $query2 = "INSERT INTO cart (`image`, `name`, `price`, `user`) VALUES ('$image', '$name', '$prize', '$user1')";
    $result2 = mysqli_query($conn,$query2);

    if($result2){
        header("location:pet-page.php");
    }
    else{
        echo "kya yaar";
    }

   
}


?>
