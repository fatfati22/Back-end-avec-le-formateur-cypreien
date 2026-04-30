<?php
    $i = 1;
    while ($i <= 5) {
        echo $i . "<br>";
        $i++;
    }

    // Autre syntaxe
    while ($i <= 5) :
        echo $i . "<br>";
        $i++;
    endwhile;
?>


<?php
$i = 10;
while ($i >= 0) {
    echo $i . "<br>";
    $i--;
}
// Autre syntaxe
$i = 10;
while ($i <= 50) :
    echo $i . "<br>";
    $i = $i + 2;
endwhile;
?>
