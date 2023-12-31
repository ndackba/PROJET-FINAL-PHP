<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rayon = floatval($_POST["rayon"]);

    $diametre = 2 * $rayon;
    $perimetre = 2 * M_PI * $rayon;
    $surface = M_PI * pow($rayon, 2);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul d'un cercle</title>
</head>
<body>
    <h1>Calcul d'un cercle</h1>

    <form method="post" action="">
        <label for="rayon">Entrez le rayon du cercle :</label>
        <input type="number" name="rayon" required step="any">
        
        <button type="submit">Calculer</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Diamètre : <?php echo $diametre; ?></p>
        <p>Périmètre : <?php echo $perimetre; ?></p>
        <p>Surface : <?php echo $surface; ?></p>
    <?php endif; ?>
</body>
</html>