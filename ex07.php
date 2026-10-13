
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - Boucles PHP</title>
</head>
<body>

<h1>Exercice 7 : Les boucles en PHP</h1>

<!-- Section 1 : Table de multiplication -->
<section>
    <h2>1. Table de multiplication de 7</h2>

    <pre>
<?php

$nombre = 7;

for ($i = 1; $i <= 10; $i++) {
    echo "$nombre x $i = " . ($nombre * $i) . "\n";
}

?>
    </pre>
</section>

<hr>

<!-- Section 2 : Pyramide d'etoiles -->
<section>
    <h2>2. Pyramide de six lignes</h2>

    <pre>
<?php

for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }

    echo "\n";
}

?>
    </pre>
</section>

</body>
</html>
