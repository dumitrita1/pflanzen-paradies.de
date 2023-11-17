<?php include $_SERVER['DOCUMENT_ROOT'] . "/config/database.php" ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pflanzen Paradies</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/meta.php" ?>
</head>
<body>
    <div class="document">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php" ?>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $anmelde= $_POST ["user_id"];
            $produkt = $_POST ["product_id"];

            $sql = $pdo->prepare("SELECT count(*) AS anzahl FROM fav WHERE benutzer = ? AND produkt = ?");
            $sql->bindParam(1, $anmelde, PDO::PARAM_INT);
            $sql->bindParam(2, $produkt, PDO::PARAM_INT);
            $sql->execute();
            $row_count = $sql->fetchAll();

            if ($row_count[0]['anzahl']== 0) {
                $insertSql = $pdo->prepare("INSERT INTO fav (benutzer, produkt) VALUES (?, ?)");
                $insertSql->bindParam(1, $anmelde, PDO::PARAM_INT);
                $insertSql->bindParam(2, $produkt, PDO::PARAM_INT);
                $insertSql->execute();

            }
        
        }
?>
        <?php
            $sql = $pdo->prepare("SELECT name, img, preis FROM fav, produkt WHERE fav.benutzer = ? and produkt.id = fav.produkt;");
            $sql->bindParam(1, $anmelde, PDO::PARAM_INT);
            $sql->execute();
            $query = $sql->fetchAll();

            echo "<div class=\"\">";
            echo "<h2 class=\"warenkorb\">Mein Merkzettel</h2>";
            echo "<ul class=\"cart-list\">";
            foreach ($query as $row) {
        
                echo "<li>"
                    . "<span>" . "<img  class=\"product-card__container-img\" src=\"/img/" . $row['img'] . "\" alt=" 
                    . $row['name'] 
                    . ">". "</span>"
                    ."<span><strong>" . $row['name'] . "</strong></span>"; 
                echo "<span>" . $row['preis'] . "€" . "</span>" . "</span></li>";

                echo "<div class=\"favorit-button\">";
                echo "<button>⌫ Entfernen</button>";
                echo "<button> 🛒 In den Warenkorb</button>";
                echo "</div>";
            }

            echo "</ul>"."</h2>" ."</div>";
            echo "</div>";
    ?>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recommendation.php"?>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/reise.php"?>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
</div>
</body>
</html>



