<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCible = intval($_POST["nombreCible"]);

    $tentativesFor = 0;

    
    for ($i = 0; $nombreFor !== $nombreCible; $i++) {
        $nombreFor = rand(100, 999);
        $tentativesFor++;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Nombre Aléatoire</title>
</head>
<body>
    <h1>Jeu de Nombre Aléatoire</h1>

    <form method="post" action="">
        <label for="nombreCible">Entrez un nombre à trois chiffres :</label>
        <input type="number" name="nombreCible" required min="100" max="999">
        <button type="submit">Commencer le jeu</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Nombre de tentatives avec la boucle for : <?php echo $tentativesFor; ?></p>
    <?php endif; ?>
</body>
</html>