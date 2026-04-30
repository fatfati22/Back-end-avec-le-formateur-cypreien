<!-- afficher un tableau suivant a laide de deux boucle foreach imbriquées : $produits = [["nom=> "ordinateur ", "prix" => 800 , "garantie" 24],[ "nom" => " souris", "prix" => 20 , "garantie" => 2   ], ["nom" => "clavier" , "prix" = 35, "garantie" => 12]]    -->






<?php

$produits = [
    ["nom" => "ordinateur", "prix" => 800, "garantie" => 24],
    ["nom" => "souris", "prix" => 20, "garantie" => 2],
    ["nom" => "clavier", "prix" => 35, "garantie" => 12]
];

foreach ($produits as $produit) {

    echo "<strong>Produit:</strong><br>";

    foreach ($produit as $cle => $valeur) {

        echo $cle . ":" . $valeur . "<br>";
    }



    echo "<br>";
}












?>