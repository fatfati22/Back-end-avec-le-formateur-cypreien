

<!-- noous a demander de faire copier coller de cour et voir les résultats
 liens cours https://md.picasoft.net/8tQvjJysQpq0w8ZvlD-QbA?view -->
<!DOCTYPE html>
<html>
<head>
    <title>Ma première page PHP</title>
</head>
<body>
    <h1><?php echo "Bonjour tout le monde !"; ?></h1>
    <p>Ceci est une ligne de HTML classique.</p>
    <?php
        // Ceci est un commentaire sur une ligne
        # Ceci est aussi un commentaire sur une ligne
        /*
            Ceci est un commentaire
            sur plusieurs lignes
        */
        echo "<p>Ce paragraphe a été généré par PHP.</p>";
    ?>
</body>
</html>

<?php

echo"<br><br><br>";

    ?>

<!-- noous a demander de faire copier coller de cour et voir les résultats
 liens cours https://md.picasoft.net/8tQvjJysQpq0w8ZvlD-QbA?view -->
<?php
    $nom = "Rolf Wickstrøm";       // Une chaîne de caractères (string)
    $age = 28;                   // Un nombre entier (integer)
    $taille = 1.76;              // Un nombre décimal (float)
    $est_marie = true;           // Un booléen (boolean) : true ou false

    echo "Je m'appelle $nom et j'ai $age ans.";
?>



<?php

echo"<br><br><br>";

    ?>

<?php
$noms = "bonjour cv toi";
var_dump($noms); // Affiche le type et la valeur de la variable
$age = 28;
echo "Mon nom est $noms et j'ai $age ans.";
var_dump($age);
?>




<?php

echo"<br><br><br>";

    ?>

<?php
    define("PI", 3.14159);
    const SITE_NAME = "Ma Super Formation";

    echo "Bienvenue sur ";
    echo SITE_NAME;
    echo ". La valeur de PI est ";
    echo PI;
?>