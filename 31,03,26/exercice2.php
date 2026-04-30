<!-- ecrire un fonction php qui prend en parametre un tableau de nombres et qui donne la somme de ces nombre en resultat de la somme de tableau -->


<?php



function sommeTableau($tableau)
{


    $some = 0;
    foreach ($tableau as $nombre) {

        $some = $some + $nombre;
    }
    return $some;
}

// exemple d'utilisation de la fonction;
$tableau = [5, 66, 80, 140, -205, 1300, -100];

foreach ($tableau as $n) {
    echo $n . " ";
}


echo "<br>";
$resultat = sommeTableau($tableau);
echo "le resultat de la somme de tableau fait avec la fonction someTableau est " . $resultat;
























?>