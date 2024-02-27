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
	 include '../Header/user.php';
	 if ((isset($_POST['send']))) {




   
    $fullname = $_POST['fullname'];
    $resi_address = $_POST['resi_address'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth']; 
    $age = $_POST['age'];  
    $status = $_POST['status'];
    $height = $_POST['height'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    
    
   
   
   
    date_default_timezone_set("Africa/Lagos");
    $create_datetime = date("M d, Y h:i a");

    $sql =  mysqli_query($con, "SELECT * FROM officers WHERE email = '$email'")or die(mysqli_error($con));
    $count = mysqli_num_rows($sql);

    if($count > 0){
      echo "<div class='notifier' style= 'margin-top: 200px;'>
                  <h3 style ='text-align: center; color: white;'>Officer Already Exists</h3><br/>
                  <p class='link'><a href='addofficer.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
    } else{
    
        $query = "INSERT INTO `officers` (fullname, resi_address, gender, birth, age, status, height, contact, email, create_datetime) VALUES ('$fullname', '$resi_address','$gender', '$birth', '$age', '$status', '$height', '$contact', '$email', '$create_datetime')";
     
    
     $result   = mysqli_query($con, $query)or die(mysqli_error($con));
	 
   if ($result) {
             echo "<div class='notifier' style= 'margin-top: 200px;'>
                  <h3 style ='text-align: center; color: white;'>Officer Registered Successfully</h3><br/>
                  <p class='link'><a href='addofficer.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
    } 
  }

  }else{
	 ?>

<fieldset class="content" style="margin-left: 30px; margin-right: 30px; margin-top: 100px;">
	<h1 align="center" style="color: white; background-color: darkred; margin-top: 0px;">Register Officer</h1>
<form action="addofficer.php" method="POST" class="form" enctype="multipart/form-data" style=" width: 400px; height: auto; background-color: darkred;">
    <input required="" style="margin-top: 5px;" name="fullname" type="text" class="input" id="" placeholder="Full Name"><br>
     <input required="" name="resi_address" type="text" class="input" id="" placeholder="Address"><br>
     <input required="" name="gender" type="text" class="input" id="" placeholder="Gender"><br>
      <input required="" name="birth" type="date" class="input" id="" placeholder="DOB"><br>
      <input required="" name="age" type="text" class="input" id="" placeholder="Age"><br>
      <input required="" name="status" type="text" class="input" id="" placeholder="Status"><br>
       <input required="" name="height" type="text" class="input" id="" placeholder="Height"><br>
         <input required="" name="contact" type="number" class="input" id="" placeholder="Contact"><br>
      <input required="" name="email" type="email" class="input" id="" placeholder="E-mail"><br>
     
   
   
   
    
    
   
   
   
     
 
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