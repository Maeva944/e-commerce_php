<?php require_once 'fonctions/function.php';
include("header.php");
?>
<?php 
$id_categorie = $_GET['cat'] ?? 1; 
$name_categorie = getCategorieName($bdd, $id_categorie);

$products = getProductByCategorie($bdd, $id_categorie); // Récupérer les produits de la catégorie

// Afficher les produits
?>
<body id="categorie">
    <h2>Produits de la catégorie <?= htmlspecialchars($name_categorie) ?></h2>
    <ul>
        <?php foreach ($products as $produit) : ?>
            <li>
                <img src="<?= htmlspecialchars($produit['image']) ?>" alt="Image produit">
                <h3><?= htmlspecialchars($produit['titre']) ?></h3>
                <p>Prix : <?= htmlspecialchars($produit['prix']) ?> €</p>
                <p><?= htmlspecialchars($produit['description']) ?></p>
                <button>Ajouter au panier</button>
            </li>
        <?php endforeach; ?>
    </ul>
</body>



