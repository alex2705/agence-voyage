<?php
session_start();
$_SESSION['Nom']=$_GET['Nom'];
$_SESSION['Prenom']=$_GET['Prenom'];
$_SESSION['Choix']=$_GET['Choix'];
$_SESSION['Civ']=$_GET['Civ'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/voyage.css" charset="utf-8">
    <title>formulaire voyage/excursion</title>
  </head>
  <body>
    <div class="top">
      <img src="img/1.jpg" width="100%" height="450px" class="top"/>
    </div>
    <section class="ag">
        <?php
        if($_GET['Choix'] == "voyage" ){
          $trip= 'un voyage';
        echo '<div class ="middle">';
        echo '<form action="recapitulatif.php" method="get" class="pure-form pure-form-aligned">';
        echo '<h1> Voyage </h1>';
        echo  '<h3>Choix Voyage:</h3>';
        echo    '<select name="Destination">';
        echo     '<option value="1"> un voyage aux Iles Canari !le kiff pour seulement 500€</option>';
        echo     '<option value="2"> un voyage aux Baleares !le kiff pour seulement 700€</option>';
        echo   '</select><br>';
        echo   '<label for="nombre"><h3>Nombre de personnes:</h3></label>';
        echo   '<input type="text" id="nombre" name="Nombre" required placeholder="Entrez un nombre"/><br>';
        echo   '<br><input type="submit" value="Suite"/>';
        echo '</form></div>';
        } else {
          $trip= 'une excursion';
        echo '<div class="middle">';
        echo '<form action="recapitulatif.php" method="get" class="pure-form pure-form-aligned">';
        echo  '<h1> Excursion </h1>';
        echo  '<h3>Choix Excursion:</h3>';
        echo    '<select name="Destination">';
        echo     '<option value="3"> une visite du Louvres 150€</option>';
        echo     '<option value="4"> une visite de la tour Eiffel 100€</option>';
        echo   '</select><br>';
        echo   '<label for="nombre"><h3>Nombre de personnes:</h3></label><br>';
        echo   '<input type="text" id="nombre" name="Nombre" required placeholder="Entrez un nombre"/><br>';
        echo   '<br><input type="submit" value="Suite"/>';
        echo '</form>';
        echo '</div>';
        }

        $_SESSION['trip']=$trip;
        ?>
      <div class="video">
        <video width="480" height="480" autoplay loop poster="img/2.jpeg" controls>
          <source src="img/1.mp4" type="video/mp4">
        </video>
      </div>
    </section>
  </body>
</html>
