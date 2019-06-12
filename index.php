<?php
// Include config file
require_once "config.php";

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!--Import materialize.css-->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
  <link rel="stylesheet" href="materialize/css/materialize.min.css" />

  <!--Let browser know website is optimized for mobile-->
  <meta name=" viewport" content="width=device-width, initial-scale=1.0" />

  <!-- custom -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="row">
    <div class="navbar-fixed col s12 custom-nav" style="padding:0;">
      <nav>
        <div class="nav-wrapper indigo lighten-1">
          <a href="./" class="brand-logo custom-logo col s4">Dashboard</a>

          <ul class="right hide-on-med-and-down col s4">
            <li><a href="klantenregistratie.php">Klanten</a></li>
            <li><a href="voertuigenregistratie.php">Voertuigen</a></li>
            <li><a href="verhuur.php">Verhuur</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <br />
  <div class="row">
    <form class="col s12" method="GET" action="search.php">
      <div class="input-field center-align col s4 offset-s4">
        <input id="search" name="search" type="search" required />
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i>
      </div>
    </form>
  </div>
  <br />
  <div class="row col s12" id="updatebuttons">
    <!-- open klant update form close the rest -->
    <button name="update_klant" class="btn waves-effect waves-light indigo lighten-1 col s3"
      onclick="document.getElementById('voertuig_update_form').style.display='none';
      document.getElementById('klant_update_form').style.display='block';document.getElementById('tarief_update_form').style.display='none';">Klant
      Updaten</button>

    <!-- open voertuig update form close the rest -->
    <button name="update_voertuig" class="btn waves-effect waves-light indigo lighten-1 col s3 offset-s1"
      onclick="document.getElementById('klant_update_form').style.display='none';
      document.getElementById('voertuig_update_form').style.display='block';document.getElementById('tarief_update_form').style.display='none';">Voertuig
      Updaten</button>

    <!-- open tarief update form close the rest -->
    <button name="update_tarief" class="btn waves-effect waves-light indigo lighten-1 col s3 offset-s1"
      onclick="document.getElementById('klant_update_form').style.display='none';
      document.getElementById('voertuig_update_form').style.display='none';document.getElementById('tarief_update_form').style.display='block';">Tarief
      Updaten</button>

  </div>

  <!-- VANAF HIER -->
  <div class="container" style="align: center">

    <form action="#" method="POST" style="display: none;" id="klant_update_form">

      <input type="text" name="username" placeholder="Username">
      <br></br>
      <input type="password" name="password" placeholder="Password">
      <br></br>

      <button class="btn waves-effect waves-light indigo lighten-1" type="submit"
        name="btn_update_klant">Update</button>
    </form>

    <form action="update/update_voertuig.php" method="POST" style="display: none;" id="voertuig_update_form">
      <input type="text" name="merk" placeholder="Merk">
      <br></br>
      <input type="text" name="model" placeholder="Model">
      <br></br>
      <input type="text" name="categorie" placeholder="Categorie">
      <br></br>
      <input type="text" name="kentekennummer" placeholder="Kentekennummer">
      <br></br>
      <input type="text" name="bouwjaar" placeholder="Bouwjaar">
      <br></br>
      <input type="text" name="kilometerstand" placeholder="Kilometerstand">
      <br></br>
      <input type="text" name="status" placeholder="status">
      <br></br>
      <button class="btn waves-effect waves-light indigo lighten-1" type="submit" name="btn_register">Update</button>
    </form>

    <form action="#" method="POST" style="display: none;" id="tarief_update_form">

      <input type="text" name="categorie" placeholder="Categorie">
      <br></br>
      <input type="password" name="borgsom" placeholder="Borgsom">
      <br></br>
      <input type="password" name="prijs" placeholder="Prijs">
      <br></br>

      <button class="btn waves-effect waves-light indigo lighten-1" type="submit"
        name="btn_update_klant">Update</button>
    </form>


  </div>

  <!-- TOT HIER -->


  <div class="row">
    <h5 class="col s3 offset-s4">Voertuig verwijderen</h5>
    <form action="delete/delete_voertuig.php" method="POST" id="delete_voertuig_form" class="col s12">
      <input type="text" name="kentekennummer" placeholder="kentekennummer" class="col s3 offset-s4 ">
      <br></br>
      <button class="btn waves-effect waves-light col s3 offset-s4" style="background-color:red;" type="submit"
        name="btn_update_klant">Verwijderen</button>
    </form>
    
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</body>

</html>