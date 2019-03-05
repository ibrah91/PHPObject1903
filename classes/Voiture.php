<?php
/**
 * Class Voiture : classe représentant une voiture
 */
class Voiture{
    /**** @var string ... *****/
     private $marque;
     /**** @var string ... *****/
     private $moteur;

    
     public function __construct(string $premiereMarque,string $premiereMoteur){
            var_dump('Appel du constructeur');
                $this->marque = $premiereMarque;
                $this->moteur = $premiereMoteur;
                
        
}
     
     public function getMarque():string{
         return $this->$marque;
     }

     public function setMarque(string $marque):void{
    $this->marque = $marque;
    }

    public function getMoteur():string{
        return $this->$moteur;
    }
public function setMoteur(string $moteur):void{
    $this->moteur = $moteur;
   }

  

 
 
 }
?>