<?php

$nom = "Fatma";
function afficheVarriable()
{
    global $nom;
    echo $nom;
}

afficheVarriable();

?>

echo"<br>";
<?php

$nom = "Fatma";
function afficheVarriablea()
{
    global $nom;
    echo $nom;
    $nom = "adama";
}

afficheVarriablea();
echo $nom;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>