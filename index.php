<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>BASIC BANKING SYSTEM</title>
  <link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:ital@1&family=Joan&family=Philosopher&family=Playfair+Display&family=Rajdhani:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  include 'navbar.php';
  ?>
  <div class="container-fluid">
    <div class="row intro py-1">
      <div class="col-sm-12 col-md img text-center">
        <img src="img/istockphoto-1008926982-170667a.jpg" class="img-fluid pt-2" style="width: 400px;">
      </div>
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h3>This Is The Official Online Website Of</h3>
          <h1>GRIP BANK</h1>
        </div>
      </div>
    </div>

    <div class="row activity text-center mt-5">

      <div class="col-md act">
        <img src="img/money-transfer-gb72a4993d_640.png" width="340px" class="img-fluid">
        <br><br>
        <a type="button" class="btn-responsive" href="transfermoney.php"><button>Do Some Transaction</button></a>
      </div>
      <div class="col-md act">
        <img src="img/money-g9c6a2e38f_1920.jpg" width="355px" class="img-fluid">
        <br><br>
        <a type="button" class="btn-responsive" href="transactionhistory.php"><button>Transaction History</button></a>
      </div>
    </div>
  </div>
  <footer class="text-center mt-5 py-2 ">
    <div height="50px" width="1350px" ;>
      © -2022 THE GRIP BANK All Rights Reserved.
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  
</body>

</html>