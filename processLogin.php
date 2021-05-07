<?php
session_start();
// tester si le login et le mot de passe sont correct 
// username: aymen et le mot de passe secret

/* echo '<br> contenu de $_GET : <br>';
var_dump($_GET);
echo '<br> contenu de $_POST : <br>';
var_dump($_POST); */

/* $file = $_FILES['cin']; */
/* 
$_POST['username'] == 'aymen' && $_POST['pwd']=='secret
*/ 

include_once 'classes/ConnexionBD.php';
/* INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, 'aymen', 'aymen.sellaouti@gmail.com', 'secret'); */
$connexion = ConnexionBD::getInstance();

$query = 'select * from users where email = :email and password = :password';
$req = $connexion->prepare($query);
$req->execute([
    'password' => $_POST['pwd'],
    'email' => $_POST['username']
]);
$user = $req->fetch(PDO::FETCH_OBJ);
if($user) {
    $_SESSION['username'] = $user->name;
    //rediriger le user vers sa page d'accueil
    /* $newName = uniqid().$file['name'];
    $to = "uploads/".$newName;
    var_dump($to);
    if(!move_uploaded_file($file['tmp_name'], $to)) {
        echo 'pbm';
    } */
    header('location:home.php');
} else {
    //rediriger le user vers la page login avec un messgae d'erreur
    header('location:login.php?errorMessage=veuillez verifier votre login ou mot de passe');
}