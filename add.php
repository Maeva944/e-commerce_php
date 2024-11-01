<?php require_once 'fonctions/function.php';
include("header.php");

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $newCategorie = ['nom' => $_POST['name']]; 
    add_categorie($bdd, $newCategorie); 
}

//Vérification pour ajouter des produits

if (
    isset($_POST['titre']) && !empty($_POST['titre']) &&
    isset($_POST['img']) && !empty($_POST['img']) &&
    isset($_POST['description']) && !empty($_POST['description']) &&
    isset($_POST['price']) && !empty($_POST['price']) &&
    isset($_POST['id']) && !empty($_POST['id'])
) {
    $newProduct = [
        'titre' => $_POST['titre'],
        'image' => $_POST['img'],
        'description' => $_POST['description'],
        'prix' => $_POST['price'],
        'id_categorie' => $_POST['id']
    ];

    add_product($bdd, $newProduct);
}

//Vérification pour supprimer un produit

if(isset($_POST['idproduct']) && !empty($_POST['idproduct'])){
    $deleteProduct = $_POST['idproduct'];

    deleteProduct($bdd, $deleteProduct);
}  

?>



<body>
    <div>
    <h2>Formualaire d'ajout de categorie</h2>
    <form method="POST" action="add.php">
        <label for="name">Nom de la catégorie</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Ajouter">
    </form>
    </div>

    <div>
    <h2>Formulaire d'ajout de produit</h2>
    <form method="POST" action="add.php">
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre">
        <label for="img">Chemin image</label>
        <input type="text" name="img" id="img">
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
        <label for="price">Prix</label>
        <input type="number" name="price" id="price">
        <label for="id">Id Categorie</label>
        <input type="number" name="id" id="id">
        <input type="submit" value="Ajouter">
    </form>
    </div>

    <div>
    <h2>Formulaire pour supprimer un produit</h2>
    <form method="POST" action="add.php">
        <label>l'ID du produit que vous souhaitez supprimer</label>
        <input type="number" name="idproduct" id="idproduct">
        <input type="submit" value="supprimer">
    </form>
    </div>
</body>
</html>