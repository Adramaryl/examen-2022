<?php

require "../liste_transactions.php";

function getDestinataire($contacts) {
    foreach($contacts as $cnts) {
        echo "<option value=\"" . $cnts['id'] . "\">" . strtoupper($cnts['nom']) . " " . strtoupper($cnts['prenom']) . "</option>";
    }
}

$date = date('d-m-y');

$errorMessage = "";

if (!isset ($_POST['amount']) || ($_POST['amount']) == 0) {
    $errorMessage = "Veuillez entrer un montant";
}
else if ($_POST['amount'] < 0) {
    $errorMessage = "Veuillez entrer un montant valide";
}
else if (!isset ($_POST['date'])) {
    $errorMessage = "Veuillez entrer une date";
}
else if (strtotime($_POST['date']) < $date) {
    $errorMessage = "Veuillez entrer une date valide";
}


if ($errorMessage != "") {
    $erms = $errorMessage;
} else {
    header("Location: ../exercice-1/index.php");
}

require "view.php";

?>