<?php

include "../connection.php";
session_start();

// if (!isset($_SESSION['logged'])) {
//   # code...
//  header('location: ../index.php');

// }

  //deleting a record
  $id=0;

  if (isset($_GET['delete'])) {
      # code...
    $id = $_GET['delete'];

    $delete_sql = "DELETE FROM aspirants WHERE id = $id";

    if ($conn->query($delete_sql) === TRUE) {
      # code...
      $_SESSION['deleted'] = "Aspirant details deleted successfully";
        header('location: mna.php?deleted');
    }else{
      $_SESSION['not_deleted'] = "Aspirant not deleted";
        header('location: mna.php?not_deleted');
    }

}

$sql = "SELECT * from aspirants WHERE position = 'mna'";

$result = $conn->query($sql) or die($conn->error);


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

    <title>MNAs</title>
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
           <a href="senators.php">Senators</a>
           <a href="wreps.php">WREPs</a>
           <a href="mna.php" class="sidebar-active">MNAs</a>
           <a href="mcas.php">MCAs</a>
           <hr>
           <a href="aspirants.php">Aspirants</a>
           <a href="candidates.php">Candidates</a>
           <a href="#">Party List</a>
           <hr>
           <a href="log.php">Activity</a>
           <a href="users.php">Users</a>
         </div>
         <div class="col main-content">
           <br>
           <h6>MEMBERS OF NATIONAL ASSEMBLY ASPIRANTS</h6>
           
           <?php
            if(isset($_GET['deleted'])){
              if($_SESSION['deleted']){
                echo "<div class='alert alert-info'>" . $_SESSION['deleted'] . "</div>";
              }
            }elseif(isset($_GET['not_deleted'])){
              if($_SESSION['not_deleted']){
                echo "<div class='alert alert-info'>" . $_SESSION['not_deleted'] . "</div>";
              }
            }

            session_unset();

            ?>
           
           <form action="#" method="" enctype="multipart/form-data">
             <div class="row form-group">
                <div class="col-4">
                  <select name="search-mp" id="search-mp" class="form-control p-1">
                  <option value="">--Select constituency--</option>
                  <option value="Ainabkoi">Ainabkoi</option>
                  <option value="Ainamoi">Ainamoi</option>
                  <option value="Aldai">Aldai</option>
                  <option value="Alego Usonga">Alego Usonga</option>
                  <option value="Awendo">Awendo</option>
                  <option value="Bahati">Bahati</option>
                  <option value="Balambala">Balambala</option>
                  <option value="Banissa">Banissa</option>
                  <option value="Baringo North">Baringo North</option>
                  <option value="Baringo Central">Baringo Central</option>
                  <option value="Baringo South">Baringo South</option>
                  <option value="Belgut">Belgut</option>
                  <option value="Bobasi">Bobasi</option>
                  <option value="Bomachoge Borabu">Bomachoge Borabu</option>
                  <option value="Bomachoge Chache">Bomachoge Chache</option>
                  <option value="Bomet Central">Bomet Central</option>
                  <option value="Bomet East">Bomet East</option>
                  <option value="Bonchari">Bonchari</option>
                  <option value="Bondo">Bondo</option>
                  <option value="Borabu">Borabu</option>
                  <option value="Budalangi">Budalangi</option>
                  <option value="Bumula">Bumula</option>
                  <option value="Bura">Bura</option>
                  <option value="Bureti">Bureti</option>
                  <option value="Butere">Butere</option>
                  <option value="Butula">Butula</option>
                  <option value="Buuri">Buuri</option>
                  <option value="Central Imenti">Central Imenti</option>
                  <option value="Changamwe">Changamwe</option>
                  <option value="Chepalungu">Chepalungu</option>
                  <option value="Cherangany">Cherangany</option>
                  <option value="Chesumei">Chesumei</option>
                  <option value="Chuka/Igambang'Ombe">Chuka/Igambang'Ombe</option>
                  <option value="Dadaab">Dadaab</option>
                  <option value="Dagoretti North">Dagoretti North</option>
                  <option value="Dagoretti South">Dagoretti South</option>
                  <option value="Eldama Ravine">Eldama Ravine</option>
                  <option value="Eldas">Eldas</option>
                  <option value="Embakasi Central">Embakasi Central</option>
                  <option value="Embakasi East">Embakasi East</option>
                  <option value="Embakasi North">Embakasi North</option>
                  <option value="Embakasi South">Embakasi South</option>
                  <option value="Embakasi West">Embakasi West</option>
                  <option value="Emgwen">Emgwen</option>
                  <option value="Emuhaya">Emuhaya</option>
                  <option value="Emurua Dikirr">Emurua Dikirr</option>
                  <option value="Endebess">Endebess</option>
                  <option value="Fafi">Fafi</option>
                  <option value="Funyula">Funyula</option>
                  <option value="Galole">Galole</option>
                  <option value="Ganze">Ganze</option>
                  <option value="Garissa Township">Garissa Township</option>
                  <option value="Garsen">Garsen</option>
                  <option value="Gatanga">Gatanga</option>
                  <option value="Gatundu North">Gatundu North</option>
                  <option value="Gatundu South">Gatundu South</option>
                  <option value="Gem">Gem</option>
                  <option value="Gichugu">Gichugu</option>
                  <option value="Gilgil">Gilgil</option>
                  <option value="Githunguri">Githunguri</option>
                  <option value="Hamisi">Hamisi</option>
                  <option value="Homa Bay Town">Homa Bay Town</option>
                  <option value="Igembe Central">Igembe Central</option>
                  <option value="Igembe North">Igembe North</option>
                  <option value="Igembe South">Igembe South</option>
                  <option value="Ijara">Ijara</option>
                  <option value="Ikolomani">Ikolomani</option>
                  <option value="Isiolo North">Isiolo North</option>
                  <option value="Isiolo South">Isiolo South</option>
                  <option value="Jomvu">Jomvu</option>
                  <option value="Juja">Juja</option>
                  <option value="Kabete">Kabete</option>
                  <option value="Kabondo Kasipul">Kabondo Kasipul</option>
                  <option value="Kabuchai">Kabuchai</option>
                  <option value="Kacheliba">Kacheliba</option>
                  <option value="Kaiti">Kaiti</option>
                  <option value="Kajiado Central">Kajiado Central</option>
                  <option value="Kajiado East">Kajiado East</option>
                  <option value="Kajiado North">Kajiado North</option>
                  <option value="Kajiado South">Kajiado South</option>
                  <option value="Kajiado West">Kajiado West</option>
                  <option value="Kaloleni">Kaloleni</option>
                  <option value="Kamukunji">Kamukunji</option>
                  <option value="Kandara">Kandara</option>
                  <option value="Kanduyi">Kanduyi</option>
                  <option value="Kangema">Kangema</option>
                  <option value="Kangundo">Kangundo</option>
                  <option value="Kapenguria">Kapenguria</option>
                  <option value="Kapseret">Kapseret</option>
                  <option value="Karachuonyo">Karachuonyo</option>
                  <option value="Kasarani">Kasarani</option>
                  <option value="Kasipul">Kasipul</option>
                  <option value="Kathiani">Kathiani</option>
                  <option value="Keiyo North">Keiyo North</option>
                  <option value="Keiyo South">Keiyo South</option>
                  <option value="Kesses">Kesses</option>
                  <option value="Khwisero">Khwisero</option>
                  <option value="Kiambaa">Kiambaa</option>
                  <option value="Kiambu">Kiambu</option>
                  <option value="Kibra">Kibra</option>
                  <option value="Kibwezi East">Kibwezi East</option>
                  <option value="Kibwezi West">Kibwezi West</option>
                  <option value="Kieni">Kieni</option>
                  <option value="Kigumo">Kigumo</option>
                  <option value="Kiharu">Kiharu</option>
                  <option value="Kikuyu">Kikuyu</option>
                  <option value="Kilgoris">Kilgoris</option>
                  <option value="Kilifi North">Kilifi North</option>
                  <option value="Kilifi South">Kilifi South</option>
                  <option value="Kilome">Kilome</option>
                  <option value="Kimilili">Kimilili</option>
                  <option value="Kiminini">Kiminini</option>
                  <option value="Kinango">Kinango</option>
                  <option value="Kinangop">Kinangop</option>
                  <option value="Kipipiri">Kipipiri</option>
                  <option value="Kipkelion East">Kipkelion East</option>
                  <option value="Kipkelion West">Kipkelion West</option>
                  <option value="Kirinyaga Central">Kirinyaga Central</option>
                  <option value="Kisauni">Kisauni</option>
                  <option value="Kisumu Central">Kisumu Central</option>
                  <option value="Kisumu East">Kisumu East</option>
                  <option value="Kisumu West">Kisumu West</option>
                  <option value="Kitui Central">Kitui Central</option>
                  <option value="Kitui East">Kitui East</option>
                  <option value="Kitui Rural">Kitui Rural</option>
                  <option value="Kitui South">Kitui South</option>
                  <option value="Kitui West">Kitui West</option>
                  <option value="Kitutu Chache North">Kitutu Chache North</option>
                  <option value="Kitutu Chache South">Kitutu Chache South</option>
                  <option value="Kitutu Masaba">Kitutu Masaba</option>
                  <option value="Konoin">Konoin</option>
                  <option value="Kuresoi North">Kuresoi North</option>
                  <option value="Kuresoi South">Kuresoi South</option>
                  <option value="Kuria East">Kuria East</option>
                  <option value="Kuria West">Kuria West</option>
                  <option value="Kwanza">Kwanza</option>
                  <option value="Lafey">Lafey</option>
                  <option value="Lagdera">Lagdera</option>
                  <option value="Laikipia East">Laikipia East</option>
                  <option value="Laikipia North">Laikipia North</option>
                  <option value="Laikipia West">Laikipia West</option>
                  <option value="Laisamis">Laisamis</option>
                  <option value="Lamu East">Lamu East</option>
                  <option value="Lamu West">Lamu West</option>
                  <option value="Langata">Langata</option>
                  <option value="Lari">Lari</option>
                  <option value="Likoni">Likoni</option>
                  <option value="Likuyani">Likuyani</option>
                  <option value="Limuru">Limuru</option>
                  <option value="Loima">Loima</option>
                  <option value="Luanda">Luanda</option>
                  <option value="Lugari">Lugari</option>
                  <option value="Lungalunga">Lungalunga</option>
                  <option value="Lurambi">Lurambi</option>
                  <option value="Maara">Maara</option>
                  <option value="Machakos Town">Machakos Town</option>
                  <option value="Magarini">Magarini</option>
                  <option value="Makadara">Makadara</option>
                  <option value="Makueni">Makueni</option>
                  <option value="Malava">Malava</option>
                  <option value="Malindi">Malindi</option>
                  <option value="Mandera East">Mandera East</option>
                  <option value="Mandera North">Mandera North</option>
                  <option value="Mandera South">Mandera South</option>
                  <option value="Mandera West">Mandera West</option>
                  <option value="Manyatta">Manyatta</option>
                  <option value="Maragwa">Maragwa</option>
                  <option value="Marakwet East">Marakwet East</option>
                  <option value="Marakwet West">Marakwet West</option>
                  <option value="Masinga">Masinga</option>
                  <option value="Matayos">Matayos</option>
                  <option value="Mathare">Mathare</option>
                  <option value="Mathioya">Mathioya</option>
                  <option value="Mathira">Mathira</option>
                  <option value="Matuga">Matuga</option>
                  <option value="Matungu">Matungu</option>
                  <option value="Matungulu">Matungulu</option>
                  <option value="Mavoko">Mavoko</option>
                  <option value="Mbeere North">Mbeere North</option>
                  <option value="Mbeere South">Mbeere South</option>
                  <option value="Mbooni">Mbooni</option>
                  <option value="Mogotio">Mogotio</option>
                  <option value="Moiben">Moiben</option>
                  <option value="Molo">Molo</option>
                  <option value="Mosop">Mosop</option>
                  <option value="Moyale">Moyale</option>
                  <option value="Msambweni">Msambweni</option>
                  <option value="Mt. Elgon">Mt. Elgon</option>
                  <option value="Muhoroni">Muhoroni</option>
                  <option value="Mukurweini">Mukurweini</option>
                  <option value="Mumias East">Mumias East</option>
                  <option value="Mumias West">Mumias West</option>
                  <option value="Mvita">Mvita</option>
                  <option value="Mwala">Mwala</option>
                  <option value="Mwatate">Mwatate</option>
                  <option value="Mwea">Mwea</option>
                  <option value="Mwingi Central">Mwingi Central</option>
                  <option value="Mwingi North">Mwingi North</option>
                  <option value="Mwingi West">Mwingi West</option>
                  <option value="Naivasha">Naivasha</option>
                  <option value="Nakuru Town East">Nakuru Town East</option>
                  <option value="Nakuru Town West">Nakuru Town West</option>
                  <option value="Nambale">Nambale</option>
                  <option value="Nandi Hills">Nandi Hills</option>
                  <option value="Narok East">Narok East</option>
                  <option value="Narok North">Narok North</option>
                  <option value="Narok South">Narok South</option>
                  <option value="Narok West">Narok West</option>
                  <option value="Navakholo">Navakholo</option>
                  <option value="Ndaragwa">Ndaragwa</option>
                  <option value="Ndhiwa">Ndhiwa</option>
                  <option value="Ndia">Ndia</option>
                  <option value="Njoro">Njoro</option>
                  <option value="North Horr">North Horr</option>
                  <option value="North Imenti">North Imenti</option>
                  <option value="North Mugirango">North Mugirango</option>
                  <option value="Nyakach">Nyakach</option>
                  <option value="Nyali">Nyali</option>
                  <option value="Nyando">Nyando</option>
                  <option value="Nyaribari Chache">Nyaribari Chache</option>
                  <option value="Nyaribari Masaba">Nyaribari Masaba</option>
                  <option value="Nyatike">Nyatike</option>
                  <option value="Nyeri Town">Nyeri Town</option>
                  <option value="Ol Jorok">Ol Jorok</option>
                  <option value="Ol Kalou">Ol Kalou</option>
                  <option value="Othaya">Othaya</option>
                  <option value="Pokot South">Pokot South</option>
                  <option value="Rabai">Rabai</option>
                  <option value="Rangwe">Rangwe</option>
                  <option value="Rarieda">Rarieda</option>
                  <option value="Rongai">Rongai</option>
                  <option value="Rongo">Rongo</option>
                  <option value="Roysambu">Roysambu</option>
                  <option value="Ruaraka">Ruaraka</option>
                  <option value="Ruiru">Ruiru</option>
                  <option value="Runyenjes">Runyenjes</option>
                  <option value="Sabatia">Sabatia</option>
                  <option value="Saboti">Saboti</option>
                  <option value="Saku">Saku</option>
                  <option value="Samburu East">Samburu East</option>
                  <option value="Samburu North">Samburu North</option>
                  <option value="Samburu West">Samburu West</option>
                  <option value="Seme">Seme</option>
                  <option value="Shinyalu">Shinyalu</option>
                  <option value="Sigor">Sigor</option>
                  <option value="Sigowet/Soin">Sigowet/Soin</option>
                  <option value="Sirisia">Sirisia</option>
                  <option value="Sotik">Sotik</option>
                  <option value="South Imenti">South Imenti</option>
                  <option value="South Mugirango">South Mugirango</option>
                  <option value="Soy">Soy</option>
                  <option value="Starehe">Starehe</option>
                  <option value="Suba North">Suba North</option>
                  <option value="Suba South">Suba South</option>
                  <option value="Subukia">Subukia</option>
                  <option value="Suna East">Suna East</option>
                  <option value="Suna West">Suna West</option>
                  <option value="Tarbaj">Tarbaj</option>
                  <option value="Taveta">Taveta</option>
                  <option value="Teso North">Teso North</option>
                  <option value="Teso South">Teso South</option>
                  <option value="Tetu">Tetu</option>
                  <option value="Tharaka">Tharaka</option>
                  <option value="Thika Town">Thika Town</option>
                  <option value="Tiaty">Tiaty</option>
                  <option value="Tigania East">Tigania East</option>
                  <option value="Tigania West">Tigania West</option>
                  <option value="Tinderet">Tinderet</option>
                  <option value="Tongaren">Tongaren</option>
                  <option value="Turbo">Turbo</option>
                  <option value="Turkana Central">Turkana Central</option>
                  <option value="Turkana East">Turkana East</option>
                  <option value="Turkana North">Turkana North</option>
                  <option value="Turkana South">Turkana South</option>
                  <option value="Turkana West">Turkana West</option>
                  <option value="Ugenya">Ugenya</option>
                  <option value="Ugunja">Ugunja</option>
                  <option value="Uriri">Uriri</option>
                  <option value="Vihiga">Vihiga</option>
                  <option value="Voi">Voi</option>
                  <option value="Wajir East">Wajir East</option>
                  <option value="Wajir North">Wajir North</option>
                  <option value="Wajir South">Wajir South</option>
                  <option value="Wajir West">Wajir West</option>
                  <option value="Webuye East">Webuye East</option>
                  <option value="Webuye West">Webuye West</option>
                  <option value="West Mugirango">West Mugirango</option>
                  <option value="Westlands">Westlands</option>
                  <option value="Wundanyi">Wundanyi</option>
                  <option value="Yatta">Yatta</option>
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
                <th>POSITION</th>
                <th>SURNAME</th>
                <th>OTHER NAMES</th>
                <th>ID NO</th>
                <th>TEL NO</th>
                <th>COUNTY</th>
                <th>CONSTITUENCY</th>
                <th>WARD</th>
                <th class="actions">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
            <?php
                while($row = $result->fetch_assoc()):

              ?>
              <tr>
                <td><?php echo $row['sn']; ?></td>                
                <td><?php echo $row['position']; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['other_names']; ?></td>
                <td><?php echo $row['id_passport_number']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['county']; ?></td>
                <td><?php echo $row['constituency']; ?></td>
                <td><?php echo $row['ward']; ?></td>
                <td class="actions">
                  <a href="#" class="btn btn-primary">VIEW</a>
                  <a href="#" class="btn btn-warning">EDIT</a>
                  <a href="mna.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">DELETE</a>
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