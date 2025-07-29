<?php 
include 'login_session.php'; 
include "../partial/_database.php"; 

// Fetch user data
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE user_id='$user_id'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if(isset($_POST['update'])) {
  $fname = $_POST['fname'];
  $lname =  $_POST['lname'];
  $email = $_POST['email'];
  $phone =$_POST['phone'];

  $update_query = "UPDATE users SET 
    fname='$fname', 
    lname='$lname',
    email='$email',
    Mno='$phone'
    WHERE user_id='$user_id'";

  if(mysqli_query($conn, $update_query)) {
    // Update session data too

    $_SESSION['name'] = $fname;
    $_SESSION['sur'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['Mno'] = $phone;


    header("Location: user.php?success=1");
    exit();
  } else {
    echo "Error updating profile!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Profile | PetVilla</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="p-4">
  <div class="container">
    <h2>Edit Profile</h2>
    <form method="POST">
      <div class="mb-3">
        <label class="form-label">First Name</label>
        <input type="text" name="fname" class="form-control" value="<?php echo $user['fname']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">last Name</label>
        <input type="text" name="lname" class="form-control" value="<?php echo $user['lname']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" value="<?php echo $user['Mno']; ?>" required>
      </div>
      <button type="submit" name="update" class="btn btn-success">Save Changes</button>
      <a href="profile.php" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</body>
</html>
