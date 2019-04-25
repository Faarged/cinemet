<?php
try
{
	// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', 'pioupiou'); /*'mysql:host=db776288365.hosting-data.io;dbname=film;charset=utf8', 'dbo776288365', 'w67wj898h'*/
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM film WHERE id_film=1');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

<?php echo $donnees['titre']; ?>

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
