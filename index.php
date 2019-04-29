<?php
// Include config file
require_once "config.php";

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- custom -->
      <link rel="stylesheet" href="style.css">
    <script type="text/javascript" href="main.js"></script>
</head>

<body>

<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper indigo lighten-1 custom-nav">
        <a href="./" class="brand-logo custom-logo">Dashboard</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="klantenregistratie.php">Klanten</a></li>
          <li><a href="voertuigenregistratie.php">Voertuigen</a></li>
          <li><a href="verhuur.php">Verhuur</a></li>

        </ul>
      </div>
    </nav>
  </div>
               

<!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>