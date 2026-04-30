<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Afficher le journal</title>
</head>

<body>

    <h2>Journal des visites</h2>

    <?php
    // Vérifier si le fichier existe
    if (file_exists("journal.log")) {

        // Lire le fichier
        $lignes = file("journal.log");

        // Afficher chaque ligne
        foreach ($lignes as $ligne) {
            echo $ligne . "<br>";
        }
    } else {
        echo "Aucune visite enregistrée";
    }
    ?>

</body>

</html>