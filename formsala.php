<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de sala Hotel CanHome</title>
    <link rel="stylesheet" href="./src/register-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <form name="registerRoom" action="" method="post">
            <div class="">
                <h1>Reservar sala</h1>
            </div>
            <div class="">
                <input type="text" class="" placeholder="Numero de invitados"
                    name="invNum">
            </div>
            <div class="">
                <input type="date" class="" placeholder="Fecha de evento"
                    name="eventDate">
            </div>
            <div class="">
                <input type="text" class="" placeholder="Nombre de evento"
                    name="eventName">
            </div>
            <div class="">
                <input type="submit" value="Reservar"
                    class="registerButton"
                    name="reserva">
            </div>
        </form>
        <?php
            use Phppot\Member;
            if (! empty($_POST["register-btn"])) {
                require_once __DIR__ . '/lib/Member.php';
                $member = new Member();
                $registerResult = $member->registerMember();
            }
        ?>
        <?php if(!empty($registerResult)){?>
        <div class=""><?php echo $registerResult;?></div>
        <?php }?>
    </div>
</body>
</html>