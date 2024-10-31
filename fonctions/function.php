<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=e-commerce;charset=utf8', 'root', '');
    $categories = categorieAll($bdd);
    
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}


//fonction pour ajouter une categorie

function add_categorie($bdd, $NewCategorie){
    $sqlQuery = "INSERT INTO categorie(nom) VALUES(:nom)";

    $insertCate = $bdd->prepare($sqlQuery);

    $insertCate->execute([
        'nom' => $NewCategorie['nom']
    ]);

}

//Avoir les produit par catégorie

function getProductByCategorie($bdd, $id_categorie){
    $sqlQuery = "SELECT * FROM categorie WHERE id_categorie = :id_categorie";
    
    $selectProduct = $bdd->prepare($sqlQuery);
    $selectProduct->execute([
        'id_categorie' => $id_categorie
    ]);
    return $selectProduct->fetchAll();
}

//fonction pour ajouter un produit

function add_product($bdd, $NewProduct) {
    $sqlQuery = "INSERT INTO produit(titre, description, prix, id_categorie, `image`) VALUES(:titre, :description, :prix, :id_categorie, :image)";

    $insertProduct = $bdd->prepare($sqlQuery);

    $insertProduct->execute([
        'titre' => $NewProduct['titre'],
        'description' => $NewProduct['description'],
        'prix' => $NewProduct['prix'],
        'image' => $NewProduct['image'],
        'id_categorie' => $NewProduct['id_categorie'],
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

//Supprimer une catégorie

function delete_categorie($bdd, $oldcategorie) {
    $sqlQuery = 'DELETE FROM categorie WHERE nom = :nom';
    $categorie = $bdd->prepare($sqlQuery);
    $categorie->execute([
        'nom' => $oldcategorie
    ]);
}


//Sellectioner tous les categories

function categorieAll($bdd){
    $sqlQuery = 'SELECT * FROM categorie';
    $categories = $bdd->prepare($sqlQuery);
    $categories->execute();
    return $categories->fetchAll();
}

?>



