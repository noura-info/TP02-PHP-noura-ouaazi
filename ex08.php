
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Boucles PHP</title>
</head>
<body>

<h1>Exercice 8 : Boucles et contrôle des itérations</h1>

<!-- PARTIE 1 -->
<section>
    <h2>Partie 1 : Nombres pairs de 0 à 20</h2>

    <p>
    <?php
    $nombre = 0;

    while ($nombre <= 20) {
        if ($nombre == 10) {
            echo "<strong>$nombre</strong> ";
        } else {
            echo "$nombre ";
        }

        $nombre += 2;
    }
    ?>
    </p>
</section>

<hr>

<!-- PARTIE 2 -->
<section>
    <h2>Partie 2 : Comparaison entre while et do-while</h2>

    <?php
    // Boucle while
    $compteur = 5;
    $executionsWhile = 0;

    while ($compteur < 5) {
        $executionsWhile++;
        $compteur++;
    }

    echo "<p>Nombre d'executions de while : $executionsWhile</p>";

    // Reinitialisation avant do-while
    $compteur = 5;
    $executionsDoWhile = 0;

    do {
        $executionsDoWhile++;
        $compteur++;
    } while ($compteur < 5);

    echo "<p>Nombre d'executions de do-while : $executionsDoWhile</p>";
    ?>
</section>

<hr>

<!-- PARTIE 3 -->
<section>
    <h2>Partie 3 : Utilisation de continue et break</h2>

    <p>
    <?php
    for ($i = 1; $i <= 20; $i++) {

        if ($i >= 16) {
            break;
        }

        if ($i % 3 == 0) {
            continue;
        }

        echo "$i ";
    }
    ?>
    </p>
</section>

</body>
</html>
