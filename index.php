<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap-4 framework -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>mybank</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- heading -->
            <div  style=" background-color : #c8c6a7;">
              <div class="col-sm-6 col-md">
                <div class="text-center my-3">
                  <h1 style="color:#440a67; ">Welcome To My Bank </h1>
                  <h3 style="color: #6930c3; margin-bottom: 30px;">Basic Banking System</h3>
                </div>
              </div>

            </div>

      <!-- add send and history section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user13.png" style="width: 350px; height:300px; margin-bottom: 20px;" class="img-fluid">
                    <br>
                    <a href="AddUser.php"><button class="btn btn-lg bg-inverse" style="background-color : #fff; color:#000; font-weight:bold;margin-bottom: 20px;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/user11.png" style="width: 350px; height:300px;margin-bottom: 20px;" class="img-fluid">
                    <br>
                    <a href="sendmoney.php"><button class="btn btn-lg bg-danger" style="background-color : #fff; color:#000; font-weight:bold;">Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/user10.png" class="img-fluid" style="width: 350px; height:300px;margin-bottom: 20px;">
                    <br>
                    <a href="paymenthistory.php"><button class="btn btn-lg bg-success" style="background-color : #fff; color:#000; font-weight:bold;">Check History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-5 bg-secondary">
      |💵💸  Copyright &copy sptiwari 20-21 mybank💵💸! |
        
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>