<?php
    use Phppot\Member;
    if (! empty($_POST["register-btn"])) {
        require_once __DIR__ . '/lib/Member.php';
        $member = new Member();
        $registerResult = $member->registerMember();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./src/register-style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="form-container">
            <form name="register" action="" method="post">
                <div class="">
                    <h1>Registrarse</h1>
                </div>
                <div class="">
                    <input type="text" class="" placeholder="Nombre de usuario"
                        name="username">
                </div>
                <div class="">
                    <input type="password" class="" placeholder="Contraseña"
                        name="password">
                </div>
                <div class="">
                    <input type="text" class="" placeholder="Email"
                        name="email">
                </div>
                <div class="">
                    <input type="submit" value="Registrarse"
                        class="registerButton"
                        name="register-btn">
                </div>
            </form>
            <?php if(!empty($registerResult)){?>
            <div class=""><?php echo $registerResult;?></div>
            <?php }?>
            <div class="">Si ya tienes una cuenta, <a href="./login.php">pulsa aquí</a>.</div>
        </div>
    </body>
</html>
