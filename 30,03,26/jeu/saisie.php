<?php
session_start();

/* sécurité */
if (!isset($_SESSION['sequence']) || $_SESSION['sequence'] === "") {
    header('Location: jeu.php');
    exit;
}

/* traitement formulaire */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $reponse = trim($_POST['reponse']);
    $bonneReponse = ($_SESSION['sequence']);

    if ($reponse === $bonneReponse) {

        $_SESSION['score']++;

        echo '<h1>Jeu de mémoire</h1>';
        echo '<p>Bravo ! Bonne réponse.</p>';
        echo '<p>Score : ' . $_SESSION['score'] . '</p>';
        echo '<a href="jeu.php?nouveau=1">Séquence suivante</a>';
    } else {

        $score = $_SESSION['score'];

        $_SESSION['sequence'] = "";
        $_SESSION['score'] = 0;

        echo '<h1>Jeu de mémoire</h1>';
        echo '<p>Perdu ! La bonne réponse était : ' . $bonneReponse . '</p>';
        echo '<p>Votre score : ' . $score . '</p>';
        echo '<a href="jeu.php">Recommencer</a>';
    }
} else {
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Jeu de mémoire - Saisie</title>
    </head>

    <body>

        <h1>Jeu de mémoire</h1>

        <p>Score : <?= $_SESSION['score'] ?></p>

        <p>
            Quelle était la séquence ?
            (<?= strlen($_SESSION['sequence']) ?> chiffre<?= strlen($_SESSION['sequence']) > 1 ? 's' : '' ?>, séparés par des espaces)
        </p>

        <form method="post">
            <input type="text" name="reponse" placeholder="ex : 5 2 8" autofocus>
            <button type="submit">Valider</button>
        </form>

    </body>

    </html>
<?php } ?>