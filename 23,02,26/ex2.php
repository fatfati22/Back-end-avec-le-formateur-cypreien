<?php
    // Création d'un tableau associatif
    $personne = [
        "prenom" => "Chris",
        "nom" => "lora",
        "age" => 93,    
        "profession" => "monteuse"
    ];

    // Accès aux éléments via la clé
    echo $personne["prenom"] . "<br>"; // Affiche "Christopher"
    echo $personne["nom"] . "<br>";    // Affiche "Lee"
    echo $personne["age"] . "<br>";    // Affiche 93
    echo $personne["profession"] . "<br>"; // Affiche "acteur"

    // $_GET et $_POST sont des tableaux associatifs !
    // $_GET['nom'] récupère la valeur associée à la clé 'nom'.
?>