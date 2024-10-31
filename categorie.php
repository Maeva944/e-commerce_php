<?php require_once 'fonctions/function.php';
include("header.php");
?>
<?php 
$id_categorie = $_GET['cat'] ?? 1; 

$products = getProductByCategorie($bdd, $id_categorie); // Récupérer les produits de la catégorie

// Afficher les produits
?>
<body>
    <h2>Produits de la catégorie <?= htmlspecialchars($id_categorie) ?></h2>
    <ul>
        <?php foreach ($products as $produit) : ?>
            <li>
                <h3><?= htmlspecialchars($produit['titre']) ?></h3>
                <p><?= htmlspecialchars($produit['description']) ?></p>
                <p>Prix : <?= htmlspecialchars($produit['prix']) ?> €</p>
                <img src="<?= htmlspecialchars($produit['image']) ?>" alt="Image produit">
            </li>
        <?php endforeach; ?>
    </ul>
</body>



