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
 $sql = $con->query("SELECT * FROM users")
?>
<fieldset class="content" style="margin-left: 30px; margin-right: 30px; margin-top: 100px;">
<h1 align="center" style="color: white; background-color: darkred; margin-top: 0px;">Users</h1>
            <hr>
            <div class="table-responsive">
    <table class="table table-striped" border="1">
        <thead>
      <tr>
        <th>S/N</th>
        <th>Full Name</th>
        <th>Gender</th>
        <th>E-mail</th>
        <th>Contact</th>
        <th>Residential Address</th>
        <th>Password</th>
         <th>Photograph</th>
         <th>Role</th>
          <th>Registered Date/Time</th>
      </tr>
    </thead>
     <?php $no=1;  while ($row = mysqli_fetch_array($sql)) { ?>
    <tbody>
         <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['fullname'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['contact'];?></td>
          <td><?php echo $row['resi_address'];?></td>
          <td><?php echo $row['password'];?></td>
          <td><img src="../Admin/Images/<?php echo $row['profile_image'];  ?>" class="img-responsive" width="80" hight="110"></td>
          <td><?php echo $row['role'];?></td>
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