é<!-- Exercice 13 : Filtrer un catalogue (GET, tableaux multidimensionnels, foreach)
Reprenez le tableau $produits de l’exercice 5. Créez un fichier catalogue_filtre.php.

Affichez le catalogue dans un tableau HTML (comme à l’exercice 6).
Ajoutez un formulaire GET contenant un champ de texte nom="recherche" et un bouton “Filtrer”.
Lorsque le formulaire est soumis, récupérez le terme de recherche.
Au lieu d’afficher tous les produits, parcourez le tableau $produits et n’affichez que ceux dont le nom contient le terme de recherche (peu importe la casse).
Si le champ de recherche est vide ou si le formulaire n’a pas été soumis, affichez tous les produits.
Affichez un message si aucun produit ne correspond à la recherche.
Indice : Utilisez stripos($produit['nom'], $terme_recherche) pour une recherche insensible à la casse. -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Catalogue produits</title>
</head>

<body>

    <h2>Catalogue des produits</h2>

    <form method="get">
        Rechercher un produit :
        <input type="text" name="recherche">
        <button type="submit">Filtrer</button>
    </form>

    <?php

    // Tableau des produits avec description
    $produits = [
        ["nom" => "Ordinateur", "prix" => 900, "description" => "Ordinateur portable puissant"],
        ["nom" => "Souris", "prix" => 25, "description" => "Souris sans fil"],
        ["nom" => "Clavier", "prix" => 45, "description" => "Clavier mécanique"],
        ["nom" => "Ecran", "prix" => 200, "description" => "Ecran 24 pouces"],
        ["nom" => "Casque", "prix" => 60, "description" => "Casque audio avec micro"]
    ];

    $terme_recherche = "";

    if (isset($_GET["recherche"])) {
        $terme_recherche = $_GET["recherche"];
    }

    $trouve = false;

    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Description</th><th>Prix</th></tr>";

    foreach ($produits as $produit) {

        if ($terme_recherche == "" || stripos($produit["nom"], $terme_recherche) !== false) {

            echo "<tr>";
            echo "<td>" . $produit["nom"] . "</td>";
            echo "<td>" . $produit["description"] . "</td>";
            echo "<td>" . $produit["prix"] . " €</td>";
            echo "</tr>";

            $trouve = true;
        }
    }

    echo "</table>";

    if (!$trouve) {
        echo "<p>Aucun produit ne correspond à votre recherche.</p>";
    }

    ?>

</body>

</html>