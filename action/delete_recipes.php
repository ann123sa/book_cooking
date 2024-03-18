<?php
 include "../includes/core.php";
 if(isset($_POST['delete_recipes'])){
   
         $link->query("DELETE FROM `recipes` WHERE `id` = '{$_POST['id_recipes']}'");
       
            
    }
    header("Location: ".$_SERVER['HTTP_REFERER']);
?>