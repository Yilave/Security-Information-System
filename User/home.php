<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style type="text/css">
	</style>
</head>
<body style="background: #2d3339;">
	<?php 
	include '../DB/db.php'; 
	 include '../Header/user.php';
		session_start();
		$user = $_SESSION['email'];
		 $sql = mysqli_query($con, "SELECT * FROM users WHERE email = '$user'") or die(mysqli_error($con));
 
$row = mysqli_fetch_array($sql);
 $name = $row['fullname'];
 $role = $row['role'];
 $profileImageName = $row['profile_image'];
 


	?>
	<div class="alert alert-success" id="alert-success" style="margin: 100px auto 20px; text-align: center; width: 70%;">
  <strong>Welcome <?php echo $name; ?>, You are logged in Succesfully as a <?php echo $role; ?>.</strong>
</div>

<div class="well" style="width: 570px; margin: 20px auto 20px;" align="center">
<h1 align="center" style="color: white; background-color: darkred;">User Information</h1>
 <div  class="img" style="">  <img src="../Admin/Images/<?php echo $profileImageName;  ?>" id="profileDisplay"; onclick="triggerClick()" class="img-responsive">
        </div>
	<div class="list-group">
  		<li class="list-group-item"><b>Name:</b> <?php echo $name; ?></li>
  		<li class="list-group-item"><b>Email:</b> <?php echo $row['email']; ?></li>
  		<li class="list-group-item"><b>Contact:</b> <?php echo $row['contact']; ?></li>
  		<li class="list-group-item"><b>Gender:</b> <?php echo $row['gender']; ?></li>
  		<li class="list-group-item"><b>Residential Address: </b><?php echo $row['resi_address']; ?></li>
  		<li class="list-group-item"><b>Role:</b> <?php echo $row['role']; ?></li>
	</div>
		
	
</div>

	<script type="text/javascript" charset="utf-8">
    //You can either use the jQuery key word or a dollar sign to call jQuery functions
    //The below code hides the HTML element with the selector name 'warning', and displays it slowly
    jQuery(function(){
    $("#alert-success").hide().show("slow");
});
  </script>
  <?php include '../footer.php'; ?>
</body>
</html>