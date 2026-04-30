<?php
// Définir le fuseau horaire français
date_default_timezone_set('Europe/Paris');

// Ajouter une ligne dans le fichier journal.log
file_put_contents(
    "journal.log",
    date("d/m/Y H:i:s") . " - " . $_SERVER['REMOTE_ADDR'] . "\n",
    FILE_APPEND
);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Journalisation</title>
</head>

<body>

    <h2>Visite enregistrée</h2>

    <a href="afficher_journal.php">Voir le journal</a>

</body>

</html>