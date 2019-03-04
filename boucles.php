<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les boucles</title>
</head>
<body>
    
    <?php
        
        // Ouverture de la liste
        echo '<ul>';
    
        // Affichage des 14 puces
        $compteur = 0;
        while($compteur < 14) {
            echo '<li>Puce</li>';
            $compteur++;
        }
    
        // Fermeture de la liste
        echo '</ul>';
    
    
     
        // Ouverture de la liste
        echo '<ol>';
    
        // La boucle for (20 tours)
        for($i=0 ; $i<20 ; $i++) {
            echo '<li>Puce</li>';
        }
    
        // Fermeture de la liste
        echo '</ol>';
    
    
        // Création d'un tableau
        $products = ['Hamac', 'Parasol', 'Sable', 'Plage', 'Tongue'];
        $products = array('Hamac', 'Parasol', 'Sable', 'Plage', 'Tongue');
    
    
        // Ouverture de la liste
        echo '<ul>';
        // On boucle dans le tableau
        foreach($products as $elementCourant) {
            echo '<li>' . $elementCourant . '</li>';
        }
        // Fermeture de la liste
        echo '</ul>';
    
        
    
        // Tableau associatif
        $hamac = [
          "name" => 'hamac',
          "description" => 'Se reposer après une journée au chaud'
        ];
    
        $tableau = [
            [
              "name" => 'hamac',
              "description" => 'Se reposer après une journée au chaud'
            ],
            [
              "name" => 'parasol',
              "description" => 'Pour faire de l\'ombre au hamac'
            ],
        ];
    
    echo '<ul>';
        foreach($tableau as $product) {
            echo '<li>';
            echo $product['name'] . ' ('.$product['description'].')';
            echo '</li>';
        }
    echo '</ul>';
    
    
    ?>
    
</body>
</html>
















