<?php
$nomFichier = "poeme.txt";
$fichier = fopen($nomFichier, "r");
$taille = filesize($nomFichier);
$contenu = fread($fichier, floor($taille / 2));

echo nl2br($contenu);
echo "<br><br><br><br><br><b> c'est le milieu . taille du text : </b>" . $taille . "<br><br>";
$contenu = fread($fichier, floor($taille / 2));
echo nl2br($contenu);

fclose($fichier);
