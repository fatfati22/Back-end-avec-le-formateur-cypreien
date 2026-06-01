<!-- 


Créez un fichier exercice1.php
Dans le code PHP, connectez-vous à la base bibliotheque (serveur : localhost, utilisateur : root, mot de passe : ""). On utilisera la fonction mysqli_connect.
Écrivez une requête SQL pour récupérer tous les champs de la table Usagers
Affichez les résultats dans un tableau HTML avec les colonnes : ID, Nom, Prénom, Mail
Fermez la connexion
Résultat attendu : Un tableau HTML listant les 5 usagers de la bibliothèque.
 -->




<?php


//echo "heloo fati";//test



// connexion a la base de donne 


$connexion = mysqli_connect("localhost", "root", "admin", "bibliotheke");


// verifier la connexion


if (!$connexion) {
    die("erreur de connexion : " . mysqli_connect_error());
} else {
    // requete sql 

    $sql = "select * from usager";

    // execution de la requete 
    $resultat = mysqli_query($connexion, $sql);
}
echo mysqli_num_rows($resultat) . "usagers trouvées";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des usager</title>


    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }


        th,
        td {

            border: 1px solid black;
            padding: 1px;
            text-align: center;
        }

        th {
            background-color: #dddddd;
        }
    </style>
</head>

<body>


    <table>

        <tr>

            <th>id</th>
            <th>nom</th>
            <th>prénom</th>
            <th>mail</th>

        </tr>


        <!-- afficher les résultats de la reqqueete -->
        <?php

        while ($ligne = mysqli_fetch_assoc($resultat)) {




            // si il un peu de champs on peu faire comme sa 
            // echo "<tr> ";
            // echo "<td>" . $ligne['id'] . "</td> ";
            // echo "<td>" . $ligne['nom'] . "</td> ";
            // echo "<td>" . $ligne['prenom'] . "</td> ";
            // echo "<td>" . $ligne['mail'] . "</td> ";
            // echo "</tr> ";



            foreach ($ligne as $valeur) {
                echo "<td>" . $valeur . "</td>";
            }
        }


        ?>

    </table>

</body>

</html>





<?php
// fermer la connexion
mysqli_close($connexion)

?>