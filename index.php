<?php include "config/database.php" ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pflanzen Paradies</title>
        <?php include "includes/meta.php" ?>
    </head>
    <body>
        <div class="document">
            <?php include "includes/header.php" ?>
            <main>
               <?php include "includes/call-to-action.php" ?>
               
               <?php 
               $sql = "SELECT name, text1, text2 FROM seite where id=1";
               $query = $pdo->query($sql);
               foreach ($query as $row) {
               echo "<h2 class=\"shop-description__name\">"  . $row['name'] ."</h2>"; 
               echo "<p class=\"shop-description\">"  . $row['text1'] ."</p>"; 
               echo "<p class=\"shop-description\">"  . $row['text2'] ."</p>"; 
               }
               
               ?>
                <?php include "includes/recommendation.php" ?>     
                <?php include "includes/personal.php"?>
                <?php include "includes/advantages.php"?>
                <?php include "includes/plantaddiction.php"?>
                <?php include "includes/post-card.php"?>
            <?php include "includes/reise.php"?>
            </main>
            <?php include "includes/footer.php" ?>
        </div>
    </body>
</html>