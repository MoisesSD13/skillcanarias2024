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
                <h1>Iniciar sesion</h1>
                <div class="">
                    <input type="text" class="username" placeholder="username"
                        name="username">
                </div>
                <div class="">
                    <div class="">
                        <span class=""><i class=""></i></span>
                    </div>
                    <input type="password" class="" placeholder="password"
                        name="password">
                </div>
                <div class="">
                    <input type="submit" value="Login"
                        class="loginButton"
                        name="login-btn">
                </div>
            </form>
            <?php if(!empty($loginResult)){?>
                <div class=""><?php echo $loginResult;?></div>
            <?php }?>
        <div class="">
            <div class="">
                <div class="">If you are not a registered user, <a href="./register.php">click here</a>.</div>
            </div>
        </div>
    </div>

</body>
</html>