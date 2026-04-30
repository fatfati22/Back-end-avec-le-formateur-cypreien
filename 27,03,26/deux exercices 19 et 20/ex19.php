<?php
$fichier = "poeme.txt";

if (file_exists($fichier)) {
    $contenu = file_get_contents($fichier);

    // nl2br convertit les sauts de ligne en <br>
    echo nl2br($contenu);
} else {
    echo "Le fichier n'existe pas.";
}
