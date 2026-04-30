<!-- Exercice 15 : Jeu du ‘plus ou moins’
Créez un fichier plusmoins.php.

On va programmer le jeu du ‘plus ou moins’. Le principe de ce peux est de deviner un nombre entre 0 et 100. À chaque tentative on nous dit si le nombre à deviner est supérieur ou inférieur à notre proposition.

Exemple de partie :

[ Le nombre choisi est 46 ]
Utilisateur.ice : 64 ?
PHP : C’est moins.
Utilisateur.ice : 25 ?
PHP : C’est plus.
Utilisateur.ice : 47 ?
PHP : C’est moins.
Utilisateur.ice : 46 ?
PHP : C’est gagné ! -->



<?php

// Le nombre à deviner (entre 0 et 100)
$nombre = rand(0, 100);

// Exemples de propositions de l'utilisateur
$propositions = [64, 25, 47, 46];

// Boucle pour tester chaque proposition
for ($i = 0; $i < count($propositions); $i++) {

    $essai = $propositions[$i];

    echo "Utilisateur : $essai ? <br>";

    if ($essai > $nombre) {
        echo "PHP : C'est moins.<br>";
    } elseif ($essai < $nombre) {
        echo "PHP : C'est plus.<br>";
    } else {
        echo "PHP : C'est gagné !<br>";
        break; // on arrête le jeu si on a trouvé
    }
}

?>