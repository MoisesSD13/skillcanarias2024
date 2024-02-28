<?php
use Phppot\Member;
if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/lib/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/login-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    if (! empty($_GET["i"])) {
        $template = intval($_GET["i"]);
    }

    if(empty($template)) {
        $template = 1;
    }
    ?>

    <div class="form-container">
            <form name="login" action="" method="post">
                <h1>Iniciar sesión</h1>
                <div class="">
                    <input type="text" class="username" placeholder="Nombre de Usuario"
                        name="username" required>
                </div>
                <div class="">
                    <div class="">
                        <span class=""><i class=""></i></span>
                    </div>
                    <inputgit type="password" class="" placeholder="Contraseña"
                        name="password">
                    <input type="password" class="" placeholder="Contraseña"
                        name="password" required>
                </div>
                <div class="">
                    <input type="submit" value="Iniciar sesión"
                        class="loginButton"
                        name="login-btn">
                </div>
            </form>
            <?php if(!empty($loginResult)){?>
                <div class="error"><?php echo $loginResult;?></div>
            <?php }?>
        <div class="">
            <div class="">
                <div class="">Si no tienes una cuenta, <a href="./register.php">pulsa aquí</a>.</div>
            </div>
        </div>
    </div>

</body>
</html>