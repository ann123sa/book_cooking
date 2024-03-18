<?php 
    include "../headfoot/core.php";
    if(isset($_POST['autoEnter'])){
        $users = $link->query("SELECT * FROM users 
            WHERE login = '{$_POST['login']}' AND password = '{$_POST['password']}'");
       
        if($users->num_rows != 1){
            $_SESSION['errors']['login'] = "Неверный логин или пароль";
        }

        if(!isset($_SESSION['errors'])){
            $user = $users->fetch_assoc();
            $_SESSION['user']['id'] = $user['id'];
        } 
    }
    header("Location: ".$_SERVER['HTTP_REFERER']);
?>