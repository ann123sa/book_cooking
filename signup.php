<?php 
    include "./components/header.php";
    if(isset($_SESSION['user'])){
        header("Location: /");
    }
?>
        <section class="section auth">
            <form action="/action/users/signup.php" method="post">
                <h2>Регистрация</h2>
                <div class="el-form">
                    <label for="login">Логин:</label>
                    <input id="login" type="text" placeholder="Логин" name="login">
                </div>
                <div class="el-form">
                    <label for="emqil">Email:</label>
                    <input id="email" type="email" placeholder="Email" name="email">
                </div>
                <div class="el-form">
                    <label for="pass">Пароль:</label>
                    <input id="pass" type="password" placeholder="******" name="password">
                </div>
                <div class="el-form">
                    <label for="pass-conf">Повтор пароля:</label>
                    <input id="pass-conf" type="password" placeholder="******" name="password_conf">
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
                <button name="userLogin">Зарегистрироваться</button>
            </form>
        </section>
<?php 
    include "./components/footer.php";
?>