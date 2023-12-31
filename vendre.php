<?php
CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    seller_name VARCHAR(100) NOT NULL
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vendre une Voiture</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Car Marketplace</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="acheter.php">Acheter</a></li>
            <li><a href="vendre.php">Vendre</a></li>
            <li><a href="louer.php">Louer</a></li>
        </ul>
    </nav>
    <section>
        <h2>vendre une Voiture</h2>
        <!-- Ajoutez ici votre formulaire pour acheter une voiture -->
    </section>
    <footer>
        <p>&copy; 2023 Car Marketplace</p>
    </footer>
</body>
</html>