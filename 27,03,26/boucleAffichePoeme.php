<?php

$fichier = fopen("poeme.txt", "r");

if ($fichier) {
    while (($ligne = fgets($fichier)) !== false) {
        echo $ligne;
    }

    fclose($fichier);
} else {
    echo "Erreur lors de l'ouverture du fichier.";
}
