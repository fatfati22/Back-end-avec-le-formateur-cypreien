<?php
session_start();

// Initialiser le panier
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Liste des produits avec ID
$produits = [
    1 => ["nom" => "Ordinateur portable", "prix" => 899.99],
    2 => ["nom" => "Souris sans fil", "prix" => 19.99],
    3 => ["nom" => "Clavier mécanique", "prix" => 89.50],
    4 => ["nom" => "Enceinte Bluetooth", "prix" => 45.00]
];

// Ajouter au panier
if (isset($_GET['ajouter'])) {
    $id = (int) $_GET['ajouter'];

    if (isset($produits[$id])) {

        if (isset($_SESSION['panier'][$id])) {
            $_SESSION['panier'][$id]['quantite']++;
        } else {
            $_SESSION['panier'][$id] = [
                'nom' => $produits[$id]['nom'],
                'prix' => $produits[$id]['prix'],
                'quantite' => 1
            ];
        }
    } else {
        die("Produit invalide !");
    }
}

// Compter les articles
$totalArticles = 0;
foreach ($_SESSION['panier'] as $item) {
    $totalArticles += $item['quantite'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Produits</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            padding: 20px;
        }

        li {
            background: white;
            margin: 10px 0;
            padding: 10px;
            border-radius: 8px;
        }

        a {
            text-decoration: none;
            color: white;
            background: #007BFF;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <h2>Produits</h2>
    <p>Panier (<?php echo $totalArticles; ?> articles)</p>

    <ul>
        <?php foreach ($produits as $id => $produit): ?>
            <li>
                <?php echo $produit['nom'] . " - " . $produit['prix'] . " €"; ?>
                <a href="?ajouter=<?php echo $id; ?>">Ajouter</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <br>
    <a href="panier.php">Voir le panier</a>

</body>

</html>