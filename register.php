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
    <link rel="stylesheet" href="register-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>
<body>
    
</body>
</html>
    
    
    
    
    <div id="template-bg-1">
        <div
            class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="card p-4 text-light bg-dark mb-5">
                <div class="card-header">
                    <h3>Sign Up</h3>
                </div>
                <div class="card-body w-100">
                    <form name="register" action="" method="post">
                        <div class="input-group form-group mt-3">
                            <div class="bg-secondary rounded-start">
                                <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="username"
                                name="username">
                        </div>
                        <div class="input-group form-group mt-3">
                            <div class="bg-secondary rounded-start">
                                <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password"
                                name="password">
                        </div>

                        <div class="form-group mt-3">
                            <input type="submit" value="Register"
                                class="btn bg-secondary float-end text-white w-100"
                                name="register-btn">
                        </div>
                    </form>
                    <?php if(!empty($registerResult)){?>
                    <div class="text-danger"><?php echo $registerResult;?></div>
                    <?php }?>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        <div class="text-primary">If you are a registered user, <a href="./login.php">login here</a>.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>