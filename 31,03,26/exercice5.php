<?php





function afficheProduits($produits)
{


    foreach ($produits as $produit) {



        echo " <strong>Produit : </strong><br>";

        foreach ($produit as $cle => $valeur) {



            echo $cle . ": " . $valeur . "<br>";
        }



        echo "<br>";
    }
}


$produits = [
    ["nom" => "Stylo", "prix" => 2],
    ["nom" => "Cahier", "prix" => 5],
    ["nom" => "Gomme", "prix" => 1],
    ["nom" => "Règle", "prix" => 3]
];


afficheProduits($produits);
