<?php 

// Fichier de test des fonctions

// Création de la fonction
function disBonjour() {
    echo "<p>Bonjour tout le monde !</p>";
}

// Appel de la fonction
disBonjour();
disBonjour();
disBonjour();
disBonjour();
disBonjour();
disBonjour();







function bonjourA($paramTabPrenom) {
    
    foreach($paramTabPrenom as $prenom) {
        echo '<h3>Bonjour  '. $prenom . '</h3>';
    }
    
    for($i=0;$i<sizeof($paramTabPrenom);$i++) {
        echo '<h3>Bonjour '. $paramTabPrenom[$i] . '</h3>';
    }
    
    echo array_reduce($paramTabPrenom, function($accu, $elem){
        return $accu . '<h3>Bonjour '. $elem . '</h3>';
    }, '');
    
}


$prenoms = ['John', 'Billy', 'Maria', 'Chloé'];
bonjourA($prenoms);

bonjourA(['<script></script>', 'Jane', 'Henry', 'Ana']);





function addition($a, $b) {
    $somme = $a + $b;
    return $somme;
    
    echo "FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF";
}


$resultat1 = addition(10, 65);
$resultat2 = addition(1, 2);


echo $resultat1 * $resultat2;







































