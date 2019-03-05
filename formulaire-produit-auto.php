<?php
require('autoloader.php');
$formUtility = new FormUtility();
?>

<?php include 'header.php';?>

<main class="container">
    <h1>Création d'un nouveau produit</h1>
    <form method="post">
    <?= $formUtility->generateHTML('Nom du produit','text','name','saisir le nom du produit'); ?>
    <?= $formUtility->generateHTML('Price du produit','number','price','saisir le prix'); ?>
    <?= $formUtility->generateHTML('Description','textarea','description','description du produit'); ?>

    <button type="submit" class="btn btn-primary">Créer le produit</button>
    </form>
</main>

<?php include 'footer.html' ?>