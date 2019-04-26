<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Content</title>
    <link rel="stylesheet" href="style/reset.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- pour les autres textes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<!--mon CSS -->
    <link rel="stylesheet" href="style/style_pages_cont_real_act.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">

</head>

<body>
  <!-- je connecte ma base de données -->
  <?php
  try
  {
  	// On se connecte à MySQL avec pdo
  	$bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', 'pioupiou');
  }
  catch(Exception $e)
  {
  	// En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }

  // Si tout va bien, on peut continuer

  // On récupère tout le contenu de la table film
  $reponse = $bdd->query('SELECT * FROM film');

  // On affiche chaque entrée une à une
  while ($donnees = $reponse->fetch())
  {
  ?>
    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include 'header.html'; ?>


  <main id="content">

    <!--  pour le titre -->

  <div class="hoofd">
    <h1 class="text-uppercase"><?php echo $donnees['titre']; ?></h1>
  </div>

    <!-- pour l'image du film -->
    <div class="media shadow-lg p-3 mb-5 bg-light rounded">
      <img src="<?php echo $donnees['affiche']; ?>" class="mr-3">
    </div>

    <!-- pour la description du film -->

    <p class="text-center bg-light"><?php echo $donnees['resume']; ?></p>

    <!-- pour la partie récap d'infos et la bande annonce -->

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="list-group">
        <a href="realisateur.html" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Réalisateur</h5>
          </div>
          <p class="mb-1"><?php echo $donnees['realisateur']; ?>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Durée</h5>
          </div>
          <p class="mb-1"><?php echo $donnees['duree']; ?>
        </a>
        <a href="acteur.html" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Acteur vedette</h5>
          </div>
          <p class="mb-1"><?php echo $donnees['acteur']; ?>
        </a>
      </div>
    </div>

  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <iframe class="shadow-lg p-3 mb-5 bg-light rounded" src="<?php echo $donnees['trailer']; ?>" height="100%" width="100%"></iframe>
  </div>

</div> <!-- fin row-->

  </main>

<?php include 'footer.php'; ?>

  <div><a id="cRetour" class="cInvisible" href="#content"></a></div>
<?php }

$reponse->closeCursor(); // Termine le traitement de la requête

?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>

$('.m-nav-toggle').click(function(e){
        e.preventDefault();
        $('#Navbar').toggleClass('is-open');
    })

document.addEventListener('DOMContentLoaded', function () {
    window.onscroll = function (ev) {
        document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" :
            "cInvisible";
    };
});

$('#sidebarCollapse').click(function (e) {
    e.preventDefault();
    $('#sidebar').toggleClass('active');
})

function openModal() {
    document.getElementById("modal").style.top = "0px";
}

function closeModal() {
    document.getElementById("modal").style.top = "-780px";
}</script>

</body>
</html>
