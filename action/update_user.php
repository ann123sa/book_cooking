<?php 
   include "../includes/core.php";
   
    if(isset($_POST['save'])){
        $users = $link->query("SELECT * FROM `users` 
        WHERE `login` = '{$_POST['login']}' OR `email` = '{$_POST['email']}'");
        if(!isset($_SESSION['errors'])){
        $link->query("UPDATE `users` SET `login`='{$_POST['login']}',`email`='{$_POST['email']}' WHERE `id` = '{$_POST['id_user']}'"); 
        }
                    
        }
        header("Location: ".$_SERVER['HTTP_REFERER']);
?>