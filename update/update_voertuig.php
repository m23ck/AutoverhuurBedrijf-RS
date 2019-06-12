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

                $sql = "UPDATE tbl_voertuig SET merk='$merk' && model ='$model' && categorie='$categorie' && kentekennummer = '$kentekennummer' && bouwjaar ='$bouwjaar' && kilometerstand = '$kilometerstand' && status = '$status' WHERE kentekennummer LIKE '$kentekennummer'";

            if ($link->query($sql) === TRUE) {
                header("Location: ../voertuigenregistratie.php");
                echo "Record deleted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
            }

            $link->close();

?>