<?php

// Include config file
require_once "../config.php";

$kentekennummer = mysqli_real_escape_string($link, $_POST['kentekennummer']);


    $sql = "DELETE FROM tbl_voertuig WHERE kentekennummer =  '$kentekennummer'";

            if ($link->query($sql) === TRUE) {
                header("Location: ../voertuigenregistratie.php");
                echo "Record deleted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
            }

            $link->close();

?>