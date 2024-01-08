<?php
class etudiant{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $adresse;
   
}
function __construct($id,$nom,$prenom,$adresse){
    $this -> id = $id;
    $this -> nom = $nom;
    $this -> prenom = $prenom;
    $this -> adresse = $adresse;
}
//methodes
function getId(){
    return $this-> id;
}
function getNom(){
    return $this-> nom;
}
function getPrenom(){
    return $this-> prenom;
}
function getAdresse(){
    return $this-> adresse;
}
//setters
function setId($id){
    return $this -> id = $id;
}
function setNom($nom){
    return $this -> nom = $nom;
}
function setPrenom($prenom){
    return $this -> prenom = $prenom;
}
function setAdresse($adresse){
    return $this -> adresse = $adresse;
}

