<?php

require ('autoloader.php');




//On crée une instance de produit

$product1 = new Product();
$product1->setName('Hamac');

$product2 = clone $product1;

$product1->setName('Parasol');

echo $product2->name;
//par copie : hamac 


?>