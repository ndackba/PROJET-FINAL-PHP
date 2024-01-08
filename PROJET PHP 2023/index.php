<?php
require_once("etudiant.php");

$etudiant = new Etudiant("02","ba","ndack");
$etudiant -> setId("02");
$etudiant -> setnom("ba");
$etudiant -> setprenom("ndack");
$etudiant -> setadresse("Sacre coeur");

var_dump ($etudiant);
?>
