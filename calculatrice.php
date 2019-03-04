<?php
// On définit nos fonctions
function mult3Nb(float $nb1, float $nb2, float $nb3 = 1): float {
    return $nb1 * $nb2 * $nb3;
}

function multiplication(array $nombres): float {
    $resultat = 1;
    foreach($nombres as $nombre) {
        $resultat = $resultat * $nombre;
    }
    return $resultat;
}
function addition(array $nombres): float {
    $resultat = 0;
    foreach($nombres as $nombre) {
        $resultat = $resultat + $nombre;
    }
    return $resultat;
}

function operation(string $operation, array $nombreUsers): float {
    switch($operation) {
        case '*':
            return multiplication($nombreUsers);
            break;
        case '+':
            return addition($nombreUsers);
            break;
    }
}

// Inclusion du header (DOCTYPE, CSS, navbar)
include 'header.php'
?>

<main class="container">
    <h1>Calculatrice</h1>
    
    <h2>Multiplication de 3 chiffres</h2>
    <p>Résultat de 3*5,5*10 = <?= mult3Nb(3,5.5,10) ?></p>    
    <h2>Multiplication de 3 chiffres (le 3eme est faculatif)</h2>
    <p>Résultat de 15*6 = <?= mult3Nb(15,6) ?></p>  
    
    <h2>Multiplication de plusieurs chiffres</h2>
    <p>Multiplication de [4,5,9] : <?= multiplication([4,5,9]) ?></p> 
    <p>Multiplication de [4,5,9,10] : <?= multiplication([4,5,9,10]) ?></p> 
    <p>Multiplication de [4,5] : <?= multiplication([4,5]) ?></p> 
    
    
    <h2>Plusieurs opérations dans la même fonction</h2>
    <p>Multiplication de [4,5,9] : <?= operation('*', [4,5,9]) ?></p>  
    <p>Addition de [4,5,9] : <?= operation('+', [4,5,9]) ?></p>  
    
    
</main> 

<?php include 'footer.html' ?>




















