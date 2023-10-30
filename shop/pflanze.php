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
        <div class="product">
        <div class="product-card">
          
                <?php
                $sql= "SELECT img, name, preis, grosse, text1 
                FROM produkt 
                Where id=$_GET[id] ;
                ";
                  $query = $pdo->query($sql);

                foreach ( $query as $row) {
                    $grosse = explode(",", $row['grosse']);
                    echo "<div class=\"product-card__container\">";
                    echo "<img src=\"/img/" . $row['img'] . "\" alt=" 
                    . $row['name'] 
                    . ">"
                     . "</div>";
                     echo "<div class=\"product-card__container\">";
                    echo "<h1 class=\"produkt-card__container\">" . $row['name'] . "</h1>";
                    echo "<p class=\"product-card__container-text\">" . $row['text1'] . "</p>";
                    echo "<form>" ."<label>Große</label>";
                    echo "<select class=\"size\">";
                    foreach ($grosse as $item) {
                        echo "<option value='" . $item . "'>"  . $item . "</option>";
                    }
                    echo "</select>";
                    echo "<label>Stück</label>";
                    echo "<input id=\"stuck\" type=\"number\" name=\"stuck\" min=\"1\" max=\"10\" value=\"\">";
                    echo "</form>" . "</div>";
                    }
                ?>

                <?php include "../includes/product-form.php" ?>
            </div>
        </div>
        </div>
            
            <?php include "../includes/recommendation.php"?>
            <?php include "../includes/reise.php"?>
        </main>
        <?php include "../includes/footer.php" ?>
</div>
    </body>
</html>