<?php
try
{
	// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', 'pioupiou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); /*'mysql:host=db776288365.hosting-data.io;dbname=film;charset=utf8', 'dbo776288365', 'w67wj898h'*/
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer
