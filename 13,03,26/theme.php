<!-- Exercice 16 : Mémoriser une préférence de thème

Créez un fichier theme.php.

La page doit contenir deux liens : “Thème clair” et “Thème sombre”.
Lorsqu’on clique sur un lien, la page se recharge et on crée un cookie theme avec la valeur choisie.
La page doit lire ce cookie et afficher un message “Thème [clair/sombre] sélectionné”. (On n’appliquera pas réellement le thème pour l’instant, on se contente de l’afficher). -->
<?php
// Si on clique sur un lien
if (isset($_GET['theme'])) {
    $theme = $_GET['theme'];
    setcookie("theme", $theme, time() + 3600);
    header("Location: theme.php");
    exit();
}

// thème par défaut
$themeActuel = "clair";

if (isset($_COOKIE['theme'])) {
    $themeActuel = $_COOKIE['theme'];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Choix du thème</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 80px;
        }

        /* thème clair */
        body.clair {
            background-color: #f4f4f4;
            color: black;
        }

        /* thème sombre */
        body.sombre {
            background-color: #222;
            color: white;
        }

        .container {
            width: 350px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            background: white;
        }

        /* container sombre */
        body.sombre .container {
            background: #333;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .clair-btn {
            background: #eaeaea;
            color: black;
        }

        .sombre-btn {
            background: #444;
            color: white;
        }
    </style>

</head>

<body class="<?php echo $themeActuel; ?>">

    <div class="container">

        <h1>Choisir un thème</h1>

        <a class="clair-btn" href="theme.php?theme=clair">Thème clair</a>
        <a class="sombre-btn" href="theme.php?theme=sombre">Thème sombre</a>

        <p>Thème <b><?php echo $themeActuel; ?></b> sélectionné</p>

    </div>

</body>

</html>