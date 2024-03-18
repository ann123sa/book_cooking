<?php
 include "../includes/core.php";
 if(isset($_POST['delete_category'])){
   
         $link->query("DELETE FROM `category` WHERE `id` = '{$_POST['id_category']}'");
       
            
    }
    header("Location: ".$_SERVER['HTTP_REFERER']);
?>