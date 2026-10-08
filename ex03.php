
<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");


$prix_unitaire_HT = 60;
$quantite = 3;

$total_HT = $prix_unitaire_HT * $quantite;
$montant_TVA = $total_HT * TAUX_TVA / 100;
$total_TTC = $total_HT + $montant_TVA;

$total_TTC += 15;


echo "<h2>Récapitulatif de la commande</h2>";

echo "Prix unitaire HT : " . $prix_unitaire_HT . " " . DEVISE . "<br>";
echo "Quantité : " . $quantite . "<br>";
echo "Total HT : " . $total_HT . " " . DEVISE . "<br>";
echo "TVA (" . TAUX_TVA . "%) : " . $montant_TVA . " " . DEVISE . "<br>";
echo "Total TTC : 216 " . DEVISE . "<br>";
echo "Frais de livraison : 15 " . DEVISE . "<br>";
echo "<strong>Montant final : " . $total_TTC . " " . DEVISE . "</strong><br><br>";


if (defined("TAUX_TVA")) {
    echo "La constante TAUX_TVA est bien définie.";
}

?>

