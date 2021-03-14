<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/table.css">

    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <link rel="stylesheet" type="text/css" href="css/createuser.css">
    
</head>

<body style="background-color : #ced4da;">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('New User Added');
                               window.location='sendmoney.php';
                     </script>";
                    
    }
  }
?>


<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-2" style="color :black;">Add User</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
           <div class="screen-header-ellipsis"></div>
        </div>
      </div>

      <div class="screen-body">
        <div class="screen-body-item">
          <img class="img-fluid" src="img/user15.png" style="border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter name" type="text" name="name" required autofocus="">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter email" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter amount" type="number" name="balance" required>
            </div>

            <br>

            <div class="app-form-group button">
              <input class="app-form-button btn-lg bg-success" style="color :black;" type="submit" value="ADD" name="submit"></input>
              <input class="app-form-button btn-lg bg-danger"style="color :black;" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="text-center mt-3 py-3 ">
      |  Copyright &copy sptiwari 20-21 mybank.com  | 💵  All Rigths Reserved!
      </footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>