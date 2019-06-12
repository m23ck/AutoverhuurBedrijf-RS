<?php
// Include config file
require_once "../config.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>resultaten</title>
    <!-- Ajax
    <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

 -->

    <!--Import Google Icon Font-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!--Import materialize.css-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- custom -->
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="row">
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper indigo lighten-1 custom-nav">
                    <a href="../" class="brand-logo custom-logo">Dashboard</a>


                    <ul class="right hide-on-med-and-down">
                        <li><a href="../klantenregistratie.php">Klanten</a></li>
                        <li><a href="../voertuigenregistratie.php">Voertuigen</a></li>
                        <li><a href="../verhuur.php">Verhuur</a></li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <br>
    <div class="row col 12">

        <?php

// check de voertuigid van voertuig waar kenteken gelijk is aan kenteken hier
$searchterm = mysqli_real_escape_string($link, $_GET['search_verhuur']);
$searchterm = htmlspecialchars($searchterm);

$raw_results = mysqli_query($link,"SELECT * FROM tbl_verhuren WHERE (`huurid` LIKE '%".$searchterm."%') OR (`voertuigid` LIKE '%".$searchterm."%') OR (`klantid` LIKE '%".$searchterm."%') OR (`status` LIKE '%".$searchterm."%')OR (`kentekennummer` LIKE '%".$searchterm."%')") or die(mysqli_error($link));

while($results = mysqli_fetch_array($raw_results)){
                echo "<a>"
                .$results['huurid']
                ," "
               .$results['kentekennummer'] 
                , " "
                .$results['uitgeefdatum'] 
                , " "
                .$results['inleverdatum'].
                "</a>";
                echo "<br>";
                // test btn
                // echo "<button style='border: none; background-color: transparent;'>"
                // .$results['voertuigid']
                // ," "
                // .$results['model'] 
                // , " "
                // .$results['merk'].
                // "</button>";
                // echo "<br>";
    }
    

   
$link->close();

        

        ?>

    </div>


    <!--JavaScript at end of body for optimized loading-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
    <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

    <script type="text/javascript" src="../main.js"></script>

</body>

</html>