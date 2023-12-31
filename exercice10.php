<?php
$personnes = array(
    "Amina" => array("prenom" => "Amina", "ville" => "yeumbeul", "age" => 30),
    "Bassirou" => array("prenom" => "Bassirou", "ville" => "dakar", "age" => 25),
    "Chamsdine" => array("prenom" => "Chamsdine", "ville" => "Marseille", "age" => 35)
);

foreach ($personnes as $nom => $infos) {
    echo "Informations sur $nom :<br>";
    foreach ($infos as $cle => $valeur) {
        echo "$cle : $valeur<br>";
    }
    echo "<br>";
}
?>