<?php

// Include config file
require_once "../config.php";


// check de voertuigid van voertuig waar kenteken gelijk is aan kenteken hier
    $kentekennummer = mysqli_real_escape_string($link, $_POST['kentekennummer']);
    $query_voertuigID = mysqli_query($link, "SELECT voertuigid FROM tbl_voertuig WHERE kentekennummer = '$kentekennummer' " ); 

    // check de klantid van klant waar naam en voornaam gelijk zijn aan namen en/of bedrijf hier
    $naam = mysqli_real_escape_string($link, $_POST['naam']);
    $voornaam = mysqli_real_escape_string($link, $_POST['voornaam']);
    $bedrijf = mysqli_real_escape_string($link, $_POST['bedrijf']);
    $query_klantID = mysqli_query($link, "SELECT klantid FROM tbl_klanten WHERE naam = '$naam' && voornaam = '$voornaam' AND bedrijf = '$bedrijf'");
    

    $uitgeefdatum = mysqli_real_escape_string($link, $_POST['uitgeefdatum']);
    $inleverdatum = mysqli_real_escape_string($link, $_POST['inleverdatum']);
    $prijs = mysqli_real_escape_string($link, $_POST['prijs']);
    $status_bet = mysqli_real_escape_string($link, $_POST['status_bet']);    
    $voertuigid = mysqli_fetch_array($query_voertuigID)[0];
    $klantid = mysqli_fetch_array($query_klantID)[0];


    

    if (!empty($query_voertuigID) && !empty($query_klantID)){
        $sql = "INSERT INTO tbl_verhuren(voertuigid, kentekennummer, klantid, uitgeefdatum, inleverdatum, prijs, status)
        VALUES ('$voertuigid', '$kentekennummer', '$klantid','$uitgeefdatum', '$inleverdatum', '$prijs', '$status_bet')";
            if ($link->query($sql) === TRUE) {
                header("Location: ../verhuur.php");
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
            }
    }
    else{
        echo "<script>
        alert('Het aangegeven klant-of voertuig informatie staat niet geregistreerd!');
        </script>";
        exit;
    }

$link->close();

?>