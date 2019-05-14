<?php
$realisateur = $bdd->prepare('SELECT * FROM realisateur ORDER BY nom_real ASC');
$realisateur->execute();
?>
