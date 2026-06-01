<?php


// CONNEXION A LA BASE DE DONNEES


// Informations de connexion
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "bibliotheke";


// Connexion MySQL
$connexion = mysqli_connect($servername, $username, $password, $dbname);


// Vérifie la connexion
if (!$connexion) {

    die("Erreur de connexion : " . mysqli_connect_error());
}




// METTRE A JOUR UN AUTEUR



// Vérifie si l'action mettre_a_jour existe
if (isset($_GET['action']) && $_GET['action'] == "mettre_a_jour") {


    // Récupère les données du formulaire
    $id = $_POST['id'];

    $nom = $_POST['nom'];

    $prenom = $_POST['prenom'];

    $date_naissance = $_POST['date_naissance'];

    $nationalite = $_POST['nationalite'];



    // Requête UPDATE
    $sql_update = "UPDATE auteurs
                   SET
                   nom='$nom',
                   prenom='$prenom',
                   date_naissance='$date_naissance',
                   nationalite='$nationalite'
                   WHERE id=$id";



    // Exécute la requête
    mysqli_query($connexion, $sql_update);



    // Redirection vers la page principale
    header("Location: exo4.php");

    exit();
}




// RECUPERER UN AUTEUR A MODIFIER



// Variable vide
$auteur = null;


// Vérifie si on clique sur Modifier
if (isset($_GET['action']) && $_GET['action'] == "modifier") {


    // Récupère l'id dans l'URL
    $id = $_GET['id'];


    // Requête SQL
    $sql_one = "SELECT * FROM auteurs WHERE id=$id";


    // Exécute la requête
    $result_one = mysqli_query($connexion, $sql_one);


    // Transforme le résultat en tableau
    $auteur = mysqli_fetch_assoc($result_one);
}



//
// RECUPERER TOUS LES AUTEURS
//


// Requête SQL
$sql = "SELECT * FROM auteurs";


// Exécute la requête
$result = mysqli_query($connexion, $sql);

?>



<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Exercice 4</title>

</head>

<body>



    <h1>Liste des auteurs</h1>



    <table border="1" cellpadding="10">

        <tr>

            <th>ID</th>

            <th>Nom</th>

            <th>Prénom</th>

            <th>Date naissance</th>

            <th>Nationalité</th>

            <th>Action</th>

        </tr>



        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>

                <td><?= $row['id'] ?></td>

                <td><?= $row['nom'] ?></td>

                <td><?= $row['prenom'] ?></td>

                <td><?= $row['date_naissance'] ?></td>

                <td><?= $row['nationalite'] ?></td>

                <td>

                    <!-- Lien Modifier -->
                    <a href="?action=modifier&id=<?= $row['id'] ?>">

                        Modifier

                    </a>

                </td>

            </tr>

        <?php } ?>

    </table>





    <!--
     FORMULAIRE DE MODIFICATION -->



    <?php if ($auteur != null) { ?>

        <h2>Modifier un auteur</h2>


        <form action="?action=mettre_a_jour" method="POST">


            <!-- Champ caché pour envoyer l'id -->
            <input type="hidden" name="id" value="<?= $auteur['id'] ?>">


            <label>Nom :</label>

            <br>

            <input type="text"
                name="nom"
                value="<?= $auteur['nom'] ?>">

            <br><br>



            <label>Prénom :</label>

            <br>

            <input type="text"
                name="prenom"
                value="<?= $auteur['prenom'] ?>">

            <br><br>



            <label>Date de naissance :</label>

            <br>

            <input type="date"
                name="date_naissance"
                value="<?= $auteur['date_naissance'] ?>">

            <br><br>



            <label>Nationalité :</label>

            <br>

            <input type="text"
                name="nationalite"
                value="<?= $auteur['nationalite'] ?>">

            <br><br>



            <button type="submit">

                Mettre à jour

            </button>

        </form>

    <?php } ?>



</body>

</html>



<?php

// Ferme la connexion
mysqli_close($connexion);

?>