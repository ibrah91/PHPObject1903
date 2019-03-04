<?php 
//Les inclusions
function autoloader_perso($className){
        var_dump($className);
        require_once('Classes/'.$className.'.php');
}
            spl_autoload_register('autoloader_perso');
            echo 'Bonjour';

//Création d'objet

                $hamac = new Product();
                var_dump($hamac);
//Changement des valeurs des propriétés du hamac
                $hamac->name = 'Hamac';
                var_dump($hamac);
                $hamac->description = 'sert à glander';
                var_dump($hamac);
                $hamac->price =150;
                var_dump($hamac);
                
//Création d'un deuxiéme objet
$parasol = new Product();
var_dump($parasol);


                $parasol->price = 300;
                var_dump ($parasol);




//création d'un e nouvelle category
$voyage = new Category();
var_dump($voyage);

//Debug du parasol
var_dump($hamac);

//Affichage d'une propriété (price) du parasol

echo '<p>'.$hamac->price.'€</p>';


                echo '<p>'.$hamac->displayPrice().'€</p>';
                echo '<p>'.$parasol->displayPrice().'€</p>';


    echo '<p>Nombre de vues par défault des produits : '.$hamac::DEFAULT_NB_VIEWS.'</p>';
?>

