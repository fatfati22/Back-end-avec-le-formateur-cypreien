 <!-- exercoice :
 Ecrire un boucle freach pour faire la somme d'un tableau de nombre $nombre = [3,6,8,14,-2,130,-7]; -->

 <?php


    $nombres = [3, 6, 8, 14, -2, 130, -7];

    // commence la somme = 0
    $somme = 0;
    // on faire chaque nombre du tableau et on l'ajoute a la somme


    foreach ($nombres as $nombre) {

        // on ajoute le nombre a la somme

        $somme = $somme + $nombre;
        //  echo $somme . "<br>"; // affiche la somme a chaque fois 
    }

    echo "la somme de tous les nombres est : " . $somme;



    ?>