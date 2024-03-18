<?php 
    include "../includes/core.php";
    if(isset($_POST['update'])){
        $img = $_FILES['img'];
            if('image' == substr($img['type'], 0, 5)){
                $name = uniqid().'.'.substr($img['type'], 6);
                
                move_uploaded_file($img['tmp_name'], "../img/$name");
            }
                
        $link->query("UPDATE `recipes` 
            SET `title` = '{$_POST['title']}',`category_id` = '{$_POST['categorie']}', 
            `img` = '$name', `description` = '{$_POST['description']}',
            `preparation`= '{$_POST['preparation']}', `time`= '{$_POST['time']}'
            WHERE id = '{$_POST['id_recipes']}'");
        
    }
    header("Location: ".$_SERVER['HTTP_REFERER']);
?>