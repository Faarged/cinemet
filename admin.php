<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="style/animate.css">
        <link rel="stylesheet" href="style/header.css">
        <link rel="stylesheet" href="style/footer.css">
        <link rel="stylesheet" href="style/admin.css">
    </head>

    <body>
      <?php include 'header.html'; ?>
        <div class="container1">


            <h1>ADMIN</h1>


        <p class="description">Ajout d'un film à la base de données</p>

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

        <?php include 'footer.html'; ?>
      <?php
      //connexion à ma bdd en utilisant la page comabdd
      require_once 'comabdd.php';

      // Insertion du message à l'aide d'une requête préparée
      if(isset($_POST['submit'])){ //si je clique sur envoyer
        if(isset($_POST['titre'], $_POST['duree'], $_POST['affiche'], $_POST['date_sortie'], $_POST['resume'], $_POST['trailer'], $_POST['realisateur'], $_POST['acteur'], $_POST['genre'])){
          //if($_POST['titre'] && $_POST['duree'] && $_POST['affiche'] && $_POST['date_sortie'] && $_POST['resume'] && $_POST['trailer'] && $_POST['realisateur'] && $_POST['acteur'] && $_POST['genre']){
            $titre=  $_POST['titre'];
            $duree=  $_POST['duree'];
            $affiche=  $_POST['affiche'];
            $date=  $_POST['date_sortie'];
            $resume=  $_POST['resume'];
            $trailer=  $_POST['trailer'];
            $realisateur=  $_POST['realisateur'];
            $acteur=  $_POST['acteur'];
            $genre=  $_POST['genre'];

            $insertion1 = "INSERT INTO film  VALUES(NULL, '$titre', '$duree', '$affiche', '$date', '$resume', '$trailer')";
            $insertion2 = "INSERT INTO acteur VALUES(NULL, '$acteur')";
            $insertion3 = "INSERT INTO realisateur VALUES(NULL, '$realisateur')";
            $insertion4 = "INSERT INTO genre VALUES(NULL, '$genre')";
            $execute = $bdd->query($insertion1);
            $execute2 = $bdd->query($insertion2);
            $execute3 = $bdd->query($insertion3);
            $execute4 = $bdd->query($insertion4);

            if($execute == true && $execute2 == true && $execute3 == true && $execute4 == true){
              $msgSuccess = "Informations enregistrées avec succès";
            } else{
              $msgError = "L'enregistrement n'a pas pu être effectué";
          //  }
          }
        }
      }

/*$req = $bdd->prepare('INSERT INTO film (titre, duree, affiche, date_sortie, resume, trailer) VALUES(?, ?, ?, ?, ?, ?) ');
$act = $bdd->prepare('INSERT INTO acteur (nom_acteur) VALUES(?)');
$genr = $bdd->prepare('INSERT INTO realisateur (nom_real) VALUES(?)');
$reali = $bdd->prepare('INSERT INTO genre (type) VALUES(?)');

$req->execute(array($_POST['titre'], $_POST['duree'], $_POST['affiche'], $_POST['date_sortie'], $_POST['resume'], $_POST['trailer']));
$act->execute(array($_POST['acteur']));
$genr->execute(array($_POST['genre']));
$reali->execute(array($_POST['realisateur']));*/
/*$req = $bdd->prepare('INSERT INTO genre (type) VALUES(?)');
$req->execute(array($_POST['genre']));
$req = $bdd->prepare('INSERT INTO acteur (acteur) VALUES(?)');
$req->execute(array($_POST['nom_acteur']));
$req = $bdd->prepare('INSERT INTO realisateur (realisateur) VALUES(?)');
$req->execute(array($_POST['nom_real'])); */
?>
        <div>
          <?php
          if(isset($msgError)){
            echo $msgError;
          }elseif(isset($msgSuccess)){
            echo $msgSuccess;
          }
          ?>
        </div>
      </div>


      <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
