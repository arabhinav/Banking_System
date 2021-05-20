<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <title>Beyond Bank</title>

</head>
<body  style="background-color: #864000;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a href="index.php">
      <img src="images/logo.png" style="border-radius: 50%; width:70px; height:auto;" alt="">
    </a>
    <a class="navbar-brand" style="margin-left: 10px;" href="index.php">Beyond Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="customers.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transactions.php">Transactions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
  include "connection.php";
?>

<div class="top_container">
      <h2>Transaction History</h2>
  </div>


<div class="row"">

    <div class="col col-lg-push-3 table-container">


      <?php
      $count = 0;
      $res = mysqli_query($link, "select *from transactions") or die(mysqli_errno($link));
      $count = mysqli_num_rows($res);

      if($count == 0) {
        ?>
        <h4 style="text-align: center; margin-top: 15px;">No Transactions Found</h4>
        <?php
      }

      else {
        echo "<div class='row justify-content-center ctable'>";
        echo "<table class='table table-bordered table-striped table-dark w-50'>";
          echo "<tr style='background-color: #212529; color:white''>";
            echo "<th>"; echo "Sender"; echo "</th>";
            echo "<th>"; echo "Recipient"; echo "</th>";
            echo "<th>"; echo "Amount"; echo "</th>";
            echo "<th>"; echo "Date"; echo "</th>";
          echo "</tr>";

          while ($row=mysqli_fetch_array($res)) {
                echo "<tr>";
                        echo "<td>"; echo $row["Sender"]; echo "</td>";
                        echo "<td>"; echo $row["Recipient"]; echo "</td>";
                        echo "<td>"; echo $row["Amount"]; echo "</td>";
                        echo "<td>"; echo $row["Transaction_Date"]; echo "</td>";
                    echo "</tr>";
          }
          echo "</table>";
          echo "</div>";
      }
      ?>

    </div>
            
</div>

<div class="form-container"  style="background-color: #fff;">
	<div action="" class="row card-body transfer-container" style="margin: 50px 50px 0 50px ;">
      <h2>Transact</h2>
        <form action="" method="POST">
            <div class="col">
                <label class="transfer-form-subtext"><strong>Sender</strong></label>
                <?php
                  $count = 0;
                  $res = mysqli_query($link, "select *from customers") or die(mysqli_errno($link));
                  $count = mysqli_num_rows($res);

                  echo "<select name='sender' class='form-control select2'>";
                  echo "<option>Select</option>";
                  while ($row=mysqli_fetch_array($res)) {
                    echo "<option>"; echo $row["Name"]; echo "</option>";
                  }
                  echo "</select>";
                ?>
            </div>

            <div class="col"></div>
                <label class="transfer-form-subtext"><strong>Recipient</strong></label>
                <?php 
                  $count = 0;
                  $res = mysqli_query($link, "select *from customers") or die(mysqli_errno($link));
                  $count = mysqli_num_rows($res);

                  echo "<select name='recipient' class='form-control select2'>";
                  echo "<option>Select</option>";
                  while ($row=mysqli_fetch_array($res)) {
                    echo "<option>"; echo $row["Name"]; echo "</option>";
                  }
                  echo "</select>";
                ?>
                <div class="row-6" style="margin: 15px 0;">
                <label style="padding-bottom:2%;" for="amount"><strong>Amount:</strong></label> <br>
                <input type="text" id="amount" name="amount" size="114">
                </div>
            </div>
            <div style="text-align: center;">
                <button type="submit" id="transfer1" name="transfer1" class="btn btn-outline-dark transfer-button">Transfer</button>
            </div>

            </form>

            <div id="failure" class="alert alert-danger" style="margin-top: 10px; text-align: center; display: none;">
                  <strong>Transaction Failed!!</strong> Please enter a valid amount.
            </div>
      
 	</div>
</div>

<?php
    if(isset($_POST["transfer1"])) {
        $res = mysqli_query($link, "select *from customers") or die(mysqli_errno($link));
        $sbalance = 0;
        $rbalance = 0;
        $amount = $_POST["amount"] ;
        while ($row=mysqli_fetch_array($res)) {
          if ($row["Name"] == $_POST["sender"]) {
            $sbalance = $row["Account_Balance"] - $amount;
          }
          
          if ($row["Name"] == $_POST["recipient"]) {
            $rbalance = $row["Account_Balance"] + $amount;
          }
        }
        
        if ($sbalance < 0) {
          ?>
          <script type="text/javascript">
              document.getElementById("failure").style.display="block";
          </script>
          <?php
        }
        
        else {
          date_default_timezone_set('Asia/Kolkata');
          $date=date("Y-m-d H:i:s");
          mysqli_query($link, "insert into transactions(T_ID, Sender, Recipient, Amount, Transaction_Date) values(NULL, '$_POST[sender]', '$_POST[recipient]', '$_POST[amount]', '$date')") or die(mysqli_error($link)) ;
          
          mysqli_query($link, "update customers set Account_Balance = '$sbalance' where Name = '$_POST[sender]' ") or die(mysqli_error($link)) ;

          mysqli_query($link, "update customers set Account_Balance = '$rbalance' where Name = '$_POST[recipient]' ") or die(mysqli_error($link)) ;
          
          ?>
          <script type="text/javascript">
              alert("Transaction Succesfull!");
              window.location.href=window.locatiom.href;     
          </script>
          <?php
          header("Refresh:0");
        }   
    }
    ?>


<script>
    $('.select2').select2();
</script>

<?php
  include "footer.php"
?>