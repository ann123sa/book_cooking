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
      $categories_q=mysqli_query($link, "SELECT * FROM `category`");
      $categories = array();
      while($cat = mysqli_fetch_assoc($categories_q) )
                {
                $categories[] = $cat;
                }
      ?>
      <link rel="stylesheet" href="css/form_add.css">
            <div class="form">
           Добавить рецепт
        </div>
            <div class="addform">
                <form action="action/add_rec.php" method="post" enctype="multipart/form-data">
                    <div class="block">
                        <label>Название рецепта *<input name="title" type="text"> </label>
                        <label>Фотография рецепта<input name = "img" type="file"></label>
                        
                        <label>Краткое описание<textarea  name = "description" rows = "10" cols = "45">Здесь Вы можете написать информацию для автора…</textarea></label>
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
                        <label>Время приготовления<input name="time" type="time"></label>
                        <label>Приготовление<textarea  name = "preparation" rows = "10" cols = "50">Здесь Вы можете написать информацию для автора…</textarea></label>
                        <button name = "add">Добавить</button>
                    </div>

                    </form>
            
            </div>
        </main>
        <?php
include "includes/footer.php";
?>
</body>
</html>