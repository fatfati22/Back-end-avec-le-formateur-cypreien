<?php

// Démarre ou reprend la session existante
session_start();

// Supprime toutes les variables de session (ex : id utilisateur, login)
session_unset();

// Détruit complètement la session (ferme la connexion de l’utilisateur)
session_destroy();

// Redirige l’utilisateur vers la page de connexion
header('Location: connexion.html');

// Arrête le script pour éviter d’exécuter autre chose
exit();
