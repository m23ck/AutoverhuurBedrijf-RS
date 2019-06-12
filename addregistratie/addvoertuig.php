<?php



// Include config file
require_once "../config.php";



            $merk = mysqli_real_escape_string($link, $_POST['merk']);
            $model = mysqli_real_escape_string($link, $_POST['model']);
            $categorie = mysqli_real_escape_string($link, $_POST['categorie']);
            $kentekennummer = mysqli_real_escape_string($link, $_POST['kentekennummer']);
            $bouwjaar = mysqli_real_escape_string($link, $_POST['bouwjaar']);
            $kilometerstand = mysqli_real_escape_string($link, $_POST['kilometerstand']);
            $status = mysqli_real_escape_string($link, $_POST['status']);    

                $sql = "INSERT INTO tbl_voertuig(merk, model, categorie, kentekennummer, bouwjaar, kilometerstand, status)
            VALUES ('$merk', '$model', '$categorie', '$kentekennummer', '$bouwjaar', '$kilometerstand', '$status')";

            


            if ($link->query($sql) === TRUE) {
                header("Location: ../voertuigenregistratie.php");
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
            }

            $link->close();

?>