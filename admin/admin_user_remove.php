<?php include "../partial/_database.php"; ?>
<?php   
    session_start(); 
?>
<?php
  
$id = $_GET['id'];
$query = " DELETE  FROM users where SrNo='". $id ."'";
$result = mysqli_query($conn,$query);

if($result){
    $query2 = " DELETE  FROM cart WHERE user= ".$_SESSION['user']."";
    header("location:admin_users.php");
}
else{
    echo "not done";
}

?>