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
            <label for="titre">TITRE</label> : <input type="text" name="TITRE" id="TITRE"  /><br />
            <label for="duree">DUREE</label> :  <input type="time" name="DUREE" id="DUREE" /><br />
            <label for="affiche">AFFICHE</label> :  <input type="text" name="AFFICHE" id="AFFICHE" /><br />
            <label for="date_sortie">DATE_SORTIE</label> : <input type="date" name="DATE_SORTIE" id="DATE_SORTIE"  /><br />
            <label for="resume">RESUME</label> : <input type="text" name="RESUME" id="RESUME"  /><br />
            <label for="trailer">TRAILER</label> :  <input type="text" name="VIDEO" id="VIDEO" /><br />
            <label for="REALISATEUR">REALISATEUR</label> : <input type="text" name="REALISATEUR" id="REALISATEUR"  /><br />
            <label for="ACTEUR">ACTEUR</label> :  <input type="text" name="ACTEUR" id="ACTEUR" /><br />
            <label for="genre">GENRE</label> :  <input type="text" name="genre" id="genre" /><br />

            <input type="submit" value="Envoyer" />
        </p>
        </form>

<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=cinemet;charset=utf8', 'root', 'toor');
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
