<?php
  session_start();  // on reprend cette commande pour récupérer la session en cours
  unset($_SESSION["connected"]);
  session_destroy(); // Supprime la variable connected et retour sur index.php
  header('Location: ../index.php');
?>