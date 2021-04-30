<?php
    $section = 'iot glsi';

    function showSection() {
        
        echo $GLOBALS['section'];
    }

    showSection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ma premiere page php</title>
</head>

<body>
    <h1>J apprend PHP</h1>
    <?php 
        $name = 'aymen';
        $$name = 'sellaouti';
        echo 'Bonjour IOT GLSI<br>';
        echo $aymen;
        var_dump($aymen);
        var_dump(count_chars('bonjour les deux sections glsi et iot', 1));
        phpinfo(INFO_VARIABLES);
    ?>
</body>

</html>