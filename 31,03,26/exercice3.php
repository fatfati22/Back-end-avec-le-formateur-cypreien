<?php



$produit = [
    "nom" => "ordinateur ",
    "prix" => "800",
    "garantie" => "24",
    "description" => "un ordinateur portable .........."
];



foreach ($produit as $cle => $valeur) {
    echo "<b>" . $cle . ": </b>" . $valeur . "<br>";
}
