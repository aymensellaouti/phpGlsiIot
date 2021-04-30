<?php
    $etudiants = [
        ['name' => 'Hammami', 'firstname' => 'Marwen'],
        ['name' => 'Ben Attia', 'firstname' => 'Montasar'],
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Liste des présents :</h1>
    <?php

        $tableau = ['Marwen', 'Montassar', 'Mariem', 'Houssem', 'Ons', 'Nawel'];
    ?>

    <table border="2">
        <tr>
            <th>
                Nom de l'étudent
            </th>
        </tr>

        <?php 
        for($i=0; $i<count($tableau); $i++) {
        ?>
        <tr>
            <td> <?php
                echo $tableau[$i].'<br>';
            ?>
            </td>
        </tr>
        <?php
        }
    ?>
    </table>
</body>

</html>