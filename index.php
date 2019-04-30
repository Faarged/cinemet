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
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="style/animate.css">
      <link rel="stylesheet" href="style/index.css">
      <link rel="stylesheet" href="style/header.css">
      <link rel="stylesheet" href="style/footer.css">
    </head>
    <body>
      <?php
      //j'appelle ma connexion a la bdd
      require_once 'comabdd.php';
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

      <!--****************************mini-carousel********************** -->
        <div class="Container container-fluid">
          <ul class="Carousel">
            <li class="Items Front"><img src="img/3.jpg" class="w-100" alt="..."></li>
            <li class="Items Left"><img src="img/7.jpg" class="w-100" alt="..."></li>
            <li class="Items Left2"><img src="img/9.jpg" class="w-100" alt="..."></li>
            <li class="Items Right"><img src="img/1.jpg" class="w-100" alt="..."></li>
            <li class="Items Right2"><img src="img/5.jpg" class="w-100" alt="..."></li>
          </ul>
        </div>


      <!--**************************parallax*********************** -->
      <div class="parallax-window" data-parallax="scroll" data-image-src="img/salle.jpg"></div>


      <div class="container-fluid">
          <div class="row">
            <h5>ALLOCINE<strong>MET</strong></h5>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                <img class="animated slideInLeft" src="img/matrix.jpg" style="max-width: 100%; max-height: 50em;">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Corporis sequi corrupti fuga? Neque ex
                illum  tempore
                distinctio, expedita nostrum nisi at dignissimos vel
                fuga veritatis quia. Tempore, ullam amet.  Iste.
              </p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Corporis sequi corrupti fuga? Neque exillum
                tempore distinctio, expedita nostrum nisi at
                dignissimos vel fuga veritatis quia. Tempore, ullam
                amet.Iste.
              </p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sequi corrupti fuga? Neque ex
                illum
                tempore
                distinctio, expedita nostrum nisi at dignissimos vel fuga veritatis quia. Tempore, ullam amet.
                Iste.
              </p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sequi corrupti fuga? Neque ex
                illum
                tempore
                distinctio, expedita nostrum nisi at dignissimos vel fuga veritatis quia. Tempore, ullam amet.
                Iste.
              </p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sequi corrupti fuga? Neque ex
                illum
                tempore
                distinctio, expedita nostrum nisi at dignissimos vel fuga veritatis quia. Tempore, ullam amet.
                Iste.
              </p>
            </div>
          </div>
      </div>
      <!-- *****************inclusion du footer********************-->
      <?php include 'footer.php'; ?>

      <!-- ************Je ferme ma requete vers la BDD************** -->
    <?php }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>

      <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="js/parallax.js"></script>
      <script>
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
