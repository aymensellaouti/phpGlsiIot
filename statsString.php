<?php
    $chaine = 'bonjour les deux sections glsi et iot';
    $stats = count_chars($chaine, 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<h1>Les statistiques de la chaine
    <?=$chaine ?> sont :
</h1>
<table border="2">
    <tr>
        <th>caractèe</th>
        <th>nbre d'occurence</th>
    </tr>

    <?php foreach ($stats as $carctere => $occ) {?>
    <tr>
        <td>
            <?=chr($carctere) ?>
        </td>
        <td>
            <?=$occ ?>
        </td>
    </tr>

    <?php
        }
    ?>


</table>

<body>

</body>

</html>