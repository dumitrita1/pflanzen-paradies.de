<?php include  $_SERVER['DOCUMENT_ROOT'] . "/config/database.php" ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
        <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/meta.php" ?>
    
    </head>
    <body>
    <div class="document">
        <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/header.php" ?>
        <main>
        <?php 
               $sql = $pdo->prepare ("SELECT name, text1 FROM seite where id=5");
               $sql->execute();
               $query = $sql->fetchAll();
               foreach ($query as $row) {
               echo "<h1 class=\"text\">"  . $row['name'] ."</h1>"; 
               echo "<p class=\"text\">"  . $row['text1'] ."</p>"; 
               }
               
        ?>

        <?php 
            echo "<ul class =\"read-article\">"; 
               $sql = $pdo->prepare ("SELECT img, title, text, link, width, alt FROM lernen ");
               $sql->execute();
               $query = $sql->fetchAll();
               foreach ($query as $row) {
               echo "<li class=\"read-article__list\">"; 
               echo '<a href="' . $row['link'] . '" target="_blank">';
               echo '<img src="/img/' . $row['img'] . '" alt="' . $row['alt'] . '" width="' . $row['width'] . '">'. "</a>";
               echo "<p>" ."<strong>" .$row['title'] ."</strong>" .$row['text'] ."</p>";
               echo "</li>";
               }
            echo "</ul>" 
        ?>

           
            <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/plantaddiction.php"?>
            <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/recommendation.php"?>
        </main>
        <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/footer.php" ?>
</div>
    </body>
</html>