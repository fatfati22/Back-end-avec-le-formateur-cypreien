<!-- Exercice 9 : Analyseur de chaîne (Fonctions string, conditions)

Créez un fichier analyse_phrase.php.

Définissez une variable $phrase avec une phrase de votre choix (par exemple, “Bonjour tout le monde”).
Affichez un message différent si la phrase contient le mot “bonjour” ou non (peu importe la casse)." -->








<?php 
$phrase = "BONJOUR tout le monde";

echo "phrase originale :". $phrase . "<br>";

if (stripos($phrase, "bonjour")!== false){
    echo"la phrases contient le mot 'bonjour'";}else{
        echo"la phrase ne contient pas le mot 'bonjour'";
    }
?>