<?php
include "config.php";

if(isset($_POST['submit'])){
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$act = $_POST['act'];
$amount = $_POST['amount'];

$data = "INSERT INTO `banking_table`(`NAME`, `EMAIL`,`ACT_NO`, `CURRENT_BALANCE`) VALUES('$user_name','$email','$act','$amount')";
$result = mysqli_query($con,$data);
if($result){
    header("Location: view.php");
}else{
    header("Location: add.php");
}

}

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
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-danger navbar-light">
<img src="./images/logo.png" style="
    height: 60px;">
    <marquee direction="left"style="color:cornsilk;font-family:algerian;font-size:40px">WELCOME TO STATE BANK OF INDIA,JAMSHEDPUR</marquee>
</nav>

    <div class="container mt-5">
    <div class="row">
    <div class="col-md-12 text-center">
    <a href="index.php" class="btn btn-primary m-2" style="color:black; font-weight:bold;">Home</a><a href="add.php" class="btn btn-success m-2"style="color:black; font-weight:bold;">Add Customer</a><a href="view.php" class="btn btn-danger m-2"style="color:black; font-weight:bold;">View All Customer</a><a href="send.php" class="btn btn-warning m-2"style="color:black; font-weight:bold;">Send Money</a>
    </div>
    <div class="col-md-6 m-auto register-form-border reg-forms">
    <form action="" method="POST">
    <h3 class="text-center text-dark"style="font-family:algerian;"><u><b>Add Customer</b></u></h3>
    <div class="form-group">
    <label>Enter name</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="user_name">
    </div>

    <div class="form-group">
    <label>Enter Email</label>
    <input type="email" class="form-control" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
    <label>Enter Account No</label>
    <input type="number" class="form-control" placeholder="Enter Account No" name="act">
    </div>

    <div class="form-group">
    <label>Enter Amount</label>
    <input type="number" class="form-control" placeholder="Enter Amount" name="amount">
    </div>
    <div class="text-center ">

    <input type="submit" value="Add Customer" name="submit" class="btn btn-secondary "style="color:black; font-weight:bold;">
    </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>