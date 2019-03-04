<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        $passwordOk = true;
    
        // Syntaxe raccourcie
        $message= ($passwordOk) ? 'Bienvenue' : 'Accès interdit';

    
        // Syntaxe classique
        if ($passwordOk === true) {
            $message = 'Bienvenue';
        } else {
            $message = 'Accès interdit';
        }
    
        echo "<h1>$message</h1>";
    
    
        $jour = 'dimanche';
    
        if($jour === 'lundi' || $jour === 'mardi' || $jour === 'mercredi') {
            $message2 = "C'est pas le week-end !";
        } elseif ($jour === 'jeudi' || $jour === 'vendredi') {
            $message2 = "C'est bientôt le week-end";
        } elseif ($jour === 'samedi' || $jour === 'dimanche') {
            $message2 = "C'est le week-end";
        } else {
            $message2 = "C'est pas un jour de la semaine";
        }
    
        // Version avec le switch
        switch($jour) {
            case 'lundi':
            case 'mardi':
            case 'mercredi':
                $message2 = "C'est pas le week-end !";
                break;
            case 'jeudi':
            case 'vendredi':
                $message2 = "C'est bientôt le week-end";
                break;
            case 'samedi':
            case 'dimanche':
                $message2 = "C'est le week-end !";
                break;
            default:
                $message2 = "C'est pas un jour de la semaine";
        }
    
        echo "<p>Message2 = $message2</p>";
    
    
        $temperature = 15.5;
    
        var_dump(gettype($temperature));    
    
        if(!(gettype($temperature) === 'integer' || gettype($temperature) === 'double')) {
            $message3 = "Ce n'est pas un chiffre";
        } elseif($temperature < 0) {
            $message3 = 'Il fait froid';
        } elseif ($temperature < 20) {
            $message3 = 'Il fait moyen';
        } elseif ($temperature < 50) {
            $message3 = 'Il fait chaud';
        } elseif ($temperature >= 50) {
            $message3 = 'Il fait très chaud';
        }
        echo "<p>$message3</p>";
    
    
    ?>
    
</body>
</html>








