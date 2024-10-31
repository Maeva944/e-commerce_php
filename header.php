<?php require_once 'fonctions/function.php'; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
</head>
<header>
    <a href="index.php">E-commerce</a>
    <nav>
        <?php foreach ($categories as $categorie) : ?>
            <a href="categorie.php?page=categorie&cat=<?= $categorie['id'] ?>"><?= $categorie['nom'] ?></a>
        <?php endforeach; ?>
    </nav>
</header>