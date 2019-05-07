<?php
  $reponse = $bdd->query("SELECT * FROM film, `fait`, realisateur, `joue`, acteur WHERE fait.id_film= film.id_film AND fait.id_real= realisateur.id_real AND joue.id_film= film.id_film AND joue.id_acteur= acteur.id_acteur AND film.id_film=".$_GET["id"]);
?>
