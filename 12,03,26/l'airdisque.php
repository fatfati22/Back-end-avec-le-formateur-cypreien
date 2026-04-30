<?php

// fonction pour calculer l'aire
function aireDisque($rayon)
{
    return pi() * $rayon * $rayon;
}

// traitement du formulaire
if (isset($_POST["rayon"])) {

    $rayon = $_POST["rayon"];

    if ($rayon >= 0) {
        $aire = aireDisque($rayon);
        echo "<p>L'aire du disque est : $aire</p>";
    } else {
        echo "<p>Le rayon doit être positif</p>";
    }
}

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Aire d'un disque</title>
</head>

<body>

    <h2>Calculer l'aire d'un disque</h2>

    <form method="post">
        Rayon :
        <input type="number" name="rayon" step="any" min="0" required>
        <button type="submit">Calculer</button>
        <p><?php echo  aireDisque($rayon) ?></p>
    </form>


</body>

</html>