<?php
$acteur = $bdd->prepare('SELECT * FROM acteur ORDER BY nom_acteur ASC');
$acteur->execute();
?>
