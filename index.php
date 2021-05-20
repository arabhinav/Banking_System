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

    <script src="https://kit.fontawesome.com/41ffbd8351.js" crossorigin="anonymous"></script>

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
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Home Page -->

<div style="text-align: center; background-color:#fff;">
      <img src="images/logo_f.png" alt="">
  </div>

<div class="row">
  <div class="col cbox">
    <a href="customers.php" style="text-decoration:none">
      <div style="margin-top: 70px;">
        <i class="fas fa-user-friends" style="color: white; font-size:80px"></i>
        <h2 style="color: white;">View Customers</h2>
      </div>
    </a>
  </div>
  <div class="col tbox">
    <a href="transactions.php" style="text-decoration:none">
      <div style="margin-top: 70px;">
        <i class="fas fa-money-bill-wave" style="color: black; font-size:80px"></i>
        <h2 style="color: black;">Transfer Money</h2>
      </div>
    </a>
  </div>
</div>

<?php
  include "footer.php"
?>