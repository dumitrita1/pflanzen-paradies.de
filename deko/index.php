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
               $sql = "SELECT name, text1 FROM seite where id=4";
               $query = $pdo->query($sql);
               foreach ($query as $row) {
               echo "<h1 class=\"text\">"  . $row['name'] ."</h2>"; 
               echo "<p class=\"text\">"  . $row['text1'] ."</p>"; 
               }
               
        ?>
            <div class=deko-shop>
                    <div class="deko-shop__produs">
                        <a href ="/deko/trockenen-blumen">
                            <img src="/img/blumen3.jpg" alt="Getrocknete Pflanze mit Tannenzapfen">
                            <p class="shop-list__link-text">Getrocknete Pflanze</p>
                        </a>
                    </div>
                    <div class="deko-shop__produs">
                        <a href="/deko/blumentopf">
                            <img src="/img/topf.jpg"  alt="Blumentopf">
                            <p class="shop-list__link-text">Blumentopf</p>
                        </a>
                    </div>
                    <div class="deko-shop__produs">
                        <a href="/deko/keramikvase">
                            <img src="/img/vase.jpg"  alt="handgefertigte Keramikvase">
                            <p class="shop-list__link-text">Keramikvase</p>
                        </a>
                    </div>
                    <div class="deko-shop__produs">
                        <a href="/deko/steine">
                            <img src="/img/steine.jpg"  alt="Mehrfarbige Steine">
                            <p class="shop-list__link-text">Mehrfarbige Steine</p>
                        </a>
                    </div>
            </div>
            <?php include "../includes/recommendation.php"?>
            <?php include "../includes/reise.php"?>
        </main>

        <?php include "../includes/footer.php" ?>
    </div>
    </body>
</html>