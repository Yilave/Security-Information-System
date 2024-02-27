<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#3e4144;">

	 <div style="background:  height: 100%;
">
  
<div class="container" style=" width: 90%; background-color:gray;  margin: 30px auto; ">
<h1 align="center" style="color: white; background-color: darkred;">User Login</h1>
<?php
 include 'DB/db.php'; 
session_start();
if (isset($_POST['login'])) {
  $email =$_POST['username'];
$password =$_POST['password'];
$sql = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
 
$row = mysqli_fetch_array($sql);
 

if($row['password'] == $password){
$_SESSION['email'] = $row['email'];

$_SESSION['role'] = $row['role'];

$role = $_SESSION['role'];

if ($role == 'User') {
 header('location: User/home.php');
}elseif ($role == 'Admin') {
  header('location: Admin/home.php');
}
}else{
    echo "<div class='notifier' style= 'margin-top: 50px;'>
                  <h3 style ='text-align: center; color: white;'>Wrong Username/Password combination</h3><br/>
                  <p class='link'><a href='index.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
  

}

 }else{
?>
	<form method="POST" class="form" name="login" style=" width: 400px; height: auto; background-color: darkred; margin-top: 50px;">
	
    <input style="margin-top: 40px;" required="" name="username" type="text" class="input" id="" placeholder="User ID"><br>
     
    <input required="" type="password" name="password" class="input" id="pwd" placeholder="Password"><br>
 
  <input type="submit" name="login" value="Login" class="login-button">
  
</form>
<?php } ?>


<?php include 'footer.php'; ?>

</body>
</html>