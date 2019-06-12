<?php
// Include config file
require_once "config.php";

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Voertuigenverhuur</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
  <link rel="stylesheet" href="materialize/css/materialize.min.css">


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- custom -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="row">
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
  </div>
  <br>
  <div class="row">

    <form class="col s12" method="GET" action="search/resultsverhuur.php">
      <div class="input-field center-align col s4 offset-s4">
        <input id="search" name="search_verhuur" type="search" required>
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i>
      </div>
    </form>

  </div>
  <br>
  <div class="row">
    <form class="col s12" id="verhuurform" method="POST" action="addregistratie/addverhuur.php">
      <div class="row">

        <div class="input-field col s1">
          <input id="kentekennummer" name="kentekennummer" type="text" class="validate">
          <label for="kentekennummer">Kenteken</label>
        </div>
        <div class="input-field col s1">
          <input id="naam" name="naam" type="text" class="validate">
          <label for="naam">naam</label>
        </div>
        <div class="input-field col s1">
          <input id="voornaam" name="voornaam" type="text" class="validate">
          <label for="voornaam">Voornaam</label>
        </div>
        <div class="input-field col s1">
          <input id="bedrijf" name="bedrijf" type="text" class="validate">
          <label for="bedrijf">Bedrijf</label>
        </div>
        <div class="input-field col s2">
          <input id="uitgeefdatum" name="uitgeefdatum" type="date" class="validate">
          <label for="uitgeefdatum">Uitgeefdatum</label>
        </div>
        <div class="input-field col s2">
          <input id="inleverdatum" name="inleverdatum" type="date" class="validate">
          <label for="inleverdatum">Inleverdatum</label>
        </div>
        <div class="input-field col s1">
          <input id="prijs" name="prijs" type="text" class="validate">
          <label for="prijs">Prijs</label>
        </div>
        <div class="input-field col s1">
          <!-- <input id="status_bet" name="status_bet" type="text" class="validate">
          <label for="status_bet">Status</label> -->
          <select class="browser-default" id="status_bet" name="status_bet">
                        <option value="" disabled selected>status</option>
                        <option value="betaald">betaald</option>
                        <option value="onbetaald">onbetaald</option>
                    </select>
        </div>

        <!-- <btn toevoegen -->
        <button class="btn waves-effect waves-light indigo lighten-1" type="submit" name="action">Toevoegen
        </button>


      </div>
    </form>
    <br>
    <div class="row">

      <table class="responsive-table" id="klantentabel">
        <th>HuurID</th>
        <th>VoertuigID</th>
        <th>Kentekennummer</th>
        <th>KlantID</th>
        <th>Uitgeefdatum</th>
        <th>Inleverdatum</th>
        <th>Prijs</th>
        <th>status</th>

        <?php

    $results = mysqli_query($link,"SELECT * FROM tbl_verhuren");
            while($row = mysqli_fetch_array($results)) {
            ?>

        <tr>
          <td><?= $row['huurid']?></td>
          <td><?= $row['voertuigid']?></td>
          <td><?= $row['kentekennummer']?></td>
          <td><?= $row['klantid']?></td>
          <td><?= $row['uitgeefdatum']?></td>
          <td><?= $row['inleverdatum']?></td>
          <td><?= $row['prijs']?></td>
          <td><?= $row['status']?></td>
        </tr>

        <?php
            }

            ?>



      </table>


    </div>





    <br>








  </div>


  <!--JavaScript at end of body for optimized loading-->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <script type="text/javascript" src="main.js"></script>


</body>

</html>