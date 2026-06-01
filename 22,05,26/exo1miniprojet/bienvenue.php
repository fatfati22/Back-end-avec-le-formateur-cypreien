<?php

session_start();

// Vérification de connexion
if (!isset($_SESSION['utilisateur_id'])) {

    header('Location: connexion.html');
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>
        Bienvenue,
        <?php echo $_SESSION['utilisateur_login']; ?> !
    </h1>

    <a href="logout.php">Se déconnecter</a>

</body>

</html>