<?php
    $fruits = ["pomme", "banane", "cerise"];

    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }






    echo "<br>"."<br>";
    // Avec un tableau associatif, on peut aussi récupérer la clé
    $personne = ["prenom" => "Wendy", "nom" => "Carlos", "age" => 29];

    foreach ($personne as $clef => $valeur) :
        echo $clef . " : " . $valeur . "<br>";
    endforeach;
?>