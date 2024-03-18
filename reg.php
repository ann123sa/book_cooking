<?php
include "includes/core.php";
if(isset($_SESSION['user'])){
    header("Location: /");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма входа</title>
    <link rel="stylesheet" href="/css/style_auto.css">
</head>
</head>
<body>
    <form action="action/reg.php" class="form" method="POST">
        <a class="palec" href="/">&#9754;</a>
        <h1 class="form__title">Регистрация</h1>
        <div class="form__group">
            <input type="text" name="login" class="form__input" placeholder=" ">
            <label  class="form__label">Логин</label>
        </div>
        <div class="form__group">
            <input type="email" name="email" class="form__input" placeholder=" ">
            <label for="" class="form__label">Email</label>
        </div>
        <div class="form__group">
            <input type="password" name= "password" class="form__input" placeholder=" ">
            <label for="" class="form__label">Пароль</label>
        </div>
        <div class="form__group">
            <input type="password" name="password_conf" class="form__input" placeholder=" ">
            <label for="" class="form__label">Подтверждение пароля</label>
        </div>
        <?php 
                    if(isset($_SESSION['errors'])): ?>
                        <div>
                            <?php 
                                foreach ($_SESSION['errors'] as $key => $value):
                                    echo "<p> $value </p>";
                                endforeach;
                            ?>
                        </div>
                        <?php
                        unset($_SESSION['errors']); 
                        endif;?>
        <p>Есть аккаунт? <a href="login.php">Войди!</a></p>
        <button name="register" class="form__button">Зарегистрироваться</button>
    </form>
</body>
</html>