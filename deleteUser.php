<?php

include_once 'classes/ConnexionBD.php';

$connexion = ConnexionBD::getInstance();

$id = $_GET['id'];

$query = "delete from users where id = ? ";
$req = $connexion->prepare($query);
$req->execute([$id]);

header('location:listUser.php');