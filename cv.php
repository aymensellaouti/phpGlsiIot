<?php
    $pageTitle = 'Cv';
    include_once('fragments/isAuthenticated.php');
    include_once('fragments/headerAutheticated.php');
    
?>
<div class="alert alert-succes">
    Voici mon Cv
</div>

<ol class="list-group">
    <li class="list-group-item">
        firstname : Aymen
    </li>
    <li class="list-group-item">
        name : Sellaouti
    </li>
</ol>

<?php
            include_once('fragments/footer.php');
?>