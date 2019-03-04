<?php
//Cet autoloader permet de faire les "require" des classes
//se trouvant dans le fichier classe 
//On incluera donc ce  fichier dans chaque fichier
//
function autoloader_perso($className){
        var_dump($className);
        require ('Classes/'.$className.'.php');
}
            spl_autoload_register('autoloader_perso');

            ?>