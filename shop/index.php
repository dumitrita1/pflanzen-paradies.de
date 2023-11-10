<?php include  $_SERVER['DOCUMENT_ROOT'] . "/config/database.php" ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
        <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/meta.php" ?>
    </head>
    <body>
        <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/header.php" ?>

        <main> 
    <div class="document">
    <?php 
               $sql = $pdo->prepare ("SELECT name, text1, text2 FROM seite where id=3");
               $sql->execute();
               $query = $sql->fetchAll();
               foreach ($query as $row) {
               echo "<div class=\"shop-header\">";
               echo "<h1 class=\"text\">"  . $row['name'] ."</h2>"; 
               echo "<p class=\"text\">"  . $row['text1'] ."</p>"; 
               echo "<p class=\"shop-header_text\">"  . $row['text2'] ."</p>" ."</div>"; 
               }
               
               ?>
            <div class="shop">
                <h2 class= "filter-text"> Sortieren <h2>
                    <div class="filter-shop">
                    <form class="filter-form">
                        <select class= "filter-form__option">
                            <option value="alle">Alle</option>
                            <option value="zimmerpflanzen">Zimmerpflanzen</option>
                            <option value="gartenpflanzen">Gartenpflanzen</option>
                        </select>
                    </form>
                    <form class="filter-form">
                        <select class= "filter-form__option-price">
                            <option value="alle">Alle Preise</option>
                            <option value="niedrigster">Preis:niedrigster zuerst</option>
                            <option value="höchster">Preis:höchster zuerst</option>
                        </select>
                    </form>
                    <form class="filter-form">
                        <select class= "filter-form__option-size">
                            <option value="alle" >Alle Größen</option>
                            <option value="klein">Klein</option>
                            <option value="mittel">Mittel</option>
                            <option value="gross" >Groß</option>
                        </select>
                    </form>
            </div>
            <div class="display-flex-shop">
                    
                <?php
                $sql = $pdo->prepare ("SELECT id, img, name, preis,  name_kategorie, grosse
                FROM produkt
                INNER JOIN kategorie ON produkt.category = `kategorie`.`id-kategorie`
               ");
                $sql->execute();
                $query = $sql->fetchAll();
                        foreach ( $query as $row) {
                        echo "<li class=\"shop-list__link\" 
                        data-ort=\"" . strtolower($row['name_kategorie']) . 
                        "\" data-size=\"" . strtolower($row['grosse']) .
                         "\" data-price=\"" .$row['preis'] 
                         . "\">";
                         echo "<a href=\"/shop/pflanze.php?id=" . $row['id'] . "\"><img src=\"/img/" 
                         . $row['img']
                          . "\" alt=" 
                          . $row['name'] 
                          . ">";
                         echo "<p class=\"shop-list__link-text\">" . $row['name'] . "</p>";
                         echo "<p class=\"shop-list__link-text\">" . $row['preis'] ."€" . "</p></a></li>\n";
                     }

                ?>

            </div>
            </div>
            <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/reise.php"?>
        </main>

        <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/footer.php" ?>
    </div>
    </body>
</html>