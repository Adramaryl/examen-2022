<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Examen</h1>
    <div>
        <form action="" method="post">
            <div>
                <label for="destinataire">Destinataire : </label>
                <select id="destinataire" name="destinataire">
                    <?php echo getDestinataire($contacts) ?>
                </select>
            </div>
            <div>
                <label for="amount">Montant : </label>
                <input type="number" id="amount" name="amount" placeholder="0.00" step="0.01">
            </div>
            <div>
                <label for="date">Date : </label>
                <input type="date" id="date" name="date" value="<?php echo $date ?>">
            </div>
            <div>
                <input type="hidden" id="emetteur" name="emetteur" value="1">
            </div>
            <div>
                <input type="submit" value="Valider">
            </div>
        </form>
    </div>
</body>
</html>