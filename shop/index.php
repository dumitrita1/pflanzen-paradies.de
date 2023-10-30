<?php include "../config/database.php" ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
        <?php include "../includes/meta.php" ?>
    </head>
    <body>
        <?php include "../includes/header.php" ?>

        <main> 
    <div class="document">
            <div class="shop-header">
                <h1 class="text">Unsere Pflanzen </h1>
                <p class="text">〰️〰️</p>
                <p class="shop-header_text">
                Schöne, lebendige und harmonische Pflanzen eignen sich hervorragend zur Dekoration und Veränderung des Stils jedes Ortes. Sie können sogar Lärm absorbieren und eine Umgebung würzen. Nachfolgend finden Sie eine Liste von über 20 Pflanzen, die Ihr Zuhause oder Ihren Garten bunter machen können.
                </p>
            </div>
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
                            <option value="groß" >Groß</option>
                        </select>
                    </form>
            </div>
            <div class="display-flex-shop">
                    
                <?php
                $sql = "SELECT id, img, name, preis, name_kategorie, name_grosse
                FROM produkt
                INNER JOIN kategorie ON produkt.category = `kategorie`.`id-kategorie`
                INNER JOIN grosse ON produkt.grosse = grosse.`id-grosse`;
               ";
                $query = $pdo->query($sql);

                        foreach ( $query as $row) {
                        echo "<li class=\"shop-list__link\" 
                        data-ort=\"" . strtolower($row['name_kategorie']) . 
                        "\" data-size=\"" . strtolower($row['name_grosse']) .
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
            <?php include "../includes/reise.php"?>
        </main>

        <?php include "../includes/footer.php" ?>
    </div>
    </body>
</html>