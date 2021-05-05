<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly/bootstrap.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form action="processLogin.php" method="post">
            username: <input name="username" type="text" class="form-control">
            password: <input name="pwd" type="password" class="form-control">
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
    </div>
</body>

</html>