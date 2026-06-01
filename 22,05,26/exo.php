<?php

function sql_to_array($query_result)
{
    $array_results = [];
    while ($row = mysqli_fetch_assoc($query_result)) {
        $array_results[] = $row;
    }
    return $array_results;
}


function array_to_html_table($array)
{
    if (sizeof($array) === 0) {
        return  "Tableau vide";
    }

    $str_tableau =  "<table border='1'><thead><tr>";
    $first_elt = $array[0];
    foreach ($first_elt as $key => $value) {
        $str_tableau .= "<th>" . ucfirst($key) . "</th>";
    }
    $str_tableau .= "<th>Action</th>";
    $str_tableau .= "</tr></thead>";

    $str_tableau .= "<tbody>";
    foreach ($array as $row) {
        $str_tableau .= "<tr>";
        foreach ($row as $key => $value) {
            $str_tableau .= "<td>" . $value . "</td>";
        }
        $str_tableau .= "<td><a href='?action=modifier&id=" . $row["id"] . "'>Modifier</a></td>";
        $str_tableau .= "</tr>";
    }
    $str_tableau .= "</tbody></table>";

    return $str_tableau;
}


$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "bibliotheke";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    exit("Échec de la connexion : " . mysqli_connect_error());
}

$msg_modification_result = "";
if (isset($_GET['action']) && $_GET['action'] === 'mettre_a_jour' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $nationalite = $_POST['nationalite'];

    $sql_update = "UPDATE Auteurs
    SET nom = ?,
    prenom = ?,
    date_naissance = ?,
    nationalite = ?
    WHERE id = ?";

    $statement = mysqli_prepare($connection, $sql_update);
    mysqli_stmt_bind_param($statement, "ssssi", $nom, $prenom, $date_naissance, $nationalite, $id);
    if (mysqli_stmt_execute($statement)) {
        $msg_mofication =  "Auteur mis à jour avec succès !";
    } else {
        $msg_mofication = "Erreur : " . mysqli_error($connection);
    }
}


$msg_modif_auteur = "";
if (isset($_GET['action']) && $_GET['action'] === 'modifier' && isset($_GET['id'])) {
    $id_auteur = $_GET['id'];
    //requête préparée
    $sql_auteur = "SELECT * FROM Auteurs WHERE id = ?";

    $statement = mysqli_prepare($connection, $sql_auteur);
    mysqli_stmt_bind_param($statement, "i", $id_auteur);
    mysqli_stmt_execute($statement);
    $result_auteur = mysqli_stmt_get_result($statement);

    //$result_auteur = mysqli_query($connection, $sql_auteur);

    $auteur = mysqli_fetch_assoc($result_auteur);

    if ($auteur) {
        $msg_modif_auteur = "Modifier l'auteur : " . $auteur['prenom'] . " " . $auteur['nom'];
    } else {
        $msg_modif_auteur =  "Auteur non trouvé";
    }
}

// Écriture et exécution de la requête SELECT
$sql = "SELECT id, nom, prenom, date_naissance, nationalite FROM Auteurs ORDER BY nom";
$result = mysqli_query($connection, $sql);

// Traitement et affichage des résultats
$array_results = sql_to_array($result);
$str_tableau = array_to_html_table($array_results);


// Fermeture de la connexion
mysqli_close($connection);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Gestion des auteurs</title>
</head>

<body>
    <h1>Auteurs</h1>
    <p> <?= $msg_modification_result ?>
    <p>

    <p> <?= $msg_modif_auteur ?>
    <p>
        <?php if (isset($auteur)) : ?>
    <form method="POST" action="?action=mettre_a_jour">
        <input type="hidden" name="id" value="<?= $auteur['id']; ?>">

        <label>Nom :</label>
        <input type="text" name="nom" value="<?= $auteur['nom']; ?>" required><br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom" value="<?= $auteur['prenom']; ?>"><br><br>

        <label>Date de naissance :</label>
        <input type="date" name="date_naissance"
            value="<?= $auteur['date_naissance']; ?>"><br><br>

        <label>Nationalité :</label>
        <input type="text" name="nationalite"
            value="<?= $auteur['nationalite']; ?>"><br><br>

        <input type="submit" value="Mettre à jour">
        <a href="phpsql_exercice4.php">Annuler</a><br><br><br>
    </form>
<?php endif ?>

<?= $str_tableau ?>

</body>

</html>