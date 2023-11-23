<?php 
include  $_SERVER['DOCUMENT_ROOT'] . "/config/database.php"; 
session_start(); 
if (!isset($_SESSION['userid'])) {
    
    header('Location: login.php');
    exit; 
   
}
$userid = $_SESSION['userid'];
?>

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

            $userid = $_SESSION['userid'];
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $produkt = $_POST["product_id"];
            $anmelde= $_SESSION['userid'];

            $name = $_POST["name"];
            $grosse = $_POST["grosse"];
            $stuck = $_POST["stuck"];
            $preis = $_POST["preis"];

            $total= (int)$stuck * (float)$preis;
            echo $stuck;

            $sql = $pdo->prepare("SELECT count(*) AS anzahl FROM fav WHERE benutzer = ? AND produkt = ?");
            $sql->bindParam(1, $anmelde, PDO::PARAM_INT);
            $sql->bindParam(2, $produkt, PDO::PARAM_INT);
            $sql->execute();
            $row_count = $sql->fetchAll();

            if ($row_count[0]['anzahl']== 0) {
            $insertSql = $pdo->prepare("INSERT INTO fav (benutzer, produkt, name, grosse, stuck, preis, total) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $insertSql->bindParam(1, $anmelde, PDO::PARAM_INT);
            $insertSql->bindParam(2, $produkt, PDO::PARAM_INT);
            $insertSql->bindParam(3, $name, PDO::PARAM_STR);
            $insertSql->bindParam(4, $grosse, PDO::PARAM_STR);
            $insertSql->bindParam(5, $stuck, PDO::PARAM_INT);
            $insertSql->bindParam(6, $preis, PDO::PARAM_INT);
            $insertSql->bindParam(7, $total, PDO::PARAM_INT);


        

            $insertSql->execute();

            }
            
            if (isset($_POST['delete'])) {
                $deleteSql = $pdo->prepare("DELETE FROM fav WHERE benutzer = ? AND produkt = ?");
                $deleteSql->bindParam(1, $anmelde, PDO::PARAM_INT);
                $deleteSql->bindParam(2, $produkt, PDO::PARAM_INT);
               
                $deleteSql->execute();    
                header('Location: favorit.php');
                exit; 
            }

            if (isset($_POST['in-den-warenkorb'])) {
                $deleteSql = $pdo->prepare("DELETE FROM fav WHERE benutzer = ? AND produkt = ?");
                $deleteSql->bindParam(1, $anmelde, PDO::PARAM_INT);
                $deleteSql->bindParam(2, $produkt, PDO::PARAM_INT);
               
                $deleteSql->execute();    
                header('Location: favorit.php');
                exit; 
            }
            
        }

        
?>
        <?php
            $sql = $pdo->prepare("SELECT produkt.id, produkt.name, produkt.img, produkt.preis FROM fav, produkt WHERE fav.benutzer = ? and produkt.id = fav.produkt;");

            $sql->bindParam(1, $userid, PDO::PARAM_INT);
            $sql->execute();
            $query = $sql->fetchAll();

            echo "<div class=\"\">";
            echo "<h2 class=\"warenkorb\">Mein Merkzettel</h2>";
            echo "<ul class=\"cart-list\">";
            foreach ($query as $row) {
                echo "<li>"
                    . "<span>" . "<img class=\"product-card__container-img\" src=\"/img/" . $row['img'] . "\" alt="
                    . $row['name'] 
                    . ">" . "</span>"
                    . "<span><strong>" . $row['name'] . "</strong></span>";
                echo "<span>" . $row['preis'] . "€" . "</span>" . "</span></li>";
            
                echo "<form method=\"post\">";
                echo "<input type=\"hidden\" name=\"delete\" >";
                echo "<input type=\"hidden\" name=\"product_id\" value=\"" . $row['id'] . "\">";
                echo "<div class=\"favorit-button\">";
                echo "<button type=\"submit\" name= \"delete\" >⌫ Entfernen</button>";
                echo "<input type=\"hidden\" name=\"in-den-warenkorb\" >";
                echo "<button type=\"submit\"> 🛒 In den Warenkorb</button>";
                echo "</div></form>";
            }
            

            echo "</ul>" ."</div>";
            
    ?>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recommendation.php"?>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/reise.php"?>
    </main>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
</div>
</body>
</html>



