<?php include "../config/database.php" ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
        <?php include "../includes/meta.php" ?>
    
    </head>
    <body>
    <div class="document">
        <?php include "../includes/header.php" ?>
        <main>
        <?php 
               $sql = "SELECT name, text1 FROM seite where id=5";
               $query = $pdo->query($sql);
               foreach ($query as $row) {
               echo "<h1 class=\"text\">"  . $row['name'] ."</h1>"; 
               echo "<p class=\"text\">"  . $row['text1'] ."</p>"; 
               }
               
        ?>

        <?php 
            echo "<ul class =\"read-article\">"; 
               $sql = "SELECT img, title, text, link, width, alt FROM lernen ";
               $query = $pdo->query($sql);
               foreach ($query as $row) {
               echo "<li class=\"read-article__list\">"; 
               echo '<a href="' . $row['link'] . '" target="_blank">';
               echo '<img src="/img/' . $row['img'] . '" alt="' . $row['alt'] . '" width="' . $row['width'] . '">'. "</a>";
               echo "<p>" ."<strong>" .$row['title'] ."</strong>" .$row['text'] ."</p>";
               echo "</li>";
               }
            echo "</ul>" 
        ?>

           
            <?php include "../includes/plantaddiction.php"?>
            <?php include "../includes/recommendation.php"?>
        </main>
        <?php include "../includes/footer.php" ?>
</div>
    </body>
</html>