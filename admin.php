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
        <link rel="stylesheet" href="style/admin.css">
    </head>

    <body>
      <?php include 'header.html';?>
      <main>

        <div class="container1">


      <h1>ADMIN</h1>
      <?php
      if(!isset($_POST['mot_de_passe']) OR $_POST['mot_de_passe'] != "jesuisunmauvaismotdepasse"){
      ?>
      <p>Veuillez entrer le mot de passe pour débloquer l'accès :</p>
      <form action="admin.php" method="post">
        <p>
        <input type="password" name="mot_de_passe" />
        <input type="submit" value="Valider" />
        </p>
      </form>
      <p>Cette page est réservée au personnel administrateur du site cinemet</p>

      <?php }
      else{
      ?>

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
              <input type="text" class="form-control" name="realisateur2" id="realisateur2" placeholder="Nouveau realisateur">
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
              <input type="text" class="form-control" name="acteur2" id="acteur" placeholder="Nouvel acteur">
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
            <button type="submit" name="submit" class="btn btn-primary">Valider</button>
        </form>


      <?php
      //connexion à ma bdd en utilisant la page comabdd
      require 'php/comabdd.php';

      // Insertion du message à l'aide d'une requête préparée
      if(isset($_POST['submit'])){
        //echo "<h1>ok</h1><br />";
        if(!empty($_POST['titre']) AND !empty($_POST['duree']) AND !empty($_POST['affiche']) AND !empty($_POST['date_sortie']) AND !empty($_POST['resume']) AND !empty($_POST['trailer']) AND !empty($_POST['realisateur']) AND !empty($_POST['acteur']) AND !empty($_POST['genre'])){
          echo "<h1>Entrées validées</h1><br />";
        }else{
          echo "<h1>champs non remplis</h1><br />";
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
        }else{ die();}
      }
      ?>
    </div>
    <!--************ liaisons entre tables**************** -->
    <div id="liaison">
      <p>Ajout de lien entre les tables</p>
      <form>
        <div class="form-check form-check-inline">
          <label>Liaison film-genre: </label>
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
        <button type="submit" name="link" class="btn btn-primary">Valider</button>
      </form>
      <?php
      if(isset($_POST['link'])){
        $idfilm=  $_POST['film'];
        $idgenre=  $_POST['idgenre'];

        $lien = $bdd->prepare('INSERT INTO possede(id_genre, id_film)
        VALUES(:idfilm, :idgenre)');
        $lien->execute(array(
          'idfilm' => $idfilm,
          'idgenre' => $idgenre
        ));
      }
      ?>
    </div>

    <!--***************************** effacement**************************** -->
    <div id="suppression">
      <p>Suppression de film</p>
      <form action="admin.php" method="post">

          <div class="form-group">
            <label for="titre">Film à effacer (entrez l'id correspondant au film voulu)</label>
            <input type="text" class="form-control" name="titrefilm" placeholder="ID du film à effacer">
          </div><br />
          <?php
          include 'php/adminfilm.php';
          while ($donnees = $film->fetch())
          {
          ?>
          <input class="form-control" type="text" placeholder="Pour supprimer '<?php echo $donnees['titre']; ?>' entrer <?php echo $donnees['id_film']; ?>" readonly><br />
        <?php }
        $film->closeCursor();
         ?>
         <button type="submit" name="erase" class="btn btn-primary">Valider</button>
    </div>
    <?php
      /*if(isset($_POST['erase'])){
        if(isset($_POST['titrefilm'])){
          $efface = $_POST['titrefilm'];
          $erase = $bdd->prepare('DELETE FROM film WHERE film.id_film='$efface);
          $erase->execute();
          echo "Le film sélectionné a été effacé";
        }else{
          echo "<h1>Aucune donnée à effacer</h1>";
        }
      } */
    ?>

    <?php }
    ?>
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
