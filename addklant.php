<?php



// Include config file
require_once "config.php";



            $naam = mysqli_real_escape_string($link, $_POST['naam']);
            $voornaam = mysqli_real_escape_string($link, $_POST['voornaam']);
            $bedrijf = mysqli_real_escape_string($link, $_POST['bedrijf']);
            $straatnaam = mysqli_real_escape_string($link, $_POST['straatnaam']);
            $huisnummer = mysqli_real_escape_string($link, $_POST['huisnummer']);
            $toevoeging = mysqli_real_escape_string($link, $_POST['toevoeging']);
            $telefoon = mysqli_real_escape_string($link, $_POST['telefoon']);    

// if("SELECT * FROM tbl_klanten WHERE naam =='$naam' && voornaam ")
                $sql = "INSERT INTO tbl_klanten(naam, voornaam, bedrijf, straatnaam, huisnummer, toevoeging, telefoon)
            VALUES ('$naam', '$voornaam', '$bedrijf', '$straatnaam', '$huisnummer', '$toevoeging', '$telefoon')";

            


            if ($link->query($sql) === TRUE) {
                header("Location: ./klantenregistratie.php/?success");
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
            }

            $link->close();

?>