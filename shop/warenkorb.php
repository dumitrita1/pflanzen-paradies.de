<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/config/database.php"; 
session_start(); 
$stuck = "";
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
            $anmelde= $userid;
            if ( isset ($_POST ["product_id"])){
            $produkt = $_POST ["product_id"];
            }
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
            


            $sql = $pdo->prepare("SELECT count(*) AS anzahl FROM warenkorb WHERE benutzer = ? AND produkt = ?");
                $sql->bindParam(1, $anmelde, PDO::PARAM_INT);
                $sql->bindParam(2, $produkt, PDO::PARAM_INT);
                $sql->execute();
                $row_count = $sql->fetchAll();

            if (isset($_POST['delete']) ) {
                    $deleteSql = $pdo->prepare("DELETE FROM warenkorb WHERE benutzer = ? AND produkt = ?");
                    $deleteSql->bindParam(1, $anmelde, PDO::PARAM_INT);
                    $deleteSql->bindParam(2, $produkt, PDO::PARAM_INT);
                    $deleteSql->execute();    
                    
            }

            if ($row_count[0]['anzahl'] == 0) {
                $insertSql = $pdo->prepare("INSERT INTO warenkorb (benutzer, produkt, img, name, grosse, stuck, preis )
                 VALUES ( ?, ?, ?, ?, ?, ?, ?)");
                $insertSql->bindParam(1, $anmelde, PDO::PARAM_INT);
                $insertSql->bindParam(2, $produkt, PDO::PARAM_INT);
                $insertSql->bindParam(3, $img, PDO::PARAM_STR);
                $insertSql->bindParam(4, $name, PDO::PARAM_STR);
                $insertSql->bindParam(5, $grosse, PDO::PARAM_STR);
                $insertSql->bindParam(6, $stuck, PDO::PARAM_INT);
                $insertSql->bindParam(7, $preis, PDO::PARAM_INT);
               
                $insertSql->execute();
            } 
         
            else {
                echo "askjfsdk";
                $updateWarenkorbSql = $pdo->prepare("
                    UPDATE warenkorb 
                    SET stuck = stuck + :stuck
                    WHERE benutzer = :benutzer AND produkt = :produkt
                ");
            
                $updateWarenkorbSql->bindParam(':stuck', $stuck, PDO::PARAM_INT);
                $updateWarenkorbSql->bindParam(':benutzer', $anmelde, PDO::PARAM_INT);
                $updateWarenkorbSql->bindParam(':produkt', $produkt, PDO::PARAM_INT);
            
                $updateWarenkorbSql->execute();
            }
            if (isset($_POST['update-stuck'])) {
                echo $_POST["stuck"]."<br>";
                echo "ich bin hier";
            
                $updateSql = $pdo->prepare("UPDATE warenkorb SET stuck = :stuck WHERE benutzer = :benutzer AND produkt = :produkt");
                $updateSql->bindParam(':stuck', $new_stuck, PDO::PARAM_INT);
                echo $new_stuck;
                $updateSql->bindParam(':benutzer', $anmelde, PDO::PARAM_INT);
                $updateSql->bindParam(':produkt', $product_id, PDO::PARAM_INT);
                
                $updateSql->execute();
            
            
            }
                    }

           
            

            $sql = $pdo->prepare("SELECT produkt.id, warenkorb.name, produkt.img, warenkorb.preis,warenkorb.grosse, warenkorb.stuck
            FROM warenkorb, produkt WHERE warenkorb.benutzer= ? and produkt.id = warenkorb.produkt;");      
    
            $sql->bindParam(1, $userid, PDO::PARAM_INT);
            $sql->execute();
            $query = $sql->fetchAll();
    
            echo "<h2 class=\"warenkorb\">Warenkorb</h2>";
            echo "<ul class=\"cart-list\">";
            foreach ($query as $row) {
                echo "<li>"
                . "<span>" . "<img  class=\"product-card__container-img\" src=\"/img/" . $row['img'] . "\" alt=" 
                . $row['name'] 
                . ">". "</span>"
                ."<span><strong>" . $row['name']  ."</strong></span>"
                ."<span>"
                . $row['grosse']            
                ."</span>";
                echo "<span>";
                echo "<input type=\"number\" name=\"update-stuck\" min= \"0\" max=\"10\" value=\"" . $row['stuck'] . "\" style=\"width:70px\" >"
                ."</span>";
    
                echo "<span>" . $row['preis'] ."€" ."</span>";
                echo "<span>";
                echo "<form class=\"warenkorb-delete__form\" method=\"post\">";
                echo "<input type=\"hidden\" name=\"delete\" >";
                echo "<input type=\"hidden\" name=\"product_id\" value=\"" . $row['id'] . "\">";
                echo "<button class=\"warenkorb-delete__button\" type=\"submit\" name= \"delete\" >X</button>";
                echo "</form></span>";
                echo "</li>"; 
            }            
            echo "</ul>";
    
            echo "<form class=\"update\" method=\"post\" >";
            foreach ($query as $row) {
                echo "<input type=\"hidden\" name=\"product_id\" value=\"" . $row['id'] . "\">";
            }
            echo "<input type=\"hidden\" name=\"stuck\" min=\"1\" max=\"10\" value=\"1\" >";
            echo "<button type=\"submit\" name=\"update-stuck\">Warenkorb aktualisieren</button>
            </form>";
    
            $sum = $pdo->prepare("SELECT SUM(stuck * preis) as total_sum FROM warenkorb WHERE benutzer = ?");
            $sum->bindParam(1, $userid, PDO::PARAM_INT);
            $sum->execute();
            $result = $sum->fetch(); 
            $totalSum = $result['total_sum'];  
            echo "<p class=\"warenkorb-preis\">Total: $totalSum €</p>";
            echo "<div class=\"cart-button\">";
            echo "<button>⟪ Weiter einkaufen</button>";
            echo "<button>Zur Kasse ⟫</button>";
            echo "</div>";
        
        ?>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recommendation.php"?>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/reise.php"?>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
</div>
</body>
</html>
