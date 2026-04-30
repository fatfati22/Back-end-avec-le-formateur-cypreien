<?php
    // Un tableau de personnes
    $personnes = [
        [
            "prenom" => "Ludwig",
            "nom" => "Wittgenstein",
            "age" => 32
        ],
        [
            "prenom" => "Gottlob",
            "nom" => "Frege",
            "age" => 48
        ],
        [
            "prenom" => "Bertrand",
            "nom" => "Russell",
            "age" => 42
        ]
    ];

    // Accès à la donnée "nom" de la deuxième personne (Gottlob)
    echo $personnes[1]["nom"]; // Affiche "Frege"
    echo "<br>";
    echo $personnes[1]["age"]."<br>"; // Affiche "48"
    echo"<br>";
    print_r($personnes); // Affiche le contenu du tableau pour le débogage
    $personnes[] = [
        "prenom" => "Alfred",
        "nom" => "Tarski",
        "age" => 56,
        "profession" => "mathématicien"
    ];
      print_r($personnes); // Affiche le contenu du tableau pour le débogage
      array_splice($personnes, 3, 0, [
        [
            "prenom" => "Gotfffffftlob",
            "nom" => "Freeeeeege",
            "age" => 49
        ]]); // Insère une nouvelle personne à l'index 3
        
        echo "<br>";
        echo "<br>";
        print_r($personnes); // Affiche le contenu du tableau pour le débogage
        
?>