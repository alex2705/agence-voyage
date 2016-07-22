
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/voyage.css" charset="utf-8">
    <title>agence de voyage</title>
  </head>
  <body>
    <header>
      <div class="top">
        <img src="img/1.jpg" width="100%" height="450px" class="top"/>
      </div>
    </header>
    <section class="middle">
      <div class="form">
        <form action="agence.php" method="get">
          <h1> Agence de voyage </h1>
          <h3>Civilite:</h3>
            <select name="Civ">
               <option value="Mr">Mr</option>
               <option value="Mme">Mme</option>
               <option value="Mlle">Mlle</option>
            </select><br>
            <div class='input'>
              <label for="nom"><h3>Nom   :</h3></label>
              <input type="text" id="nom" name="Nom" required placeholder="Entrez votre nom"/><br>
              <label for="prenom"><h3>Prenom:</h3></label>
              <input type="text" id="prenom" name="Prenom" required placeholder="Entrez votre prenom"/><br>
              <label for="choix"><h3>Voyage:</h3></label>
              <input type="checkbox" id="choix" name="Choix" value="voyage" placeholder="Choisissez"/><br>
              <label for="choix"><h3>Excursion:</h3></label>
              <input type="checkbox" id="choix" name="Choix" value="excursion" placeholder="Choisissez"/><br>
              <input type="submit" value="Suite"/>
            </div>
          </form>
      </div>
      <div>
        <table class="photo">
          <tr>
            <td><img src="img/2.jpeg"/></td>
            <td><img src="img/3.jpeg"/></td>
          </tr>

          <tr>
            <td><img src="img/4.jpeg"/></td>
            <td><img src="img/5.jpeg"/></td>
          </tr>
        </table>
      </div>
    </section>
  </body>
</html>
