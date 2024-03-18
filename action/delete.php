<?php
 include "../includes/core.php";
 if(isset($_POST['delete'])){
   
         $link->query("DELETE FROM `recipes` WHERE `id` = '{$_POST['id_rec']}'");
       
            
    }
    header("Location:/ ");
?>