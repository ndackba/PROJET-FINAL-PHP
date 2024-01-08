<?php
$personnes = array(
    "Alice" => array("prenom" => "Alice", "ville" => "Paris", "age" => 30),
    "Bob" => array("prenom" => "Bob", "ville" => "Lyon", "age" => 25),
    "Charlie" => array("prenom" => "Charlie", "ville" => "Marseille", "age" => 35)
);

// Accéder aux informations d'une personne
echo "Informations sur Alice :<br>";
echo "Prénom : " . $personnes["Alice"]["prenom"] . "<br>";
echo "Ville : " . $personnes["Alice"]["ville"] . "<br>";
echo "Âge : " . $personnes["Alice"]["age"] . "<br>";
?>