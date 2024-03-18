<?php 
    include "../includes/core.php";
    if(isset($_POST['register'])){
        if($_POST['password'] !== $_POST['password_conf']){
            $_SESSION['errors']['password'] = "Пароли должны совпадать";
        }

        $users = $link->query("SELECT * FROM `users` 
            WHERE `login` = '{$_POST['login']}' OR `email` = '{$_POST['email']}'");

        if($users->num_rows > 0){
            $_SESSION['errors']['login'] = "Email или логин уже используеются";
        }
        if(!isset($_SESSION['errors'])){
            $password = md5($_POST['password']."sadgfds");
            $res = $link->query("INSERT INTO `users` (`login`, `email`, `password`) 
                VALUES ('{$_POST['login']}', '{$_POST['email']}', '$password')");
        }
        
    }
    if($res == true){
    echo "Вы успешно зарегистрировались!";
    }
    header("Location: ".$_SERVER['HTTP_REFERER']);
    
?>