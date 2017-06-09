<?php

$db = new PDO('mysql:host=localhost;dbname=users', 'root', '0000');
$user = $db->prepare('SELECT * FROM admin WHERE username = :username AND password = :password');
$user->bindParam(':username', $_POST['username']);
$user->bindParam(':password', $_POST['password']);
$user->execute();

if($user->fetch() == False) {
    header('Location: ../index.php'); // une mauvaise combinaison user/pass renvoie un message d'erreur
    echo("Erreur d'identification non autorisée ! La sécurité a été prévenue. Merci de patienter devant le poste en attendant leur arrivée.");
} else {
    session_start(); // les identifiants matchent 
    $_SESSION['connected'] = True;
    header('Location: ../index.php');
}


?>