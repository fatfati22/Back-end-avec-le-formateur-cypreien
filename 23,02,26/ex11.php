<?php
function direBonjour() {
    echo "Bonjour !";
}

// Pour utiliser (appeler) la fonction :
direBonjour(); // Affiche "Bonjour !"
?>






<?php
function saluer($nom) {
    echo "Bonjour, " . $nom . " !" . "<br>";
}

saluer("Ana María Simo"); // Affiche "Bonjour, Ana María Simo !"
saluer("Sarah Schulman"); // Affiche "Bonjour, Sarah Schulman !"
?>



<?php
function calculerTTC($prixHT, $tva = 20) {
    $prixTTC = $prixHT * (1 + $tva / 100);
    echo $prixTTC . "<br>";
}

calculerTTC(100);    // Affiche 120 (TVA à 20% par défaut)
calculerTTC(100, 5.5); // Affiche 105.5 (TVA à 5.5%)
?>



<?php
function direBonjoura( $nom1 , $nom2 ) {
    echo "Bonjour ".$nom1 . " et " . $nom2 . " ! <br>";
}

// Pour utiliser (appeler) la fonction :
direBonjoura("Fatma", "Valerian"); // Affiche "Bonjour !"
direBonjoura("Abbes", "Philippe"); // Affiche "Bonjour !"
direBonjoura("Paul", "Adrien"); // Affiche "Bonjour !"
direBonjoura("Adama", "Soumaya"); // Affiche "Bonjour !"
?>