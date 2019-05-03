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
            <h1>NOS FILMS</h1>
        </div>

        <!--//////////////////////////////  LISTE GAUCHE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="container nopadding" id="liste_films">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="menu_films">
                    <ul id="menu-accordeon">

                        <input type="search" id="site-search" name="q" aria-label="Search through site content">
                        <button>Rechercher</button>

                        <li><a href="film.php?id='action'" class="collapsible">Action</a></li>
                        <li><a href="#" class="collapsible">Horreur</a></li>
                        <li><a href="#" class="collapsible">Comédie</a></li>
                        <li><a href="#" class="collapsible">Thriller</a></li>
                        <li><a href="#" class="collapsible">Drame</a></li>
                        <li><a href="#" class="collapsible">Romantique</a></li>
                    </ul>
                </div> <!--fin menu film-->

                <!--//////////////////////////////  LISTE GAUCHE POUR SMARTPHONE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

                <div class="menu_films_portable">
                    <ul id="menu-accordeon">
                        <input type="search" id="site-search" name="q" aria-label="Search through site content">
                        <button>Rechercher</button>
                        <li><a href="#" class="collapsible">Films</a>
                            <ul>
                                <li><a href="#" class="collapsible">Action</a>

                                </li>
                                <li><a href="#" class="collapsible">Science-fiction</a>

                                </li>
                                <li><a href="#" class="collapsible">Comédie</a>

                                </li>
                                <li><a href="#" class="collapsible">Drame</a>

                                </li>
                                <li><a href="#" class="collapsible">Animation</a>

                                </li>
                                <li><a href="#" class="collapsible">Horreur</a>

                                </li>
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

                      // Si tout va bien, on peut continuer

                      // On récupère tout le contenu de la table film
                    $reponse = $bdd->query('SELECT affiche, titre, id_film FROM film' /*WHERE genre=' .$_GET['id']*/);
                      // On affiche chaque entrée une à une
                      while ($donnees = $reponse->fetch())
                      {
                      //foreach ($donnees as $film){

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
