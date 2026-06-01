<!-- Créez un fichier exercice3.php
Connectez-vous à la base bibliotheque
Insérez un nouvel auteur dans la table Auteurs avec les informations suivantes :
Nom : “Céline”
Prénom : "Louis-Ferdinand
Date de naissance : “1894-05-27”
Nationalité : “Française”
Vérifiez si l’insertion a réussi et affichez un message approprié
Insérez un nouveau livre dans la table Livres avec les informations suivantes :
Titre : “Voyage au bout de la nuit”
Date d’impression : “1991-06-15”
Nombre de pages : 625
Catégorie : 1 (Roman)
ID Auteur : mettre l’id de l’auteur céline
Vérifiez si l’insertion a réussi et affichez un message approprié
Gérez le cas où le livre existerait déjà (vérification par titre) -->



<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "bibliotheke";

$connection = mysqli_connect($servername, $username, $password, $dbname);
