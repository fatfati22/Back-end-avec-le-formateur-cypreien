<?php

// 1️⃣ Tableau des produits
$produits = array(
    array("nom" => "Ordinateur", "prix" => 800),
    array("nom" => "Souris", "prix" => 20),
    array("nom" => "Clavier", "prix" => 50),
    array("nom" => "Ecran", "prix" => 200)
);

// 2️⃣ On prépare la variable recherche
$mot = "";

// 3️⃣ Si on a écrit quelque chose dans le formulaire
if (isset($_GET["recherche"])) {
    $mot = trim($_GET["recherche"]); // enlève les espaces
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

<!-- 4️⃣ Formulaire -->
<form method="GET">
    <input type="text" name="recherche" placeholder="Rechercher">
    <button type="submit">Filtrer</button>
</form>

<br>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prix</th>
    </tr>

<?php

$trouve = false; // pour savoir si on trouve un produit

// 5️⃣ On regarde chaque produit
foreach ($produits as $produit) {

    // Si le champ est vide → on affiche tout
    // OU si le nom contient le mot recherché
    if ($mot == "" || stripos($produit["nom"], $mot) !== false) {

        echo "<tr>";
        echo "<td>" . $produit["nom"] . "</td>";
        echo "<td>" . $produit["prix"] . " €</td>";
        echo "</tr>";

        $trouve = true; // on a trouvé au moins un produit
    }
}

// 6️⃣ Si aucun produit trouvé
if ($trouve == false) {
    echo "<tr><td colspan='2'>Aucun produit trouvé</td></tr>";
}

?>

</table>

</body>
</html>