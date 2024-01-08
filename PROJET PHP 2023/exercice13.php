<!-- index.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA et Prix TTC</title>
</head>
<body>
    <h1>Calcul TVA et Prix TTC</h1>

    <form method="post" action="calcul.php">
        <label for="prixHT">Prix HT :</label>
        <input type="text" name="prixHT" value="<?php echo isset($_POST['prixHT']) ? $_POST['prixHT'] : ''; ?>" required><br>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" name="tauxTVA" value="<?php echo isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : ''; ?>" required><br>

        <button type="submit">Calculer</button>
    </form>
</body>
</html>
<!-- calcul.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prixHT = floatval($_POST["prixHT"]);
    $tauxTVA = floatval($_POST["tauxTVA"]);

    $montantTVA = ($prixHT * $tauxTVA) / 100;
    $prixTTC = $prixHT + $montantTVA;

    // Affichage des résultats dans le formulaire
    echo "<h2>Résultats :</h2>";
    echo "<label for='montantTVA'>Montant TVA :</label>";
    echo "<input type='text' name='montantTVA' value='$montantTVA' readonly><br>";

    echo "<label for='prixTTC'>Prix TTC :</label>";
    echo "<input type='text' name='prixTTC' value='$prixTTC' readonly><br>";
}
?>