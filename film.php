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

        <div class="row nopadding" id="liste_films">
            <div class="col-lg-3 col-md-4 col-sm-4">
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
                </div>

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
                </div>
            </div>

            <!--//////////////////////////////  MINIATURES FILMS DROITE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

            <div class="col-lg-9 col-md-8 col-sm-8">
                <div class="liens_films fadeInUp animated">
                    <div class="titre"> Nouveautés </div><br />
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
            </div>

        <!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <footer id="footer" class="page-footer font-small text-white mdb-color pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left ">

                <!-- Footer links -->
                <div class="row text-center text-md-left mt-3 pb-3 mx-auto">

                    <!-- Grid column -->
                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class=" text-uppercase mb-4  font-weight-bold text-white"><a href="index.html"> AllocineMET</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none">

                    <!-- Grid column -->
                    <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" id="foot">
                        <h5 class="text-uppercase mb-4 font-weight-bold">Films à l'affiche</h5>
                        <p>
                            <a href="#">Film 1</a>
                        </p>
                        <p>
                            <a href="#">Film 2</a>
                        </p>
                        <p>
                            <a href="#">Film 3</a>
                        </p>
                        <p>
                            <a href="#">Film 4</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" id="foot">

                    <!-- Grid column -->
                    <div class="col-sm-3 col-md-3 col-lg-2 col-xl-2 mx-auto mt-3" id="foot">
                        <h5 class="text-uppercase mb-4 font-weight-bold">Liens utiles</h5>
                        <p>
                            <a href="https://simplon.co/">Lorem Ipsum</a>
                        </p>
                        <p>
                            <a href="https://simplon-charleville.fr/">Lorem Ipsum</a>
                        </p>
                        <p>
                            <a href="#!">Lorem Ipsum</a>
                        </p>
                        <p>
                            <a href="#">Lorem Ipsum</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" id="foot">

                    <!-- Grid column -->
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold"><a href="contact.php">Contact</a></h5>
                        <p>
                            AllocineMET</p>
                        <p>
                            www.AllocineMET.net</p>
                        <p>
                            TEL +33 6 52 50 05 35</p>
                        <p>
                            TEL +33 6 87 26 69 70</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Footer links -->

                <hr class="hr-footer">

                <!-- Grid row -->
                <div class="row d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7">

                        <!--Copyright-->
                        <p class="text-center text-md-left">© 2019 Copyright: AllocineMET

                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 ml-lg-0">

                        <!-- Social buttons -->
                        <div class="text-center text-md-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/">
                                        <img src="img/facebook.png" title="facebook">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/">
                                        <img src="img/twitter.png" title="twitter">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://github.com/">
                                        <img src="img/github.png" title="github">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://fr.linkedin.com/">
                                        <img src="img/linkedin.png" title="linkedin">
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

        </footer>

        <!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>


        <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
      <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="js/parallax.js"></script>
    </body>

  </html>
