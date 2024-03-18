<?php

include "includes/header.php";
if(!isset($_SESSION['user'])){
    header("Location: /login.php");
}
?>
<link rel="stylesheet" href="css/style_dish.css">
    <main>
    <?php
include "includes/sidebar.php";
?>
<?php
    $id = $_GET['id'];
    $recipes = mysqli_query($link, "SELECT * FROM `recipes` WHERE `id` = " . (int) $_GET['id']);
    if(mysqli_num_rows($recipes) <= 0)
    {
        ?>
            <div class="title_dish">
           Рецепт не был найден &#128532;
        </div>
        <?php
    } else
    {
        $rec = mysqli_fetch_assoc($recipes);
       ?>
        <div class="title_dish">
           <?=$rec['title']?>
        </div>
        <div class="information_dish">
             <img src="img/<?=$rec['img']?>">
             <p><?=$rec['description']?></p>
             <div class="time">Время приготовления: <?=$rec['time']?></div>
             <b><p>Способ приготовления:</p></b>
             <p><?=$rec['preparation']?></p> 
             <div class="izmena">Чтобы изменить рецепт, нажмите <a href="updateRec.php?id=<?= $id; ?>">сюда</a></div>
             <form action = "action/delete.php" method = "POST">
             <input type = "hidden" name = "id_rec" value = "<?=$id ?>">
             <button name = "delete" >&#128465;</button>
             </form>                       
             </div>
             <?php
    }
    ?>
        </main>
        <?php
include "includes/footer.php";
?>
</body>
</html>