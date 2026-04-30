<?php


$nomFichier = "test.txt";

// Ouvrir le fichier en mode ajout ("a")
$fichier = fopen("ligne.txt", "a");
fwrite($fichier, "ligne.txt");
fclose($fichier);

// Ouvrir le fichier en mode lecture ("r")
$fichier = fopen($nomFichier, "r");

// Lire et afficher tout le contenu
echo fread($fichier, filesize($nomFichier));

fclose($fichier);
