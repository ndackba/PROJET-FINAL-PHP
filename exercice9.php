<?php
$personnes = array(
    "Amina" => array("prenom" => "Amina", "ville" => "yeumbeul", "age" => 30),
    "Bassirou" => array("prenom" => "Bassirou", "ville" => "dakar", "age" => 25),
    "Chamsdine" => array("prenom" => "Chamsdine", "ville" => "Marseille", "age" => 35)
);

// Ajouter une personne
$personnes["Dack"] = array("prenom" => "Dack", "ville" => "Nice", "age" => 28);

// Accéder aux informations d'une personne
echo "Informations sur Amina :<br>";
echo "Prénom : " . $personnes["Amina"]["prenom"] . "<br>";
echo "Ville : " . $personnes["Amina"]["ville"] . "<br>";
echo "Âge : " . $personnes["Amina"]["age"] . "<br>";

// Accéder aux informations de David
echo "<br>Informations sur dack :<br>";
echo "Prénom : " . $personnes["Dack"]["prenom"] . "<br>";
echo "Ville : " . $personnes["Dack"]["ville"] . "<br>";
echo "Âge : " . $personnes["Dack"]["age"] . "<br>";
?>