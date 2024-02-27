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
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $contact = $_POST['contact'];
    $nationality = $_POST['nationality']; 
    $state = $_POST['state'];  
    $govt = $_POST['local_govt'];
    $resi_address = $_POST['resi_address'];
    $crime = $_POST['crime'];
    $description = $_POST['description'];
    date_default_timezone_set("Africa/Lagos");
    $create_datetime = date("M d, Y h:i a");

    $sql =  mysqli_query($con, "SELECT * FROM criminals WHERE fullname = '$fullname'")or die(mysqli_error($con));
    $count = mysqli_num_rows($sql);

    if($count > 0){
      echo "<div class='notifier' style= 'margin-top: 200px;'>
                  <h3 style ='text-align: center; color: white;'>Criminal Already Exists</h3><br/>
                  <p class='link'><a href='addcrime.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
    } else{
    
        $query = "INSERT INTO `criminals` (fullname, gender, birth, contact, nationality, state, local_govt, resi_address, crime, description, create_datetime) VALUES ('$fullname', '$gender','$birth', '$contact', '$nationality', '$state', '$govt', '$resi_address', '$crime', '$description', '$create_datetime')";
     
    
     $result   = mysqli_query($con, $query)or die(mysqli_error($con));
	 
   if ($result) {
             echo "<div class='notifier' style= 'margin-top: 200px;'>
                  <h3 style ='text-align: center; color: white;'>Criminal Registered Successfully</h3><br/>
                  <p class='link'><a href='addcrime.php' class = 'btn btn-primary'>OK</a></p>
    
                  </div>";
    } 
  }

  }else{
	 ?>

<fieldset class="content" style="margin-left: 30px; margin-right: 30px; margin-top: 100px;">
	<h1 align="center" style="color: white; background-color: darkred; margin-top: 0px;">Register Criminal</h1>
<form action="addcrime.php" method="POST" class="form" enctype="multipart/form-data" style=" width: 400px; height: auto; background-color: darkred;">
    <input required="" style="margin-top: 5px;" name="fullname" type="text" class="input" id="" placeholder="Full Name"><br>
      <input required="" name="gender" type="text" class="input" id="" placeholder="Gender"><br>
      <input required="" name="birth" type="date" class="input" id="" placeholder="DOB"><br>
       <input required="" name="contact" type="number" class="input" id="" placeholder="Contact"><br>
       <input required="" name="nationality" type="text" class="input" id="" placeholder="Nationality"><br>
       <input required="" name="state" type="text" class="input" id="" placeholder="State"><br>
       <input required="" name="local_govt" type="text" class="input" id="" placeholder="L.G.A"><br>
     <input required="" name="resi_address" type="text" class="input" id="" placeholder="Address"><br>
     <input required="" name="crime" type="text" class="input" id="" placeholder="Crime"><br>
     <input required="" name="description" type="text" class="input" id="" placeholder="Crime Description"><br>
 
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
