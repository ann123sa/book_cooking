<?php 
   include "../includes/core.php";
   
    if(isset($_POST['add_user'])){
            $link->query("INSERT INTO `users` (`login`, `email`, `password`, `status`) 
                VALUES ('{$_POST['login']}', '{$_POST['email']}','{$_POST['password']}','{$_POST['user_status']}')");
                
        }
        header('Location: /adminka.php' );
?>