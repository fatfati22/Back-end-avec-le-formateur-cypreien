<!-- Exercice 8 : Calculateur d’âge (PHP de base, conditions)

Créez un fichier age.php.

Définissez trois variable : $annee_naissance, $mois_naissance, $jour_naissance et donnez-leur des valeurs (par exemple : 1994, 6, 24).
Définissez trois autres variable pour stocker le date actuelle.
À l’aide de structures conditionnelles, affichez un message différent si la personne est majeure ou mineure. -->



<?php

// Date de naissance
$annee_naissance = 2025;
$mois_naissance = 6;
$jour_naissance = 24;

// Date actuelle
$annee_actuelle = date("Y");
$mois_actuel = date("m");
$jour_actuel = date("d");

// Calcul de l'âge
$age = $annee_actuelle - $annee_naissance;

// Vérification si l'anniversaire est déjà passé cette année
if ($mois_actuel < $mois_naissance) {
    $age--;
} elseif ($mois_actuel == $mois_naissance && $jour_actuel < $jour_naissance) {
    $age--;
}

// Condition majorité
if ($age >= 18) {
    echo "Vous avez $age ans. Vous êtes majeur vacciné.";
} else {
    echo "Vous avez $age ans. Vous êtes mineur pas vacciné.";
}

?>

