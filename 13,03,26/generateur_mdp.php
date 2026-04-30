<!-- Exercice 14 : Générateur de mot de passe simple (Fonctions, boucles, manipulation de chaînes)
Créez un fichier generateur_mdp.php.

Créez une fonction genererMotDePasse($longueur = 8) qui :
Définit une chaîne de caractères contenant tous les caractères possibles.
Initialise une variable $mot_de_passe vide.
À l’aide d’une boucle for qui tourne $longueur fois, choisit à chaque itération un caractère aléatoire de la chaîne de caractères possible (utilisez rand(0, strlen($caracteres)-1) pour l’index) et l’ajoute à $mot_de_passe.
Retourne le mot de passe généré.
Dans la partie principale du script, utilisez cette fonction pour générer et afficher 5 mots de passe de longueur 10, chacun sur une nouvelle ligne.
Correction de l’exercice 14 -->



<?php

// Fonction pour générer un mot de passe
function genererMotDePasse($longueur = 8)
{

    // Tous les caractères possibles
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    // Variable vide pour stocker le mot de passe
    $mot_de_passe = "";

    // Boucle qui s'exécute $longueur fois
    for ($i = 0; $i < $longueur; $i++) {

        // Choisir un caractère aléatoire
        $index = rand(0, strlen($caracteres) - 1);

        // Ajouter ce caractère au mot de passe
        $mot_de_passe .= $caracteres[$index];
    }

    // Retourner le mot de passe
    return $mot_de_passe;
}


// Partie principale du script
// Générer et afficher 5 mots de passe de longueur 10

for ($i = 0; $i < 5; $i++) {
    echo genererMotDePasse(10) . "<br>";
}

?>