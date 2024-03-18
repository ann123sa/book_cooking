<?php
require_once "core.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style_index.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="/">
                <span class="red">Cook</span>Ban
            </a>
        </div>
        <div class="operation">
            <ul class="top-menu">
            <li class="add"><a href="recipes_glavnaya.php">О нас</a></li>
            <?php if(isset($_SESSION['user'])):?>
            <li class="add"><a href="recipes_glavnaya.php">Мои рецепты</a></li>
            <?php else: ?>
            <li class="profile"><a href="../profile.php?id=<?= $_SESSION['user']['id'];?>"><img src="/img/people.png"></a><a href="../login.php">Войти</a></li>
            <?php endif; ?>
        </ul>
        </div>
    </header>