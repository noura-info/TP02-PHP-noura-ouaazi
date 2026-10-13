
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Resultat GET</title>
</head>
<body>

    <h1>Resultat du formulaire GET</h1>

    <?php

    if (
        isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])
        && in_array($_GET["groupe"], ["G1", "G2", "G3", "G4"], true)
    ) {
        $nom = htmlspecialchars($_GET["nom"]);
        $prenom = htmlspecialchars($_GET["prenom"]);
        $groupe = htmlspecialchars($_GET["groupe"]);

        echo "<p>Bienvenue $prenom $nom !</p>";
        echo "<p>Votre groupe est : $groupe</p>";
    } else {
        echo "<p>Veuillez remplir correctement le formulaire.</p>";
    }

    ?>

    <p><a href="ex10_get.html">Retour au formulaire</a></p>

</body>
</html>
