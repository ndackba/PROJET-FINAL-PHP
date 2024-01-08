<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Adresse Client</title>
</head>
<body>
    <h1>Formulaire Adresse Client</h1>

    <form method="post" action="traitement.php">
        <fieldset>
            <legend>Adresse client</legend>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" required><br>

            <label for="ville">Ville :</label>
            <input type="text" name="ville" required><br>

            <label for="codePostal">Code Postal :</label>
            <input type="text" name="codePostal" required pattern="\d{5}"><br>
        </fieldset>

        <button type="submit">Valider</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $ville = $_POST["ville"];
    $codePostal = $_POST["codePostal"];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données Client</title>
</head>
<body>
    <h1>Données du client</h1>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
        </tr>
        <tr>
            <td><?php echo $nom; ?></td>
            <td><?php echo $prenom; ?></td>
            <td><?php echo $adresse; ?></td>
            <td><?php echo $ville; ?></td>
            <td><?php echo $codePostal; ?></td>
        </tr>
    </table>
</body>
</html>