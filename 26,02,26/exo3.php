<?php
$taux = 0.85;

$resultat = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["montant"]) && is_numeric($_POST["montant"])) {

        $montant = $_POST["montant"];

        if ($_POST["type"] == "dollars") {
            $resultat = $montant * $taux;
            $message = "$montant dollars = " . round($resultat, 2) . " euros";
        } else {
            $resultat = $montant / $taux;
            $message = "$montant euros = " . round($resultat, 2) . " dollars";
        }

    } else {
        $message = "Montant invalide";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Convertisseur</title>
</head>
<body>

<h2>Convertisseur Dollars / Euros</h2>

<form method="POST">
    <input type="number" step="0.01" name="montant" required>

    <select name="type">
        <option value="dollars">Dollars → Euros</option>
        <option value="euros">Euros → Dollars</option>
    </select>

    <button type="submit">Convertir</button>
</form>

<p style=" font-size: 26px;color: green; font-weight: bold;"><?php echo $message; ?></p>

</body>
</html>