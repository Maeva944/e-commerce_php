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

//fonction pour ajouter un produit

function add_product($bdd, $NewProduct){
    $sqlQuerry = "INSERT INTO produit(titre, desciption, prix, id_categorie, `image`) VALUES(:titre, :description, :prix, :id_categorie, :image)";

    $insertProduct=$bdd->prepare($sqlQuerry);

    $insertProduct->execute([
        'titre'=>$NewProduct['titre'],
        'description'=>$NewProduct['description'],
        'prix'=>$NewProduct['prix'],
        'id_categorie'=>$NewProduct['id_categorie'],
        'image'=>$NewProduct['image'],
    ]);
}

//Selectionner tous les produits

function productAll($bdd){
    $sqlQuery = 'SELECT * FROM produit ORDER BY titre ASC';
    $products = $bdd->prepare($sqlQuery);
    $products->execute();
    // Retourne un tableau contenant toutes les lignes d'un jeu d'enregistrements
    return $products->fetchAll();
  }
?>

