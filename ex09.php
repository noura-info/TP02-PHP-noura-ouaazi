
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Notes des étudiants</title>
</head>
<body>

<h1>Exercice 9 : Gestion des notes</h1>

<?php

// Jeu de donnees
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

// Initialisation des variables
$somme = 0;
$nombreEtudiants = 0;
$nombreValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

// Question 1 et 2 : Afficher les notes dans un tableau HTML
echo "<h2>1. Notes et validation des etudiants</h2>";

echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>Etudiant</th>
        <th>Note</th>
        <th>Resultat</th>
      </tr>";

foreach ($notes as $nom => $note) {

    echo "<tr>";
    echo "<td>$nom</td>";
    echo "<td>$note</td>";

    if ($note >= 10) {
        echo "<td>Valide</td>";
        $nombreValides++;
    } else {
        echo "<td>Non valide</td>";
    }

    echo "</tr>";

    // Question 3 : Calculer la somme
    $somme += $note;
    $nombreEtudiants++;

    // Question 5 : Rechercher la meilleure note
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}

echo "</table>";

// Calcul de la moyenne
$moyenne = $somme / $nombreEtudiants;

// Affichage des statistiques
echo "<h2>2. Statistiques de la classe</h2>";

echo "<p>Somme des notes : $somme</p>";
echo "<p>Moyenne de la classe : $moyenne</p>";

// Question 4 : Nombre d'etudiants valides
echo "<p>Nombre d'etudiants ayant valide : $nombreValides</p>";

// Question 5 : Meilleure note
echo "<p>Meilleure note : $meilleureNote</p>";
echo "<p>Etudiant ayant la meilleure note : $meilleurEtudiant</p>";

?>

</body>
</html>
