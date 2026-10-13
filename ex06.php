
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Switch et date</title>
</head>
<body>

<h1>Exercice 6 : Affichage du mois</h1>

<pre>
<?php

// Question 1 : Declarer le numero du mois
$numeroMois = 3;

// Question 2 et 3 : Utiliser switch
echo "Numero du mois : $numeroMois\n";

switch ($numeroMois) {
    case 1:
        echo "Janvier";
        break;

    case 2:
        echo "Fevrier";
        break;

    case 3:
        echo "Mars";
        break;

    case 4:
        echo "Avril";
        break;

    case 5:
        echo "Mai";
        break;

    case 6:
        echo "Juin";
        break;

    case 7:
        echo "Juillet";
        break;

    case 8:
        echo "Aout";
        break;

    case 9:
        echo "Septembre";
        break;

    case 10:
        echo "Octobre";
        break;

    case 11:
        echo "Novembre";
        break;

    case 12:
        echo "Decembre";
        break;

    default:
        echo "Numero de mois invalide";
        break;
}

echo "\n";

?>
</pre>

</body>
</html>
