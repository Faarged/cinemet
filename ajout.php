
<?php

header('Location: admin.php');
//connexion à ma bdd en utilisant la page comabdd
require 'php/comabdd.php';

// Insertion du message à l'aide d'une requête préparée
try {
  if(!empty($_POST['titre']) AND !empty($_POST['duree']) AND !empty($_POST['affiche']) AND !empty($_POST['date_sortie']) AND !empty($_POST['resume']) AND !empty($_POST['trailer']) AND !empty($_POST['realisateur']) AND !empty($_POST['acteur'])){
    echo "<h1>Entrées validées</h1><br />";
  }else{
    echo "<h1>Champs non remplis</h1><br />";
  }


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

    /*
    $req4 = $bdd->prepare('SELECT id_film FROM film WHERE titre='.$titre);
    $req4 ->execute();
    while ($donnees = $req4->fetch())
    { $idfilm = $donnees['id_film'];}

    $req5 = $bdd->prepare('SELECT id_genre FROM genre WHERE type='.$genre);
    $req5 ->execute();
    while ($donnees = $req5->fetch())
    { $idgenre = $donnees['id_genre'];}

    $req6 = $bdd->prepare('INSERT INTO possede(id_film, id_genre)
    VALUES(:film, :type)');
    $req6 ->execute(array(
      'type' => $idgenre,
      'film' => $idfilm
    ));  */

  /* fonctionne pour Axel et Momo, moins de ligne même si il faut taper 4requetes
    $req = $bdd->prepare('INSERT INTO FILM (TITRE, DUREE, DATE_SORTIE, AFFICHE, RESUME, VIDEO, REALISATEUR, ACTEUR) VALUES(?, ?, ?, ?,?, ?, ?, ?)');
$req->execute(array($_POST['TITRE'], $_POST['DUREE'], $_POST['DATE_SORTIE'], $_POST['AFFICHE'], $_POST['RESUME'], $_POST['VIDEO'], $_POST['REALISATEUR'], $_POST['ACTEUR'])); */
  }else{ die();}
} catch(Exception $e){
  echo 'Une erreur est survenue'.$e->getMessage().'\n';
}
?>
