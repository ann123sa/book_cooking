<?php 
    require '../includes/core.php';
    if(isset($_POST['userLogin'])){
        $password = md5($_POST['password']."sadgfds");
        $users = $link->query("SELECT * FROM `users`
            WHERE `email` = '{$_POST['email']}' AND `password` = '{$_POST['password']}'");
       
        if($users->num_rows != 1){
            $_SESSION['errors']['email'] = "Email или пароль не совпадают";
        }

        if(!isset($_SESSION['errors'])){
            $user = $users->fetch_assoc();
            $_SESSION['user']['id'] = $user['id'];
        }
        
    }
    header("Location: /login.php ");
?>