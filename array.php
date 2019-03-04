<?php include 'header.php' ?>
   
<h1>Utilisation implode</h1>
<?php
$categories = ['Voyage', 'Bien-être', 'Sport'];
$cats = '<ul><li>' . implode('</li><li>', $categories) . '</li></ul>';
?>

<p>Liste de mes catégories : <?= $cats ?></p>

<?php

$jérôme = 'Moi';

echo $jérôme;

$nombre = 41;

do {
	$nombre -= 5;
}while($nombre > 30)

echo 'fdsfdf';



?>


<?php include 'footer.html' ?>











