
<?php

echo "<pre>";


$entier = 42;
$chaine = "42";
$decimal = 15.8;
$vrai = true;
$faux = false;
$vide = null;


echo "=== Valeurs et types ===\n";
var_dump($entier);
var_dump($chaine);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);


echo "\n=== Conversions ===\n";

$chaine_en_entier = (int) $chaine;
$decimal_en_entier = (int) $decimal;
$entier_en_chaine = (string) $entier;

echo "Conversion de \"42\" en entier : ";
var_dump($chaine_en_entier);

echo "Conversion de 15.8 en entier : ";
var_dump($decimal_en_entier);

echo "Conversion de 42 en chaîne : ";
var_dump($entier_en_chaine);


echo "\n=== true et false ===\n";

echo "Avec echo : ";
echo $vrai;
echo " / ";
echo $faux;

echo "\nAvec var_dump() : ";
var_dump($vrai);
var_dump($faux);


echo "\n=== Conversion en booléens ===\n";

$bool_zero = (bool) 0;
$bool_chaine_zero = (bool) "0";
$bool_php = (bool) "PHP";
$bool_tableau_vide = (bool) [];

echo "0 en booléen : ";
var_dump($bool_zero);

echo "\"0\" en booléen : ";
var_dump($bool_chaine_zero);

echo "\"PHP\" en booléen : ";
var_dump($bool_php);

echo "Tableau vide en booléen : ";
var_dump($bool_tableau_vide);

echo "</pre>";

?>

