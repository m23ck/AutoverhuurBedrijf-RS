<?php
// Include config file
require_once "config.php";

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Klantenregistratie</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- custom -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" href="main.js"></script>
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
        <form class="col s12" id="klantenregistratieform">
            <div class="row">
                <div class="input-field col s2">
                    <input id="naam" type="text" class="validate">
                    <label for="naam">Naam</label>
                </div>
                <div class="input-field col s2">
                    <input id="voornaam" type="text" class="validate">
                    <label for="voornaam">Voornaam</label>
                </div>
                <div class="input-field col s2">
                    <input id="bedrijf" type="text" class="validate">
                    <label for="bedrijf">Bedrijf</label>
                </div>
                <div class="input-field col s1">
                    <input id="straatnaam" type="text" class="validate">
                    <label for="straatnaam">Straatnaam</label>
                </div>
                <div class="input-field col s1">
                    <input id="huisnummer" type="text" class="validate">
                    <label for="huisnummer">#</label>
                </div>
                <div class="input-field col s1">
                    <input id="huisnummer" type="text" class="validate">
                    <label for="huisnummer">toevoeging</label>
                </div>
                <div class="input-field col s1">
                    <input id="telefoon" type="text" class="validate">
                    <label for="telefoon">Telefoon</label>
                </div>
                <!-- <btn toevoegen -->
                <button class="btn waves-effect waves-light indigo lighten-1" type="submit" name="action">Toevoegen
                </button>



            </div>
        </form>

    </div>
    <div class="row">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Voornaam</th>
                    <th>Bedrijf</th>
                    <th>Straatnaam</th>
                    <th>#</th>
                    <th>Toevoeging</th>
                    <th>telefoon</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                </tr>
                <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                </tr>
                <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                </tr>
            </tbody>
        </table>
    </div>



    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>