<?php
$genre = $bdd->prepare('SELECT * FROM genre ORDER BY type ASC');
$genre->execute();
?>
