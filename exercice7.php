<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreParfait = intval($_POST["nombreParfait"]);
    $sommeDiviseurs = 0;

    for ($i = 1; $i < $nombreParfait; $i++) {
        if ($nombreParfait % $i == 0) {
            $sommeDiviseurs += $i;
        }
    }

    if ($sommeDiviseurs == $nombreParfait) {
        echo "$nombreParfait est un nombre parfait.";
    } else {
        echo "$nombreParfait n'est pas un nombre parfait.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de nombre parfait</title>
</head>
<body>
    <h1>Test de nombre parfait</h1>

    <form method="post" action="">
        <label for="nombreParfait">Entrez un nombre :</label>
        <input type="number" name="nombreParfait" required>
        
        <button type="submit">Tester</button>
    </form>
</body>
</html>