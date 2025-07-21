<?php include "../partial/_database.php"; ?>
<?php
  
$id = $_GET['id'];
$query = " DELETE  FROM cart where SrNo='". $id ."'";
$result = mysqli_query($conn,$query);

if($result){
    header("location:cart.php");
}
else{
    echo "not done";
}

?>