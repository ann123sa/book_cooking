<?php 
   include "../includes/core.php";
   
    if(isset($_POST['add_category'])){
            $link->query("INSERT INTO `category` (`title`) 
                VALUES ('{$_POST['title']}')");
                
        }
        header('Location: /adminka.php' );
?>