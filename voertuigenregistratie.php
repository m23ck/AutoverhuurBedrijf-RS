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

        <form class="col s12" method="GET" action="search/resultsvoertuig.php">
            <div class="input-field center-align col s4 offset-s4">
                <input id="search" name="search_voertuig" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>

    </div>
    <br>


    <div class="row">
        <form class="col s12" id="voertuigenregistratieform" method="POST" action="addregistratie/addvoertuig.php">
            <div class="row">
                <div class="input-field col s1">
                    <input id="merk" name="merk" type="text" class="validate">
                    <label for="merk">Merk</label>
                </div>
                <div class="input-field col s2">
                    <input id="Model" name="model" type="text" class="validate">
                    <label for="model">Model</label>
                </div>
                <div class="input-field col s1">
                    <input id="categorie" name="categorie" type="text" class="validate">
                    <label for="categorie">Categorie</label>
                </div>
                <div class="input-field col s2">
                    <input id="kentekennummer" name="kentekennummer" type="text" class="validate">
                    <label for="kentekennummer">Kentekennummer</label>
                </div>
                <div class="input-field col s1">
                    <input id="bouwjaar" name="bouwjaar" type="text" class="validate">
                    <label for="bouwjaar">Bouwjaar</label>
                </div>
                <div class="input-field col s2">
                    <input id="kilometerstand" name="kilometerstand" type="number" class="validate">
                    <label for="kilometerstand">Kilometerstand</label>
                </div>
                <div class="input-field col s1">
                    <!-- <input id="status" name="status" type="text" class="validate">
                    <label for="status">Status</label> -->
                    <select class="browser-default" id="status" name="status">
                        <option value="" disabled selected>status</option>
                        <option value="garage">garage</option>
                        <option value="verhuurd">verhuurd</option>
                    </select>
                </div>
                <!-- <btn toevoegen -->
                <button class="btn waves-effect waves-light indigo lighten-1" type="submit" name="action">Toevoegen
                </button>


            </div>
        </form>
        <br>
    </div>
    <div class="row">

        <table class="responsive-table" id="voertuigentabel">
            <th>ID</th>
            <th>Merk</th>
            <th>Model</th>
            <th>Categorie</th>
            <th>Kentekennummer</th>
            <th>Bouwjaar</th>
            <th>Kilometerstand</th>
            <th>Status</th>

            <?php

            $results = mysqli_query($link,"SELECT * FROM tbl_voertuig");
                    while($row = mysqli_fetch_array($results)) {
                    ?>

            <tr>
                <td><?php echo $row['voertuigid']?></td>
                <td><?php echo $row['merk']?></td>
                <td><?php echo $row['model']?></td>
                <td><?php echo $row['categorie']?></td>
                <td><?php echo $row['kentekennummer']?></td>
                <td><?php echo $row['bouwjaar']?></td>
                <td><?php echo $row['kilometerstand']?></td>
                <td><?php echo $row['status']?></td>
            </tr>

            <?php
                    }

                    ?>


        </table>


    </div>

    <br>






    <!--JavaScript at end of body for optimized loading-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

    <script type="text/javascript" src="main.js"></script>

</body>

</html>