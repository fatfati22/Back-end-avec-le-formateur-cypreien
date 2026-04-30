<?php
// Tableau $produits identique à l'exercice 3
$produits = [
    [
        "nom" => "Ordinateur portable",
        "prix" => 899.99,
        "description" => "Un ordinateur puissant pour le travail et les loisirs."
    ],
    [
        "nom" => "Souris sans fil",
        "prix" => 19.99,
        "description" => "Ergonomique et précise, avec une longue autonomie."
    ],
    [
        "nom" => "Clavier mécanique",
        "prix" => 89.50,
        "description" => "Idéal pour la saisie et les jeux vidéo."
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Notre catalogue</title>
</head>
<body>
    <h1>Catalogue</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix (€)</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produits as $produit) : ?>
            <tr>
                <td><?= $produit["nom"] ?></td>
                <td><?= $produit["prix"] ?></td>
                <td><?= $produit["description"] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>