<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=e-commerce;charset=utf8', 'root', '');
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}


//fonction pour ajouter une categorie

function add_categorie($bdd, $NewCategorie){
    $sqlQuerry = "INSERT INTO categorie(nom) VALUES(:nom)";

    $insertCate = $bdd->prepare($sqlQuerry);

    $insertCate->execute([
        'nom' => $NewCategorie['nom']
    ]);

}
?>