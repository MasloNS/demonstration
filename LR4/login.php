<?php
require_once 'signin.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Третья</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    
   
</head>

<body>
<?php
require "header.php";
?>
<hr>
<main class="main" >
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <div class="h3 mb-4">
                    Авторизация (вход)
                </div>
                <div class="mb-3">
                    <a href="registration.php">
                        У вас еще нет аккаунта?
                    </a>
                </div>
                <form action="login.php" class="text-center" method="post">
                    <div class=" d-flex justify-content-between">
                        <div class="mb-3 pt-2">
                            Логин
                        </div>
                        <input type="text" name="Login" placeholder="Введите логин" class="form-control w-75 mb-3">
                    </div>
                    <?php if($arrayerrors['errlogin']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['errlogin'] . '</div>';}
                    ?>
                    <div class=" d-flex justify-content-between">
                        <div class="mb-3 pt-2">
                            Пароль
                        </div>
                        <input type="password" name="Password" placeholder="Введите пароль" class="form-control w-75 mb-3">
                    </div>
                    <?php if($arrayerrors['errpass']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['errpass'] . '</div>';}
                        if ($error){
                            echo ' <div class = "err mb-2">'. $error . '</div>';
                        }
                    ?>

                    <input type="submit" name="login" value="Отправить" class="btn btn-primary">
                </form>
            </div>

        </div>
    </div>
</main>
<hr>
<?php
require "footer.php";
?>
<script src="bootstrap.bundle.min.js"></script>
</body>

</html>