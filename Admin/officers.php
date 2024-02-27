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
 $sql = $con->query("SELECT * FROM officers")
?>
<fieldset class="content" style="margin-left: 30px; margin-right: 30px; margin-top: 100px;">
 <h1 align="center" style="color: white; background-color: darkred; margin-top: 0px;">Officers</h1>
            <hr>
            <div class="table-responsive">
    <table class="table table-striped" border="1">
        <thead>
      <tr>
        <th>S/N</th>
        <th>Full Name</th>
        <th>Residential Address</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Age</th>
        <th>Status</th>
        <th>Height</th>
         <th>Contact</th>         
          <th>Email</th>
      
          <th>Registered Date/Time</th>
      </tr>
    </thead>
     <?php $no=1;  while ($row = mysqli_fetch_array($sql)) { ?>
    <tbody>
         <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['fullname'];?></td>
         <td><?php echo $row['resi_address'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['birth'];?></td>
          <td><?php echo $row['age'];?></td>
           <td><?php echo $row['status'];?></td>
            <td><?php echo $row['height'];?></td>
             <td><?php echo $row['contact'];?></td>         
          <td><?php echo $row['email'];?></td>
  
          <td><?php echo $row['create_datetime'];?></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>
</fieldset>

	








<script type="text/javascript" src="scripts.js"></script>
<?php include '../footer.php'; ?>
</body>
</html>