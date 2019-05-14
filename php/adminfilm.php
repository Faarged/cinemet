<?php
$film = $bdd->prepare('SELECT id_film, titre FROM film');
$film->execute();
?>
