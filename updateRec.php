<?php
include "includes/header.php";
if(!isset($_SESSION['user'])){
    header("Location: /login.php");
}
?>
    <main>
    <?php
include "includes/sidebar.php";
?>
<?php
      $id = $_GET['id'];
      $recipes = mysqli_query($link, "SELECT * FROM `recipes` WHERE `id` = " . (int) $_GET['id']);
      $categories_q=mysqli_query($link, "SELECT * FROM `category`");
      $categories = array();
      while($cat = mysqli_fetch_assoc($categories_q) )
                {
                $categories[] = $cat;
                }
      ?>
      <link rel="stylesheet" href="css/form_add.css">
            <div class="form">
           Обновить рецепт
        </div>
            <div class="addform">
                <form action="action/update_rec.php" method="post" enctype="multipart/form-data">
                <input name="id_recipes" type="hidden" value="<?=$id?>">
                    <div class="block">
                        <?php $rec = mysqli_fetch_assoc($recipes);?>
                        <label>Название рецепта *<input name="title" type="text" value="<?=$rec['title'];?>"> </label>
                        <label>Фотография рецепта<input name = "img" type="file" value="<?=$rec['img'];?>"></label>
                        
                        <label>Краткое описание<textarea  name = "description" rows = "10" cols = "45"><?=$rec['description'];?></textarea></label>
                    </div>
                    
                    <div class="block">
                        <label>Категория * <select name = "categorie"></label>
                        <?php
                foreach($categories as $cat )
                {
                ?>
                            
                            <option value="<?= $cat['id']; ?>"><?= $cat['title']; ?></option>

                            <?php
                }
                ?>  
                        </select>
                        <label>Время приготовления<input name="time" type="time" value="<?=$rec['time'];?>"></label>
                        <label>Приготовление<textarea  name = "preparation" rows = "10" cols = "50"><?=$rec['preparation'];?></textarea></label>
                        <button name = "update">Изменить</button>
                    </div>

                    </form>
            
            </div>
        </main>
        <?php
include "includes/footer.php";
?>
</body>