<!DOCTYPE html>
<html>

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Cinemet films</title>
      <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="style/allo_films.css">
      <link rel="stylesheet" href="style/animate.css">
      <link rel="stylesheet" href="style/header.css">
      <link rel="stylesheet" href="style/footer.css">
  </head>

    <body>


        <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <?php include 'header.html'; ?>

        <!--//////////////////////////////  HEADER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="header_films animated rollIn" id="nosfilms">
          <?php
          require 'php/comabdd.php';

          if(isset($_GET['id'])){
            $reponse = $bdd->prepare('SELECT type FROM genre WHERE genre.id_genre='.$_GET['id']);
            $reponse->execute();
            //$result = $reponse->fetchAll();
            while ($donnees = $reponse->fetch())
            {
              echo "<h1>$donnees[0]</h1>";
            }
            //echo "<h1>$result</h1>";
          }else{
             echo "<h1>NOS FILMS</h1>";
          }

          ?>

        </div>

        <!--//////////////////////////////  LISTE GAUCHE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="container nopadding" id="liste_films">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="menu_films">
                    <ul id="menu-accordeon">

                        <input type="search" id="site-search" name="q" aria-label="Search through site content">
                        <button>Rechercher</button>

                        <?php
                          $reponse = $bdd->prepare('SELECT id_genre, type FROM genre' /*WHERE genre=' .$_GET['id']*/);
                          $reponse->execute();
                          while ($donnees = $reponse->fetch())
                          {
                        ?>
                        <li><a href="film.php?id='<?php echo $donnees['id_genre']; ?>'" class="collapsible"><?php echo $donnees['type']; ?></a></li>
                        <?php }
                          $reponse->closeCursor(); // Termine le traitement de la requête
                        ?>
                          </ul>
                </div> <!--fin menu film-->

                <!--//////////////////////////////  LISTE GAUCHE POUR SMARTPHONE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

                <div class="menu_films_portable">
                    <ul id="menu-accordeon">
                        <input type="search" id="site-search" name="q" aria-label="Search through site content">
                        <button>Rechercher</button>
                        <li><a href="#" class="collapsible">Films</a>
                            <ul>
                              <?php
                                require_once 'php/comabdd.php';
                                $reponse = $bdd->prepare('SELECT id_genre, type FROM genre' /*WHERE genre=' .$_GET['id']*/);
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                              ?>
                              <li><a href="film.php?id='<?php echo $donnees['id_genre']; ?>'" class="collapsible"><?php echo $donnees['type']; ?></a></li>
                              <?php }
                                $reponse->closeCursor(); // Termine le traitement de la requête
                              ?>
                            </ul>
                        </li>
                    </ul>
                </div> <!--fin menu films portable-->
            </div>

            <!--//////////////////////////////  MINIATURES FILMS DROITE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <div class="liens_films fadeInUp animated">
                    <div class="titre"> Nouveautés </div><br>
                    <div class="mesfilms">
                      <!-- je connecte ma base de données -->
                      <?php
                      require_once 'php/comabdd.php';
                      // On récupère tout le contenu de la table film
                    //$reponse = $bdd->prepare('SELECT affiche, titre, id_film FROM film'/*possede genre WHERE film.id_film= possede.id_film AND possede.id_genre= genre.id_genre AND id_genre=' .$_GET['id']*/);

                      if(isset($_GET['id'])){
                        $reponse = $bdd->prepare('SELECT affiche, titre, film.id_film FROM film, possede, genre WHERE film.id_film= possede.id_film AND possede.id_genre= genre.id_genre AND genre.id_genre=' .$_GET['id']);
                      }else{
                         $reponse = $bdd->prepare('SELECT affiche, titre, id_film FROM film');
                      }
                      $reponse->execute();
                      // On affiche chaque entrée une à une
                      while ($donnees = $reponse->fetch())
                      {
                      ?>

                    <a href="content.php?id=<?php echo $donnees['id_film']; ?>"><img class="effect " src="<?php echo $donnees['affiche']; ?>" id="action">
                        <p><?php echo $donnees['titre']; ?></p>
                    </a>
                    <!-- ************Je ferme ma requete vers la BDD************** -->
                      <?php }

                      $reponse->closeCursor(); // Termine le traitement de la requête

                      ?>
                    </div>

              </div> <!-- fin col-->
            </div> <!-- fin row-->
          </div> <!-- fin container-->

        <!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <?php include 'footer.php'; ?>

        <!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div><a id="cRetour" class="cInvisible" href="#nosfilms"></a></div>



        <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
      <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="js/parallax.js"></script>
    </body>

  </html>
