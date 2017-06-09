<?php

// phpinfo();
// die;

$db = new PDO('mysql:host=localhost;dbname=users', 'root', '0000');
$user = $db->prepare('SELECT * FROM admin WHERE username = :username');
$user->bindParam(':username', $_POST['username']);
$user->execute();
if($user->fetch() == False) {
$newuser = $db->prepare('INSERT INTO admin (username, password) VALUES (:username, :password)');
$newuser->bindParam(':username', $_POST['username']);
$newuser->bindParam(':password', $_POST['password']);
$newuser->execute();
    header('location: ../index.php');
}   else    {
    header('location: ../index.php');
}
?>