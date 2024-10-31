<?php require_once 'fonctions/function.php';
include("header.php");
?>

<body>
    <h2>Formualaire d'ajout de categorie</h2>
    <form method="POST" action="add.php">
        <label for="name">Nom de la catégorie</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>