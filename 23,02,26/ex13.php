<!-- Exercice 7 : Refactoriser le catalogue avec des fonctions

Reprenez le code de l’exercice 6. Créez les fonctions suivantes :

function afficherTableauProduits($produits) : Cette fonction prend le tableau de produits en paramètre et génère et affiche le code HTML du tableau (les balises <table>, <thead>, <tbody> et le contenu). Le bloc principal devient alors très simple : il définit les produits, puis appelle afficherTableauProduits($produits);. -->




<?php

// ===============================
// Données (catalogue)
// ===============================
$produits = [
    [
        "nom" => "Ordinateur portable",
        "prix" => 899.99,
        "description" => "Ordinateur 15 pouces, 16Go RAM, SSD 512Go"
    ],
    [
        "nom" => "Souris sans fil",
        "prix" => 24.90,
        "description" => "Souris ergonomique Bluetooth"
    ],
    [
        "nom" => "Clavier mécanique",
        "prix" => 79.50,
        "description" => "Clavier rétroéclairé switches mécaniques"
    ]
];


// ===============================
// Fonction d'affichage
// ===============================
function afficherTableauProduits($produits)
{
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Prix</th>";
    echo "<th>Description</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";

    foreach ($produits as $produit) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($produit["nom"]) . "</td>";
        echo "<td>" . number_format($produit["prix"], 2, ',', ' ') . " €</td>";
        echo "<td>" . htmlspecialchars($produit["description"]) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Catalogue</title>
</head>
<body>

<h2>Catalogue des produits</h2>

<?php
// ===============================
// Appel de la fonction
// ===============================
afficherTableauProduits($produits);
?>

</body>
</html>