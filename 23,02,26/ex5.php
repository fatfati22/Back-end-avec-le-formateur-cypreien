<!-- Exercice 5 : Mini-catalogue de produits

Créez un fichier catalogue.php. Dans ce fichier, créez un tableau multidimensionnel $produits contenant au moins 3 produits. Chaque produit doit avoir un nom, un prix et une description. Affichez ensuite ce catalogue dans une page HTML sous forme de liste (par exemple, une liste <ul>).


 -->



 <?php
// Création du tableau multidimensionnel des produits
$produits = [
    [
        "nom" => "Ordinateur portable",
        "prix" => 899.99,
        "description" => "Ordinateur portable 15 pouces avec 16Go de RAM et SSD 512Go."
    ],
    [
        "nom" => "Smartphone",
        "prix" => 499.90,
        "description" => "Smartphone 128Go avec écran OLED et double caméra."
    ],
    [
        "nom" => "Casque Bluetooth",
        "prix" => 79.99,
        "description" => "Casque sans fil avec réduction de bruit active."
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catalogue de produits</title>
</head>
<body>

<h1>Catalogue de produits</h1>

<ul>
    <?php foreach ($produits as $produit): ?>
        <li>
            <strong><?php echo $produit["nom"]; ?></strong><br>
            Prix : <?php echo number_format($produit["prix"], 2, ',', ' '); ?> €<br>
            Description : <?php echo $produit["description"]; ?>
        </li>
        <br>
    <?php endforeach; ?>
</ul>

</body>
</html>





<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Catalogue - Tableau</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Catalogue des produits (Tableau)</h2>

<table>
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Description</th>
    </tr>

    <?php foreach ($produits as $produit): ?>
    <tr>
        <td><?php echo $produit["nom"]; ?></td>
        <td><?php echo $produit["prix"]; ?> €</td>
        <td><?php echo $produit["description"]; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>