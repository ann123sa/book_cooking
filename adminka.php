<?php
include "includes/core.php";
if(!isset($_SESSION['user']) && $_SESSION['user']['status'] == "admin"){
    header("Location: / ");
}
?>
<link rel="stylesheet" href="css/adminka.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href = "profile.php?id=<?= $_SESSION['user']['id'];?>">&#8592;</a>
    <h1>Здравствуй, Админ, здесь ты можешь посмотреть и изменить данные</h1>
    <div class = "buttons">
    <button type="submit" onclick="myTab()">Пользователи</button>
    <button type="submit" onclick="myTab1()">Рецепты</button>
    <button type="submit" onclick="myTab2()">Категории</button>
</div>
<div id = "user" class = "user" style="display: block;">
<div class = "add">
<form action="add_form.php" method="POST">  
<button class = "add_user" name = "add_user" onclick="document.location='add_form.php'" >+ Добавить пользователя</button>
</form>
</div>

<table>

<tbody>

<tr>

<td>ID</td>

<td>Логин</td>


<td>Email</td>

<td>Пароль</td>

<td>Статус</td>

<td>Действия</td>
</tr>
    <?php
    $dannie = mysqli_query($link, "SELECT * FROM `users`");
    
    while ($row = mysqli_fetch_array($dannie))

    { // выводим данные
    
    echo "<tr>\n<td>".$row["id"]."</td>"."\n"."<td>"."".$row["login"]."
    
    </td>"."\n"."<td>"."".$row["email"]."</td>"."\n"."<td>"."".$row
    
    ["password"]."</td>"."\n"."<td>"."".$row["status"]."</td>"."\n".
    "<td>".""."<form action = 'action/delete_users.php' method = 'POST'>"."
    "."<input type = 'hidden' name = 'id_users' value = '".$row["id"]."'>
    <button name = 'delete_users'>Удалить</button>"."</form>".""."\n";
    
    }
    ?>

    </tbody>
</table>
</div>
<div id = "recipes" class = "recipes" style="display: none;">
<table>

<tbody>

<tr>

<td>ID</td>

<td>ID пользоватля, который добавил рецепт</td>


<td>Заголовок</td>

<td>ID категории</td>

<td>Изображение</td>

<td>Краткое описание</td>

<td>Приготовление</td>

<td>Время</td>

<td>Действия</td>

</tr>
    <?php
    $dannie = mysqli_query($link, "SELECT * FROM `recipes`");
    while ($row = mysqli_fetch_array($dannie))

    { // выводим данные
    
    echo "<tr>\n<td>".$row["id"]."</td>"."\n"."<td>"."".$row["user_id"]."
    
    </td>"."\n"."<td>"."".$row["title"]."</td>"."\n"."<td>"."".$row
    
    ["category_id"]."</td>"."\n"."<td>"."".$row["img"]."</td>"."\n"."<td>"."".$row["description"]."</td>"."\n"."<td>"."".$row["preparation"]."</td>"."\n"."<td>"."".$row["time"]."</td>"."\n".
    "<td>".""."<form action = 'action/delete_recipes.php' method = 'POST'>"."
    "."<input type = 'hidden' name = 'id_recipes' value = '".$row["id"]."'>
    <button name = 'delete_recipes'>Удалить</button>"."</form>".""."\n";
    
    }
    ?>

    </tbody>
</table>
</div>

<div id = "categories" class = "categories" style="display: none;">
<div class = "add">
<form action="add_form.php" method="POST">
<button class = "add_categories" name = "add_category" onclick="document.location='add_form.php'" >+ Добавить категорию</button>
</form>
</div>
<table>

<tbody>

<tr>

<td>ID</td>

<td>Название категории</td>

<td>Действия</td>

</tr>
    <?php
    $dannie = mysqli_query($link, "SELECT * FROM `category`");
    
    while ($row = mysqli_fetch_array($dannie))

    { // выводим данные
    
    echo "<tr>\n<td>".$id = $row["id"]."</td>"."\n"."<td>"."".$row["title"]."
    
    </td>"."\n"."<td>"."<form action = 'action/delete_category.php' method = 'POST'>"."
    "."<input type = 'hidden' name = 'id_category' value = '".$row["id"]."'>
    <button name = 'delete_category'>Удалить</button>"."</form>".""."\n";
    }
    if (isset($_GET['delete'])){
        $link->query("DELETE FROM `category` WHERE `id` = '{$_GET['delete']}' LIMIT 1");
    }
    ?>

    </tbody>
</table>
</div>
<script>
    let elem_1 = document.getElementById('user');
    let style_1 = getComputedStyle(elem_1);
    let elem_2 = document.getElementById('recipes');
    let style_2 = getComputedStyle(elem_2);
    let elem_3 = document.getElementById('categories');
    let style_3 = getComputedStyle(elem_3);
    function myTab(){
    if(style_2.display === 'block' || style_3.display === 'block'){
        document.getElementById('user').style.display='block';
        document.getElementById('recipes').style.display='none';
        document.getElementById('categories').style.display='none';
    }
}
function myTab1(){
    if(style_1.display === 'block' || style_3.display === 'block'){
        document.getElementById('categories').style.display='none';
        document.getElementById('user').style.display='none';
        document.getElementById('recipes').style.display='block';
    }
}
function myTab2(){
    if(style_1.display === 'block' || style_2.display === 'block'){
        document.getElementById('categories').style.display='block';
        document.getElementById('user').style.display='none';
        document.getElementById('recipes').style.display='none';
    }
}
    </script>
</body>
</html>