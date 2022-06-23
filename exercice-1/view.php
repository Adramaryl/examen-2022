<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
    <style>
        .positive {
            color: green;
        }

        .negative {
            color: grey;
        }
    </style>
</head>
<body>
    <h1>Examen</h1>
    <div>
        <ul>
            <?php echo displayTransaction($transactions); ?>
        </ul>
    </div>
    <div>
        <a href="../exercice-2/index.php">Nouvelle transaction</a>
    </div>
</body>
</html>