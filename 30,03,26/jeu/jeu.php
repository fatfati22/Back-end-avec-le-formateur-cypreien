<?php
session_start();

/* RESET automatique si mauvais type (sécurité anti-bug) */
if (!isset($_SESSION['sequence']) || is_array($_SESSION['sequence'])) {
    $_SESSION['sequence'] = "";
    $_SESSION['score'] = 0;
}

/* AJOUT D’UN CHIFFRE */
if (isset($_GET['nouveau']) || $_SESSION['sequence'] === "") {
    $_SESSION['sequence'] .= rand(1, 9);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Jeu de mémoire</title>

    <meta http-equiv="refresh" content="2;url=saisie.php">
</head>

<body>

    <h1>Jeu de mémoire</h1>

    <p>Score : <?= $_SESSION['score'] ?></p>

    <p>Mémorisez la séquence :</p>

    <h2>
        <?php
        $seq = (string)$_SESSION['sequence'];
        echo $seq;
        ?>
    </h2>

    <p>Vous avez 2 secondes...</p>

</body>

</html>