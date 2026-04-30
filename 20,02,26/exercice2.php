<?php

$note = 14;

if ($note >= 18) {
    echo "Mention exceptionnelle";
} elseif ($note >= 16) {
    echo "Mention très bien";
} elseif ($note >= 14) {
    echo "Mention bien";
} elseif ($note >= 12) {
    echo "Mention assez bien";
} elseif ($note >= 10) {
    echo "Mention passable";
} else {
    echo "Mention insuffisante";
}

?>
<?php
$jour = "Samedi"; // Vous pouvez changer cette valeur pour tester

if ($jour == "Lundi" || $jour == "Mardi" || $jour == "Mercredi" || $jour == "Jeudi" || $jour == "Vendredi") {
    echo "$jour est un jour de semaine.";
} elseif ($jour == "Samedi" || $jour == "Dimanche") {
    echo "$jour est un jour du week-end.";
} else {
    echo "Jour inconnu.";
}
?>



<?php
// On vérifie d'abord si la donnée 'nom' est bien présente dans $_GET
if (isset($_GET['nom'])&& isset($_GET['nom'])) {
    $nomUtilisateur = $_GET['nom'];
    $message = "Bonjour, " . $nomUtilisateur . " !";
} else {
    // Si le formulaire n'a pas encore été soumis, on n'affiche pas de message
    $message = "sa ne marche pas";
}


?>

<?php
// On vérifie d'abord si la donnée 'prenom' est bien présente dans $_GET
if (isset($_GET['prenom'])&& isset($_GET['prenom'])) {
    $prenomUtilisateur = $_GET['prenom'];
    $nomUtilisateur = $_GET['nom'];
    $message = "Bonjour, " . $prenomUtilisateur  . " " . $nomUtilisateur . " !";
} else {
    // Si le formulaire n'a pas encore été soumis, on n'affiche pas de message
    $message = "sa ne marche pas";
}


?>




<!DOCTYPE html>
<html>
<head>
    <title>Formulaire GET</title>
</head>
<body>
    <h1>Formulaire de salutation</h1>

    <?php
        echo "<p><strong>" . $message . "</strong></p>";
    ?>

    <form method="GET" action="">
        <label for="nom">Votre nom :</label>
        <input type="text" id="nom" name="nom">


        
        <label for="prenom">Votre prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>