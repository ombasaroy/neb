<?php
  session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
  </head>
  <body>

<!-- NAVBAR starts here -->
<nav class="navbar navbar-expand-lg fixed-top primary-color">
  <div class="container-fluid">
      <h4 class="navbar-brand"><span><img src="images/circlelogo.png" alt="" width="40" class="img-fluid"></span> WIPER DEMOCRATIC MOVEMENT</h4>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="#"> <b>Admin Login</b></a>
        </li>
        
      </ul> -->
    </div>
  </div>
</nav>
<!-- Navbar ends here -->

<!-- login form starts here -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          
          <form action="backend/login.php" method="post" enctype="multipart/form-data" class="login-form">
            <div class="login-header">
              <h4>Login</h4>
              <?php
                if(isset($_GET['invalid_details'])){
                  echo "<div class='alert alert-danger'>" .  $_SESSION['invalid_details'] . "</div>";
                }
                session_unset();
              ?>
            </div>
            <div class="form-group mt-2">
              <label for="username">Username <span class="mandatory">*</span></label>
              <input type="text" name="username" id="username" placeholder="Enter your username" class="form-control" required>
            </div>
            <div class="form-group mt-2">
              <label for="password">Password <span class="mandatory">*</span> </label>
              <input type="password" name="password" id="password" placeholder="Enter you password" class="form-control" required> 
            </div>
            <div class="form-group mt-4 login-btn ">
              <input type="submit" id="login" name="login" value="LOGIN" class="btn btn-block btn-primary p-1">
            </div>
          </form>
        </div>
      </div>
    </div>
<!-- login form ends here -->
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>