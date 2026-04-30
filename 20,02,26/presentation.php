<?php 
$prenom = "Fatma";
$nom="BOUDABBOUS";
$ville="marseille";
echo "Bonjour, je m'appelle $prenom $nom et j'habite à $ville.";
echo"br<br><br><br>";
var_dump($prenom);
echo"<br><br><br>";
var_dump($nom);     
echo"<br><br><br>";
var_dump($ville);
echo"<br><br><br>";


?>
<?php
    var_dump(5 == 5);    // true
    echo"<br>";
    var_dump(5 == "5");  // true, car les valeurs sont égales
        echo"<br>";

    var_dump(5 === "5"); // false, car 5 est un entier et "5" est une string

    echo"<br>";
    var_dump(5 != 3);    // true
        echo"<br>";

    var_dump(5 !== "5"); // true, car les types sont différents
        echo"<br>";

    var_dump(5 < 3);     // false
        echo"<br>";

?>
