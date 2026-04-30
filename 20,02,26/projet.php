<?php
// Initialisation des variables
$nom = $email = $message = "";
$erreur = $succes = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et nettoyage des champs
    $nom = trim($_POST["nom"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Vérification que tous les champs sont remplis
    if (empty($nom) || empty($email) || empty($message)) {
        $erreur = "Tous les champs sont obligatoires.";
    } 
    // Validation de l'email
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur = "Adresse email invalide.";
    } 
    else {
        // Tous les champs sont valides
        $succes = "Merci, $nom ! Votre message a été envoyé avec succès.";
        // Réinitialisation des champs si nécessaire
        $nom = $email = $message = "";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contactez-nous</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { max-width: 500px; margin: auto; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 10px; }
        .erreur { color: red; margin-bottom: 10px; }
        .succes { color: green; margin-bottom: 10px; }
        button { padding: 10px 20px; }
    </style>
</head>
<body>

<h2>Formulaire de contact</h2>

<?php if ($erreur): ?>
    <div class="erreur"><?= $erreur ?></div>
<?php endif; ?>

<?php if ($succes): ?>
    <div class="succes"><?= $succes ?></div>
<?php else: ?>
<form method="post" action="">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($nom) ?>">

    <label for="email">Email :</label>
    <input type="text" id="email" name="email" value="<?= htmlspecialchars($email) ?>">

    <label for="message">Message :</label>
    <textarea id="message" name="message"><?= htmlspecialchars($message) ?></textarea>

    <button type="submit">Envoyer</button>
</form>
<?php endif; ?>

</body>
</html>