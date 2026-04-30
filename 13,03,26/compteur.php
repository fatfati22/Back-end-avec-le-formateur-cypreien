<?php
session_start(); // démarrer la session

// initialiser le compteur
if (!isset($_SESSION['compteur'])) {
    $_SESSION['compteur'] = 0;
}

// incrémenter
$_SESSION['compteur']++;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding-top: 100px;
        }

        .container {
            background: white;
            width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background: #c0392b;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1>Compteur de visites</h1>

        <p>
            Vous avez visité cette page
            <b><?php echo $_SESSION['compteur']; ?></b>
            fois durant cette session.
        </p>

        <a href="detruire.php">Détruire la session</a>

    </div>

</body>

</html>