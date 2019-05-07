<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Cinemet</title>
      <!-- les liens -->
      <link rel="stylesheet" href="style/reset.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="style/animate.css">
      <link rel="stylesheet" href="style/flick.css"/>
      <link rel="stylesheet" href="style/owl.carousel.min.css">
      <link rel="stylesheet" href="style/index.css">
      <link rel="stylesheet" href="style/header.css">
      <link rel="stylesheet" href="style/footer.css">
    </head>
    <body>
      <?php
      //j'appelle ma connexion a la bdd
      require_once 'php/comabdd.php';
      //je stock ma bdd ds une variable reponse
      $reponse = $bdd->query("SELECT * FROM film");
      // On affiche chaque entrée une à une grace à la boucle while, la variable donnees contient 1 ligne par 1 ligne
      while ($donnees = $reponse->fetch())
      {
      ?>
      <!--*******************Navbar******************-->
      <?php include 'header.html'; ?>

      <!--***********************Slider***********************-->
      <div class="bd-example animated slideInLeft" id="slideraccueil">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo $donnees['affiche']; ?>" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="titreslide">Cinemet</h5>
                <p class="textslide">VOTRE lieu de visionnage des meilleurs productions.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo $donnees['affiche']; ?>" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>A l'affiche</h5>
                <p>les dernières sorties.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo $donnees['affiche']; ?>" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Nos films</h5>
                <p>disponibles dans notre filmothèque <a href="film.php">ici</a>.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <?php }
      $reponse->closeCursor(); // Termine le traitement de la requête
      ?>

      <!--****************************mini-carousel********************** -->
      <!--  <div class="Container container-fluid">
          <ul class="Carousel">
            <li class="Items Front"><img src="img/3.jpg" class="w-100" alt="..."></li>
            <li class="Items Left"><img src="img/7.jpg" class="w-100" alt="..."></li>
            <li class="Items Left2"><img src="img/9.jpg" class="w-100" alt="..."></li>
            <li class="Items Right"><img src="img/1.jpg" class="w-100" alt="..."></li>
            <li class="Items Right2"><img src="img/5.jpg" class="w-100" alt="..."></li>
          </ul>
        </div>-->
       <!--<div class="owl-carousel container-fluid" id="owlcarousel">
          <div class="item"><img src="img/3.jpg" class="w-100 autoHeight" alt="..."></div>
          <div class="item"><img src="img/7.jpg" class="w-100 autoHeight" alt="..."></div>
          <div class="item"><img src="img/9.jpg" class="w-100 autoHeight" alt="..."></div>
          <div class="item"><img src="img/1.jpg" class="w-100 autoHeight" alt="..."></div>
          <div class="item"><img src="img/5.jpg" class="w-100 autoHeight" alt="..."></div>
        </div>-->
        <!-- Flickity HTML init -->
      <div class="carousel js-flickity">
        <!-- images from unsplash.com -->
        <?php
        require_once 'php/comabdd.php';

        // Si tout va bien, on peut continuer

        // On récupère tout le contenu de la table film
        $reponse = $bdd->query('SELECT affiche, titre, id_film FROM film LIMIT 9');
        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch())
        {

        ?>
        <div class="carousel-cell">
          <a href="content.php?id=<?php echo $donnees['id_film']; ?>"><img src="<?php echo $donnees['affiche']; ?>" alt="<?php echo $donnees['titre']; ?>" /></a>
        </div>

        <?php }
        $reponse->closeCursor(); // Termine le traitement de la requête
        ?>

      </div> <!-- fin du mini carousel-->

      <!--**************************parallax*********************** -->
      <div class="parallax-window" data-parallax="scroll" data-image-src="img/salle.jpg"></div>


      <div class="container-fluid">
          <div class="row">
            <h5>ALLOCINE<strong>MET</strong></h5>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                <img class="animated slideInLeft" src="img/matrix.jpg" style="max-width: 100%; max-height: 50em;">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
              <p>Le cinéma METROPOLIS naît d’une réflexion menée en 1997.
                Il paraît alors en effet certain que les 5 salles
                du cinéma «LES CLUBS» et la salle du «FORUM» ne
                correspondraient rapidement plus aux attentes du
                public. La restructuration complète des deux
                établissements est rapidement abandonnée.
                Un projet de construction d’un multiplexe de
                10 salles est alors conduit.</p>
              <p>La décoration du cinéma METROPOLIS repose
                principalement sur deux grandes toiles tirées
                du film éponyme de Ftritz LANG (1928). La
                passerelle du hall ainsi que le traitement du
                sol rejoignent les décors du film.
                Volontairement, les systèmes techniques
                (gaines de ventilation et chemins électriques)
                ont été laissés apparents.</p>
              <p>Le Cinéma METROPOLIS est situé en centre-ville, à 300 mètres de la place Ducale, coeur historique de Charleville-Mézières.
                L'arrivée de la "voie rapide", elle aussi à 300 mètres du cinéma, permet un accès direct et facile pour ceux qui viennent par la route.
                Le parking est gratuit tous les jours de 12h00 à 14h00 et après 18h30 jusqu'au lendemain 9h00.
                Il est gratuit le dimanche toute la journée.
                La première heure et demie est gratuite le mercredi, le vendredi après-midi et le samedi.</p>
                <p>
                  Le CINÉ-CAFÉ est à votre disposition pour
                  prendre un verre, vous retrouver ou calmer
                  une petite faim, avant ou après la séance de cinéma.
                  Le comptoir CONFISERIE vous propose boissons,
                  pop-corn, friandises et tout ce qu'il faut
                  pour un bon moment de cinéma.
                </p>
            </div>
          </div>
      </div>
      <!-- *****************inclusion du footer********************-->
      <?php include 'footer.php'; ?>
      <div><a id="cRetour" class="cInvisible" href="#slideraccueil"></a></div>

      <!-- ************Je ferme ma requete vers la BDD************** -->

      <script src="js/flick.js"></script>
      <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="js/parallax.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script>
    /*  $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
      });*/
        $(function(){
          var front = $('.Front'),
              others = ['Left2', 'Left', 'Right', 'Right2'];

          $('.Carousel').on('click', '.Items', function() {
            var $this = $(this);

            $.each(others, function(i, cl) {
              if ($this.hasClass(cl)) {
                front.removeClass('Front').addClass(cl);
                front = $this;
                front.addClass('Front').removeClass(cl);
              }
            });
          });
        });
      </script>
    </body>
  </html>
