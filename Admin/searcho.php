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
     include '../Header/admin.php';
     ?>
     <div class="container">
     
            <fieldset class="content" style="margin-left: 30px; margin-right: 30px; margin-top: 100px;">
    <h1 align="center" style="color: white; background-color: darkred; margin-top: 0px;">Search Officer</h1>
    <form method="GET" class="form" style=" width: 400px; height: auto;">
         <input required="" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" name="search" type="text" class="input" id="" placeholder="Search Criminal">
         <button style="border: 1px solid #ccc; padding: 12.4px; margin-left: 0px;  border-radius: 3px;" type="submit" class="glyphicon glyphicon-search"></button>
    </form>
            </fieldset>

     </div>

       <div class="table-responsive" style="margin-top: 5px;">
    <table class="table table-striped" border="1">
        <thead>
            <style type="text/css">
                th{
                    color: white;
                }
            </style>
      <tr>
        <th>ID</th>
        <th>Full Name</th>
          <th>Residential Address</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Age</th>
        <th>Status</th>
        <th>Height</th>
        <th>Contact</th>
         <th>E-Mail</th>
           
          <th>Registered Date/Time</th>
      </tr>
    </thead>
     
    <tbody>
        <?php 
        if (isset($_GET['search'])) {
            # code...
            $filtervalues = $_GET['search'];
            $query = "SELECT * FROM officers WHERE CONCAT(fullname,resi_address,gender,birth,age,status,height,contact,email,create_datetime) LIKE '%$filtervalues%'";

            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                # code...
                foreach ($query_run as $items) {
                    # code...
                    ?>
                    <tr>
                        <td><?= $items['id']; ?></td>
                        <td><?= $items['fullname']; ?></td>
                        <td><?= $items['resi_address']; ?></td>
                        <td><?= $items['gender']; ?></td>
                        <td><?= $items['birth']; ?></td>
                        <td><?= $items['age']; ?></td>
                        <td><?= $items['status']; ?></td>
                        <td><?= $items['height']; ?></td>
                        <td><?= $items['contact']; ?></td>
                        <td><?= $items['email']; ?></td>
                       
                        <td><?= $items['create_datetime']; ?></td>
                    </tr>
                    <?php
                }
            }else{
                ?>
                <td colspan="13">No Record Found</td>
                <?php
            }

        }

      ?>
        
    </tbody>
  </table>
</div>
<?php include '../footer.php'; ?>
</body>
</html>