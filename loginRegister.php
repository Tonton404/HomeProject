<?php?>

<meta charset="UTF-8">

<h2>Connexion au compte Admin EvilCorp</h2>
<form method="post" action="functions/loginAdmin.php"> <!-- renvoi à la fonction d'ouverture de session  -->
    <label> Username :</label>
    <input type="text" name="username" id="password" required="true">
    <label> Password :</label>
    <input type="password" name="password" required="true">

    <input type="submit" value="Connexion">
</form>


<h2>Enregistrer un nouvel Admin EvilCorp</h2> 

<form method="post" action="functions/newAdmin.php"> <!-- enregistrement d'un nouveau compte admin -->
    <label> Username : </label>
    <input type="text" name="username" id="password" required="true">
    <label> Password : </label>
    <input type="password" name="password" id="password" required="true">

    <input type="submit" value="Création de compte">
</form>

<?php
    header('location: index.php');
    ?>