<?php
session_start();
$_SESSION['Nombre']=$_GET['Nombre'];
$_SESSION['Destination']=$_GET['Destination'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/voyage.css" charset="utf-8">
    <title>recapitulatif</title>
  </head>
  <body>
    <div class="top">
      <img src="img/1.jpg" width="100%" height="450px" class="top"/>
    </div>

    <?php
      $nom=$_SESSION['Nom'];
      $prenom=$_SESSION['Prenom'];
      $nombrep=$_SESSION['Nombre'];
      $choice=$_GET['Destination'];
      $trip=$_SESSION['trip'];

      if($choice == '1'){
        $choice= ' un voyage au Canari pour seulement ';
        $price= '500€';
        $total=$_SESSION['Nombre']*$price;
      }elseif ($choice == '2'){
        $choice= ' un voyage au Baleares pour seulement ';
        $price= '700€';
        $total=$_SESSION['Nombre']*$price;
      }elseif ($choice == '3'){
        $choice= ' une excursion au Louvres pour seulement ';
        $price= '150€';
        $total=$_SESSION['Nombre']*$price;
      }elseif ($choice == '4') {
        $choice= ' une excursion à la tour Eiffel  pour seulement ';
        $price= '100€';
        $total=$_SESSION['Nombre']*$price;
      }else {
        $price= 0;
      }
      echo '<div class="recap">';
      echo '<span>Bonjour</span>, '.$_SESSION['Civ'].' '.$_SESSION['Nom'].' '.$_SESSION['Prenom'].'<br>';
      echo 'Vous avez choisi '.$choice.'<span>'.$price.' </span>'.'par personne'.'<br>';
      echo 'Vous nous avez indiquer '.$_SESSION['Nombre'].' personne(s)'.'<br>';
      echo 'Le montant total est de <span>'.$total.'€</span><br>';
      echo '<a href="formulaire.php">Retour au formulaire</a>';
      echo '</div>';
   ?>

  </body>
</html>
