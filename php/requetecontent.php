<?php
  $reponse = $bdd->prepare("SELECT * FROM film WHERE film.id_film=".$_GET["id"]);
  $reponse->execute();
?>
