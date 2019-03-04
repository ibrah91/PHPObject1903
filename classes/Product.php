<?php
class Product{
const DEFAULT_NB_VIEWS = 0;

    public $name;
    public $description;
    public $price;
            //création d'une fonction retounant une valeur d'un parametre
    public function displayPrice(){
        return 'Le prix : '.$this->price;
    }
}


?>