<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style/animate.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/supp.css">
  </head>

    <body>
      <?php include 'header.html';?>
      <main>
<?php
//connexion à ma bdd en utilisant la page comabdd
require 'php/comabdd.php';

// Insertion du message à l'aide d'une requête préparée
if(isset($_POST['submit'])){
  //echo "<h1>ok</h1><br />";
  if(!empty($_POST['titre']) AND !empty($_POST['duree']) AND !empty($_POST['affiche']) AND !empty($_POST['date_sortie']) AND !empty($_POST['resume']) AND !empty($_POST['trailer']) AND !empty($_POST['realisateur']) AND !empty($_POST['acteur']) AND !empty($_POST['genre'])){
    echo "<h1>Entrées validées</h1><br />";
  }else{
    echo "<h1>Champs non remplis</h1><br />";
  }
}
if(isset($_POST['submit'])){ //si je clique sur envoyer
  if(isset($_POST['titre'], $_POST['duree'], $_POST['affiche'], $_POST['date_sortie'], $_POST['resume'], $_POST['trailer'], $_POST['realisateur'], $_POST['acteur'], $_POST['genre'])){
    if(isset($_POST['realisateur2'])){
      $realisateur= $_POST['realisateur2'];
    }else{
      $realisateur=  $_POST['realisateur'];
    }
    if(isset($_POST['acteur2'])){
      $acteur= $_POST['acteur2'];
    }else{
      $acteur=  $_POST['acteur'];
    }
    $titre=  $_POST['titre'];
    $duree=  $_POST['duree'];
    $affiche=  $_POST['affiche'];
    $date=  $_POST['date_sortie'];
    $resume=  $_POST['resume'];
    $trailer=  $_POST['trailer'];
    $genre=  $_POST['genre'];

    $req = $bdd->prepare('INSERT INTO film(titre, duree, affiche, date_sortie, resume, trailer)
    VALUES(:titre, :duree, :affiche, :date_sortie, :resume, :trailer)');
    $req->execute(array(
      'titre' => $titre,
      'duree' => $duree,
      'affiche' => $affiche,
      'date_sortie' => $date,
      'resume' => $resume,
      'trailer' => $trailer
    ));

    $req2 = $bdd->prepare('INSERT INTO realisateur(nom_real)
    VALUES(:nom_real)');
    $req2 ->execute(array(
      'nom_real' => $realisateur
    ));

    $req3 = $bdd->prepare('INSERT INTO acteur(nom_acteur)
    VALUES(:nom_acteur)');
    $req3 ->execute(array(
      'nom_acteur' => $acteur
    ));

    $req4 = $bdd->prepare('INSERT INTO genre(type)
    VALUES(:type)');
    $req4 ->execute(array(
      'type' => $genre
    ));
    /* fonctionne pour Axel et Momo, moins de ligne même si il faut taper 4requetes
    $req = $bdd->prepare('INSERT INTO FILM (TITRE, DUREE, DATE_SORTIE, AFFICHE, RESUME, VIDEO, REALISATEUR, ACTEUR) VALUES(?, ?, ?, ?,?, ?, ?, ?)');
$req->execute(array($_POST['TITRE'], $_POST['DUREE'], $_POST['DATE_SORTIE'], $_POST['AFFICHE'], $_POST['RESUME'], $_POST['VIDEO'], $_POST['REALISATEUR'], $_POST['ACTEUR'])); */
  }else{ die();}
}
?>
        <a class="retouradmin" href="admin.php">Retour page administrateur</a>
      </main>
    <?php include 'footer.html'; ?>

    <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    </body>
</html>
