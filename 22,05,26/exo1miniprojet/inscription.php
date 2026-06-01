<?php

// On importe le fichier de connexion à la base de données
require_once __DIR__ . '/connexion_bdd.php';

// Affiche la connexion (utile pour tester si la connexion fonctionne)
var_dump($conn);

// Vérifie si le formulaire a été envoyé en POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupère le login envoyé par le formulaire
    $login = $_POST['login'];

    // Récupère l'email envoyé par le formulaire
    $email = $_POST['email'];

    // Récupère le mot de passe envoyé par le formulaire
    $mot_de_passe = $_POST['mot_de_passe'];

    // Transforme le mot de passe en version sécurisée (hachage)
    // On ne stocke jamais le mot de passe en clair dans la base de données
    $hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    // Requête SQL pour ajouter un utilisateur dans la base de données
    $sql = "INSERT INTO utilisateurs (login, mot_de_passe, email)
            VALUES (?, ?, ?)";

    // Prépare la requête (sécurité contre les injections SQL)
    $stmt = mysqli_prepare($conn, $sql);

    // Vérifie si la requête a bien été préparée
    if ($stmt) {

        // Remplace les "?" par les vraies valeurs
        mysqli_stmt_bind_param($stmt, "sss", $login, $hash, $email);

        // Exécute la requête
        if (mysqli_stmt_execute($stmt)) {

            // Si succès : message de réussite
            echo "Inscription réussie !";

            // Lien vers la page de connexion
            echo "<br><a href='connexion.html'>Connexion</a>";
        } else {

            // Si erreur lors de l'insertion dans la base
            echo "Erreur insertion : " . mysqli_error($conn);
        }

        // Ferme la requête préparée
        mysqli_stmt_close($stmt);
    } else {

        // Si la requête n'a pas pu être préparée
        echo "Erreur préparation requête.";
    }
}

// Ferme la connexion à la base de données
mysqli_close($conn);
