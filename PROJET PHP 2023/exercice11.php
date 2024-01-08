<?php
$personnes = array(
    "Amina" => array("prenom" => "Amina", "ville" => "yeumbeul", "age" => 30),
    "Bassirou" => array("prenom" => "Bassirou", "ville" => "dakar", "age" => 25),
    "Chamsdine" => array("prenom" => "Chamsdine", "ville" => "Marseille", "age" => 35)
);


$personnesKeys = array_keys($personnes);
$index = 0;

while ($index < count($personnesKeys)) {
    $nom = $personnesKeys[$index];
    echo "Informations sur $nom :<br>";

    $infos = $personnes[$nom];
    $cle = 0;

    while ($cle < count($infos)) {
        $cleAssoc = array_keys($infos)[$cle];
        echo "$cleAssoc : " . $infos[$cleAssoc] . "<br>";
        $cle++;
    }

    echo "<br>";
    $index++;
}
?>