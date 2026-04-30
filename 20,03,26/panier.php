<?php
session_start();

// Initialiser panier
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}
var_dump($_SESSION['panier']);

// 🔄 Mettre à jour les quantités
if (isset($_POST['update'])) {
    foreach ($_POST['quantites'] as $nom => $quantite) {
        $quantite = (int)$quantite;

        if ($quantite > 0) {
            $_SESSION['panier'][$nom]['quantite'] = $quantite;
        } else {
            unset($_SESSION['panier'][$nom]);
        }
    }
}

// Vider tout le panier
if (isset($_GET['vider'])) {
    $_SESSION['panier'] = [];
}

// Supprimer un produit
if (isset($_GET['supprimer'])) {
    $nom = $_GET['supprimer'];

    if (isset($_SESSION['panier'][$nom])) {
        unset($_SESSION['panier'][$nom]);
    }
}

$totalGeneral = 0;
$totalArticles = 0;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Panier</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #007BFF;
            color: white;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
        }

        .delete {
            background: red;
        }

        .vider {
            background: #dc3545;
        }

        .retour {
            background: #28a745;
        }

        .update {
            background: #007BFF;
            border: none;
            color: white;
            padding: 8px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="number"] {
            width: 60px;
        }
    </style>
</head>

<body>

    <h2>Mon panier</h2>

    <p>
        Nombre d'articles :
        <?php
        foreach ($_SESSION['panier'] as $item) {
            $totalArticles += $item['quantite'];
        }
        echo $totalArticles;
        ?>
    </p>

    <!-- FORMULAIRE POUR UPDATE -->
    <form method="post">

        <table>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Action</th>
            </tr>

            <?php foreach ($_SESSION['panier'] as $nom => $item):
                $total = $item['prix'] * $item['quantite'];
                $totalGeneral += $total;
            ?>
                <tr>
                    <td><?php echo $nom; ?></td>
                    <td><?php echo $item['prix']; ?> €</td>

                    <!-- ✅ INPUT QUANTITÉ -->
                    <td>
                        <input type="number"
                            name="quantites[<?php echo $nom; ?>]"
                            value="<?php echo $item['quantite']; ?>"
                            min="1">
                    </td>

                    <td><?php echo $total; ?> €</td>

                    <td>
                        <a class="delete" href="?supprimer=<?php echo urlencode($nom); ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>

        <br>
        <!-- ✅ BOUTON UPDATE -->
        <button class="update" type="submit" name="update">Mettre à jour</button>

    </form>

    <h3>Total général : <?php echo $totalGeneral; ?> €</h3>

    <br>
    <a class="vider" href="?vider=1">Vider le panier</a>
    <br><br>
    <a class="retour" href="produits.php">Retour</a>

</body>

</html>