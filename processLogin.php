<?php
// tester si le login et le mot de passe sont correct 
// username: aymen et le mot de passe secret

/* echo '<br> contenu de $_GET : <br>';
var_dump($_GET);
echo '<br> contenu de $_POST : <br>';
var_dump($_POST); */
if($_POST['username'] == 'aymen' && $_POST['pwd']=='secret') {
    //rediriger le user vers sa page d'accueil
    header('location:home.php');
} else {
    //rediriger le user vers la page login avec un messgae d'erreur
    header('location:login.php?errorMessage=veuillez verifier votre login ou mot de passe');
}