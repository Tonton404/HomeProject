<?php
session_start();
  if($_SESSION['connected'] == True)  { // si la session est deja ouverte alors la page index apparait
    // Do nothing
  } else { // sinon on affiche le menu de connexion admin
    header('location: loginRegister.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ECorp.</title>
    <h1>Bienvenue sur la page Admin de ECorporation !</h1>
    <img src="https://vignette3.wikia.nocookie.net/mrrobot/images/8/87/ECorp.png/revision/latest?cb=20150602024409">
    <h3>"Productivité, bénéfice, compétitivité"</h3> </br>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

  <div id="body">
    <div id="menu">
      <h2>Interface de contrôle des employés:</h2>
    <ul>
        <li><a href="showWorkers.php">Afficher la liste des employés</li>
        <li><a href="add.php">Ajouter de nouveaux employés</li>
        <li ><a href="updt.php">Modifier les horaires d'un employé</li>
        </br>
        <li ><a href="functions/disconnect.php">Deconnexion</li></a>
    </ul>
    </div>

    <div id="delete">
    <form action="functions/delete.php">
      <h2>Signaler un employé improductif:</h2>
      Matricule de l'employé: <input type="text" name="matricule"><br>
      <input type="submit" value="Licencier"><br><br>
    </form> 
    </div>
  </div>

  </body>


  <footer>
    <p>Le mot du jour : "Vivre pour travailler, et non pas travailler pour vivre"</p>
  </footer>

</html>