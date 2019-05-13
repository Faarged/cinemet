<?php
$realisateur = $bdd->prepare('SELECT * FROM film, fait, realisateur WHERE film.id_film=fait.id_film AND fait.id_real=realisateur.id_real AND film.id_film='.$_GET['id'] );
$realisateur->execute();
?>
