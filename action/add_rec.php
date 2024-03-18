<?php 
   include "../includes/core.php";
   
    if(isset($_POST['add'])){
        $img = $_FILES['img'];
        if('image' == substr($img['type'], 0, 5)){
            $name = uniqid().'.'.substr($img['type'], 6);
            
            move_uploaded_file($img['tmp_name'], "../img/$name");
            $title = $_POST['title'];
            $link->query("INSERT INTO `recipes` (`user_id`,`title`, `category_id`, `img`,`description`,`preparation`, `time`) 
                VALUES (
                    '{$_SESSION['user']['id']}',
                    '$title','{$_POST['categorie']}', 
                    '$name','{$_POST['description']}',
                    '{$_POST['preparation']}', 
                    '{$_POST['time']}'
                    )");
                
        }
        header("Location: /");
    }
?>