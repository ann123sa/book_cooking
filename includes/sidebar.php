<?php
require_once "core.php";
?>

<div class="left_menu">
<ul class="menu1">
            <span>Категории</span>
            <?php
      $categories_q=mysqli_query($link, "SELECT * FROM `category`");
      $categories = array();
      while($cat = mysqli_fetch_assoc($categories_q) )
                {
                $categories[] = $cat;
                }
      ?>
      <?php
                foreach($categories as $cat )
                {
                ?>
            <li class="li1"><a href="recipes.php?categorie=<?= $cat['id']; ?>" class="mainmenu1"><?= $cat['title']; ?></a></li>
            <?php
                }
                ?>
            </ul>
            </div>