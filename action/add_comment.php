<?php 
   include "../includes/core.php";
   
    if(isset($_POST['comment'])){
            $link->query("INSERT INTO `comments` (`user_id`,`comment`) 
                VALUES ('{$_SESSION['user']['id']}', '{$_POST['comment_text']}')");
        }
        header('Location: /recipes_glavnaya.php' );
?>