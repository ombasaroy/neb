<?php
  if (!isset($_SESSION['logged'])) {
    # code...
   header('location: ../index.php');
  
  }

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

    <title>Update Aspirant</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top primary-color">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <h4 class="navbar -brand"><span><img src="../images/circlelogo.png" alt="" width="40" class="img-fluid"></span> WIPER DEMOCRATIC MOVEMENT</h4>
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
           <a href="president.php">President</a>
           <a href="governors.php">Governor</a>
           <a href="senators.php">Senator</a>
           <a href="wreps.php">WREPs</a>
           <a href="mps.php">MNA</a>
           <a href="">MCAs</a>
           <hr>
           <a href="aspirants.php">Aspirants</a>
           <a href="candidates.php">Candidates</a>
           <a href="">Party List</a>
           <hr>
           <a href="log.php">Activity</a>
           <a href="users.php">Users</a>
         </div>

      <div class="col main-content">
        <form action="#" method="post" enctype="multipart/form-data" class="registration-form" id="registration-form">
          <h3>UPDATE ASPIRANT INFORMATION</h3>

<!-- Region section begins here -->
            <br> 
            <div class="section-headers"><h4>Step 1: Position and Region</h4></div>
            <div class="input-sections">
              <div class="row form-group mt-4">
                <div class="col">
                  <label for="position">Choose position <span class="mandatory">*</span></label>
                  <select name="position" id="position" class="form-control" required>
                    <option value="">------</option>
                    <option value="president">President</option>
                    <option value="governor">Governor</option>
                    <option value="senate">Senate</option>
                    <option value="wrep">WREP</option>
                    <option value="mna">MNA</option>
                    <option value="mca">MCA</option>
                    <option value="party-list">Party List</option>
  
                  </select>
                </div>
                <div class="col">
                  <label for="county">County <span class="mandatory">*</span></label>
                  <select name="county" id="county" class="form-control" required>
                    <option value="">------</option>
                    <option value="baringo">Baringo</option>
                    <option value="bomet">Bomet</option>
                    <option value="bungoma">Bungoma</option>
                    <option value="busia">Busia</option>
                    <option value="elgeyo/marakwet">Elgeyo/Marakwet</option>
                    <option value="embu">Embu</option>
                    <option value="garissa">Garissa</option>
                    <option value="homa bay">Homa Bay</option>
                    <option value="isiolo">Isiolo</option>
                    <option value="kajiado">Kajiado</option>
                    <option value="kakamega">Kakamega</option>
                    <option value="kericho">Kericho</option>
                    <option value="kiambu">Kiambu</option>
                    <option value="kilifi">Kilifi</option>
                    <option value="kirinyaga">Kirinyaga</option>
                    <option value="kisii">Kisii</option>
                    <option value="kisumu">Kisumu</option>
                    <option value="kitui">Kitui</option>
                    <option value="kwale">Kwale</option>
                    <option value="laikipia">Laikipia</option>
                    <option value="lamu">Lamu</option>
                    <option value="machakos">Machakos</option>
                    <option value="makueni">Makueni</option>
                    <option value="mandera">Mandera</option>
                    <option value="marsabit">Marsabit</option>
                    <option value="meru">Meru</option>
                    <option value="migori">Migori</option>
                    <option value="mombasa">Mombasa</option>
                    <option value="murang'a">Murang'A</option>
                    <option value="nairobi city">Nairobi City</option>
                    <option value="nakuru">Nakuru</option>
                    <option value="nandi">Nandi</option>
                    <option value="narok">Narok</option>
                    <option value="nyamira">Nyamira</option>
                    <option value="nyandarua">Nyandarua</option>
                    <option value="nyeri">Nyeri</option>
                    <option value="samburu">Samburu</option>
                    <option value="siaya">Siaya</option>
                    <option value="taita taveta">Taita Taveta</option>
                    <option value="tana river">Tana River</option>
                    <option value="tharaka-nithi">Tharaka-Nithi</option>
                    <option value="trans nzoia">Trans Nzoia</option>
                    <option value="turkana">Turkana</option>
                    <option value="uasin gishu">Uasin Gishu</option>
                    <option value="vihiga">Vihiga</option>
                    <option value="wajir">Wajir</option>
                    <option value="west pokot">West Pokot</option>
                  </select>
                </div>
                <div class="col">
                  <label for="constituency">Constituency <span class="mandatory">*</span></label>
                  <select name="constituency" id="constituency" required class="form-control">
                    <option value="">------</option>
                  </select>
                </div>
              </div>
  
              <div class="row form-group mt-4">
                <div class="col">
                  <label for="ward">Ward <span class="mandatory">*</span></label>
                  <select name="ward" id="ward" class="form-control" required>
                    <option value="">------</option>
                  </select>
                </div>
                <div class="col"></div>
                <div class="col"></div>
              </div>
  
            </div>
<!-- Region section ends here -->
 
            <h4 class="section-headers mt-4">Step 2: Personal Details</h4>
            <div class="input-sections">
<!-- Row 1 begins here  -->
              <div class="row form-group">
                <div class="col"><label for="surname">Title <span class="mandatory">*</span></label>
                  <select name="title" id="title" class="form-control" required>
                    <option value="">------</option>
                    <option value="mr">Mr</option>
                    <option value="mrs">Mrs</option>
                    <option value="miss">Ms</option>
                    <option value="prof">Professor</option>
                    <option value="dr">Dr</option>
                  </select></div>
                  
                <div class="col">
                  <label for="surname">Surname <span class="mandatory">*</span></label>
                  <input type="text" name="surname" id="surname" placeholder="------" required class="form-control">
                </div>
                <div class="col">
                  <label for="surname">Other names <span class="mandatory">*</span></label>
                  <input type="text" name="other-names" id="other-names" placeholder="------" required class="form-control">
                </div>
              </div>
<!-- Row 1 ends here -->


<!-- Row 2 starts here -->
            <div class="row form-group mt-4">
              <div class="col">
                <label for="identification-document">Choose Identification Document <span class="mandatory">*</span></label>
                <select name="identification-document" id="identification-document" class="form-control" required>
                  <option value="">------</option>
                  <option value="national-id">National ID</option>
                  <option value="passport">Passport</option>
                </select>
              </div>
              <div class="col">
                <label for="id-passport-number">ID or Passport number <span class="mandatory">*</span></label>
                <input type="text" name="id-passport-number" id="id-passport-number" placeholder="------" required class="form-control">
                
              </div>
              <div class="col">
                <label for="occupation">Occupation <span class="mandatory">*</span> </label>
                <select name="occupation" id="occupation" class="form-control" required>
                  <option value="">------</option>
                  <option value="teacher">Teacher</option>
                  <option value="finance">Fincance</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
<!-- Row 2 ends here -->


<!-- Row 3 starts here -->

            <div class="row form-group mt-4">
              <div class="col">
                <label for="email">Email <span class="mandatory">*</span></label>
                <input type="email" name="email" id="email" class="form-control" placeholder=" eg. xyz@email.com" required>
              </div>
              <div class="col">
                <label for="phone-number">Phone number <span class="mandatory">*</span></label>
                <input type="number" name="phone-number" id="phone-number" class="form-control" placeholder="eg. 0710XXXZZZ" required>
              </div>
              <div class="col">
                <label for="other-numbers">Other phone numbers</label>
                <input type="number" name="other-numbers" id="other-numbers" placeholder="eg. 0710XXXZZZ" class="form-control">
              </div>

            </div>
<!-- Row 3 ends here -->

<!-- Row 4 starts here -->
            <div class="row form-group mt-4">
              <div class="col">
                <label for="gender">Choose gender <span class="mandatory">*</span></label>
                <select name="gender" id="gender" class="form-control" required>
                  <option value="">------</option>
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                </select>
              </div>
              <div class="col">
                <label for="passport-photo">Upload passport photo <span class="mandatory">*</span></label>
                <input type="file" class="form-control" id="passport-photo">
              </div>
              <div class="col">
                <label for="date-of-birth">Date of birth <span class="mandatory">*</span></label>
                <input type="date" name="date-of-birth" id="date-of-birth" class="form-control">
              </div>
              
            </div>
<!-- Row 4 ends here -->



<!-- row 5 starts here -->
            <div class="row form-group mt-4">
              <div class="col">
                <label for="special-group">Special interest category <span class="mandatory">*</span></label>
                <select name="special-group" id="special-group" class="form-control">
                  <option value="">--Select special group--</option>
                  <option value="pwd">Person With Disability</option>
                  <option value="youth">Youth</option>
                  <option value="other">Other</option>
                </select>
                
              </div>
              <div class="col">
                <!-- <label for="repeat-password">Repeat Password <span class="mandatory">*</span></label>
                <input type="password" id="repeat-password" name="repeat-password" class="form-control"> -->
              </div>
              <div class="col">
                
              </div>
              
            </div>
<!-- row 5 ends here -->


<!-- Row 6 starts here -->
            <div class="row form-group mt-4">
              <div class="col"></div>
              <div class="col"></div>
              <div class="col">
                <input type="submit" name="update" id="update" value="UPDATE USER" class="update btn btn-warning btn-block"> 
              </div>
              <div class="col">
                <input type="reset" name="reset" id="reset" value="CLEAR" class=" update btn btn-danger btn-block">
              </div>
              <dsiv class="col"></dsiv>
              <div class="col"></div>
            </div>

<!-- Row 6 ends here -->
            </div>
        </form>
      
     </div>

     <footer>
     </footer>

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