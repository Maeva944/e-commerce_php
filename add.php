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
    isset($_POST['price']) && !empty($_POST['price'])
) {
    $newProduct = [
        'titre' => $_POST['titre'],
        'img' => $_POST['img'],
        'description' => $_POST['description'],
        'price' => $_POST['price']
    ];

    add_product($bdd, $newProduct);
}

?>



<body>
    <h2>Formualaire d'ajout de categorie</h2>
    <form method="POST" action="add.php">
        <label for="name">Nom de la catégorie</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Ajouter">
    </form>

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
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>