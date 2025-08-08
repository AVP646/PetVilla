<?php include "../partial/_database.php"; ?>
<?php   
    session_start(); 
?>
<?php
  
$id = $_GET['id'];
$query = " DELETE  FROM admins where id='". $id ."'";
$result = mysqli_query($conn,$query);

if($result){
    header("location:admin.php");
}
else{
    echo "not done";
}

?>