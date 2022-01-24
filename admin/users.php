<?php
  include "../connection.php";

  // if (!isset($_SESSION['logged'])) {
  //   # code...
  //  header('location: ../index.php');
  
  // }
  
  

?>

<!doctype php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Users</title>
  </head>
  <body>

  <?php

  include "../connection.php";

  $sql = "SELECT * from users";

  $result = $conn->query($sql) or die($conn->error);


  ?>

    <nav class="navbar navbar-expand-lg fixed-top primary-color">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <h4 class="navbar-brand"><span><img src="../images/circlelogo.png" alt="" width="40" class="img-fluid"></span> WIPER DEMOCRATIC MOVEMENT</h4>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml-2">
              
              <li class="nav-item dropdown">
                <b class="nav-link dropdown-toggle"id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Roy Ombasa
                </b>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>


     <div class="container-fluid">
       <div class="row" >
         <div class="col sidebar primary-color">
           <hr>
           <a href="dashboard.php">Dashboard</a>
           <a href="president.php">Presidents</a>
           <a href="governors.php">Governors</a>
           <a href="senators.php">Senators</a>
           <a href="wreps.php">WREPs</a>
           <a href="mna.php">MNAs</a>
           <a href="mcas.php">MCAs</a>
           <hr>
           <a href="aspirants.php">Aspirants</a>
           <a href="candidates.php">Candidates</a>
           <a href="#">Party List</a>
           <hr>
           <a href="log.php">Activity</a>
           <a href="users.php" class="sidebar-active">Users</a>
         </div>
         <div class="col main-content">
           <br>
           <h6>CREATE USER</h6>

           <?php

                if (isset($_GET['success'])) {
                    # code...
                    if(isset($_SESSION['success'])){
                      echo "<div class='alert alert-info'>" . $_SESSION['success']. "</div>";
                    }
                                        
                  }elseif (isset($_GET['failed'])) {
                    # code...
                    if(isset($_SESSION['failed'])){
                      echo "<div class='alert alert-danger'>" . $_SESSION['failed']. "</div>";
                    }
                    
                  }elseif(isset($_GET['exist'])){
                    if(isset($_SESSION['detailsexist'])){
                      echo "<div class='alert alert-warning'>". $_SESSION['detailsexist'] . "</div>";
                    }
                    
                  }
              ?>


           
           <div class="form-group">
              <form action="../backend/creatinguser.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col">
                          <label for="fullname">Enter full name</label>
                          <input type="text" id="fullname" name="fullname" placeholder="Enter full name" class="form-control" required> 
                          <p>
                            <?php 
                            if(isset($_GET['failed'])){
                              if(isset($_SESSION['fullname_err'])){
                                echo "<div class='alert alert-danger'>" . $_SESSION['fullname_err'] . "</div>";
                              }
                            }
                            ?>
                          </p>
                      </div>
                      <div class="col">
                          <label for="username">Username</label>
                          <input type="text" name="username" id="username" placeholder="Enter username" class="form-control" required>
                          <p>
                            <?php 
                            if(isset($_GET['failed'])){
                              if(isset($_SESSION['username_err'])){
                                echo "<div class='alert alert-danger'>" . $_SESSION['username_err'] . "</div>";
                              }
                            }
                            ?>
                          </p>
                      </div>
                      <div class="col">
                        <label for="access-level">Access Level</label>
                        <select name="access-level" id="access-level" class="form-control" required>
                          <option value="">------</option>
                          <option value="clerk">Clerk</option>
                          <option value="leadership">Leadership</option>
                          <option value="neb">NEB</option>
                          <option value="admin">Admin</option>
                        </select>
                      </div>
                      <div class="col">
                          <label for="user-password">User password</label>
                          <input type="password" name="user-password" id="user-password" placeholder="Enter passowrd" class="form-control" required> 
                          <p>
                            <?php 
                            if(isset($_GET['failed'])){
                              if(isset($_SESSION['password_err'])){
                                echo "<div class='alert alert-danger'>" . $_SESSION['password_err'] . "</div>";
                              }
                            }

                            session_unset();
                            
                            ?>
                          </p>
                      </div>
                      <div class="col">
                           <input type="submit" name="create-user" id="create-user" value="CREATE USER" class="btn btn-success btn-block" style="margin-top: 25px; padding: 5px;">
                      </div>
                  </div>
              </form>
               
           </div>
           <br><br>

           <h6>ACTIVE USERS</h6>

          <table id="" class="table table-bordered table-hover table-fixed table-sm mt-4" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>NAME</th>
                <th>USERNAME</th>
                <th>LEVEL</th>
                <th>DATE CREATED</th>
                <th class="actions">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
            <?php
                while($row = $result->fetch_assoc()):

              ?>
              <tr>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['access_level']; ?></td>
                <td><?php echo $row['date_created']; ?></td>
                <td class="actions">
                  <a href="../backend/creatinguser.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">DELETE</a>
                </td>
              </tr>

              <?php

                endwhile;
              ?>
            </tbody>
            
          </table>
         </div>
         </div>
       
     </div>
     <script src="js/style.js"></script>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</php>