<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</head>

<body>
	<header style="position: fixed; top: 0; width: 100%;">
		<div style="height: 120px; background: darkred;">
			<div style="width: 100%; height: auto; padding-top: 20px;">
			<h1 style="text-align: center;color: white; font-family: tahoma;">Security Information System</h1>
			</div>
		</div>
		<nav style="border-radius: 0px;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="adduser.php">Add User</a></li>
        <li><a href="users.php">View Users</a></li>
         <li><a href="officers.php">View Officers</a></li>
         <li><a href="criminals.php">View Criminals</a></li>
          <li><a href="search.php">Search Criminal</a></li>
          <li><a href="searcho.php">Search Officer</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
	</header>

























<?php include 'Include/scripts.php';  ?>
</body>
</html>