<!-- Exercice 17 : Cookie de langue préférée
Contexte : Vous développez un site multilingue. Vous souhaitez mémoriser la langue choisie par l’utilisateur dans un cookie pour 30 jours.

Consignes :
Créez un fichier langue.php qui :

Affiche un formulaire avec deux boutons radio : “Français” et “Anglais”
Lorsque l’utilisateur choisit une langue et soumet le formulaire, stockez ce choix dans un cookie nommé langue qui expire dans 30 jours
À chaque chargement de la page, affichez un message de bienvenue dans la langue choisie :
Si cookie = “fr” : “Bienvenue sur notre site !”
Si cookie = “en” : “Welcome to our website !”
Si pas de cookie : “Veuillez choisir votre langue / Please choose your language”
Contraintes :

Le cookie doit être créé avant tout affichage HTML
Le formulaire doit rester affiché même après le choix de la langue (pour permettre de changer) -->
<?php
// Si on envoie le formulaire
if (isset($_POST["langue"])) {
    $langue = $_POST["langue"];

    // créer le cookie (30 jours)
    setcookie("langue", $langue, time() + 30 * 24 * 60 * 60);
} else {
    // sinon on regarde si le cookie existe
    if (isset($_COOKIE["langue"])) {
        $langue = $_COOKIE["langue"];
    } else {
        $langue = "";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Langue</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    // message 
    if ($langue == "fr") {
        echo "Bienvenue sur notre site !";
    } elseif ($langue == "en") {
        echo "Welcome to our website !";
    } else {
        echo "Veuillez choisir votre langue / Please choose your language";
    }
    ?>

    <br><br>

    <form method="post">
        <input type="radio" name="langue" value="fr"> Français<br>
        <input type="radio" name="langue" value="en"> Anglais<br><br>
        <input type="submit" value="Valider">
    </form>

</body>

</html>