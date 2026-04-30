<!-- 

Exercice 12 : Mini-jeu de dés (Tableaux, boucles, rand())

Créez un fichier jeu_de_des.php.

Créez un tableau vide $lancers.
À l’aide d’une boucle for, simulez 10 lancers de dés (un dé à 6 faces). À chaque itération, générez un nombre aléatoire entre 1 et 6 avec rand(1, 6) et ajoutez-le au tableau $lancers.
Affichez les résultats de tous les lancers, séparés par un tiret, sur une même ligne (par exemple : “Lancers : 3 - 5 - 2 - …”).
Calculez et affichez la somme de tous les lancers, ainsi que la moyenne (avec deux décimales).
Comptez et affichez le nombre de fois que le chiffre 6 est sorti.


 -->










<?php

// ********1    tableau vide  pour stoker 
$lancers =array();

// ********2    stimulmer 10 lancers  de dé
for ($tour = 0; $tour < 10; $tour++){


$de = rand(1, 6);// Nombre entre 1 et 6

$lancers[] = $de ; // Ajouter dans le tableau

}

// ********3 Afficher les lancers
echo "Résultas : " ;

for( $i =0 ; $i< count($lancers); $i++) {
    echo $lancers[$i];
    if($i < count($lancers) -1 ){
        echo " - ";
    }
}

// ********4️ Calculer le total

$total = array_sum($lancers);


// ********5️ Calculer la moyenne (2 chiffres après la virgule)


$moyenne = $total / count($lancers);

$moyenne = number_format($moyenne, 20);

// ********6️ Compter combien de fois le 6 apparaît

$nombre_six = 0 ;
for ($i=0; $i < count($lancers); $i++){
    if($lancers[$i] ==6){

    $nombre_six++ ;

    }
}
// ********7️ Afficher les calculs

echo"<br><br>";
echo "Total : ".$total ."<br>";
echo"Moyenne : ".$moyenne."<br>";
echo"Nombre de fois que 6 est sorti : ".$nombre_six;

?>



