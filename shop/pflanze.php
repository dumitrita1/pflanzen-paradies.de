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
                $sql= "SELECT img, name, sort, preis, grosse,category, title2, text1, T1, T2, T3, T4, T5, T6, B1, B2, B3, B4, B5, B6
                FROM produkt 
                Where id=$_GET[id] ;
                ";
                  $query = $pdo->query($sql);

                foreach ( $query as $row) {
                    $grosse = explode(",", $row['grosse']);
                    echo "<div class=\"product-card__container\">";
                    echo "<img  class=\"product-card__container-img\"src=\"/img/" . $row['img'] . "\" alt=" 
                    . $row['name'] 
                    . ">"
                    . "</div>";
                    echo "<div class=\"product-card__container\">";
                    echo "<h1 class=\"product-card__container-name\">" . $row['name'];
                    echo "<button class=\"zu-wissen\">" . $row['preis'] . "€ ❗️" 
                    . "<span class=\"zu-wissen__tip\">"
                    . 'Alle Preise verstehen sich zzgl. MwSt.'
                    . "</span>"
                    . "</button>"
                    . "</h1>";
                    echo "<p class=\"product-card__container-text\">" . $row['text1'] . "</p>";
                    echo "<form>" ."<label>Große</label>";
                    echo "<select class=\"size\">";
                    foreach ($grosse as $item) {
                        echo "<option value='" . $item . "'>"  . $item . "</option>";
                    }
                    echo "</select>";
                    echo "<label>Stück</label>";
                    echo "<input id=\"stuck\" type=\"number\" name=\"stuck\" min=\"1\" max=\"10\" value=\"\">";
                    echo "<div class=\"product-form__button\">";
                    echo "<button class=\"favorit\">Love it! </button>";
                    echo "<button class=\"corb\">In den Warenkorb </button>" 
                    . "</div>" . "</form>" . "</div>" . "</div>";
                    echo "<div class=\"plant-needs\">";

                    if ($row['category'] == 1) {
                        echo "<p class=\"plant-needs__title\">" . $row['title2'];
                        echo "Was braucht dein" . ($row['sort'] == 'w' ? "e" : "");
                        echo " " . $row['name'] . "?" . "</p>";
                    }
                    
                    echo "<ol>" ."<li>" ."<strong>" .$row['T1'] ."</strong>" .$row['B1'] ."</li>" 
                    ."<li>" ."<strong>" .$row['T2'] ."</strong>" .$row['B2'] ."</li>" 
                    ."<li>" ."<strong>" .$row['T3'] ."</strong>" .$row['B3'] ."</li>" 
                    ."<li>" ."<strong>" .$row['T4'] ."</strong>" .$row['B4'] ."</li>" 
                    ."<li>" ."<strong>" .$row['T5'] ."</strong>" .$row['B5'] ."</li>" 
                    ."<li>" ."<strong>" .$row['T6'] ."</strong>" .$row['B6'] ."</li>" 
                    ."</ol>"
                    . "</div>";
                    }
                ?>

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