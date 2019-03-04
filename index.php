<?php 
echo 'Bonjour';

require_once ('autoloader.php');

//Création d'un premier objet product : un hamac

                $hamac=new Product();
               

//Changement des valeurs des propriétés du hamac
                $hamac->setName ('Hamac');
                var_dump($hamac);
                $hamac->setDescription('sert à glander');
                var_dump($hamac);
                $hamac->setPrice(150);


                //debug du hamac
                var_dump($hamac);
                
//Création d'un deuxiéme objet
$parasol = new Product();
var_dump($parasol);


                $parasol->setPrice(300);
                var_dump ($parasol);




//création d'une nouvelle category
$voyage = new Category();
var_dump($voyage);

//Debug du parasol
var_dump($hamac);

//Affichage d'une propriété (price) du parasol

echo '<p>'.$hamac->getPrice().'€</p>';


                echo '<p>'.$hamac->displayPrice().'€</p>';
                echo '<p>'.$parasol->displayPrice().'€</p>';


    echo '<p>Nombre de vues par défault des produits : '.$hamac::DEFAULT_NB_VIEWS.'</p>';

?>

