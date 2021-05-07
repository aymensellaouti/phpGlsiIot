<?php
    $pageTitle = 'Home';
    include_once('fragments/isAuthenticated.php');
    include_once('fragments/headerAutheticated.php');
    
?>
<div class="alert alert-primary">
    Bienvenu chez vous <?=$_SESSION['username'] ?> :)
</div>

<?php
            include_once('fragments/footer.php');
?>