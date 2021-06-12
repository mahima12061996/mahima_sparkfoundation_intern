<?php
include "config.php";


$data = "SELECT * FROM `banking_table`";
$result = mysqli_query($con,$data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  body{
    background: url(./images/b2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }

  .reg-forms {
    background: url(./images/b1.jpg)!important;
    background-repeat: no-repeat;
    background-size: cover;
}
.register-form-border {
    box-shadow: 2px 2px 10px #ffffff;
    padding: 50px;
}
label{
    color:#fff;
}
tr:nth-child(even) {
  background-color:#346751!important;
  font-weight:bold;
}

tr:nth-child(odd) {
  background-color:#ffed99!important;
  font-weight:bold;
}

thead tr,th{
  background-color: #c64756!important;
  font-weight:bold;
}

.table-dark td, .table-dark th, .table-dark thead th {
    border-color: #ffffff!important;
}
  </style>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-danger navbar-light">
<img src="./images/logo.png" style="
    height: 60px;
">
<marquee direction="left"style="color:cornsilk;font-family:algerian;font-size:40px">WELCOME TO STATE BANK OF INDIA,JAMSHEDPUR</marquee>
</nav>


<div class="container mt-4">
         <div class="row">
         <div class="col-md-12 text-center">
         <a href="index.php" class="btn btn-primary m-2"style="color:black; font-weight:bold;">Home</a><a href="add.php" class="btn btn-success m-2"style="color:black; font-weight:bold;">Add Customer</a><a href="index.php" class="btn btn-danger m-2"style="color:black; font-weight:bold;">View All Customer</a><a href="send.php" class="btn btn-warning m-2" style="color:black; font-weight:bold;">Send Money</a>
    </div>
         <div class="col-md-12 register-form-border reg-forms">
         <h3 class="text-center text-dark"style="font-family:algerian;"><u><b>View All Customer</b></u></h3>        
  <table class="table table-dark table-striped text-center text-dark">
    <thead>
      <tr style="background:#2838a9!important">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Account No</th>
        <th>Current Balance</th>

      </tr>
    </thead>
    <tbody>

    <?php 
      $c = 1;
    while($row = mysqli_fetch_assoc($result)){ 
      ?>

      <tr>
        <!-- <td><?php //echo $row['ID'] ?></td> -->
        <td><?php echo $c ?></td>
        <td><?php echo $row['NAME'] ?></td>
        
        <td><?php echo $row['EMAIL'] ?></td>
        <td><?php echo $row['ACT_NO'] ?></td>
        <td><?php echo $row['CURRENT_BALANCE'] ?></td>
      </tr>
      <?php $c++;}?>
          </tbody>
  </table>
</div>
</div>
         </div>

</body>
</html>
