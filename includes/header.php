<?php
require_once "core.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_modal.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="recipes_glavnaya.php">
                <span class="red">Cook</span>Ban
            </a>
        </div>
        <div class="operation">
            <ul class="top-menu">
            <?php if(isset($_SESSION['user'])):?>
            <li class="add"><a href="addRec.php">Добавить рецепт</a></li>
            <!-- <li class="add"><button id="open">Про типы данных</button></li> -->
            <li class="add"><a href="#" id="open">Обратная связь</a></li>
            <li class="profile"><a href="../profile.php?id=<?= $_SESSION['user']['id'];?>"><img src="/img/people.png"></a><a href="../user/logout.php">Выйти</a></li>
            <?php else: ?>
            <li class="profile"><a href="../profile.php?id=<?= $_SESSION['user']['id'];?>"><img src="/img/people.png"></a><a href="../login.php">Войти</a></li>
            <?php endif; ?>
        </ul>
        </div>
    </header>
    <dialog>
      <h1>
        Обратная связь <button id="close">&#10006;</button>
      </h1>
      <hr>
      <p>Здесь Вы можете сообщить об ошибке, оставить свой отзыв или предложить свои идеи по развитию проекта. Будем рады любому отклику!</p>
        <form action="../action/add_comment.php" method="POST">
        <p>
       <textarea name="comment_text" id="story" name="story" rows="5" cols="45"></textarea>
      </p>
      <p>
   			<button class="dialog__button button-orange" name="comment">Отправить</button>
  		</p>
      </form>
    </dialog>
    <script>
      var dialog = document.querySelector('dialog')
      // выводим модальное окно
      document.querySelector('#open').onclick = function () {
        dialog.showModal()
      }
      // скрываем окно
      document.querySelector('#close').onclick = function () {
        dialog.close() 
      }
    </script>