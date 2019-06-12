<?php
// Include config file
require_once "config.php";


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Klantenregistratie</title>
    <!-- Ajax -->
    <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>



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

        <form class="col s12" method="GET" action="search/resultsklant.php">
            <div class="input-field center-align col s4 offset-s4">
                <input id="search" name="search_klant" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>

    </div>
    <br>
    <div class="row">
        <form class="col s12" id="klantenregistratieform" method="POST" action="addregistratie/addklant.php">
            <div class="row">
                <div class="input-field col s2">
                    <input id="naam" name="naam" type="text" class="validate" required>
                    <label for="naam">Naam</label>
                </div>
                <div class="input-field col s2">
                    <input id="voornaam" name="voornaam" type="text" class="validate" required>
                    <label for="voornaam">Voornaam</label>
                </div>
                <div class="input-field col s2">
                    <input id="bedrijf" name="bedrijf" type="text" class="validate">
                    <label for="bedrijf">Bedrijf</label>
                </div>
                <div class="input-field col s1">
                    <input id="straatnaam" name="straatnaam" type="text" class="validate" required>
                    <label for="straatnaam">Straatnaam</label>
                </div>
                <div class="input-field col s1">
                    <input id="huisnummer" name="huisnummer" type="text" class="validate" required>
                    <label for="huisnummer">#</label>
                </div>
                <div class="input-field col s1">
                    <input id="toevoeging" name="toevoeging" type="text" class="validate">
                    <label for="toevoeging">toevoeging</label>
                </div>
                <div class="input-field col s1">
                    <input id="telefoon" name="telefoon" type="text" class="validate">
                    <label for="telefoon">Telefoon</label>
                </div>
                <!-- <btn toevoegen -->
                <button class="btn waves-effect waves-light indigo lighten-1" type="submit" name="action"
                    onclick="addKlant()">Toevoegen
                </button>


            </div>
        </form>
        <br>

    </div>

    <div class="row">
        <table class="responsive-table" id="klantentabel">
            <th>ID</th>
            <th>Naam</th>
            <th>Voornaam</th>
            <th>Bedrijf</th>
            <th>Straatnaam</th>
            <th>#</th>
            <th>Toevoeging</th>
            <th>Telefoon</th>

            <?php

    $results = mysqli_query($link,"SELECT * FROM tbl_klanten");
            while($row = mysqli_fetch_array($results)) {
            ?>

            <tr>
                <td><?php echo $row['klantid']?></td>
                <td><?php echo $row['naam']?></td>
                <td><?php echo $row['voornaam']?></td>
                <td><?php echo $row['bedrijf']?></td>
                <td><?php echo $row['straatnaam']?></td>
                <td><?php echo $row['huisnummer']?></td>
                <td><?php echo $row['toevoeging']?></td>
                <td><?php echo $row['telefoon']?></td>
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