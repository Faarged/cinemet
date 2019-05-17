
      <?php
        header('Location: admin.php');
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
