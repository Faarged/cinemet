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

        <!--création du formulaire-->
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
            <!--bouton pour valider l'ajout du film -->
            <input type="submit" value="Envoyer" />
          </p>
        </form>

<?php
//connexion à ma bdd en utilisant la page comabdd
require_once 'comabdd.php';

// Insertion du message à l'aide d'une requête préparée
/*if(isset($_POST['submit'])){ //si je clique sur envoyer
  if(isset($_POST['titre'], $_POST['duree'], $_POST['affiche'], $_POST['date_sortie'], $_POST['resume'], $_POST['trailer'], $_POST['realisateur'], $_POST['acteur'], $_POST['genre'])){
    if($_POST['titre'] != "" && $_POST['duree'] != "" && $_POST['affiche'] != "" && $_POST['date_sortie'] != "" && $_POST['resume'] != "" && $_POST['trailer'] != "" && $_POST['realisateur'] != "" && $_POST['acteur'] != "" && $_POST['genre'] != ""){
      $titre=  $_POST['titre'];
      $duree=  $_POST['duree'];
      $affiche=  $_POST['affiche'];
      $date=  $_POST['date_sortie'];
      $resume=  $_POST['resume'];
      $trailer=  $_POST['trailer'];
      $realisateur=  $_POST['realisateur'];
      $acteur=  $_POST['acteur'];
      $genre=  $_POST['genre'];

      $insertion = "INSERT INTO film (titre, duree, affiche, date_sortie, resume, trailer) VALUES('$titre', '$duree', '$affiche', '$date', '$resume', '$trailer') AND INSERT INTO acteur(nom_acteur) VALUES('$acteur') AND INSERT INTO realisateur(nom_real) VALUES('$realisateur') AND INSERT INTO genre(type) VALUES('$genre')";

      $execute = $bdd->query($insertion);

      if($execute == true){
        $msgSuccess = "Informations enregistrées avec succès";
      } else{
        $msgError = "L'enregistrement n'a pas pu être effectué";
      }
    }
  }
}*/

$req = $bdd->prepare('INSERT INTO film (titre, duree, affiche, date_sortie, resume, trailer) VALUES(?, ?, ?, ?, ?, ?) ');
$act = $bdd->prepare('INSERT INTO acteur (nom_acteur) VALUES(?)');
$genr = $bdd->prepare('INSERT INTO realisateur (nom_real) VALUES(?)');
$reali = $bdd->prepare('INSERT INTO genre (type) VALUES(?)');

$req->execute(array($_POST['titre'], $_POST['duree'], $_POST['affiche'], $_POST['date_sortie'], $_POST['resume'], $_POST['trailer']));
$act->execute(array($_POST['acteur']));
$genr->execute(array($_POST['genre']));
$reali->execute(array($_POST['realisateur']));
/*$req = $bdd->prepare('INSERT INTO genre (type) VALUES(?)');
$req->execute(array($_POST['genre']));
$req = $bdd->prepare('INSERT INTO acteur (acteur) VALUES(?)');
$req->execute(array($_POST['nom_acteur']));
$req = $bdd->prepare('INSERT INTO realisateur (realisateur) VALUES(?)');
$req->execute(array($_POST['nom_real'])); */
?>
      <!--<div>
        <?php
        /*if(isset($msgError)){
          echo $msgError;
        }elseif(isset($msgSuccess)){
          echo $msgSuccess;
        }*/
        ?>
      </div>-->
    </body>
</html>
