<?php
    // Création d'un tableau indexé
    $fruits = ["pomme", "banane", "cerise"];
    // Ancienne syntaxe (encore valide) : $fruits = array("pomme", "banane", "cerise");

    // Accès aux éléments
    echo $fruits[0] . "<br>"; // Affiche "pomme"
    echo $fruits[1]="bananes" . "<br>"; // Affiche "banane"
    echo $fruits[2] . "<br>"; // Affiche "cerise"

    // Ajouter un élément à la fin
    $fruits[] = "climentine";
    print_r($fruits); // Affiche le contenu du tableau pour le débogage

echo"<br>";
echo"<br>";
    var_dump($fruits); // Affiche des informations détaillées sur le tableau


       print_r($fruits); // Affiche le contenu du tableau pour le débogage
?>