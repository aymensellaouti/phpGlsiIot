<?php
   $pageTitle = 'Login';
            include_once('fragments/header.php');
?>
<form action="processLogin.php" method="post" enctype="multipart/form-data">
    username: <input name=" username" type="text" class="form-control">
    password: <input name="pwd" type="password" class="form-control">
    <!--             cin : <input name="cin" class="form-control" type="file"> -->
    <input type="submit" class="btn btn-primary">
</form>
<?php
            if(isset($_GET['errorMessage'])) {
        ?>
<div class="alert alert-danger">
    <?=$_GET['errorMessage'] ?>
</div>
<?php
            }
        ?>
<?php
            include_once('fragments/footer.php');
        ?>