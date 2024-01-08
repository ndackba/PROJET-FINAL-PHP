<?php
function majusculePremierCaractere(&$tableau) {
    foreach ($tableau as &$element) {
        $element = ucfirst(strtolower($element));
    }
}

// Exemple d'utilisation
$donnees = array("amina", "Bassirou", "chamsdine");
majusculePremierCaractere($donnees);

// Affichage du tableau après transformation
echo "<pre>";
print_r($donnees);
echo "</pre>";
?>