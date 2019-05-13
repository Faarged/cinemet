<?php
$acteur = $bdd->prepare('SELECT * FROM film, joue, acteur WHERE film.id_film=joue.id_film AND joue.id_acteur=acteur.id_acteur AND film.id_film='.$_GET['id'] );
$acteur->execute();
?>
