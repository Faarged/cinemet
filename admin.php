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
        <form action="ajout.php" method="post" id="formulaire">

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



    </div>
    <!--************ liaisons entre tables**************** -->
    <div id="liaison">
      <p>Ajout de lien entre les tables</p>
      <form method="POST" action="">
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
      <form action="supprime.php" method="POST">

          <div class="form-group">
            <label for="titre">Film à effacer (entrez l'id correspondant au film voulu)</label>
            <input type="text" class="form-control" name="titrefilm" placeholder="ID du film à effacer">
          </div><br />
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Liste films
            </button>
              <div class="dropdown-menu dropdown-menu-lg-right"  aria-labelledby="dropdownMenuButton">

          <?php
          include 'php/adminfilm.php';
          while ($donnees = $film->fetch())
          {
          ?>
          <input class="form-control dropdown-item" type="text" placeholder="<?php echo $donnees['titre']; ?> id: <?php echo $donnees['id_film']; ?>" readonly>
        <?php }
        $film->closeCursor();
         ?>
            </div>
          </div>
         </div>
         <button type="submit" name="erase" class="btn btn-primary">Valider</button>
    </div>


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
