<?php

$db = new PDO('mysql:host=localhost;dbname=users', 'root');
$user = $db->prepare('SELECT * FROM workers WHERE nom = :nom AND poste = :poste');
$user->bindParam(':nom', $_POST['nom']);
$user->bindParam(':poste', $_POST['poste']);
$user->execute();


    $nvWorker = $user;
    $nvWorker->bindParam(':nom', $_POST['nom']);
    $nvWorker->bindParam(':poste', $_POST['poste']);
    $nvWorker->execute();

  header('location: index.php')
    
?>