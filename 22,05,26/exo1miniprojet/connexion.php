<?php


// FICHIER : connexion_utilisateur.php



// Démarre une session
// Cela permet de garder l'utilisateur connecté
session_start();


// Inclut le fichier de connexion à la base de données
require_once(__DIR__ . '/connexion_bdd.php');

// Vérifie si le formulaire a été envoyé avec la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // RÉCUPÉRATION DES DONNÉES DU FORMULAIRE



    // Récupère le login écrit par l'utilisateur
    $login = $_POST['login'];


    // Récupère le mot de passe écrit par l'utilisateur
    $mdp_saisi = $_POST['mot_de_passe'];




    // REQUÊTE SQL



    // Cherche un utilisateur avec le login donné
    $sql = "SELECT id, login, mot_de_passe
            FROM utilisateurs
            WHERE login = ?";



    // Prépare la requête SQL
    // Cela protège contre les injections SQL
    $stmt = mysqli_prepare($conn, $sql);



    // Remplace le ? par la valeur du login
    mysqli_stmt_bind_param($stmt, "s", $login);



    // Exécute la requête SQL
    mysqli_stmt_execute($stmt);



    // Récupère le résultat de la requête
    $result = mysqli_stmt_get_result($stmt);




    // VÉRIFICATION DE L'UTILISATEUR



    // Vérifie si un utilisateur existe
    if (mysqli_num_rows($result) == 1) {

        // Transforme les données en tableau
        $utilisateur = mysqli_fetch_assoc($result);



        // Vérifie si le mot de passe est correct
        // password_verify compare le mot de passe saisi
        // avec le mot de passe enregistré dans la base
        if (password_verify($mdp_saisi, $utilisateur['mot_de_passe'])) {



            // CRÉATION DES VARIABLES DE SESSION



            // Stocke l'id de l'utilisateur
            $_SESSION['utilisateur_id'] = $utilisateur['id'];


            // Stocke le login de l'utilisateur
            $_SESSION['utilisateur_login'] = $utilisateur['login'];




            // REDIRECTION



            // Envoie l'utilisateur vers bienvenue.php
            header("Location: bienvenue.php");


            // Stoppe le programme
            exit();
        } else {

            // Si le mot de passe est faux
            echo "Mot de passe incorrect.";
        }
    } else {

        // Si aucun login trouvé
        echo "Login inconnu.";
    }




    // FERMETURE DE LA REQUÊTE



    mysqli_stmt_close($stmt);
}




// FERMETURE DE LA CONNEXION



mysqli_close($conn);
