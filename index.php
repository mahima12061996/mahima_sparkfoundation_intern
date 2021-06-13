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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
    /* background: url(./images/b2.jpg);
    background-repeat: no-repeat;
    background-size: cover; */
  }

.carousel-inner img {
    width: 100%;
    height: 100%;
  }

  .box{
    box-shadow: 5px 2px 8px 5px #fbce46;
    padding: 10px;
    text-align: center;
    background:#215492;
    color:#fff;
  }
  </style>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-danger navbar-light">
<img src="./images/logo.png" style="
    height: 60px;">
<marquee direction="left"style="color:cornsilk;font-family:algerian;font-size:40px">WELCOME TO TSF BANK OF INDIA..</marquee>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/a1.jpg" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption text-left">
        <!-- <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p> -->
        <!-- <a href="" class="btn btn-danger">Learn More</a> -->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/a2.jpg" alt="Chicago" width="1100" height="300">
      <div class="carousel-caption text-left">
      <!-- <a href="" class="btn btn-danger">Learn More</a> -->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/a3.jpg" alt="New York" width="1100" height="300">
      <div class="carousel-caption text-left">
      <!-- <a href="" class="btn btn-danger">Learn More</a> -->
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div class="container">
<h1 class="text-center text-success"style="font-family:algerian;"><u>Our Services Offered</u></h1>
<br />
<div class="row">
<div class="col-md-4">
<div class="box">
<img src="./images/u1.png" alt="">
<h4 class="text-warning"style="font-family:algerian;">ADD CUSTOMER</h4>
<p style="color:maroon;"><b>Add new customer to the list & then you are all set to transact</b> </p>
<a href="add.php" class="btn btn-warning">Learn More</a>
</div>
</div>
<div class="col-md-4">
<div class="box">
<img src="./images/u2.png" alt="">
<h4 class="text-warning"style="font-family:algerian;">TRANSFER MONEY</h4>
<p style="color:maroon;"><b>We can transfer money between multiple accounts</b></p>
<a href="send.php" class="btn btn-warning">Learn More</a>
</div>
</div>
<div class="col-md-4">
<div class="box">
<img src="./images/u3.png" alt="">
<h4 class="text-warning"style="font-family:algerian;">VIEW CUSTOMERS</h4>
<p style="color:maroon;"><b>View all customers having accounts in our bank</b></p>
<a href="view.php" class="btn btn-warning">Learn More</a>
</div>
</div>
</div></div>
<br />
</body>
</html>
