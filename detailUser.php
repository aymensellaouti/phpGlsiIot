<?php

include_once 'classes/ConnexionBD.php';

$connexion = ConnexionBD::getInstance();

$id = $_GET['id'];

$query = "select * from users where id = ? ";
$req = $connexion->prepare($query);
$req->execute([$id]);

$users = $req->fetchAll(PDO::FETCH_OBJ);

$pageTitle = 'Détail user';
include_once('fragments/isAuthenticated.php');
include_once('fragments/headerAutheticated.php');

?>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    <?php foreach ($users as $user ) {
?>
    <tr>
        <td><?=$user->id ?></td>
        <td><?=$user->name ?></td>
        <td><?=$user->email ?></td>
        <td><?=$user->password ?></td>
    </tr>

    <?php
      }
    ?>
</table>

<?php
        include_once('fragments/footer.php');
?>