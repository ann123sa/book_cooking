<?php
include "includes/header.php";
if(!isset($_SESSION['user'])){
    header("Location: /login.php");
}
?>
<link rel="stylesheet" href="css/style_profile.css">
    <main>
        <div class ="sod">
        <?php
        $use = (int) $_GET['id'];
        $user = mysqli_query($link, "SELECT * FROM `users` WHERE `id` = $use");
        $us = mysqli_fetch_assoc($user);
              ?>
        <div class="palec"><a href = "recipes_glavnaya.php">&#9754; Вернуться</a></div>
        <div class="center">
        <h1>Здравствуй, <?=$us['login'];?></h1>
        <p>Ваши данные</p>
        <form action="action/update_user.php" method="POST">
        <label for = "login">Логин</label>
        <input type="hidden" name="id_user" value="<?=$use?>">
        <input type = "text" id = "login" name = "login" value = "<?=$us['login'];?>">
        <label for = "email">Email</label>
        <input type = "email" id = "email" name = "email" value = "<?=$us['email'];?>">
        <label for = "password">Пароль</label>
        <input type = "password" id = "password" name = "password"  disabled="disabled" value = "<?=$us['password'];?>">
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
        <button name = "save">Сохранить</button>
        </form>
        <?php if($us['status'] == 'admin'){?>
        <button name="pomen" class="pomen"><a href="adminka.php">Поменять и посмотреть данные</a></button>
        <?php }?>
        <div class="sss">Нажмите <a href = "/">здесь</a> для смены пароля</div>
        </div>
        <h2>Удачных готовок :)</h2>
</div>
    </main>
        <?php
include "includes/footer.php";
?>
</body>
</html>