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
              $categor = (int) $_GET['categorie'];
              $name_cat_q = mysqli_query($link, "SELECT * FROM `category` WHERE `id` = $categor");
              $name_cat = mysqli_fetch_assoc($name_cat_q);
               
                ?>
                <?php if(isset($_GET['categorie']))
               {
                ?>
            <div class="right">
            <?=$name_cat['title']?>
            <?php
               }
                ?>
            <div class="wrapper">
            <?php
                  $recipes=mysqli_query($link, "SELECT * FROM `recipes` WHERE `category_id` = $categor AND `user_id` = '{$_SESSION['user']['id']}'");

                while( $rec = mysqli_fetch_assoc($recipes) )
                {
                  ?>
                <div>   
                    <a href="dish.php?id=<?= $rec['id'];?>"><img src="/img/<?= $rec['img']; ?>"></a>
                    <a href="dish.php?id=<?= $rec['id'];?>"><h1><?= $rec['title']; ?></h1></a>
                    <?php
                        $art_cat = false;
                        foreach($categories as $cat)
                        {
                          if($cat['id'] == $rec['category_id'] )
                          {
                            $art_cat = $cat;
                            break;
                          }
                        }
                        ?>
                        <p> &#10553; <a href="recipes.php?categorie=<?= $art_cat['id']; ?>"><?= $art_cat['title']; ?></a></p>
                
                </div>
                <?php
                }
                ?>
                
            </div>
            
            </div>
        </main>
<?php
include "includes/footer.php";
?>
</body>
</html>