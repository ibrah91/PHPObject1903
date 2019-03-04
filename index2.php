<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php
		// Affichage d'un titre
		echo '<h1>Bonjour';
		echo '</h1>';
		

		// Création d'une variable
		$prenom = 'Jérôme';
		
		
		// Affichage en plusieurs lignes
		echo '<h3>';
		echo $prenom;
		echo '</h3>';
		
		// Les simples quotes n'interprêtent leur contenu (la valeur de la variable ne s'affichera pas)
		echo '<h3>$prenom</h3>';
		// Pour interprêter les variables : on concatène avec le point .
		echo '<h3>' . $prenom . '</h3>';
		// Les doubles quotes interprêtent leur contenu (la valeur de la variable s'affichera)
		// /!\ Attention à la sécurité  
		echo "<h3>$prenom</h3>";
		
		
		
		// Définition d'une constante
		const PI = 3.14;
		echo 'Pi vaut : ' . PI;
	
		$prenom = 46;
	
		echo 'Je suis dans quel fichier ? : ' . __FILE__;
		
		echo 'C\'est cool é';
		
		
		//PI = 'bonjour';
		
		echo '&lt;p&gt;Texte&lt;/p&gt';
		
		echo 'Mot1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mot2';
		
		echo 'Mot1\ Mot2';
		
		
		echo 'Prénom : ' . $prenom;
		
		$age = 100;
		
		echo $age ?? 'Age pas défini';
		
	?>
	
	
	<div class="A">
		Titre 1
	</div>

	<div class="A">
		Titre 2
	</div>

	<div class="A">
		Titre 3
	</div>

	<div class="A">
		Titre 4
	</div>

</body>
</html>









