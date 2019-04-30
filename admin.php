<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container1">

        </div>
            <h1>ADMIN</h1>


        <p class="description">Admin vous permet d'ajouter un nouveau Film.</p>


        <form action="admin.php" method="post" id="formulaire">
            <p>
            <label for="titre">TITRE</label> : <input type="text" name="titre" id="titre"  /><br />
            <label for="duree">DUREE</label> :  <input type="time" name="duree" id="duree" /><br />
            <label for="affiche">AFFICHE</label> :  <input type="text" name="affiche" id="affiche" /><br />
            <label for="date_sortie">DATE_SORTIE</label> : <input type="date" name="date_sortie" id="date_sortie"  /><br />
            <label for="resume">RESUME</label> : <input type="text" name="resume" id="resume"  /><br />
            <label for="trailer">TRAILER</label> :  <input type="text" name="trailer" id="trailer" /><br />
            <label for="realisateur">REALISATEUR</label> : <input type="text" name="realisateur" id="realisateur"  /><br />
            <label for="acteur">ACTEUR</label> :  <input type="text" name="acteur" id="acteur" /><br />
            <label for="genre">GENRE</label> :  <input type="text" name="genre" id="genre" /><br />

            <input type="submit" value="Envoyer" />
        </p>
        </form>

<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', 'pioupiou');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO film (titre, duree, affiche, date_sortie, resume, trailer, realisateur, acteur, genre) VALUES(?, ?, ?, ?,?, ?, ?, ?, ?)');
$req->execute(array($_POST['titre'], $_POST['duree'], $_POST['affiche'], $_POST['date_sortie'], $_POST['resume'], $_POST['trailer'], $_POST['realisateur'], $_POST['acteur'], $_POST['genre']));




?>
    </body>
</html>
