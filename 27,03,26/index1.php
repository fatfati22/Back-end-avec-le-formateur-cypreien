<?php



$nomFichier = "f.txt";

if (file_exists($nomFichier)) {



    $fichier = fopen($nomFichier, "r");

    if ($fichier) {


        echo fgets($fichier) . "<br>";
        echo fgets($fichier) . "<br>"; // sa si on le met 1 il affiche la premiere ligne et si 2 sa affiche 2 ligne  la il mer deux ligne 

        fclose($fichier);
    } else {
        echo "retour lecteur fichier. ";
    }
} else {
    echo "le fichier n'existe pas ";
}
