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
      <?php include 'header.html';?>
        <div class="container1">


            <h1>ADMIN</h1>


        <p class="description">Ajout d'un film à la base de données</p>

        <!--création du formulaire-->
        <form action="admin.php" method="post" id="formulaire">

            <div class="form-group">
              <label for="titre">Titre</label>
              <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre">
            </div><br />
            <div class="form-group">
              <label for="duree">Durée</label>
              <input type="time" class="form-control" name="duree" id="duree">
            </div><br />
            <div class="form-group">
              <label for="affiche">Affiche</label>
              <input type="text" class="form-control" name="affiche" id="affiche" placeholder="Lien de l'affiche">
            </div><br />
            <div class="form-group">
              <label for="date_sortie">Date de sortie</label>
              <input type="date" class="form-control" name="date_sortie" id="date_sortie">
            </div><br />
            <div class="form-group"><label for="resume">Synopsis</label>
              <textarea class="form-control" id="resume" name="resume" rows="4"></textarea>
            </div><br />
            <div class="form-group">
              <label for="trailer">Trailer</label>
              <input type="text" class="form-control" name="trailer" id="trailer" placeholder="Lien du trailer">
            </div><br />
            <div class="form-group">
              <label for="realisateur">Realisateur</label>
              <label for="realisateur">déja indexé en bdd</label>
              <select class="form-control" name="realisateur" id="realisateur">
                <?php
                require 'php/comabdd.php';
                include 'php/adminreal.php';
                while ($donnees = $realisateur->fetch())
                {
                ?>
                <option><?php echo $donnees['nom_real'] ?></option>
              <?php }
              $realisateur->closeCursor();
              ?>
              </select><br />
              <input type="text" class="form-control" name="realisateur" id="realisateur" placeholder="Nouveau realisateur">
            </div><br />
            <div class="form-group">
              <label for="acteur">Acteur</label>
              <label for="acteur">déja indexé en bdd</label>
              <select class="form-control" name="acteur" id="acteur">
                <?php
                include 'php/adminacteur.php';
                while ($donnees = $acteur->fetch())
                {
                ?>
                <option><?php echo $donnees['nom_acteur'] ?></option>
                <?php }
                $acteur->closeCursor();
                ?>
              </select><br />
              <input type="text" class="form-control" name="acteur" id="acteur" placeholder="Nouvel acteur">
            </div><br />
            <div class="form-check form-check-inline">
              <label>Genre: </label>
                <?php
                include 'php/admingenre.php';
                while ($donnees = $genre->fetch())
                {
                ?>
              <input class="form-check-input" type="checkbox" name="genre" id="genre">
              <label class="form-check-label" for="genre"><?php echo $donnees['type']; ?></label>
                <?php }
                $genre->closeCursor();
                ?>
            </div><br />
            <!--bouton pour valider l'ajout du film -->
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>

        <?php include 'footer.html'; ?>
      <?php
      //connexion à ma bdd en utilisant la page comabdd
      require 'php/comabdd.php';

      // Insertion du message à l'aide d'une requête préparée
      if(isset($_POST['submit'])){ //si je clique sur envoyer
        if(isset($_POST['titre'], $_POST['duree'], $_POST['affiche'], $_POST['date_sortie'], $_POST['resume'], $_POST['trailer'], $_POST['realisateur'], $_POST['acteur'], $_POST['genre'])){

          $titre=  $_POST['titre'];
          $duree=  $_POST['duree'];
          $affiche=  $_POST['affiche'];
          $date=  $_POST['date_sortie'];
          $resume=  $_POST['resume'];
          $trailer=  $_POST['trailer'];
          $realisateur=  $_POST['realisateur'];
          $acteur=  $_POST['acteur'];
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


            /*$insertion1 = "INSERT INTO film  VALUES('$titre', '$duree', '$affiche', '$date', '$resume', '$trailer')";
            $insertion2 = "INSERT INTO acteur VALUES('$acteur')";
            $insertion3 = "INSERT INTO realisateur VALUES('$realisateur')";
            $insertion4 = "INSERT INTO genre VALUES('$genre')";
            $execute = $bdd->query($insertion1);
            $execute2 = $bdd->query($insertion2);
            $execute3 = $bdd->query($insertion3);
            $execute4 = $bdd->query($insertion4);

            if($execute == true && $execute2 == true && $execute3 == true && $execute4 == true){
              $msgSuccess = "Informations enregistrées avec succès";
            } else{
              $msgError = "L'enregistrement n'a pas pu être effectué";
          //  } */
        }
      }
      ?>
<!--/*$req = $bdd->prepare('INSERT INTO film (titre, duree, affiche, date_sortie, resume, trailer) VALUES(?, ?, ?, ?, ?, ?) ');
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
$req->execute(array($_POST['nom_real'])); */-->

        <div>
          <p>
          <?php
          if(isset($msgError)){
            echo $msgError;
          }elseif(isset($msgSuccess)){
            echo $msgSuccess;
          }
          ?>
          </p>
        </div>
      </div>


      <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
