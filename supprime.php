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
    <link rel="stylesheet" href="style/supp.css">
  </head>

    <body>
      <?php include 'header.html';?>
      <main>
      <?php
        require "php/comabdd.php";
        if(isset($_POST['erase'])){
          if(isset($_POST['titrefilm'])){
            $efface = $_POST['titrefilm'];
            $byefait = $bdd->prepare('DELETE FROM fait WHERE fait.id_film='.$efface);
            $byefait->execute();
            $byejoue = $bdd->prepare('DELETE FROM joue WHERE joue.id_film='.$efface);
            $byejoue->execute();
            $byepossede = $bdd->prepare('DELETE FROM possede WHERE possede.id_film='.$efface);
            $byepossede->execute();
            $erase = $bdd->prepare('DELETE FROM film WHERE film.id_film='.$efface);
            $erase->execute();
            echo "<h1>Le film sélectionné a été effacé</h1><br />";
          }else{
            echo "<h1>Aucune donnée à effacer</h1><br />";
          }
        }
      ?>
      <a class="retouradmin" href="admin.php">Retour page administrateur</a>
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
