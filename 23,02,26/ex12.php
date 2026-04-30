<?php
function calculerTTC($prixHT, $tva = 20) {
    $prixTTC = $prixHT * (1 + $tva / 100);
    echo $prixTTC . "<br>";
}

calculerTTC(100);    // Affiche 120 (TVA à 20% par défaut)
calculerTTC(100, 5.5); // Affiche 105.5 (TVA à 5.5%)
?>


<?php
function addition($a, $b) {
    $somme = $a + $b;
    return $somme; // On retourne le résultat
}

$resultatTTC = addition(5, 3); // $resultat contient maintenant 8
echo $resultatTTC; // Affiche 8
?>


<?php
$nomGlobal = "Jean"; // Variable globale

function test() {
    // echo $nomGlobal; // Cela générera une erreur ! La variable n'est pas accessible ici.
    $nomLocal = "Pierre"; // Variable locale
    echo $nomLocal; // Affiche "Pierre"
}

test();
//  echo $nomLocal; // Cela générera aussi une erreur !
?>