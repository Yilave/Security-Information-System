<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body style="background: #2d3339;">
	<?php 
	 include '../DB/db.php'; 
	 include '../Header/admin.php';
	 if ((isset($_POST['send']))) {


	 	$profileImageName = time() . '_' . $_FILES['profileImage']['name'];

    $target = 'Images/' . $profileImageName;
     
    $role = $_POST['role']; 
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $resi_address = $_POST['resi_address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];  
    $role1 = $role;
    date_default_timezone_set("Africa/Lagos");
    $create_datetime = date("M d, Y h:i a");

    $sql =  mysqli_query($con, "SELECT * FROM users WHERE email = '$email'")or die(mysqli_error($con));
    $count = mysqli_num_rows($sql);

    if($count > 0){
      echo "<div class='notifier' style= 'margin-top: 200px;'>
                  <h3 style ='text-align: center; color: white;'>User Already Exists</h3><br/>
                  <p class='link'><a href='adduser.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
    } else{
    if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
        $query = "INSERT INTO `users` (fullname, gender, email, contact, resi_address, password, confirm_password, profile_image, role, create_datetime) VALUES ('$fullname', '$gender', '$email','$contact', '$resi_address', '$password', '$confirm_password', '$profileImageName', '$role1', '$create_datetime')";
	 	

     $result   = mysqli_query($con, $query)or die(mysqli_error($con));
	 }
   if ($result) {
             echo "<div class='notifier' style= 'margin-top: 200px;'>
                  <h3 style ='text-align: center; color: white;'>User Registered Successfully</h3><br/>
                  <p class='link'><a href='adduser.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
    } 
  }

  }else{
	 ?>

<fieldset class="content" style="margin-left: 30px; margin-right: 30px; margin-top: 100px;">
	<h1 align="center" style="color: white; background-color: darkred; margin-top: 0px;">Register User</h1>
<form action="adduser.php" method="POST" class="form" enctype="multipart/form-data" style=" width: 400px; height: auto; background-color: darkred;">
    <input required="" style="margin-top: 5px;" name="fullname" type="text" class="input" id="" placeholder="Full Name"><br>
    <input required="" name="gender" type="text" class="input" id="" placeholder="Gender"><br>
    <input required="" name="email" type="email" class="input" id="" placeholder="E-mail"><br>
    <input required="" name="contact" type="number" class="input" id="" placeholder="Contact"><br>
    <input required="" name="resi_address" type="text" class="input" id="" placeholder="Residential Address"><br>
    <input required="" name="password" type="password" class="input" id="" placeholder="Password"><br>
    <input required="" name="confirm_password" type="password" class="input" id="" placeholder="Confrim Password"><br>
    <select required=""  class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" name="role" style="font-size: 15px; width: 80%; margin-left: 35px; margin-bottom:25px; padding: 11px; border: 1px solid #ccc; border-radius: 3px; background-color: white;">
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <option>Select User Role</option>
            <option value="User">User</option>
    </ul>
     </select>
     <fieldset style="border: 2px solid white; margin-top: 10px;">
            <legend style="text-align: center; color: white;">Upload the user's valid photograph</legend>
        

        <div  class="img" style="">  <img src="Images/default.png" id="profileDisplay"; onclick="triggerClick()" class="img-responsive">
        </div>
        <input style="margin-bottom: 7px;" type="file" name="profileImage" onchange="displayImage(this)"  id="profileImage" autofocus="true">
        </fieldset>
 
  <input type="submit" name="send" value="Register" class="login-button">
		
	

</form>	
</fieldset>


<?php
}
?>



<script type="text/javascript" src="scripts.js"></script>
<?php include '../footer.php'; ?>
</body>
</html>