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

    <title>Senators</title>
  </head>
  <body>

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
           <a href="senators.php"  class="sidebar-active">Senators</a>
           <a href="wreps.php">WREPs</a>
           <a href="mna.php">MNAs</a>
           <a href="mcas.php">MCAs</a>
           <a href="#">Party List</a>
         </div>
         <div class="col main-content">
           <br>
           <h6>SENATORIAL ASPIRANTS</h6>
           
           <form action="#" method="" enctype="multipart/form-data">
             <div class="row form-group">
                <div class="col-4">
                  <select name="search-mp" id="search-mp" class="form-control p-1">
                    <option value="">--Select County--</option>
                    <option value="langata">Airpot</option>
                    <option value="kibra">kibra</option>
                    <option value="starehe">Starehe</option>
                    <option value="kasarani">Kasarani</option>
                  </select>
                </div>
                <div class="col-1">
                  <input type="submit" name="search-by-constituency" id="search-by-constituency" value="SEARCH" class="btn btn-primary btn-block p-1">
                </div>
                
             </div>
           </form>

          <table id="" class="table table-bordered table-hover table-fixed table-sm mt-4" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>SN</th>
                <th>NAME</th>
                <th>ID NO</th>
                <th>TEL NO</th>
                <th>POSITION</th>
                <th>COUNTY</th>
                <th>CONSTITUENCY</th>
                <th>WARD</th>
                <!-- <th class="actions">ACTIONS</th> -->
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>703</td>
                <td>Tiger Nixon</td>
                <td>214324324</td>
                <td>31231231</td>
                <td>Senator</td>
                <td>Makueni</td>
                <td>Kibwezi East</td>
                <td>Makindu</td>
                <!-- <td class="actions">
                  <a href="#" class="btn btn-primary">VIEW</a>
                  <a href="#" class="btn btn-warning">EDIT</a>
                  <a href="#" class="btn btn-danger">DELETE</a>
                </td> -->
              </tr>
              
              <tr>
                <td>703</td>
                <td>Tiger Nixon</td>
                <td>214324324</td>
                <td>31231231</td>
                <td>Senator</td>
                <td>Makueni</td>
                <td>Kibwezi East</td>
                <td>Makindu</td>
                <!-- <td class="actions">
                  <a href="#" class="btn btn-primary">VIEW</a>
                  <a href="#" class="btn btn-warning">EDIT</a>
                  <a href="#" class="btn btn-danger">DELETE</a>
                </td> -->
              </tr>
              <tr>
                <td>703</td>
                <td>Tiger Nixon</td>
                <td>214324324</td>
                <td>31231231</td>
                <td>Senator</td>
                <td>Makueni</td>
                <td>Kibwezi East</td>
                <td>Makindu</td>
                <!-- <td class="actions">
                  <a href="#" class="btn btn-primary">VIEW</a>
                  <a href="#" class="btn btn-warning">EDIT</a>
                  <a href="#" class="btn btn-danger">DELETE</a>
                </td> -->
              </tr>
              <tr>
                <td>703</td>
                <td>Tiger Nixon</td>
                <td>214324324</td>
                <td>31231231</td>
                <td>Senator</td>
                <td>Makueni</td>
                <td>Kibwezi East</td>
                <td>Makindu</td>
                <!-- <td class="actions">
                  <a href="#" class="btn btn-primary">VIEW</a>
                  <a href="#" class="btn btn-warning">EDIT</a>
                  <a href="#" class="btn btn-danger">DELETE</a>
                </td> -->
              </tr>
              <tr>
                <td>703</td>
                <td>Tiger Nixon</td>
                <td>214324324</td>
                <td>31231231</td>
                <td>Senator</td>
                <td>Makueni</td>
                <td>Kibwezi East</td>
                <td>Makindu</td>
                <!-- <td class="actions">
                  <a href="#" class="btn btn-primary">VIEW</a>
                  <a href="#" class="btn btn-warning">EDIT</a>
                  <a href="#" class="btn btn-danger">DELETE</a>
                </td> -->
              </tr>
              <tr>
                <td>703</td>
                <td>Tiger Nixon</td>
                <td>214324324</td>
                <td>31231231</td>
                <td>Senator</td>
                <td>Makueni</td>
                <td>Kibwezi East</td>
                <td>Makindu</td>
                <!-- <td class="actions">
                  <a href="#" class="btn btn-primary">VIEW</a>
                  <a href="#" class="btn btn-warning">EDIT</a>
                  <a href="#" class="btn btn-danger">DELETE</a>
                </td> -->
              </tr>
              <tr>
                <td>703</td>
                <td>Tiger Nixon</td>
                <td>214324324</td>
                <td>31231231</td>
                <td>Senator</td>
                <td>Makueni</td>
                <td>Kibwezi East</td>
                <td>Makindu</td>
                <!-- <td class="actions">
                  <a href="#" class="btn btn-primary">VIEW</a>
                  <a href="#" class="btn btn-warning">EDIT</a>
                  <a href="#" class="btn btn-danger">DELETE</a>
                </td> -->
              </tr>
              <tr>
                <td>703</td>
                <td>Tiger Nixon</td>
                <td>214324324</td>
                <td>31231231</td>
                <td>Senator</td>
                <td>Makueni</td>
                <td>Kibwezi East</td>
                <td>Makindu</td>
                <!-- <td class="actions">
                  <a href="#" class="btn btn-primary">VIEW</a>
                  <a href="#" class="btn btn-warning">EDIT</a>
                  <a href="#" class="btn btn-danger">DELETE</a>
                </td> -->
              </tr>

              
              
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