<?php

require "../liste_transactions.php";

function displayTransaction($transactions) {
    foreach ($transactions as $trs) {
        $check = '2022';

        if (strpos($trs['date'], $check) == true) {
            echo "<li>";
            echo $trs['date'] . "&nbsp;  &nbsp;";

            if ($trs['montant'] < 0) {
                $id = $trs['destinataire'];
                $class = "negative";
            } else {
                $id = $trs['emetteur'];
                $class = "positive";
            }

            $cnt = getContactById($id);
            echo strtoupper($cnt['nom']) . " " . strtoupper($cnt['prenom']) . "&nbsp;  &nbsp;";
            echo substr($cnt['compte'], 0, 4) . " XXXX XXXX " . substr($cnt['compte'], 12, 4) . "&nbsp;  &nbsp;";
            echo "<span class=\"$class\">" . $trs['montant'] . "</span>";
            echo "</li>";
        }
    }
}



require "view.php";

?>