<?php
// créer le nombre secret
session_start();
if (!isset($_SESSION['nombre_secret'])) {
    $_SESSION['nombre_secret'] = rand(0, 100);
}

$message = "";


// vérifier la proposition

if (isset($_POST['guess'])) {

    $guess = intval($_POST['guess']);
    $secret = $_SESSION['nombre_secret'];

    if ($guess < $secret) {

        $message = "le nombre est plus grand";
    } elseif ($guess > $secret) {
        $message = "le nombre est plus petit";
    } else {
        $message = "bravo !! vous avez trouvé";
        session_destroy();
    }
}
// recommencer

if (isset($_POST['reset'])) {
    session_destroy();
    header("location:deviner.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">

        <h1> devine le nombre</h1>
        <p>choisissez un nombre entre 0 et 100:</p>
        <form method="post">
            <input type="number" name="guess" min="0" max="100" required>
            <button type="submit">essayer</button>
        </form>
        <p class="message">
            <?php echo $message; ?>
        </p>
        <form action="" method="post">

            <button type="reset" name="reset">Recommencer</button>


        </form>
    </div>
</body>

</html>