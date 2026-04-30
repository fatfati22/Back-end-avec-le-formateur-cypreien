<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        entrer un nombre :
        <input type="number" name="nombre" required>
        <button type="submit">calculer</button>
    </form>

    <?php

    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
        $etapes = 0;
        echo "<br> Suite : <br>";
        while ($nombre != 1) {

            echo $nombre . "<br>";
            if ($nombre % 2 === 0) {
                $nombre = $nombre / 2;
            } else {
                $nombre = $nombre * 3 + 1;
            }
            $etapes++;
        }
        echo "1<br>";
        echo "<br> Nombre d'etapes : " . $etapes;
    }




    ?>



</body>

</html>