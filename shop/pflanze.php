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
        <div class="product">
        <div class="product-card">
          
                <?php
               session_start();
               $id = $_GET['id'] ?? '';
               $sql = $pdo->prepare("SELECT img, name, sort, preis, grosse, category, title2, text1, T1, T2, T3, T4, T5, T6, B1, B2, B3, B4, B5, B6 
                   FROM produkt 
                   WHERE id = :id;");
               $sql->bindParam(':id', $id, PDO::PARAM_INT);
               $sql->execute();
               $query = $sql->fetchAll();

                if (!empty ($query)) {

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
                    
                if (isset($_SESSION['userid'])) {
                    $userid = $_SESSION['userid'];
                        echo "<form action=\"warenkorb.php\" method=\"post\">" ."<label>Große</label>";
                        echo "<select class=\"size\" name=\"grosse\">";
                        foreach ($grosse as $item) {
                            echo "<option value='" . $item . "'>"  . $item . "</option>";
                        }
                        echo "</select>";
                        echo "<label>Stück</label>";
                        echo "<input type=\"hidden\" name=\"product_id\" value=\"" . $id . "\">";
                        echo "<input id=\"stuck\" type=\"number\" name=\"stuck\" min=\"1\" max=\"10\" value=\"1\">";
                        echo "<input id=\"name\" type=\"hidden\" name=\"name\" value=\"" .$row['name'] . "\">";
                        echo "<input id=\"img\" type=\"hidden\" name=\"img\" value=\"" .$row['img'] . "\">";
                        echo "<input id=\"preis\" type=\"hidden\" name=\"preis\" value=\"" .$row['preis'] . "\">";
                        echo "<input id=\"total\" type=\"hidden\" name=\"total\" value=\""  . $row['preis'] . "\">";
                        echo "<div class=\"product-form__button\">";
                        echo "<button class=\"\" type=\"submit\" >Zum Warenkorb hinzufügen</button>" ; 
                        echo "</div></form>";
                        
                        echo "<form action=\"favorit.php\" method=\"post\">";
                        foreach ($grosse as $item) {
                            echo "<input type=\"hidden\" name=\"grosse\" value='" . $item . "'>";
                        }
                        echo "<button class=\"\" type=\"submit\">Love it! </button>";
                        echo "<input type=\"hidden\" name=\"user_id\" value=\"" . $userid . "\">";
                        echo "<input type=\"hidden\" name=\"id\" value=\"" . $id . "\">";
                        echo "<input type=\"hidden\" name=\"product_id\" value=\"" . $id . "\">";
                        echo "<input type=\"hidden\" name=\"name\" value=\"" .$row['name'] . "\">";
                        echo "<input type=\"hidden\" name=\"preis\" value=\"" .$row['preis'] . "\">";
                        echo "<input type=\"hidden\" name=\"stuck\" min=\"1\" max=\"10\" value=\"1\">";
                        echo "</form>";
                    }                    
                    echo "</div>" . "</div>";
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
                    }
                 else {
                        echo "Kein Produkt gefunden.";
                    }
                ?>

            </div>
        </div>
        </div>
            
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recommendation.php"?>
            <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/reise.php"?>
        </main>
        <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/footer.php" ?>
</div>
    </body>
</html>