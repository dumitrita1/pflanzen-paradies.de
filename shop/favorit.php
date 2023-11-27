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
                if (isset($_POST["grosse"])) {
                    $grosse = $_POST["grosse"];
                }   
                if (isset($_POST["stuck"])) {
                    $stuck = $_POST["stuck"];
                } 
                if (isset($_POST["preis"])) {
                    $preis = $_POST["preis"];
                }   
                if (isset($_POST["name"])) {
                    $name = $_POST["name"];
                } 
                if (isset($_POST["id"])) {
                    $id = $_POST["id"];
                }
            $produkt = $_POST["product_id"];
            $anmelde= $_SESSION['userid'];
            
            
        
            $sql = $pdo->prepare("SELECT count(*) AS anzahl FROM fav WHERE benutzer = ? AND produkt = ?");
            $sql->bindParam(1, $anmelde, PDO::PARAM_INT);
            $sql->bindParam(2, $produkt, PDO::PARAM_INT);
            $sql->execute();
            $row_count = $sql->fetchAll();

            if ($row_count[0]['anzahl']== 0) {
            $insertSql = $pdo->prepare("INSERT INTO fav (benutzer, produkt,name, grosse, stuck, preis)
             VALUES (?,?, ?, ? , ?, ?)");
            $insertSql->bindParam(1, $anmelde, PDO::PARAM_INT);
            $insertSql->bindParam(2, $produkt, PDO::PARAM_INT);
            $insertSql->bindParam(3, $name, PDO::PARAM_STR);
            $insertSql->bindParam(4, $grosse, PDO::PARAM_STR);
            $insertSql->bindParam(5, $stuck, PDO::PARAM_INT);
            $insertSql->bindParam(6, $preis, PDO::PARAM_INT);
            $insertSql->execute();

            }
            
            

            if (isset($_POST['in-den-warenkorb'])) {
                $sql = $pdo->prepare("SELECT count(*) AS anzahl FROM warenkorb WHERE benutzer = ? AND produkt = ?");
                $sql->bindParam(1, $anmelde, PDO::PARAM_INT);
                $sql->bindParam(2, $produkt, PDO::PARAM_INT);
                $sql->execute();
                $row_count = $sql->fetchAll();

                if ($row_count[0]['anzahl']== 0) {
                    $exchangeSql = $pdo->prepare("INSERT INTO warenkorb (benutzer, produkt, name, grosse, stuck,preis)
                    SELECT benutzer, produkt, name, grosse, stuck,preis
                    FROM fav
                    WHERE benutzer = ? AND produkt = ?");
    
                    $exchangeSql->bindParam(1, $anmelde, PDO::PARAM_INT);
                    $exchangeSql->bindParam(2, $produkt, PDO::PARAM_INT);
                   
                    $exchangeSql->execute();
                    header('Location: warenkorb.php');
                    exit;  
                    }
            
            
                else  {
                    $calculateTotalStuckSql = $pdo->prepare("
                    SELECT SUM(fav.stuck + warenkorb.stuck) as total_stuck 
                    FROM fav
                    INNER JOIN warenkorb ON fav.benutzer = warenkorb.benutzer AND fav.produkt = warenkorb.produkt
                    WHERE fav.benutzer = ? AND fav.produkt = ? ");
 
                    $calculateTotalStuckSql->bindParam(1, $anmelde, PDO::PARAM_INT);
                    $calculateTotalStuckSql->bindParam(2, $produkt, PDO::PARAM_INT);

                    $calculateTotalStuckSql->execute();
                    $row_totalStuck = $calculateTotalStuckSql->fetch();

                    $updateWarenkorbSql = $pdo->prepare("
                        UPDATE warenkorb 
                        SET stuck = :total_stuck
                        WHERE benutzer = :benutzer AND produkt = :produkt
                    ");

                    $updateWarenkorbSql->bindParam(':total_stuck', $row_totalStuck['total_stuck'], PDO::PARAM_INT);
                    $updateWarenkorbSql->bindParam(':benutzer', $anmelde, PDO::PARAM_INT);
                    $updateWarenkorbSql->bindParam(':produkt', $produkt, PDO::PARAM_INT);

                    $updateWarenkorbSql->execute();

                    header('Location: warenkorb.php');
                    exit;

                }
            }    
            if (isset($_POST['delete'])) {
                $deleteSql = $pdo->prepare("DELETE FROM fav WHERE benutzer = ? AND produkt = ?");
                $deleteSql->bindParam(1, $anmelde, PDO::PARAM_INT);
                $deleteSql->bindParam(2, $produkt, PDO::PARAM_INT);
               
                $deleteSql->execute();
            }
        }      
?>
        <?php
            $sql = $pdo->prepare("SELECT produkt.id, fav.name, img, fav.preis FROM fav, produkt 
            WHERE fav.benutzer = ? and produkt.id = fav.produkt;");
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
                echo "<input type=\"hidden\" name=\"product_id\" value=\"" . $row['id'] . "\">";
                echo "<div class=\"favorit-button\">";
                echo "<button type=\"submit\" name= \"delete\" >⌫ Entfernen</button>";
                echo "<button type=\"submit\" name=\"in-den-warenkorb\"> 🛒 In den Warenkorb</button>";
                echo "</div></form>";
            }
            

            echo "</ul>" ."</div>" ;
            
    ?>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recommendation.php"?>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/reise.php"?>
    </main>
    </div>
        </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
</div>
</body>
</html>