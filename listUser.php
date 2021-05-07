<?php

include_once 'classes/ConnexionBD.php';
/* INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, 'aymen', 'aymen.sellaouti@gmail.com', 'secret'); */
$connexion = ConnexionBD::getInstance();

$query = 'select * from users';
$query2 = "select * from users where name = ? ";
$req = $connexion->prepare($query);
$req->execute();

$users = $req->fetchAll(PDO::FETCH_OBJ);

$pageTitle = 'Liste des utilisateurs';
include_once('fragments/isAuthenticated.php');
include_once('fragments/headerAutheticated.php');

?>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user ) {
?>
    <tr>
        <td><?=$user->id ?></td>
        <td><?=$user->name ?></td>
        <td><?=$user->email ?></td>
        <td><?=$user->password ?></td>
        <td>
            <a class="btn btn-primary" href="detailUser.php?id=<?=$user->id ?>"> détails</a>
            <a class="btn btn-danger" href="deleteUser.php?id=<?=$user->id ?>"> Delete</a>
        </td>
    </tr>

    <?php
      }
    ?>
</table>

<?php
        include_once('fragments/footer.php');
?>