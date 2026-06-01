<!-- Connectez-vous à la base bibliotheque
Récupérez tous les livres (titre, date_impression, nb_pages) dont le nombre de pages est supérieur à 100
Affichez les résultats sous forme de liste HTML
Gérez le cas où aucun livre ne correspond au critère avec un message approprié -->






<?php

function creer_liste_livre($resultat) {}



// tester qui marche 

// echo "hellooo fatiii";


$connexion = mysqli_connect("localhost", "root", "admin", "bibliotheke");

if (!$connexion) {

    die("erreur de connexion:" . mysqli_connect_error());
} else {

    $sql = "SELECT titre, date_impression,nbr_pages FROM livre WHERE nbr_pages > 100";

    $resultat = mysqli_query($connexion, $sql);
}




if (mysqli_num_rows($resultat) > 0) {

    $str_liste =  "<ul>";

    while ($row = mysqli_fetch_assoc($resultat)) {

        foreach ($row as $valeur) {
            $str_liste .= "<li>" . $valeur . "</li>";
        }
    }
    $str_liste .=  "</ul>";
} else {

    $str_liste = "<p>Auccun livre ne correspond au critiere.</p>";

    // fermer la connexion 

    mysqli_close($connexion);


    $str_liste = "";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <H1>liste des livres </H1>



    <?= $str_liste ?>



</body>

</html>