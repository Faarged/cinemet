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
      <link rel="stylesheet" href="style/allo_films.css">
      <link rel="stylesheet" href="style/animate.css">
      <link rel="stylesheet" href="style/header.css">
  </head>

    <body>

        <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <?php include 'header.html'; ?>

        <!--//////////////////////////////  HEADER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="header_films">
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

                        <li><a href="#" class="collapsible">Action</a>
                            <ul>
                                <li><a href="#">Top 2019</a></li>
                                <li><a href="#">Meilleurs films</a></li>
                                <li><a href="#">Box office</a></li>
                                <li><a href="#">Tous les films</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="collapsible">Science-fiction</a>
                            <ul>
                                <li><a href="#">Top 2019</a></li>
                                <li><a href="#">Meilleurs films</a></li>
                                <li><a href="#">Box office</a></li>
                                <li><a href="#">Tous les films</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="collapsible">Comédie</a>
                            <ul>
                                <li><a href="#">Top 2019</a></li>
                                <li><a href="#">Meilleurs films</a></li>
                                <li><a href="#">Box office</a></li>
                                <li><a href="#">Tous les films</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="collapsible">Drame</a>
                            <ul>
                                <li><a href="#">Top 2019</a></li>
                                <li><a href="#">Meilleurs films</a></li>
                                <li><a href="#">Box office</a></li>
                                <li><a href="#">Tous les films</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="collapsible">Animation</a>
                            <ul>
                                <li><a href="#">Top 2019</a></li>
                                <li><a href="#">Meilleurs films</a></li>
                                <li><a href="#">Box office</a></li>
                                <li><a href="#">Tous les films</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="collapsible">Horreur</a>
                            <ul>
                                <li><a href="#">Top 2019</a></li>
                                <li><a href="#">Meilleurs films</a></li>
                                <li><a href="#">Box office</a></li>
                                <li><a href="#">Tous les films</a></li>
                            </ul>
                        </li>
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
                    <a href="content.php"><img class="effect " src="img/1.jpg" id="action">
                        <p>blablabla</p>
                    </a>
                    <a href="content.php"><img class="effect " src="img/2.jpg" id="science-fiction">
                        <p>blablabla</p>
                    </a>
                    <a href="content.php"><img class="effect " src="img/3.jpg" id="horreur">
                        <p>blablabla</p>
                    </a>
                    <a href="content.php"><img class="effect " src="img/4.jpg" id="action">
                        <p>blablabla</p>
                    </a>
                    <a href="content.php"><img class="effect " src="img/5.jpg" id="science-fiction">
                        <p>blablabla</p>
                    </a>
                    <a href="content.php"><img class="effect " src="img/6.jpg" id="horreur">
                        <p>blablabla</p>
                    </a>
                    <a href="content.php"><img class="effect " src="img/7.jpg" id="action">
                        <p>blablabla</p>
                    </a>
                    <a href="content.php"><img class="effect " src="img/8.jpg" id="science-fiction">
                        <p>blablabla</p>
                    </a>
                    <a href="content.php"><img class="effect " src="img/9.jpg" id="horreur">
                        <p>blablabla</p>
                    </a>
                    <a href="content.php"><img class="effect " src="img/10.jpg" id="action">
                        <p>blablabla</p>
                    </a>
                </div>
              </div> <!-- fin col-->
            </div> <!-- fin row-->
          </div> <!-- fin container-->

        <!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <?php include 'footer.php'; ?>

        <!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div><a id="cRetour" class="cInvisible" href="#liste_film"></a></div>


        <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
      <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="js/parallax.js"></script>
    </body>

  </html>
