<?php

require "../liste_transactions.php";

function getDestinataire($contacts) {
    foreach($contacts as $cnts) {
        echo "<option value=\"" . $cnts['id'] . "\">" . strtoupper($cnts['nom']) . " " . strtoupper($cnts['prenom']) . "</option>";
    }
}

$date = date('d-m-y');

require "view.php";

?>