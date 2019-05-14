<?php
$film = $bdd->prepare('SELECT titre FROM film');
$film->execute();
?>
