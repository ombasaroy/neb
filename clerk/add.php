<?php
  session_start();

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

    <title>Add Aspirant</title>
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
        <div class="">
      <?php
              if(isset($_GET['success'])){
                if(isset($_SESSION['success'])){
                  echo "<div class='alert alert-success'>". $_SESSION['success'] . "</div>";
                }
              }elseif(isset($_GET['failed'])){
                if(isset($_SESSION['wrong_values'])){
                  echo "<div class='alert alert-danger'>". $_SESSION['wrong_values'] . "</div>";
                }
              }
              elseif(isset($_GET['exists'])){
                if(isset($_SESSION['exists'])){
                  echo "<div class='alert alert-warning'>" . $_SESSION['exists'] . "</div>";
                }
              }

            ?>
        <form action="addaspirant.php" method="post" enctype="multipart/form-data" class="registration-form" id="registration-form">
          <h3>ADD ASPIRANT</h3>

<!-- Region section begins here -->
            <br> 
            <div class="section-headers"><h4>Step 1: Position and Region</h4></div>
            
            <div class="input-sections">
              <div class="row form-group">
                <div class="col">
                  <label for="sn">Serial Number</label>
                  <input type="text" name="sn" id="sn" placeholder="------" required class="form-control">
                  <p>
                    <?php

                      if(isset($_GET['failed'])){
                        if(isset($_SESSION['sn_err'])){
                          echo "<div class='alert alert-danger'>" . $_SESSION['sn_err'] . "</div>";
                        }
                      }


                    ?>
                  </p>
                  
                </div>
                <div class="col">
                  <label for="position">Choose position <span class="mandatory">*</span></label>
                  <select name="position" id="position" class="form-control"  required>
                    <option value="">------</option>
                    <option value="President">President</option>
                    <option value="Governor">Governor</option>
                    <option value="Senate">Senate</option>
                    <option value="WREP">WREP</option>
                    <option value="MNA">MNA</option>
                    <option value="MCA">MCA</option>
                    <option value="party-list">Party List</option>
  
                  </select>
                </div>
                <div class="col">
                  <label for="county">County <span class="mandatory">*</span></label>
                  <select name="county" id="county" class="form-control"  required>
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
                
              </div>
  
              <div class="row form-group mt-4">
              <div class="col">
                  <label for="constituency">Constituency <span class="mandatory">*</span></label>
                  <select name="constituency" id="constituency"  required class="form-control">
                  <option value="">------</option>
                  <option value="Ainabkoi">Ainabkoi</option>
                  <option value="Ainamoi">Ainamoi</option>
                  <option value="Aldai">Aldai</option>
                  <option value="Alego Usonga">Alego Usonga</option>
                  <option value="Awendo">Awendo</option>
                  <option value="Bahati">Bahati</option>
                  <option value="Balambala">Balambala</option>
                  <option value="Banissa">Banissa</option>
                  <option value="Baringo ??North">Baringo ??North</option>
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
                <div class="col">
                  <label for="ward">Ward <span class="mandatory">*</span></label>
                  <select name="ward" id="ward" class="form-control"  required>
                    <option value="">------</option>
                    <option value="Abakaile">Abakaile</option>
                    <option value="Abogeta East">Abogeta East</option>
                    <option value="Abogeta West">Abogeta West</option>
                    <option value="Abothuguchi Central">Abothuguchi Central</option>
                    <option value="Abothuguchi West">Abothuguchi West</option>
                    <option value="Adamasajide">Adamasajide</option>
                    <option value="Adu">Adu</option>
                    <option value="Ageng'A Nanguba">Ageng'A Nanguba</option>
                    <option value="Aguthi-Gaaki">Aguthi-Gaaki</option>
                    <option value="Ahero">Ahero</option>
                    <option value="Ainabkoi/Olare">Ainabkoi/Olare</option>
                    <option value="Ainamoi">Ainamoi</option>
                    <option value="Airbase">Airbase</option>
                    <option value="Airport">Airport</option>
                    <option value="Akachiu">Akachiu</option>
                    <option value="Akirang'Ondu">Akirang'Ondu</option>
                    <option value="Akithii">Akithii</option>
                    <option value="Alale">Alale</option>
                    <option value="Alango Gof">Alango Gof</option>
                    <option value="Amalo">Amalo</option>
                    <option value="Amukura Central">Amukura Central</option>
                    <option value="Amukura East">Amukura East</option>
                    <option value="Amukura West">Amukura West</option>
                    <option value="Amwathi">Amwathi</option>
                    <option value="Angata Barikoi">Angata Barikoi</option>
                    <option value="Angata Nanyokie">Angata Nanyokie</option>
                    <option value="Ang'Orom">Ang'Orom</option>
                    <option value="Ang'Urai East">Ang'Urai East</option>
                    <option value="Ang'Urai North">Ang'Urai North</option>
                    <option value="Ang'Urai South">Ang'Urai South</option>
                    <option value="Antuambui">Antuambui</option>
                    <option value="Antubetwe Kiongo">Antubetwe Kiongo</option>
                    <option value="Arabia">Arabia</option>
                    <option value="Arbajahan">Arbajahan</option>
                    <option value="Arror">Arror</option>
                    <option value="Ashabito">Ashabito</option>
                    <option value="Athi River">Athi River</option>
                    <option value="Athi">Athi</option>
                    <option value="Athiru Gaiti">Athiru Gaiti</option>
                    <option value="Athiru Ruujine">Athiru Ruujine</option>
                    <option value="Athwana">Athwana</option>
                    <option value="Awasi/Onjiko">Awasi/Onjiko</option>
                    <option value="Baawa">Baawa</option>
                    <option value="Baba Dogo">Baba Dogo</option>
                    <option value="Bahari">Bahari</option>
                    <option value="Bahati">Bahati</option>
                    <option value="Balambala">Balambala</option>
                    <option value="Bamba">Bamba</option>
                    <option value="Bamburi">Bamburi</option>
                    <option value="Bangale">Bangale</option>
                    <option value="Banissa">Banissa</option>
                    <option value="Banja">Banja</option>
                    <option value="Baragwi">Baragwi</option>
                    <option value="Baraki">Baraki</option>
                    <option value="Bartabwa">Bartabwa</option>
                    <option value="Barut">Barut</option>
                    <option value="Barwago">Barwago</option>
                    <option value="Barwessa">Barwessa</option>
                    <option value="Basi Bogetaorio">Basi Bogetaorio</option>
                    <option value="Basi Central">Basi Central</option>
                    <option value="Basuba">Basuba</option>
                    <option value="Batalu">Batalu</option>
                    <option value="Batei">Batei</option>
                    <option value="Benane">Benane</option>
                    <option value="Benane">Benane</option>
                    <option value="Biashara">Biashara</option>
                    <option value="Biashara">Biashara</option>
                    <option value="Biashara">Biashara</option>
                    <option value="Bibirioni">Bibirioni</option>
                    <option value="Bidii">Bidii</option>
                    <option value="Birongo">Birongo</option>
                    <option value="Bobaracho">Bobaracho</option>
                    <option value="Bobasi Boitangare">Bobasi Boitangare</option>
                    <option value="Bobasi Chache">Bobasi Chache</option>
                    <option value="Bofu">Bofu</option>
                    <option value="Bogeka">Bogeka</option>
                    <option value="Bogetenga">Bogetenga</option>
                    <option value="Bogiakumu">Bogiakumu</option>
                    <option value="Bogichora">Bogichora</option>
                    <option value="Bogusero">Bogusero</option>
                    <option value="Boikang'A">Boikang'A</option>
                    <option value="Boito">Boito</option>
                    <option value="Bokeira">Bokeira</option>
                    <option value="Bokimonge">Bokimonge</option>
                    <option value="Bokoli">Bokoli</option>
                    <option value="Bomani">Bomani</option>
                    <option value="Bomariba">Bomariba</option>
                    <option value="Bombaba Borabu">Bombaba Borabu</option>
                    <option value="Bomorenda">Bomorenda</option>
                    <option value="Bomwagamo">Bomwagamo</option>
                    <option value="Bonyamatuta">Bonyamatuta</option>
                    <option value="Boochi Borabu">Boochi Borabu</option>
                    <option value="Boochi/Tendere">Boochi/Tendere</option>
                    <option value="Borabu / Chitago">Borabu / Chitago</option>
                    <option value="Bosamaro">Bosamaro</option>
                    <option value="Bosoti/Sengera">Bosoti/Sengera</option>
                    <option value="Bukembe East">Bukembe East</option>
                    <option value="Bukembe West">Bukembe West</option>
                    <option value="Bukhayo Central">Bukhayo Central</option>
                    <option value="Bukhayo East">Bukhayo East</option>
                    <option value="Bukhayo North/Waltsi">Bukhayo North/Waltsi</option>
                    <option value="Bukhayo West">Bukhayo West</option>
                    <option value="Bukira Centrl/Ikerege">Bukira Centrl/Ikerege</option>
                    <option value="Bukira East">Bukira East</option>
                    <option value="Bulla Pesa">Bulla Pesa</option>
                    <option value="Bumula">Bumula</option>
                    <option value="Bunyala Central">Bunyala Central</option>
                    <option value="Bunyala Central">Bunyala Central</option>
                    <option value="Bunyala East">Bunyala East</option>
                    <option value="Bunyala North">Bunyala North</option>
                    <option value="Bunyala South">Bunyala South</option>
                    <option value="Bunyala West">Bunyala West</option>
                    <option value="Bunyala West">Bunyala West</option>
                    <option value="Bura">Bura</option>
                    <option value="Bura">Bura</option>
                    <option value="Burat">Burat</option>
                    <option value="Burder">Burder</option>
                    <option value="Burumba">Burumba</option>
                    <option value="Busali">Busali</option>
                    <option value="Busibwabo">Busibwabo</option>
                    <option value="Butali/Chegulo">Butali/Chegulo</option>
                    <option value="Bute">Bute</option>
                    <option value="Butiye">Butiye</option>
                    <option value="Butsotso Central">Butsotso Central</option>
                    <option value="Butsotso East">Butsotso East</option>
                    <option value="Butsotso South">Butsotso South</option>
                    <option value="Bwake/Luuya">Bwake/Luuya</option>
                    <option value="Bwiri">Bwiri</option>
                    <option value="California">California</option>
                    <option value="Central  Ward">Central  Ward</option>
                    <option value="Central Alego">Central Alego</option>
                    <option value="Central Bunyore">Central Bunyore</option>
                    <option value="Central Gem">Central Gem</option>
                    <option value="Central Kamagambo">Central Kamagambo</option>
                    <option value="Central Kanyamkago">Central Kanyamkago</option>
                    <option value="Central Kasipul">Central Kasipul</option>
                    <option value="Central Kisumu">Central Kisumu</option>
                    <option value="Central Maragoli">Central Maragoli</option>
                    <option value="Central Nyakach">Central Nyakach</option>
                    <option value="Central Sakwa">Central Sakwa</option>
                    <option value="Central Sakwa">Central Sakwa</option>
                    <option value="Central Seme">Central Seme</option>
                    <option value="Central">Central</option>
                    <option value="Central">Central</option>
                    <option value="Central">Central</option>
                    <option value="Chaani">Chaani</option>
                    <option value="Chaik">Chaik</option>
                    <option value="Chakol North">Chakol North</option>
                    <option value="Chakol South">Chakol South</option>
                    <option value="Chala">Chala</option>
                    <option value="Changamwe">Changamwe</option>
                    <option value="Chania">Chania</option>
                    <option value="Charagita">Charagita</option>
                    <option value="Chari">Chari</option>
                    <option value="Chasimba">Chasimba</option>
                    <option value="Chavakali">Chavakali</option>
                    <option value="Chawia">Chawia</option>
                    <option value="Cheboin">Cheboin</option>
                    <option value="Chebunyo">Chebunyo</option>
                    <option value="Chekalini">Chekalini</option>
                    <option value="Chemagel">Chemagel</option>
                    <option value="Chemaner">Chemaner</option>
                    <option value="Chemelil">Chemelil</option>
                    <option value="Chemelil/Chemase">Chemelil/Chemase</option>
                    <option value="Chemosot">Chemosot</option>
                    <option value="Chemuche">Chemuche</option>
                    <option value="Chemundu/Kapng'Etuny">Chemundu/Kapng'Etuny</option>
                    <option value="Chengoni/Samburu">Chengoni/Samburu</option>
                    <option value="Chepareria">Chepareria</option>
                    <option value="Chepchabas">Chepchabas</option>
                    <option value="Chepchoina">Chepchoina</option>
                    <option value="Chepkorio">Chepkorio</option>
                    <option value="Chepkumia">Chepkumia</option>
                    <option value="Chepkunyuk">Chepkunyuk</option>
                    <option value="Cheplanget">Cheplanget</option>
                    <option value="Chepseon">Chepseon</option>
                    <option value="Chepsiro/Kiptoror">Chepsiro/Kiptoror</option>
                    <option value="Cheptais">Cheptais</option>
                    <option value="Chepterwai">Chepterwai</option>
                    <option value="Cheptiret/Kipchamo">Cheptiret/Kipchamo</option>
                    <option value="Cheptororiet/Seretut">Cheptororiet/Seretut</option>
                    <option value="Chepyuk">Chepyuk</option>
                    <option value="Cherab">Cherab</option>
                    <option value="Cherang'Any/Chebororwa">Cherang'Any/Chebororwa</option>
                    <option value="Cherangany/Suwerwa">Cherangany/Suwerwa</option>
                    <option value="Chesikaki">Chesikaki</option>
                    <option value="Chesoen">Chesoen</option>
                    <option value="Chevaywa">Chevaywa</option>
                    <option value="Chewani">Chewani</option>
                    <option value="Chewele">Chewele</option>
                    <option value="Chiakariga">Chiakariga</option>
                    <option value="Chilchila">Chilchila</option>
                    <option value="Chinga">Chinga</option>
                    <option value="Chogoria">Chogoria</option>
                    <option value="Chuluni">Chuluni</option>
                    <option value="Churo/Amaya">Churo/Amaya</option>
                    <option value="Cianda">Cianda</option>
                    <option value="Clay City">Clay City</option>
                    <option value="Dabaso">Dabaso</option>
                    <option value="Dadaab">Dadaab</option>
                    <option value="Dadaja Bulla">Dadaja Bulla</option>
                    <option value="Dalalekutuk">Dalalekutuk</option>
                    <option value="Damajale">Damajale</option>
                    <option value="Danaba">Danaba</option>
                    <option value="Dandora Area I">Dandora Area I</option>
                    <option value="Dandora Area Ii">Dandora Area Ii</option>
                    <option value="Dandora Area Iii">Dandora Area Iii</option>
                    <option value="Dandora Area Iv">Dandora Area Iv</option>
                    <option value="Dandu">Dandu</option>
                    <option value="Danyere">Danyere</option>
                    <option value="Dedan Kimanthi">Dedan Kimanthi</option>
                    <option value="Dekaharia">Dekaharia</option>
                    <option value="Della">Della</option>
                    <option value="Derkhale">Derkhale</option>
                    <option value="Dertu">Dertu</option>
                    <option value="Diif">Diif</option>
                    <option value="Dukana">Dukana</option>
                    <option value="Dundori">Dundori</option>
                    <option value="Dzombo">Dzombo</option>
                    <option value="East Asembo">East Asembo</option>
                    <option value="East Gem">East Gem</option>
                    <option value="East Gem">East Gem</option>
                    <option value="East Kabras">East Kabras</option>
                    <option value="East Kamagak">East Kamagak</option>
                    <option value="East Kamagambo">East Kamagambo</option>
                    <option value="East Kano/Wawidhi">East Kano/Wawidhi</option>
                    <option value="East Kanyamkago">East Kanyamkago</option>
                    <option value="East Sang'Alo">East Sang'Alo</option>
                    <option value="East Seme">East Seme</option>
                    <option value="East Ugenya">East Ugenya</option>
                    <option value="East Wanga">East Wanga</option>
                    <option value="Eastleigh North">Eastleigh North</option>
                    <option value="Eastleigh South">Eastleigh South</option>
                    <option value="Ekalakala">Ekalakala</option>
                    <option value="Ekerenyo">Ekerenyo</option>
                    <option value="El-Barta">El-Barta</option>
                    <option value="Elben">Elben</option>
                    <option value="Elburgon">Elburgon</option>
                    <option value="Eldas">Eldas</option>
                    <option value="Elementaita">Elementaita</option>
                    <option value="Elgon">Elgon</option>
                    <option value="Elnur/Tula Tula">Elnur/Tula Tula</option>
                    <option value="Elugulu">Elugulu</option>
                    <option value="Elwak North">Elwak North</option>
                    <option value="Elwak South">Elwak South</option>
                    <option value="Emabungo">Emabungo</option>
                    <option value="Emali/Mulala">Emali/Mulala</option>
                    <option value="Embakasi">Embakasi</option>
                    <option value="Embobut / Embulot">Embobut / Embulot</option>
                    <option value="Embomos">Embomos</option>
                    <option value="Emining">Emining</option>
                    <option value="Emsoo">Emsoo</option>
                    <option value="Endau/Malalani">Endau/Malalani</option>
                    <option value="Endebess">Endebess</option>
                    <option value="Endo">Endo</option>
                    <option value="Endugh">Endugh</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Entonet/Lenkisim">Entonet/Lenkisim</option>
                    <option value="Esise">Esise</option>
                    <option value="Etenje">Etenje</option>
                    <option value="Evurore">Evurore</option>
                    <option value="Ewalel/Chapchap">Ewalel/Chapchap</option>
                    <option value="Ewuaso Oonkidong'I">Ewuaso Oonkidong'I</option>
                    <option value="Fafi">Fafi</option>
                    <option value="Faza">Faza</option>
                    <option value="Fino">Fino</option>
                    <option value="Flamingo">Flamingo</option>
                    <option value="Frere Town">Frere Town</option>
                    <option value="Gachuba">Gachuba</option>
                    <option value="Gaichanjiru">Gaichanjiru</option>
                    <option value="Gakawa">Gakawa</option>
                    <option value="Galbet">Galbet</option>
                    <option value="Ganda">Ganda</option>
                    <option value="Ganga">Ganga</option>
                    <option value="Ganyure/Wagalla">Ganyure/Wagalla</option>
                    <option value="Ganze">Ganze</option>
                    <option value="Garashi">Garashi</option>
                    <option value="Garbatulla">Garbatulla</option>
                    <option value="Garsen Central">Garsen Central</option>
                    <option value="Garsen North">Garsen North</option>
                    <option value="Garsen South">Garsen South</option>
                    <option value="Garsen West">Garsen West</option>
                    <option value="Gatanga">Gatanga</option>
                    <option value="Gatarakwa">Gatarakwa</option>
                    <option value="Gathanji">Gathanji</option>
                    <option value="Gathara">Gathara</option>
                    <option value="Gathigiriri">Gathigiriri</option>
                    <option value="Gatimu">Gatimu</option>
                    <option value="Gatina">Gatina</option>
                    <option value="Gatitu/Muruguru">Gatitu/Muruguru</option>
                    <option value="Gatongora">Gatongora</option>
                    <option value="Gatuanyaga">Gatuanyaga</option>
                    <option value="Gatunga">Gatunga</option>
                    <option value="Gaturi North">Gaturi North</option>
                    <option value="Gaturi South">Gaturi South</option>
                    <option value="Gaturi">Gaturi</option>
                    <option value="Gembe">Gembe</option>
                    <option value="Gesima">Gesima</option>
                    <option value="Gesusu">Gesusu</option>
                    <option value="Geta">Geta</option>
                    <option value="Getenga">Getenga</option>
                    <option value="Gikondi">Gikondi</option>
                    <option value="Gilgil">Gilgil</option>
                    <option value="Gisambai">Gisambai</option>
                    <option value="Gitaru">Gitaru</option>
                    <option value="Githabai">Githabai</option>
                    <option value="Gither">Gither</option>
                    <option value="Githiga">Githiga</option>
                    <option value="Githiga">Githiga</option>
                    <option value="Githioro">Githioro</option>
                    <option value="Githobokoni">Githobokoni</option>
                    <option value="Githunguri">Githunguri</option>
                    <option value="Githurai">Githurai</option>
                    <option value="Gitothua">Gitothua</option>
                    <option value="Gituamba">Gituamba</option>
                    <option value="Gitugi">Gitugi</option>
                    <option value="God Jope">God Jope</option>
                    <option value="Godoma">Godoma</option>
                    <option value="Gokeharaka/Getambwega">Gokeharaka/Getambwega</option>
                    <option value="Golbo">Golbo</option>
                    <option value="Gombato Bongwe">Gombato Bongwe</option>
                    <option value="Gongoni">Gongoni</option>
                    <option value="Goreale">Goreale</option>
                    <option value="Got Kachola">Got Kachola</option>
                    <option value="Guba">Guba</option>
                    <option value="Gurar">Gurar</option>
                    <option value="Guticha">Guticha</option>
                    <option value="Gwassi North">Gwassi North</option>
                    <option value="Gwassi South">Gwassi South</option>
                    <option value="Habasswein">Habasswein</option>
                    <option value="Hadado/Athibohol">Hadado/Athibohol</option>
                    <option value="Harambee">Harambee</option>
                    <option value="Heillu/Manyatta">Heillu/Manyatta</option>
                    <option value="Hells Gate">Hells Gate</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Hirimani">Hirimani</option>
                    <option value="Homa Bay Arujo">Homa Bay Arujo</option>
                    <option value="Homa Bay Central">Homa Bay Central</option>
                    <option value="Homa Bay East">Homa Bay East</option>
                    <option value="Homa Bay West">Homa Bay West</option>
                    <option value="Hongwe">Hongwe</option>
                    <option value="Hospital">Hospital</option>
                    <option value="Hospital">Hospital</option>
                    <option value="Hospital">Hospital</option>
                    <option value="Hulugho">Hulugho</option>
                    <option value="Huruma">Huruma</option>
                    <option value="Huruma">Huruma</option>
                    <option value="Ibeno">Ibeno</option>
                    <option value="Ibrahim Ure">Ibrahim Ure</option>
                    <option value="Ichagaki">Ichagaki</option>
                    <option value="Ichuni">Ichuni</option>
                    <option value="Idakho Central">Idakho Central</option>
                    <option value="Idakho East">Idakho East</option>
                    <option value="Idakho North">Idakho North</option>
                    <option value="Idakho South">Idakho South</option>
                    <option value="Iftin">Iftin</option>
                    <option value="Igambang'Ombe">Igambang'Ombe</option>
                    <option value="Igembe East">Igembe East</option>
                    <option value="Igoji East">Igoji East</option>
                    <option value="Igoji West">Igoji West</option>
                    <option value="Igwamiti">Igwamiti</option>
                    <option value="Ijara">Ijara</option>
                    <option value="Ikanga/Kyatune">Ikanga/Kyatune</option>
                    <option value="Ikinu">Ikinu</option>
                    <option value="Ikombe">Ikombe</option>
                    <option value="Ikutha">Ikutha</option>
                    <option value="Ilchamus">Ilchamus</option>
                    <option value="Ildamat">Ildamat</option>
                    <option value="Ildamat">Ildamat</option>
                    <option value="Ilima">Ilima</option>
                    <option value="Ilkerin">Ilkerin</option>
                    <option value="Illeret">Illeret</option>
                    <option value="Ilmotiok">Ilmotiok</option>
                    <option value="Iloodokilani">Iloodokilani</option>
                    <option value="Imara Daima">Imara Daima</option>
                    <option value="Imaroro">Imaroro</option>
                    <option value="Ingostse-Mathia">Ingostse-Mathia</option>
                    <option value="Inoi">Inoi</option>
                    <option value="Iriaini">Iriaini</option>
                    <option value="Iria-Ini">Iria-Ini</option>
                    <option value="Isibania">Isibania</option>
                    <option value="Isukha Central">Isukha Central</option>
                    <option value="Isukha East">Isukha East</option>
                    <option value="Isukha North">Isukha North</option>
                    <option value="Isukha South">Isukha South</option>
                    <option value="Isukha West">Isukha West</option>
                    <option value="Ithanga">Ithanga</option>
                    <option value="Ithiru">Ithiru</option>
                    <option value="Itibo">Itibo</option>
                    <option value="Ivingoni/Nzambani">Ivingoni/Nzambani</option>
                    <option value="Jara Jara">Jara Jara</option>
                    <option value="Jarajila">Jarajila</option>
                    <option value="Jaribuni">Jaribuni</option>
                    <option value="Jepkoyai">Jepkoyai</option>
                    <option value="Jilore">Jilore</option>
                    <option value="Jomvu Kuu">Jomvu Kuu</option>
                    <option value="Juja">Juja</option>
                    <option value="Junda">Junda</option>
                    <option value="Junju">Junju</option>
                    <option value="Kaaleng/Kaikor">Kaaleng/Kaikor</option>
                    <option value="Kabare">Kabare</option>
                    <option value="Kabarnet">Kabarnet</option>
                    <option value="Kabartonjo">Kabartonjo</option>
                    <option value="Kabaru">Kabaru</option>
                    <option value="Kabatini">Kabatini</option>
                    <option value="Kabazi">Kabazi</option>
                    <option value="Kabete">Kabete</option>
                    <option value="Kabianga">Kabianga</option>
                    <option value="Kabiemit">Kabiemit</option>
                    <option value="Kabiro">Kabiro</option>
                    <option value="Kabisaga">Kabisaga</option>
                    <option value="Kabiyet">Kabiyet</option>
                    <option value="Kabondo East">Kabondo East</option>
                    <option value="Kabondo West">Kabondo West</option>
                    <option value="Kabonyo/Kanyagwal">Kabonyo/Kanyagwal</option>
                    <option value="Kabuchai/Chwele">Kabuchai/Chwele</option>
                    <option value="Kabula">Kabula</option>
                    <option value="Kabuoch North">Kabuoch North</option>
                    <option value="Kabuoch South/Pala">Kabuoch South/Pala</option>
                    <option value="Kabwareng">Kabwareng</option>
                    <option value="Kachien'G">Kachien'G</option>
                    <option value="Kadzandani">Kadzandani</option>
                    <option value="Kaeris">Kaeris</option>
                    <option value="Kagaari North">Kagaari North</option>
                    <option value="Kagaari South">Kagaari South</option>
                    <option value="Kagan">Kagan</option>
                    <option value="Kagundu-Ini">Kagundu-Ini</option>
                    <option value="Kahawa Sukari">Kahawa Sukari</option>
                    <option value="Kahawa Wendani">Kahawa Wendani</option>
                    <option value="Kahawa West">Kahawa West</option>
                    <option value="Kahawa">Kahawa</option>
                    <option value="Kahumbu">Kahumbu</option>
                    <option value="Kaimbaga">Kaimbaga</option>
                    <option value="Kajulu">Kajulu</option>
                    <option value="Kakrao">Kakrao</option>
                    <option value="Kaksingri West">Kaksingri West</option>
                    <option value="Kakuma">Kakuma</option>
                    <option value="Kakuyuni">Kakuyuni</option>
                    <option value="Kakuzi/Mitubiri">Kakuzi/Mitubiri</option>
                    <option value="Kalama">Kalama</option>
                    <option value="Kalapata">Kalapata</option>
                    <option value="Kalawa">Kalawa</option>
                    <option value="Kaler">Kaler</option>
                    <option value="Kalimoni">Kalimoni</option>
                    <option value="Kalobeyei">Kalobeyei</option>
                    <option value="Kalokol">Kalokol</option>
                    <option value="Kaloleni">Kaloleni</option>
                    <option value="Kaloleni">Kaloleni</option>
                    <option value="Kamacharia">Kamacharia</option>
                    <option value="Kamagut">Kamagut</option>
                    <option value="Kamahuha">Kamahuha</option>
                    <option value="Kamakwa/Mukaro">Kamakwa/Mukaro</option>
                    <option value="Kamara">Kamara</option>
                    <option value="Kamariny">Kamariny</option>
                    <option value="Kamasian">Kamasian</option>
                    <option value="Kambe/Ribe">Kambe/Ribe</option>
                    <option value="Kambiti">Kambiti</option>
                    <option value="Kamburu">Kamburu</option>
                    <option value="Kamenu">Kamenu</option>
                    <option value="Kamukuywa">Kamukuywa</option>
                    <option value="Kanamkemer">Kanamkemer</option>
                    <option value="Kangai">Kangai</option>
                    <option value="Kangari">Kangari</option>
                    <option value="Kang'Atotha">Kang'Atotha</option>
                    <option value="Kangemi">Kangemi</option>
                    <option value="Kangeta">Kangeta</option>
                    <option value="Kangundo Central">Kangundo Central</option>
                    <option value="Kangundo East">Kangundo East</option>
                    <option value="Kangundo North">Kangundo North</option>
                    <option value="Kangundo West">Kangundo West</option>
                    <option value="Kanjuiri Range">Kanjuiri Range</option>
                    <option value="Kanuni">Kanuni</option>
                    <option value="Kanyadoto">Kanyadoto</option>
                    <option value="Kanyaluo">Kanyaluo</option>
                    <option value="Kanyamwa Kologi">Kanyamwa Kologi</option>
                    <option value="Kanyamwa Kosewe">Kanyamwa Kosewe</option>
                    <option value="Kanyangi">Kanyangi</option>
                    <option value="Kanyasa">Kanyasa</option>
                    <option value="Kanyekini">Kanyekini</option>
                    <option value="Kanyenya-Ini">Kanyenya-Ini</option>
                    <option value="Kanyikela">Kanyikela</option>
                    <option value="Kanziko">Kanziko</option>
                    <option value="Kapchemutwa">Kapchemutwa</option>
                    <option value="Kapchok">Kapchok</option>
                    <option value="Kapchorua">Kapchorua</option>
                    <option value="Kapedo/Napeitom">Kapedo/Napeitom</option>
                    <option value="Kapenguria">Kapenguria</option>
                    <option value="Kapkangani">Kapkangani</option>
                    <option value="Kapkateny">Kapkateny</option>
                    <option value="Kapkatet">Kapkatet</option>
                    <option value="Kapkugerwet">Kapkugerwet</option>
                    <option value="Kapkures">Kapkures</option>
                    <option value="Kapkures">Kapkures</option>
                    <option value="Kaplamai">Kaplamai</option>
                    <option value="Kaplelartet">Kaplelartet</option>
                    <option value="Kapletundo">Kapletundo</option>
                    <option value="Kapomboi">Kapomboi</option>
                    <option value="Kapropita">Kapropita</option>
                    <option value="Kapsabet">Kapsabet</option>
                    <option value="Kapsaos">Kapsaos</option>
                    <option value="Kapsaos">Kapsaos</option>
                    <option value="Kapsasian">Kapsasian</option>
                    <option value="Kapsimotwo">Kapsimotwo</option>
                    <option value="Kapsoit">Kapsoit</option>
                    <option value="Kapsowar">Kapsowar</option>
                    <option value="Kapsoya">Kapsoya</option>
                    <option value="Kapsuser">Kapsuser</option>
                    <option value="Kaptagat">Kaptagat</option>
                    <option value="Kaptama">Kaptama</option>
                    <option value="Kaptarakwa">Kaptarakwa</option>
                    <option value="Kaptel/Kamoiywo">Kaptel/Kamoiywo</option>
                    <option value="Kaptembwo">Kaptembwo</option>
                    <option value="Kaptumo-Kaboi">Kaptumo-Kaboi</option>
                    <option value="Kaputiei North">Kaputiei North</option>
                    <option value="Kaputir">Kaputir</option>
                    <option value="Kapyego">Kapyego</option>
                    <option value="Karai">Karai</option>
                    <option value="Karama">Karama</option>
                    <option value="Karare">Karare</option>
                    <option value="Karatina Town">Karatina Town</option>
                    <option value="Karau">Karau</option>
                    <option value="Karen">Karen</option>
                    <option value="Kargi/South Horr">Kargi/South Horr</option>
                    <option value="Kariara">Kariara</option>
                    <option value="Karima">Karima</option>
                    <option value="Karingani">Karingani</option>
                    <option value="Kariobangi North">Kariobangi North</option>
                    <option value="Kariobangi South">Kariobangi South</option>
                    <option value="Kariti">Kariti</option>
                    <option value="Karumandi">Karumandi</option>
                    <option value="Karuna/Meibeki">Karuna/Meibeki</option>
                    <option value="Karura">Karura</option>
                    <option value="Karuri">Karuri</option>
                    <option value="Kasarani">Kasarani</option>
                    <option value="Kasei">Kasei</option>
                    <option value="Kasemeni">Kasemeni</option>
                    <option value="Kasgunga">Kasgunga</option>
                    <option value="Kasigau">Kasigau</option>
                    <option value="Kasikeu">Kasikeu</option>
                    <option value="Katangi">Katangi</option>
                    <option value="Kathiani Central">Kathiani Central</option>
                    <option value="Kathonzweni">Kathonzweni</option>
                    <option value="Katilia">Katilia</option>
                    <option value="Katilu">Katilu</option>
                    <option value="Kauwi">Kauwi</option>
                    <option value="Kawangware">Kawangware</option>
                    <option value="Kayafungo">Kayafungo</option>
                    <option value="Kayole Central">Kayole Central</option>
                    <option value="Kayole North">Kayole North</option>
                    <option value="Kayole South">Kayole South</option>
                    <option value="Kedowa/Kimugul">Kedowa/Kimugul</option>
                    <option value="Kee">Kee</option>
                    <option value="Keekonyokie">Keekonyokie</option>
                    <option value="Keekonyokie">Keekonyokie</option>
                    <option value="Kegogi">Kegogi</option>
                    <option value="Keiyo">Keiyo</option>
                    <option value="Kembu">Kembu</option>
                    <option value="Kemeloi-Maraba">Kemeloi-Maraba</option>
                    <option value="Kemera">Kemera</option>
                    <option value="Kendu Bay Town">Kendu Bay Town</option>
                    <option value="Kenyawa-Poka">Kenyawa-Poka</option>
                    <option value="Keringet">Keringet</option>
                    <option value="Kerio Delta">Kerio Delta</option>
                    <option value="Kerugoya">Kerugoya</option>
                    <option value="Keumbu">Keumbu</option>
                    <option value="Keyian">Keyian</option>
                    <option value="Khalaba">Khalaba</option>
                    <option value="Khalaba">Khalaba</option>
                    <option value="Khalalio">Khalalio</option>
                    <option value="Khasoko">Khasoko</option>
                    <option value="Kholera">Kholera</option>
                    <option value="Khorof/Harar">Khorof/Harar</option>
                    <option value="Kiabonyoru">Kiabonyoru</option>
                    <option value="Kiagu">Kiagu</option>
                    <option value="Kiamaiko">Kiamaiko</option>
                    <option value="Kiamaina">Kiamaina</option>
                    <option value="Kiambere">Kiambere</option>
                    <option value="Kiamokama">Kiamokama</option>
                    <option value="Kiamwangi">Kiamwangi</option>
                    <option value="Kianjai">Kianjai</option>
                    <option value="Kibarani">Kibarani</option>
                    <option value="Kibauni">Kibauni</option>
                    <option value="Kibingei">Kibingei</option>
                    <option value="Kibiri">Kibiri</option>
                    <option value="Kibirichia">Kibirichia</option>
                    <option value="Kibish">Kibish</option>
                    <option value="Kiegoi/Antubochiu">Kiegoi/Antubochiu</option>
                    <option value="Kiganjo">Kiganjo</option>
                    <option value="Kiganjo/Mathari">Kiganjo/Mathari</option>
                    <option value="Kiguchwa">Kiguchwa</option>
                    <option value="Kigumo">Kigumo</option>
                    <option value="Kihara">Kihara</option>
                    <option value="Kihingo">Kihingo</option>
                    <option value="Kihumbu-Ini">Kihumbu-Ini</option>
                    <option value="Kiima Kiu/Kalanzoni">Kiima Kiu/Kalanzoni</option>
                    <option value="Kiine">Kiine</option>
                    <option value="Kiirua/Naari">Kiirua/Naari</option>
                    <option value="Kijabe">Kijabe</option>
                    <option value="Kikumbulyu North">Kikumbulyu North</option>
                    <option value="Kikumbulyu South">Kikumbulyu South</option>
                    <option value="Kikuyu">Kikuyu</option>
                    <option value="Kileleshwa">Kileleshwa</option>
                    <option value="Kilgoris Central">Kilgoris Central</option>
                    <option value="Kilibwoni">Kilibwoni</option>
                    <option value="Kilimani">Kilimani</option>
                    <option value="Kiliwehiri">Kiliwehiri</option>
                    <option value="Kilungu">Kilungu</option>
                    <option value="Kimaeti">Kimaeti</option>
                    <option value="Kimana">Kimana</option>
                    <option value="Kimilili">Kimilili</option>
                    <option value="Kiminini">Kiminini</option>
                    <option value="Kimintet">Kimintet</option>
                    <option value="Kimorori/Wempa">Kimorori/Wempa</option>
                    <option value="Kimulot">Kimulot</option>
                    <option value="Kimumu">Kimumu</option>
                    <option value="Kinakomba">Kinakomba</option>
                    <option value="Kinale">Kinale</option>
                    <option value="Kinango">Kinango</option>
                    <option value="Kinanie">Kinanie</option>
                    <option value="Kingandole">Kingandole</option>
                    <option value="Kinna">Kinna</option>
                    <option value="Kinondo">Kinondo</option>
                    <option value="Kinoo">Kinoo</option>
                    <option value="Kinyona">Kinyona</option>
                    <option value="Kinyoro">Kinyoro</option>
                    <option value="Kiogoro">Kiogoro</option>
                    <option value="Kiomo/Kyethani">Kiomo/Kyethani</option>
                    <option value="Kipchebor">Kipchebor</option>
                    <option value="Kipchimchim">Kipchimchim</option>
                    <option value="Kipevu">Kipevu</option>
                    <option value="Kipini East">Kipini East</option>
                    <option value="Kipini West">Kipini West</option>
                    <option value="Kipipiri">Kipipiri</option>
                    <option value="Kipkaren">Kipkaren</option>
                    <option value="Kipkelion">Kipkelion</option>
                    <option value="Kipkenyo">Kipkenyo</option>
                    <option value="Kiplombe">Kiplombe</option>
                    <option value="Kipreres">Kipreres</option>
                    <option value="Kipsomba">Kipsomba</option>
                    <option value="Kipsonoi">Kipsonoi</option>
                    <option value="Kiptagich">Kiptagich</option>
                    <option value="Kiptororo">Kiptororo</option>
                    <option value="Kiptuya">Kiptuya</option>
                    <option value="Kiriita">Kiriita</option>
                    <option value="Kirimari">Kirimari</option>
                    <option value="Kirimukuyu">Kirimukuyu</option>
                    <option value="Kiru">Kiru</option>
                    <option value="Kisa Central">Kisa Central</option>
                    <option value="Kisa East">Kisa East</option>
                    <option value="Kisa North">Kisa North</option>
                    <option value="Kisa West">Kisa West</option>
                    <option value="Kisanana">Kisanana</option>
                    <option value="Kisasi">Kisasi</option>
                    <option value="Kisiara">Kisiara</option>
                    <option value="Kisii Central">Kisii Central</option>
                    <option value="Kisima">Kisima</option>
                    <option value="Kisumu North">Kisumu North</option>
                    <option value="Kitengela">Kitengela</option>
                    <option value="Kiteta/Kisau">Kiteta/Kisau</option>
                    <option value="Kithimani">Kithimani</option>
                    <option value="Kithimu">Kithimu</option>
                    <option value="Kithungo/Kitundu">Kithungo/Kitundu</option>
                    <option value="Kitise/Kithuki">Kitise/Kithuki</option>
                    <option value="Kitisuru">Kitisuru</option>
                    <option value="Kitutu   Central">Kitutu   Central</option>
                    <option value="Kiunga">Kiunga</option>
                    <option value="Kiuu">Kiuu</option>
                    <option value="Kivaa">Kivaa</option>
                    <option value="Kivou">Kivou</option>
                    <option value="Kivumbini">Kivumbini</option>
                    <option value="Kiwawa">Kiwawa</option>
                    <option value="Kobujoi">Kobujoi</option>
                    <option value="Kobura">Kobura</option>
                    <option value="Kochia">Kochia</option>
                    <option value="Kodich">Kodich</option>
                    <option value="Koibatek">Koibatek</option>
                    <option value="Kojwach">Kojwach</option>
                    <option value="Kokwanyo/Kakelo">Kokwanyo/Kakelo</option>
                    <option value="Kola">Kola</option>
                    <option value="Kolowa">Kolowa</option>
                    <option value="Kolwa Central">Kolwa Central</option>
                    <option value="Kolwa East">Kolwa East</option>
                    <option value="Komarock">Komarock</option>
                    <option value="Komothai">Komothai</option>
                    <option value="Kondele">Kondele</option>
                    <option value="Kong'Asis">Kong'Asis</option>
                    <option value="Kongoni">Kongoni</option>
                    <option value="Kongowea">Kongowea</option>
                    <option value="Konyu">Konyu</option>
                    <option value="Korogocho">Korogocho</option>
                    <option value="Korondile">Korondile</option>
                    <option value="Korr/Ngurunit">Korr/Ngurunit</option>
                    <option value="Kosirai">Kosirai</option>
                    <option value="Kotaruk/Lobei">Kotaruk/Lobei</option>
                    <option value="Koyo-Ndurio">Koyo-Ndurio</option>
                    <option value="Koyonzo">Koyonzo</option>
                    <option value="Kubo South">Kubo South</option>
                    <option value="Kuinet/Kapsuswa">Kuinet/Kapsuswa</option>
                    <option value="Kuku">Kuku</option>
                    <option value="Kunyak">Kunyak</option>
                    <option value="Kurgung/Surungai">Kurgung/Surungai</option>
                    <option value="Kutulo">Kutulo</option>
                    <option value="Kwa Mutonga/Kithumula">Kwa Mutonga/Kithumula</option>
                    <option value="Kwa Njenga">Kwa Njenga</option>
                    <option value="Kwa Reuben">Kwa Reuben</option>
                    <option value="Kwa">Kwa</option>
                    <option value="Kwabwai">Kwabwai</option>
                    <option value="Kwanza">Kwanza</option>
                    <option value="Kware">Kware</option>
                    <option value="Kwavonza/Yatta">Kwavonza/Yatta</option>
                    <option value="Kyangwithya East">Kyangwithya East</option>
                    <option value="Kyangwithya West">Kyangwithya West</option>
                    <option value="Kyeleni">Kyeleni</option>
                    <option value="Kyeni North">Kyeni North</option>
                    <option value="Kyeni South">Kyeni South</option>
                    <option value="Kyome/Thaana">Kyome/Thaana</option>
                    <option value="Kyuso">Kyuso</option>
                    <option value="Labasigale">Labasigale</option>
                    <option value="Lafey">Lafey</option>
                    <option value="Lagboghol South">Lagboghol South</option>
                    <option value="Lagsure">Lagsure</option>
                    <option value="Laini Saba">Laini Saba</option>
                    <option value="Laisamis">Laisamis</option>
                    <option value="Lake View">Lake View</option>
                    <option value="Lake Zone">Lake Zone</option>
                    <option value="Lakoley South/Basir">Lakoley South/Basir</option>
                    <option value="Lambwe">Lambwe</option>
                    <option value="Landimawe">Landimawe</option>
                    <option value="Lanet/Umoja">Lanet/Umoja</option>
                    <option value="Langas">Langas</option>
                    <option value="Lapur">Lapur</option>
                    <option value="Lare">Lare</option>
                    <option value="Lari/Kirenga">Lari/Kirenga</option>
                    <option value="Lelan">Lelan</option>
                    <option value="Lelan">Lelan</option>
                    <option value="Lelmokwo/Ngechek">Lelmokwo/Ngechek</option>
                    <option value="Lembus Kwen">Lembus Kwen</option>
                    <option value="Lembus">Lembus</option>
                    <option value="Lembus/Perkerra">Lembus/Perkerra</option>
                    <option value="Leshau/Pondo">Leshau/Pondo</option>
                    <option value="Letea">Letea</option>
                    <option value="Libehia">Libehia</option>
                    <option value="Liboi">Liboi</option>
                    <option value="Likoni">Likoni</option>
                    <option value="Likuyani">Likuyani</option>
                    <option value="Limuru Central">Limuru Central</option>
                    <option value="Limuru East">Limuru East</option>
                    <option value="Lindi">Lindi</option>
                    <option value="Litein">Litein</option>
                    <option value="Lobokat">Lobokat</option>
                    <option value="Lodokejek">Lodokejek</option>
                    <option value="Lodwar Township">Lodwar Township</option>
                    <option value="Logo Logo">Logo Logo</option>
                    <option value="Loima">Loima</option>
                    <option value="Loita">Loita</option>
                    <option value="Loiyamorock">Loiyamorock</option>
                    <option value="Loiyangalani">Loiyangalani</option>
                    <option value="Lokichar">Lokichar</option>
                    <option value="Lokichoggio">Lokichoggio</option>
                    <option value="Lokiriama/Lorengippi">Lokiriama/Lorengippi</option>
                    <option value="Lokori/Kochodin">Lokori/Kochodin</option>
                    <option value="Lolgorian">Lolgorian</option>
                    <option value="Lomut">Lomut</option>
                    <option value="Londiani">Londiani</option>
                    <option value="London">London</option>
                    <option value="Longisa">Longisa</option>
                    <option value="Loosuk">Loosuk</option>
                    <option value="Lopur">Lopur</option>
                    <option value="Lower Kaewa/Kaani">Lower Kaewa/Kaani</option>
                    <option value="Lower Savannah">Lower Savannah</option>
                    <option value="Luanda South">Luanda South</option>
                    <option value="Luanda Township">Luanda Township</option>
                    <option value="Lucky Summer">Lucky Summer</option>
                    <option value="Lugaga-Wamuluma">Lugaga-Wamuluma</option>
                    <option value="Lugari">Lugari</option>
                    <option value="Lumakanda">Lumakanda</option>
                    <option value="Lusheya/Lubinu">Lusheya/Lubinu</option>
                    <option value="Lwandanyi">Lwandanyi</option>
                    <option value="Lwandeti">Lwandeti</option>
                    <option value="Lyaduywa/Izava">Lyaduywa/Izava</option>
                    <option value="Maalimin">Maalimin</option>
                    <option value="Mabatini">Mabatini</option>
                    <option value="Macalder/Kanyarwanda">Macalder/Kanyarwanda</option>
                    <option value="Machakos Central">Machakos Central</option>
                    <option value="Machewa">Machewa</option>
                    <option value="Mackinnon Road">Mackinnon Road</option>
                    <option value="Madogo">Madogo</option>
                    <option value="Maeni">Maeni</option>
                    <option value="Magadi">Magadi</option>
                    <option value="Magarini">Magarini</option>
                    <option value="Magenche">Magenche</option>
                    <option value="Magogoni">Magogoni</option>
                    <option value="Magombo">Magombo</option>
                    <option value="Magumoni">Magumoni</option>
                    <option value="Magumu">Magumu</option>
                    <option value="Magutu">Magutu</option>
                    <option value="Magwagwa">Magwagwa</option>
                    <option value="Mahiakalo">Mahiakalo</option>
                    <option value="Mahiga">Mahiga</option>
                    <option value="Mahoo">Mahoo</option>
                    <option value="Mai Mahiu">Mai Mahiu</option>
                    <option value="Maiella">Maiella</option>
                    <option value="Maikona">Maikona</option>
                    <option value="Majengo">Majengo</option>
                    <option value="Majimoto/Naroosura">Majimoto/Naroosura</option>
                    <option value="Majoge Basi">Majoge Basi</option>
                    <option value="Makerero">Makerero</option>
                    <option value="Makima">Makima</option>
                    <option value="Makina">Makina</option>
                    <option value="Makindu">Makindu</option>
                    <option value="Makongeni">Makongeni</option>
                    <option value="Makutano">Makutano</option>
                    <option value="Makutano/ Mwala">Makutano/ Mwala</option>
                    <option value="Makuyu">Makuyu</option>
                    <option value="Malaba Central">Malaba Central</option>
                    <option value="Malaba North">Malaba North</option>
                    <option value="Malaba South">Malaba South</option>
                    <option value="Malaha/Isongo/Makunga">Malaha/Isongo/Makunga</option>
                    <option value="Malakisi/South Kulisiru">Malakisi/South Kulisiru</option>
                    <option value="Malewa West">Malewa West</option>
                    <option value="Malindi Town">Malindi Town</option>
                    <option value="Malkagufu">Malkagufu</option>
                    <option value="Malkamari">Malkamari</option>
                    <option value="Manda-Shivanga">Manda-Shivanga</option>
                    <option value="Manga">Manga</option>
                    <option value="Mang'U">Mang'U</option>
                    <option value="Manyatta 'B'">Manyatta 'B'</option>
                    <option value="Mara">Mara</option>
                    <option value="Marachi Central">Marachi Central</option>
                    <option value="Marachi East">Marachi East</option>
                    <option value="Marachi North">Marachi North</option>
                    <option value="Marachi West">Marachi West</option>
                    <option value="Marafa">Marafa</option>
                    <option value="Maraka">Maraka</option>
                    <option value="Marakaru/Tuuti">Marakaru/Tuuti</option>
                    <option value="Maralal">Maralal</option>
                    <option value="Marama Central">Marama Central</option>
                    <option value="Marama North">Marama North</option>
                    <option value="Marama South">Marama South</option>
                    <option value="Marama West">Marama West</option>
                    <option value="Marani">Marani</option>
                    <option value="Marenyo - Shianda">Marenyo - Shianda</option>
                    <option value="Mariakani">Mariakani</option>
                    <option value="Mariani">Mariani</option>
                    <option value="Mariashoni">Mariashoni</option>
                    <option value="Marigat">Marigat</option>
                    <option value="Marimanti">Marimanti</option>
                    <option value="Maringo/Hamza">Maringo/Hamza</option>
                    <option value="Market Milimani">Market Milimani</option>
                    <option value="Marmanet">Marmanet</option>
                    <option value="Marsabit Central">Marsabit Central</option>
                    <option value="Marungu">Marungu</option>
                    <option value="Masaba">Masaba</option>
                    <option value="Masalani">Masalani</option>
                    <option value="Masige East">Masige East</option>
                    <option value="Masige West">Masige West</option>
                    <option value="Masii">Masii</option>
                    <option value="Masimba">Masimba</option>
                    <option value="Masinga Central">Masinga Central</option>
                    <option value="Masogo/Nyang'Oma">Masogo/Nyang'Oma</option>
                    <option value="Masongaleni">Masongaleni</option>
                    <option value="Masool">Masool</option>
                    <option value="Mata">Mata</option>
                    <option value="Matapato North">Matapato North</option>
                    <option value="Matapato South">Matapato South</option>
                    <option value="Matayos South">Matayos South</option>
                    <option value="Mathare North">Mathare North</option>
                    <option value="Matinyani">Matinyani</option>
                    <option value="Matisi">Matisi</option>
                    <option value="Matopeni/Spring Valley">Matopeni/Spring Valley</option>
                    <option value="Matsangoni">Matsangoni</option>
                    <option value="Matulo">Matulo</option>
                    <option value="Matumbei">Matumbei</option>
                    <option value="Matungulu East">Matungulu East</option>
                    <option value="Matungulu North">Matungulu North</option>
                    <option value="Matungulu West">Matungulu West</option>
                    <option value="Matuu">Matuu</option>
                    <option value="Mau Narok">Mau Narok</option>
                    <option value="Maua">Maua</option>
                    <option value="Mauche">Mauche</option>
                    <option value="Mautuma">Mautuma</option>
                    <option value="Mavindini">Mavindini</option>
                    <option value="Mavuria">Mavuria</option>
                    <option value="Mayenje">Mayenje</option>
                    <option value="Mayoni">Mayoni</option>
                    <option value="Mbakalo">Mbakalo</option>
                    <option value="Mbaruk/Eburu">Mbaruk/Eburu</option>
                    <option value="Mbeti North">Mbeti North</option>
                    <option value="Mbeti South">Mbeti South</option>
                    <option value="Mbeu">Mbeu</option>
                    <option value="Mbiri">Mbiri</option>
                    <option value="Mbirikani/Eselenkei">Mbirikani/Eselenkei</option>
                    <option value="Mbitini">Mbitini</option>
                    <option value="Mbitini">Mbitini</option>
                    <option value="Mbiuni">Mbiuni</option>
                    <option value="Mboghoni">Mboghoni</option>
                    <option value="Mbololo">Mbololo</option>
                    <option value="Mbooni">Mbooni</option>
                    <option value="Megun">Megun</option>
                    <option value="Mekenene">Mekenene</option>
                    <option value="Melelo">Melelo</option>
                    <option value="Melili">Melili</option>
                    <option value="Menengai West">Menengai West</option>
                    <option value="Menengai">Menengai</option>
                    <option value="Merigi">Merigi</option>
                    <option value="Metkei">Metkei</option>
                    <option value="Mfangano Island">Mfangano Island</option>
                    <option value="Miambani">Miambani</option>
                    <option value="Migosi">Migosi</option>
                    <option value="Migwani">Migwani</option>
                    <option value="Mihango">Mihango</option>
                    <option value="Mihuu">Mihuu</option>
                    <option value="Mikindani">Mikindani</option>
                    <option value="Mikinduni">Mikinduni</option>
                    <option value="Mikinduri">Mikinduri</option>
                    <option value="Milima">Milima</option>
                    <option value="Mirangine">Mirangine</option>
                    <option value="Miritini">Miritini</option>
                    <option value="Misikhu">Misikhu</option>
                    <option value="Mitaboni">Mitaboni</option>
                    <option value="Mitheru">Mitheru</option>
                    <option value="Mitunguu">Mitunguu</option>
                    <option value="Miwani">Miwani</option>
                    <option value="Mjambere">Mjambere</option>
                    <option value="Mji Wa Kale/Makadara">Mji Wa Kale/Makadara</option>
                    <option value="Mkomani">Mkomani</option>
                    <option value="Mkomani">Mkomani</option>
                    <option value="Mkongani">Mkongani</option>
                    <option value="Mkunumbi">Mkunumbi</option>
                    <option value="Mlango Kubwa">Mlango Kubwa</option>
                    <option value="Mnagei">Mnagei</option>
                    <option value="Mnarani">Mnarani</option>
                    <option value="Mochongoi">Mochongoi</option>
                    <option value="Modogashe">Modogashe</option>
                    <option value="Mogogosiek">Mogogosiek</option>
                    <option value="Mogondo">Mogondo</option>
                    <option value="Mogotio">Mogotio</option>
                    <option value="Moiben">Moiben</option>
                    <option value="Moiben/Kuserwo">Moiben/Kuserwo</option>
                    <option value="Moi'S Bridge">Moi'S Bridge</option>
                    <option value="Molo">Molo</option>
                    <option value="Monyerero">Monyerero</option>
                    <option value="Morothile">Morothile</option>
                    <option value="Mosiro">Mosiro</option>
                    <option value="Mosiro">Mosiro</option>
                    <option value="Mosop">Mosop</option>
                    <option value="Moticho">Moticho</option>
                    <option value="Motosiet">Motosiet</option>
                    <option value="Mountain View">Mountain View</option>
                    <option value="Mowlem">Mowlem</option>
                    <option value="Moyale Township">Moyale Township</option>
                    <option value="Mtepeni">Mtepeni</option>
                    <option value="Mtito Andei">Mtito Andei</option>
                    <option value="Mtongwe">Mtongwe</option>
                    <option value="Mtopanga">Mtopanga</option>
                    <option value="Mua">Mua</option>
                    <option value="Muchatha">Muchatha</option>
                    <option value="Mugogodo East">Mugogodo East</option>
                    <option value="Mugogodo West">Mugogodo West</option>
                    <option value="Mugoiri">Mugoiri</option>
                    <option value="Muguga">Muguga</option>
                    <option value="Mugumo-Ini">Mugumo-Ini</option>
                    <option value="Mugumu-Ini">Mugumu-Ini</option>
                    <option value="Mugunda">Mugunda</option>
                    <option value="Muguru">Muguru</option>
                    <option value="Mugwe">Mugwe</option>
                    <option value="Muhoroni/Koru">Muhoroni/Koru</option>
                    <option value="Muhudu">Muhudu</option>
                    <option value="Muhuru">Muhuru</option>
                    <option value="Mui">Mui</option>
                    <option value="Mukaa">Mukaa</option>
                    <option value="Mukothima">Mukothima</option>
                    <option value="Mukure">Mukure</option>
                    <option value="Mukurwe-Ini Central">Mukurwe-Ini Central</option>
                    <option value="Mukurwe-Ini West">Mukurwe-Ini West</option>
                    <option value="Mukutani">Mukutani</option>
                    <option value="Mukuyuni">Mukuyuni</option>
                    <option value="Mulango">Mulango</option>
                    <option value="Mumberes/Maji Mazuri">Mumberes/Maji Mazuri</option>
                    <option value="Mumbuni North">Mumbuni North</option>
                    <option value="Mumias Central">Mumias Central</option>
                    <option value="Mumias North">Mumias North</option>
                    <option value="Muminji">Muminji</option>
                    <option value="Mumoni">Mumoni</option>
                    <option value="Mungoma">Mungoma</option>
                    <option value="Municipality">Municipality</option>
                    <option value="Murarandia">Murarandia</option>
                    <option value="Murera">Murera</option>
                    <option value="Murhanda">Murhanda</option>
                    <option value="Murindati">Murindati</option>
                    <option value="Murinduko">Murinduko</option>
                    <option value="Muruka">Muruka</option>
                    <option value="Murungaru">Murungaru</option>
                    <option value="Musanda">Musanda</option>
                    <option value="Musikoma">Musikoma</option>
                    <option value="Mutarakwa">Mutarakwa</option>
                    <option value="Mutha">Mutha</option>
                    <option value="Muthambi">Muthambi</option>
                    <option value="Muthara">Muthara</option>
                    <option value="Muthesya">Muthesya</option>
                    <option value="Muthetheni">Muthetheni</option>
                    <option value="Muthithi">Muthithi</option>
                    <option value="Muthwani">Muthwani</option>
                    <option value="Mutira">Mutira</option>
                    <option value="Mutithi">Mutithi</option>
                    <option value="Mutito/Kaliku">Mutito/Kaliku</option>
                    <option value="Mutituni">Mutituni</option>
                    <option value="Mutomo">Mutomo</option>
                    <option value="Mutonguni">Mutonguni</option>
                    <option value="Mutu-Ini">Mutu-Ini</option>
                    <option value="Muvau/Kikuumini">Muvau/Kikuumini</option>
                    <option value="Muvuti/Kiima-Kimwe">Muvuti/Kiima-Kimwe</option>
                    <option value="Mwakirunge">Mwakirunge</option>
                    <option value="Mwanamwinga">Mwanamwinga</option>
                    <option value="Mwanda/Mgange">Mwanda/Mgange</option>
                    <option value="Mwanganthia">Mwanganthia</option>
                    <option value="Mwarakaya">Mwarakaya</option>
                    <option value="Mwatate">Mwatate</option>
                    <option value="Mwavumbo">Mwavumbo</option>
                    <option value="Mwawesa">Mwawesa</option>
                    <option value="Mwea">Mwea</option>
                    <option value="Mweiga">Mweiga</option>
                    <option value="Mwereni">Mwereni</option>
                    <option value="Mwibona">Mwibona</option>
                    <option value="Mwihoko">Mwihoko</option>
                    <option value="Mwiki">Mwiki</option>
                    <option value="Mwiki">Mwiki</option>
                    <option value="Mwimbi">Mwimbi</option>
                    <option value="Mwiyogo/Endarasha">Mwiyogo/Endarasha</option>
                    <option value="Naathu">Naathu</option>
                    <option value="Nabiswa">Nabiswa</option>
                    <option value="Nachola">Nachola</option>
                    <option value="Nachu">Nachu</option>
                    <option value="Naikarra">Naikarra</option>
                    <option value="Nairobi Central">Nairobi Central</option>
                    <option value="Nairobi South">Nairobi South</option>
                    <option value="Nairobi West">Nairobi West</option>
                    <option value="Naitiri/Kabuyefwe">Naitiri/Kabuyefwe</option>
                    <option value="Naivasha East">Naivasha East</option>
                    <option value="Nakalale">Nakalale</option>
                    <option value="Nakuru East">Nakuru East</option>
                    <option value="Namamali">Namamali</option>
                    <option value="Nambale Township">Nambale Township</option>
                    <option value="Namboboto Nambuku">Namboboto Nambuku</option>
                    <option value="Namwela">Namwela</option>
                    <option value="Nanaam">Nanaam</option>
                    <option value="Nandi Hills">Nandi Hills</option>
                    <option value="Nangina">Nangina</option>
                    <option value="Nanighi">Nanighi</option>
                    <option value="Nanyuki">Nanyuki</option>
                    <option value="Narok Town">Narok Town</option>
                    <option value="Naromoru Kiamathaga">Naromoru Kiamathaga</option>
                    <option value="Ndalani">Ndalani</option>
                    <option value="Ndalat">Ndalat</option>
                    <option value="Ndalu/ Tabani">Ndalu/ Tabani</option>
                    <option value="Ndanai/Abosi">Ndanai/Abosi</option>
                    <option value="Ndaraweta">Ndaraweta</option>
                    <option value="Ndarugu">Ndarugu</option>
                    <option value="Ndavaya">Ndavaya</option>
                    <option value="Ndeiya">Ndeiya</option>
                    <option value="Ndenderu">Ndenderu</option>
                    <option value="Ndithini">Ndithini</option>
                    <option value="Ndivisi">Ndivisi</option>
                    <option value="Ndoto">Ndoto</option>
                    <option value="Ndumberi">Ndumberi</option>
                    <option value="Neboi">Neboi</option>
                    <option value="Nessuit">Nessuit</option>
                    <option value="Ngando">Ngando</option>
                    <option value="Ngara">Ngara</option>
                    <option value="Ng'Araria">Ng'Araria</option>
                    <option value="Ngare Mara">Ngare Mara</option>
                    <option value="Ngariama">Ngariama</option>
                    <option value="Ngecha Tigoni">Ngecha Tigoni</option>
                    <option value="Ngei">Ngei</option>
                    <option value="Ngenda">Ngenda</option>
                    <option value="Ngenyilel">Ngenyilel</option>
                    <option value="Ngeria">Ngeria</option>
                    <option value="Ngewa">Ngewa</option>
                    <option value="Nginda">Nginda</option>
                    <option value="Nginda">Nginda</option>
                    <option value="Ngobit">Ngobit</option>
                    <option value="Ngolia">Ngolia</option>
                    <option value="Ngoliba">Ngoliba</option>
                    <option value="Ngomeni">Ngomeni</option>
                    <option value="Ngong">Ngong</option>
                    <option value="Nguni">Nguni</option>
                    <option value="Nguu/Masumba">Nguu/Masumba</option>
                    <option value="Nguumo">Nguumo</option>
                    <option value="Nguutani">Nguutani</option>
                    <option value="Njabini\Kiburu">Njabini\Kiburu</option>
                    <option value="Njia">Njia</option>
                    <option value="Njiru">Njiru</option>
                    <option value="Njoro">Njoro</option>
                    <option value="Njukiini">Njukiini</option>
                    <option value="Nkaimurunya">Nkaimurunya</option>
                    <option value="Nkareta">Nkareta</option>
                    <option value="Nkomo">Nkomo</option>
                    <option value="Nkondi">Nkondi</option>
                    <option value="Nkuene">Nkuene</option>
                    <option value="North Alego">North Alego</option>
                    <option value="North East Bunyore">North East Bunyore</option>
                    <option value="North Gem">North Gem</option>
                    <option value="North Horr">North Horr</option>
                    <option value="North Kadem">North Kadem</option>
                    <option value="North Kamagambo">North Kamagambo</option>
                    <option value="North Kanyamkago">North Kanyamkago</option>
                    <option value="North Karachuonyo">North Karachuonyo</option>
                    <option value="North Kinangop">North Kinangop</option>
                    <option value="North Maragoli">North Maragoli</option>
                    <option value="North Nyakach">North Nyakach</option>
                    <option value="North Sakwa">North Sakwa</option>
                    <option value="North Sakwa">North Sakwa</option>
                    <option value="North Seme">North Seme</option>
                    <option value="North Ugenya">North Ugenya</option>
                    <option value="North Uyoma">North Uyoma</option>
                    <option value="North West Kisumu">North West Kisumu</option>
                    <option value="Nthawa">Nthawa</option>
                    <option value="Ntima East">Ntima East</option>
                    <option value="Ntima West">Ntima West</option>
                    <option value="Ntimaru East">Ntimaru East</option>
                    <option value="Ntimaru West">Ntimaru West</option>
                    <option value="Ntunene">Ntunene</option>
                    <option value="Nuu">Nuu</option>
                    <option value="Nyabasi East">Nyabasi East</option>
                    <option value="Nyabasi West">Nyabasi West</option>
                    <option value="Nyacheki">Nyacheki</option>
                    <option value="Nyadhuna">Nyadhuna</option>
                    <option value="Nyaki East">Nyaki East</option>
                    <option value="Nyaki West">Nyaki West</option>
                    <option value="Nyakio">Nyakio</option>
                    <option value="Nyakoe">Nyakoe</option>
                    <option value="Nyalenda 'A'">Nyalenda 'A'</option>
                    <option value="Nyalenda B">Nyalenda B</option>
                    <option value="Nyamaiya">Nyamaiya</option>
                    <option value="Nyamasibi">Nyamasibi</option>
                    <option value="Nyamosense/Komosoko">Nyamosense/Komosoko</option>
                    <option value="Nyanduma">Nyanduma</option>
                    <option value="Nyangati">Nyangati</option>
                    <option value="Nyangores">Nyangores</option>
                    <option value="Nyansiongo">Nyansiongo</option>
                    <option value="Nyatieko">Nyatieko</option>
                    <option value="Nyayo Highrise">Nyayo Highrise</option>
                    <option value="Nyiro">Nyiro</option>
                    <option value="Nyota">Nyota</option>
                    <option value="Nzambani">Nzambani</option>
                    <option value="Nzaui/Kilili/Kalamba">Nzaui/Kilili/Kalamba</option>
                    <option value="Nzoia">Nzoia</option>
                    <option value="Obbu">Obbu</option>
                    <option value="Oldo/Nyiro">Oldo/Nyiro</option>
                    <option value="Olkaria">Olkaria</option>
                    <option value="Olkeri">Olkeri</option>
                    <option value="Ol'Lessos">Ol'Lessos</option>
                    <option value="Ol-Moran">Ol-Moran</option>
                    <option value="Olokurto">Olokurto</option>
                    <option value="Ololmasani">Ololmasani</option>
                    <option value="Ololulung'A">Ololulung'A</option>
                    <option value="Oloolua">Oloolua</option>
                    <option value="Oloosirkon/Sholinke">Oloosirkon/Sholinke</option>
                    <option value="Olorropil">Olorropil</option>
                    <option value="Olpusimoru">Olpusimoru</option>
                    <option value="Ombeyi">Ombeyi</option>
                    <option value="Ongata Rongai">Ongata Rongai</option>
                    <option value="Pangani">Pangani</option>
                    <option value="Parklands/Highridge">Parklands/Highridge</option>
                    <option value="Pipeline">Pipeline</option>
                    <option value="Pongwe/Kikoneni">Pongwe/Kikoneni</option>
                    <option value="Poro">Poro</option>
                    <option value="Port Reitz">Port Reitz</option>
                    <option value="Puma">Puma</option>
                    <option value="Pumwani">Pumwani</option>
                    <option value="Purko">Purko</option>
                    <option value="Rabai/Kisurutini">Rabai/Kisurutini</option>
                    <option value="Racecourse">Racecourse</option>
                    <option value="Ragana-Oruba">Ragana-Oruba</option>
                    <option value="Railways">Railways</option>
                    <option value="Ramisi">Ramisi</option>
                    <option value="Ravine">Ravine</option>
                    <option value="Rhamu">Rhamu</option>
                    <option value="Rhamu-Dimtu">Rhamu-Dimtu</option>
                    <option value="Rhoda">Rhoda</option>
                    <option value="Riabai">Riabai</option>
                    <option value="Riana">Riana</option>
                    <option value="Ribkwo">Ribkwo</option>
                    <option value="Rigoma">Rigoma</option>
                    <option value="Riruta">Riruta</option>
                    <option value="Riwo">Riwo</option>
                    <option value="Rombo">Rombo</option>
                    <option value="Rong'E">Rong'E</option>
                    <option value="Rongena/Manaret">Rongena/Manaret</option>
                    <option value="Roysambu">Roysambu</option>
                    <option value="Ruai">Ruai</option>
                    <option value="Ruchu">Ruchu</option>
                    <option value="Rugi">Rugi</option>
                    <option value="Ruguru">Ruguru</option>
                    <option value="Ruguru/Ngandori">Ruguru/Ngandori</option>
                    <option value="Ruiri/Rwarera">Ruiri/Rwarera</option>
                    <option value="Ruma-Kaksingri">Ruma-Kaksingri</option>
                    <option value="Rumuruti Township">Rumuruti Township</option>
                    <option value="Rurii">Rurii</option>
                    <option value="Ruring'U">Ruring'U</option>
                    <option value="Ruruma">Ruruma</option>
                    <option value="Rusinga Island">Rusinga Island</option>
                    <option value="Rware">Rware</option>
                    <option value="Rwathia">Rwathia</option>
                    <option value="Sabaki">Sabaki</option>
                    <option value="Sabena">Sabena</option>
                    <option value="Saboti">Saboti</option>
                    <option value="Sacho">Sacho</option>
                    <option value="Sagalla">Sagalla</option>
                    <option value="Sagamian">Sagamian</option>
                    <option value="Sagante/Jaldesa">Sagante/Jaldesa</option>
                    <option value="Saimo/Kipsaraman">Saimo/Kipsaraman</option>
                    <option value="Saimo/Soi">Saimo/Soi</option>
                    <option value="Saka">Saka</option>
                    <option value="Sala">Sala</option>
                    <option value="Sala">Sala</option>
                    <option value="Salama">Salama</option>
                    <option value="Sambirir">Sambirir</option>
                    <option value="Sameta/Mokwerero">Sameta/Mokwerero</option>
                    <option value="Sangailu">Sangailu</option>
                    <option value="Sangalo/Kebulonik">Sangalo/Kebulonik</option>
                    <option value="Sango">Sango</option>
                    <option value="Sankuri">Sankuri</option>
                    <option value="Sarangombe">Sarangombe</option>
                    <option value="Sarman">Sarman</option>
                    <option value="Segera">Segera</option>
                    <option value="Segero/Barsombe">Segero/Barsombe</option>
                    <option value="Sekerr">Sekerr</option>
                    <option value="Sengwer">Sengwer</option>
                    <option value="Sensi">Sensi</option>
                    <option value="Sergoit">Sergoit</option>
                    <option value="Sericho">Sericho</option>
                    <option value="Shaabab">Shaabab</option>
                    <option value="Shamakhokho">Shamakhokho</option>
                    <option value="Shamata">Shamata</option>
                    <option value="Shankoe">Shankoe</option>
                    <option value="Shanzu">Shanzu</option>
                    <option value="Shaurimoyo Kaloleni">Shaurimoyo Kaloleni</option>
                    <option value="Shella">Shella</option>
                    <option value="Shella">Shella</option>
                    <option value="Sheywe">Sheywe</option>
                    <option value="Shika Adabu">Shika Adabu</option>
                    <option value="Shimanzi/Ganjoni">Shimanzi/Ganjoni</option>
                    <option value="Shimbir Fatuma">Shimbir Fatuma</option>
                    <option value="Shimo La Tewa">Shimo La Tewa</option>
                    <option value="Shinoyi-Shikomari-Esumeyia">Shinoyi-Shikomari-Esumeyia</option>
                    <option value="Shirere">Shirere</option>
                    <option value="Shiru">Shiru</option>
                    <option value="Shirugu-Mugai">Shirugu-Mugai</option>
                    <option value="Siana">Siana</option>
                    <option value="Siaya Township">Siaya Township</option>
                    <option value="Siboti">Siboti</option>
                    <option value="Sidindi">Sidindi</option>
                    <option value="Sigomere">Sigomere</option>
                    <option value="Sigona">Sigona</option>
                    <option value="Sigor">Sigor</option>
                    <option value="Sigowet">Sigowet</option>
                    <option value="Sikhendu">Sikhendu</option>
                    <option value="Silale">Silale</option>
                    <option value="Silibwet Township">Silibwet Township</option>
                    <option value="Simat/Kapseret">Simat/Kapseret</option>
                    <option value="Singorwet">Singorwet</option>
                    <option value="Sinoko">Sinoko</option>
                    <option value="Sinyerere">Sinyerere</option>
                    <option value="Siongiroi">Siongiroi</option>
                    <option value="Sirende">Sirende</option>
                    <option value="Sirikwa">Sirikwa</option>
                    <option value="Sitatunga">Sitatunga</option>
                    <option value="Sitikho">Sitikho</option>
                    <option value="Siyoi">Siyoi</option>
                    <option value="Sogoo">Sogoo</option>
                    <option value="Soin">Soin</option>
                    <option value="Soin">Soin</option>
                    <option value="Sokoke">Sokoke</option>
                    <option value="Sokoni">Sokoni</option>
                    <option value="Solai">Solai</option>
                    <option value="Soliat">Soliat</option>
                    <option value="Sololo">Sololo</option>
                    <option value="Songhor/Soba">Songhor/Soba</option>
                    <option value="Songot">Songot</option>
                    <option value="Sook">Sook</option>
                    <option value="Sosian">Sosian</option>
                    <option value="South Bukusu">South Bukusu</option>
                    <option value="South C">South C</option>
                    <option value="South East Alego">South East Alego</option>
                    <option value="South East Nyakach">South East Nyakach</option>
                    <option value="South Gem">South Gem</option>
                    <option value="South Kabras">South Kabras</option>
                    <option value="South Kamagambo">South Kamagambo</option>
                    <option value="South Kanyamkago">South Kanyamkago</option>
                    <option value="South Kasipul">South Kasipul</option>
                    <option value="South Maragoli">South Maragoli</option>
                    <option value="South Sakwa">South Sakwa</option>
                    <option value="South Sakwa">South Sakwa</option>
                    <option value="South Uyoma">South Uyoma</option>
                    <option value="South West Kisumu">South West Kisumu</option>
                    <option value="South West Nyakach">South West Nyakach</option>
                    <option value="Soy North">Soy North</option>
                    <option value="Soy South">Soy South</option>
                    <option value="Soy">Soy</option>
                    <option value="Soysambu/ Mitua">Soysambu/ Mitua</option>
                    <option value="Suam">Suam</option>
                    <option value="Subukia">Subukia</option>
                    <option value="Suguta Marmar">Suguta Marmar</option>
                    <option value="Suna Central">Suna Central</option>
                    <option value="Suswa">Suswa</option>
                    <option value="Syokimau/Mulolongo">Syokimau/Mulolongo</option>
                    <option value="Tabaka">Tabaka</option>
                    <option value="Tagare">Tagare</option>
                    <option value="Takaba South">Takaba South</option>
                    <option value="Takaba">Takaba</option>
                    <option value="Tala">Tala</option>
                    <option value="Tambach">Tambach</option>
                    <option value="Tambua">Tambua</option>
                    <option value="Tangulbei/Korossi">Tangulbei/Korossi</option>
                    <option value="Tapach">Tapach</option>
                    <option value="Tapsagoi">Tapsagoi</option>
                    <option value="Tarakwa">Tarakwa</option>
                    <option value="Tarbaj">Tarbaj</option>
                    <option value="Tebere">Tebere</option>
                    <option value="Tebesonik">Tebesonik</option>
                    <option value="Tembelio">Tembelio</option>
                    <option value="Tendeno/Sorget">Tendeno/Sorget</option>
                    <option value="Tenges">Tenges</option>
                    <option value="Terik">Terik</option>
                    <option value="Tezo">Tezo</option>
                    <option value="Thangatha">Thangatha</option>
                    <option value="Thange">Thange</option>
                    <option value="Tharaka">Tharaka</option>
                    <option value="Thegu River">Thegu River</option>
                    <option value="Theta">Theta</option>
                    <option value="Thiba">Thiba</option>
                    <option value="Thingithu">Thingithu</option>
                    <option value="Tigithi">Tigithi</option>
                    <option value="Timau">Timau</option>
                    <option value="Timbwani">Timbwani</option>
                    <option value="Tindiret">Tindiret</option>
                    <option value="Tinet">Tinet</option>
                    <option value="Ting'Ang'A">Ting'Ang'A</option>
                    <option value="Tirioko">Tirioko</option>
                    <option value="Tiwi">Tiwi</option>
                    <option value="Tongaren">Tongaren</option>
                    <option value="Tononoka">Tononoka</option>
                    <option value="Township">Township</option>
                    <option value="Township">Township</option>
                    <option value="Township">Township</option>
                    <option value="Township">Township</option>
                    <option value="Township">Township</option>
                    <option value="Township">Township</option>
                    <option value="Township">Township</option>
                    <option value="Township">Township</option>
                    <option value="Township">Township</option>
                    <option value="Tseikuru">Tseikuru</option>
                    <option value="Tsimba Golini">Tsimba Golini</option>
                    <option value="Tudor">Tudor</option>
                    <option value="Tulimani">Tulimani</option>
                    <option value="Tulwet/Chuiyat">Tulwet/Chuiyat</option>
                    <option value="Turbi">Turbi</option>
                    <option value="Turi">Turi</option>
                    <option value="Turkwel">Turkwel</option>
                    <option value="Tuwani">Tuwani</option>
                    <option value="Ugunja">Ugunja</option>
                    <option value="Ukia">Ukia</option>
                    <option value="Ukunda">Ukunda</option>
                    <option value="Ukwala">Ukwala</option>
                    <option value="Umande">Umande</option>
                    <option value="Umoja I">Umoja I</option>
                    <option value="Umoja Ii">Umoja Ii</option>
                    <option value="Upper Kaewa/Iveti">Upper Kaewa/Iveti</option>
                    <option value="Upper Savannah">Upper Savannah</option>
                    <option value="Uran">Uran</option>
                    <option value="Usonga">Usonga</option>
                    <option value="Utalii">Utalii</option>
                    <option value="Utawala">Utawala</option>
                    <option value="Uthiru">Uthiru</option>
                    <option value="Uthiru/Ruthimitu">Uthiru/Ruthimitu</option>
                    <option value="Vanga">Vanga</option>
                    <option value="Visoi">Visoi</option>
                    <option value="Viwandani">Viwandani</option>
                    <option value="Viwandani">Viwandani</option>
                    <option value="Voo/Kyamatu">Voo/Kyamatu</option>
                    <option value="Waa">Waa</option>
                    <option value="Wabera">Wabera</option>
                    <option value="Waberi">Waberi</option>
                    <option value="Wagberi">Wagberi</option>
                    <option value="Waia-Kako">Waia-Kako</option>
                    <option value="Waita">Waita</option>
                    <option value="Waitaluk">Waitaluk</option>
                    <option value="Waithaka">Waithaka</option>
                    <option value="Waldai">Waldai</option>
                    <option value="Wamagana">Wamagana</option>
                    <option value="Wamba East">Wamba East</option>
                    <option value="Wamba North">Wamba North</option>
                    <option value="Wamba West">Wamba West</option>
                    <option value="Wamumu">Wamumu</option>
                    <option value="Wamunyu">Wamunyu</option>
                    <option value="Wangchieng">Wangchieng</option>
                    <option value="Wangu">Wangu</option>
                    <option value="Wanjohi">Wanjohi</option>
                    <option value="Waranqara">Waranqara</option>
                    <option value="Wargadud">Wargadud</option>
                    <option value="Wargadud">Wargadud</option>
                    <option value="Waseges">Waseges</option>
                    <option value="Wasimbete">Wasimbete</option>
                    <option value="Waso">Waso</option>
                    <option value="Wasweta Ii">Wasweta Ii</option>
                    <option value="Watamu">Watamu</option>
                    <option value="Wayu">Wayu</option>
                    <option value="Weiwei">Weiwei</option>
                    <option value="Wemilabi">Wemilabi</option>
                    <option value="Weru">Weru</option>
                    <option value="Werugha">Werugha</option>
                    <option value="West Alego">West Alego</option>
                    <option value="West Asembo">West Asembo</option>
                    <option value="West Bukusu">West Bukusu</option>
                    <option value="West Bunyore">West Bunyore</option>
                    <option value="West Gem">West Gem</option>
                    <option value="West Gem">West Gem</option>
                    <option value="West Kabras">West Kabras</option>
                    <option value="West Kamagak">West Kamagak</option>
                    <option value="West Kanyamkago">West Kanyamkago</option>
                    <option value="West Karachuonyo">West Karachuonyo</option>
                    <option value="West Kasipul">West Kasipul</option>
                    <option value="West Kisumu">West Kisumu</option>
                    <option value="West Nalondo">West Nalondo</option>
                    <option value="West Nyakach">West Nyakach</option>
                    <option value="West Sabatia">West Sabatia</option>
                    <option value="West Sakwa">West Sakwa</option>
                    <option value="West Sakwa">West Sakwa</option>
                    <option value="West Sang'Alo">West Sang'Alo</option>
                    <option value="West Seme">West Seme</option>
                    <option value="West Ugenya">West Ugenya</option>
                    <option value="West Uyoma">West Uyoma</option>
                    <option value="West Yimbo">West Yimbo</option>
                    <option value="Wiga">Wiga</option>
                    <option value="Witeithie">Witeithie</option>
                    <option value="Witu">Witu</option>
                    <option value="Wodanga">Wodanga</option>
                    <option value="Woodley/Kenyatta Golf Course">Woodley/Kenyatta Golf Course</option>
                    <option value="Wote">Wote</option>
                    <option value="Wumingu/Kishushe">Wumingu/Kishushe</option>
                    <option value="Wundanyi/Mbale">Wundanyi/Mbale</option>
                    <option value="Wusi/Kishamba">Wusi/Kishamba</option>
                    <option value="Yala Township">Yala Township</option>
                    <option value="Yimbo East">Yimbo East</option>
                    <option value="Zimmerman">Zimmerman</option>
                    <option value="Ziwa La Ng'Ombe">Ziwa La Ng'Ombe</option>
                    <option value="Ziwa">Ziwa</option>
                    <option value="Ziwani/Kariokor">Ziwani/Kariokor</option>
                    <option value="Zombe/Mwitika">Zombe/Mwitika</option>


                  </select>
                </div>
                <div class="col"></div>
              </div>
  
            </div>
<!-- Region section ends here -->
 
            <h4 class="section-headers mt-4">Step 2: Personal Details</h4>
            <div class="input-sections">
<!-- Row 1 begins here  -->
              <div class="row form-group">
                <div class="col">
                  <label for="title">Title <span class="mandatory">*</span></label>
                  <select name="title" id="title" class="form-control"  required>
                    <option value="">------</option>
                    <option value="mr">Mr</option>
                    <option value="mrs">Mrs</option>
                    <option value="miss">Ms</option>
                    <option value="prof">Professor</option>
                    <option value="dr">Dr</option>
                  </select>
                </div>
                  
                <div class="col">
                  <label for="surname">Surname <span class="mandatory">*</span></label>
                  <input type="text" name="surname" id="surname" placeholder="------"  required class="form-control">
                  <?php
                    if(isset($_GET['failed'])){
                      if(isset($_SESSION['surname_err'])){
                        echo "<div class='alert alert-danger'>" .$_SESSION['surname_err']. "</div>";
                      }
                    }
                  
                  
                  ?>
                </div>
                <div class="col">
                  <label for="surname">Other names <span class="mandatory">*</span></label>
                  <input type="text" name="other-names" id="other-names" placeholder="------"  required class="form-control">
                  <?php
                    if(isset($_GET['failed'])){
                      if(isset($_SESSION['other_names_err'])){
                        echo "<div class='alert alert-danger'>" .$_SESSION['other_names_err']. "</div>";
                      }
                    }
                  
                  
                  ?>
                </div>
              </div>
<!-- Row 1 ends here -->


<!-- Row 2 starts here -->
            <div class="row form-group mt-4">
              <div class="col">
                <label for="identification-document">Choose Identification Document <span class="mandatory">*</span></label>
                <select name="identification-document" id="identification-document" class="form-control"  required>
                  <option value="">------</option>
                  <option value="national-id">National ID</option>
                  <option value="passport">Passport</option>
                </select>
              </div>
              <div class="col">
                <label for="id-passport-number">ID or Passport number <span class="mandatory">*</span></label>
                <input type="text" name="id-passport-number" id="id-passport-number" placeholder="------"  required class="form-control">
                <?php
                    if(isset($_GET['failed'])){
                      if(isset( $_SESSION['id_passport_err'])){
                        echo "<div class='alert alert-danger'>" . $_SESSION['id_passport_err']. "</div>";
                      }
                    }
                  
                  
                  ?>
                             
              </div>
              <div class="col">
                <label for="occupation">Occupation <span class="mandatory">*</span> </label>
                <select name="occupation" id="occupation" class="form-control"  required>
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
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder=" eg. xyz@email.com"  required>
              </div>
              <div class="col">
                <label for="phone-number">Phone number <span class="mandatory">*</span></label>
                <input type="number" name="phone-number" id="phone-number" class="form-control" placeholder="eg. 0710XXXZZZ"  required>
                <?php
                    if(isset($_GET['failed'])){
                      if(isset($_SESSION['phone_err'])){
                        echo "<div class='alert alert-danger'>" .$_SESSION['phone_err']. "</div>";
                      }
                    }
                  
                  
                  ?>
              </div>
              <div class="col">
                <label for="other-numbers">Other phone numbers</label>
                <input type="number" name="other-numbers" id="other-numbers" placeholder="eg. 0710XXXZZZ" class="form-control"  required>
                <?php
                    if(isset($_GET['failed'])){
                      if(isset($_SESSION['other_phone_err'])){
                        echo "<div class='alert alert-danger'>" .$_SESSION['other_phone_err']. "</div>";
                      }
                    }
                    session_unset();
                  
                  
                  ?>
              </div>

            </div>
<!-- Row 3 ends here -->

<!-- Row 4 starts here -->
            <div class="row form-group mt-4">
              <div class="col">
                <label for="gender">Choose gender<span class="mandatory">*</span></label>
                <select name="gender" id="gender" class="form-control"  required>
                  <option value="">------</option>
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                </select>
              </div>
              <div class="col">
                <label for="passport-photo">Upload passport photo </label>
                <input type="file" class="form-control" name="passport-photo" id="passport-photo" disabled >
              </div>
              <div class="col">
                <label for="date-of-birth">Date of birth <span class="mandatory">*</span></label>
                <input type="date" name="date-of-birth" id="date-of-birth" class="form-control"  required>
              </div>
              
            </div>
<!-- Row 4 ends here -->



<!-- row 5 starts here -->
            <div class="row form-group mt-4">
              <div class="col">
                <label for="special-group">Special interest category <span class="mandatory">*</span></label>
                <select name="special-group" id="special-group" class="form-control"  required>
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
              <hr>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col">
                <input type="submit" name="add" id="add" value="ADD ASPIRANT" class="update btn btn-warning btn-block"> 
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