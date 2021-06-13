<?php
include "config.php";
$data = "SELECT * FROM `banking_table`";
$result = mysqli_query($con,$data);


 

if(isset($_POST['send'])){
    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $amount = $_POST['amount'];
    // echo $sender;
    // echo $receiver;
    // echo $amount;
    $sql = "select * from `banking_table` where `ID`=$sender";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $balance= $row['CURRENT_BALANCE'];
    // $data = "SELECT * FROM `banking_table` where `ID`='$sender'";
    // $result = mysqli_query($con,$data);
    // $row = mysqli_fetch_assoc($result);
    if($row['CURRENT_BALANCE']>= $amount)
     {
      $update1 = "UPDATE `banking_table` SET `CURRENT_BALANCE`=`CURRENT_BALANCE` -$amount WHERE `ID`=$sender";
       $result1 = mysqli_query($con,$update1);
       if($result1){
        header("Location: view.php");
    }else{
        header("Location: add.php");
    }
    

       $update2 = "UPDATE `banking_table` SET `CURRENT_BALANCE`=`CURRENT_BALANCE` +$amount WHERE `ID`=$receiver";
       $result2 = mysqli_query($con,$update2);

       if($result2){
        header("Location: view.php");
    }else{
        header("Location: add.php");
    }
    
    }
    else
    {
      echo "<script>
      alert('Sender has insufficient balance');
      </script>";
    }

}
//  }

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
    height: 60px;
">
<marquee direction="left"style="color:cornsilk;font-family:algerian;font-size:40px">WELCOME TO TSF BANK OF INDIA..</marquee>
</nav>


<div class="container mt-5">
<div class="row">

<div class="col-md-12 text-center">
<a href="index.php" class="btn btn-primary m-2"style="color:black; font-weight:bold;">Home</a><a href="add.php" class="btn btn-success m-2"style="color:black; font-weight:bold;">Add Customer</a><a href="view.php" class="btn btn-danger m-2"style="color:black; font-weight:bold;">View All Customer</a><a href="send.php" class="btn btn-warning m-2"style="color:black; font-weight:bold;">Send Money</a>
    </div>
<div class="col-md-6 m-auto register-form-border reg-forms">

  <h2 class="text-center text-dark"style="font-family:algerian;"><u><b>Send Money</b></u></h2>

  <form method="POST">


    <div class="form-group">
      <label for="sel1">Select Sender:</label>
      <select class="form-control" id="" name="sender">
          <option selected="selected" disabled>Select</optionss>
      <?php $result = mysqli_query($con,$data);
      while($row1 = mysqli_fetch_assoc($result)){ ?>
        <option value="<?php echo $row1['ID'] ?>"><?php echo $row1['NAME'] ?></option>
        <?php } ?>        
      </select>
    </div>


    <div class="form-group">
      <label for="sel1">Select Reciver:</label>
      <select class="form-control" id="" name="receiver">
          <option selected="selected" disabled>Select</optionss>
      <?php $result = mysqli_query($con,$data);
      while($row = mysqli_fetch_assoc($result)){ ?>
        <option value="<?php echo $row['ID'] ?>"><?php echo $row['NAME'] ?></option>
        <?php } ?>        
      </select>
    </div>

    

    <div class="form-group">
      <label for="pwd">Amount:</label>
      <input type="number" class="form-control" id="" placeholder="Enter Amount" name="amount">
    </div>
   
   <div class="text-center">
    <button type="submit" class="btn btn-secondary "style="color:black; font-weight:bold;" name="send">Send Money</button>
   </div>
  </form>
</div>


</div>
</div>

</body>
</html>
