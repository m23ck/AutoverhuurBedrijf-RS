<?php



// Include config file
require_once "config.php";


            $naam = $_POST['naam'];
            $voornaam = $_POST['voornaam'];
            $bedrijf = $_POST['bedrijf'];
            $straatnaam = $_POST['straatnaam'];
            $huisnummer = $_POST['huisnummer'];
            $toevoeging = $_POST['toevoeging'];
            $telefoon = $_POST['telefoon'];    


                $sql = "INSERT INTO tbl_klanten (naam, voornaam, bedrijf, straatnaam, huisnummer, toevoeging, telefoon)
            VALUES ('$naam', '$voornaam', '$bedrijf', '$straatnaam', '$huisnummer', '$toevoeging', '$telefoon')";

            


            if ($link->query($sql) === TRUE) {
                header("Location: ./klantenregistratie.php/?success");
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
            }

            $link->close();

?>