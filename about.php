<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    
    <title>Beyond Bank</title>

</head>
<body>

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
          <a class="nav-link" href="transactions.php">Transactions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="row" style="text-align: center; background-image: url('images/about1.jpg'); background-repeat: no-repeat; background-size: auto; height: 300px">
  <h1 style="margin-top: 100px; font-size: 4rem;">We're just the bank you need.</h1>
</div>

<div class="row" style="margin: 20px 0; text-align:center;">
  <div class="col-6" style="margin-top: 90px">
    <h2>Our <strong>Corporate Office</strong></h2>
    <p>Beyond Bank Limited, Corporate Office, Bombay Dyeing <br>
      Mills Compound, Pandurang Budhkar Marg,Worli, <br>
      Mumbai - 400 025</p>
      <p>Tel: (022) 2425 2525</p>
  </div>

  <div class="col-6">
    <img src="images/about2.jpg" width="400" height="300" alt="">
  </div>
</div>

<?php
  include "footer.php"
?>