<?php

function getligne($bdd, $nb = null, $id = null){
  if($nb AND !$id){
    $reponse = $bdd->query('SELECT * FROM film LIMIT'.$nb);
    $donnees = $reponse->fetchAll();
  }elseif($id){
    $reponse = $bdd->query('SELECT * FROM film WHERE id ='.$id);
    $donnees = $reponse->fetchObject();
  }else{
    $reponse = $bdd->query('SELECT * FROM film');
    $donnees = $reponse->fetchAll();
  }
  return $donnees;
}
