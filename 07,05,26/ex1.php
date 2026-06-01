<?php

$servername = "localhost";


$username = "root";

$password = "admin";

$dbname = "bibliotheke";



// Connection à la database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// On vérifie si la connection a fonctionné 
// sinon on affiche le message d'erreur
if (!$conn) {
    exit("Échec de la connection: " . mysqli_connect_error());
}



$sql_query = "insert into auteurs (nom,prenom,date_naissance,nationalite) values('boudabbous', 'fatma','2000-06-09','tunisienne')";

$result  = mysqli_query($conn, $sql_query);


if ($result) {
    echo "Insertion réussie";
} else {
    echo "Erreur d'insertion: " . mysqli_error($conn);
}
