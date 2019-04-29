<?php
// Include config file
require_once "config.php";
 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Voertuigenregistratie</title>


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
        <form class="col s12">
            <div class="row">
                <div class="input-field col s1">
                    <input id="merk" type="text" class="validate">
                    <label for="merk">Merk</label>
                </div>
                <div class="input-field col s2">
                    <input id="Model" type="text" class="validate">
                    <label for="model">Model</label>
                </div>
                <div class="input-field col s1">
                    <input id="categorie" type="text" class="validate">
                    <label for="categorie">Categorie</label>
                </div>
                <div class="input-field col s2">
                    <input id="kentekennummer" type="text" class="validate">
                    <label for="kentekennummer">Kentekennummer</label>
                </div>
                <div class="input-field col s1">
                    <input id="bouwjaar" type="text" class="validate">
                    <label for="bouwjaar">Bouwjaar</label>
                </div>
                <div class="input-field col s2">
                    <input id="kilometerstand" type="number" class="validate">
                    <label for="kilometerstand">Kilometerstand</label>
                </div>
                <div class="input-field col s1">
                    <input id="status" type="text" class="validate">
                    <label for="status">Status</label>
                </div>
                <!-- <btn toevoegen -->
                <button class="btn waves-effect waves-light indigo lighten-1" type="submit" name="action">Toevoegen
                </button>


            </div>
        </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>