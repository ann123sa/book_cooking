<?php
 include "../includes/core.php";
 if(isset($_POST['delete_users'])){
   
         $link->query("DELETE FROM `users` WHERE `id` = '{$_POST['id_users']}'");
       
            
    }
    header("Location: ".$_SERVER['HTTP_REFERER']);
?>