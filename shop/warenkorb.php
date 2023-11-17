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

        
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $anmelde= $_POST ["user_id"];
            $name = $_POST["name"];
            $grosse = $_POST["grosse"];
            $stuck = $_POST["stuck"];
            $preis = $_POST["preis"];

            $total = $stuck * $preis;
            
            $sql = $pdo->prepare("INSERT INTO warenkorb (name, benutzer, grosse, stuck, preis, total) VALUES (?,?, ?, ?, ?, ?)");

            $sql->bindParam(1, $name, PDO::PARAM_STR);
            $sql->bindParam(2, $anmelde, PDO::PARAM_INT);
            $sql->bindParam(3, $grosse, PDO::PARAM_STR);
            $sql->bindParam(4, $stuck, PDO::PARAM_INT);
            $sql->bindParam(5, $preis, PDO::PARAM_INT);
            $sql->bindParam(6, $total, PDO::PARAM_INT);
            $sql->execute();
        }
        ?>

    <?php 
       $sql = $pdo->prepare ("SELECT name, grosse, stuck, total
        FROM warenkorb");
            $sql->execute();
            $query = $sql->fetchAll();
            echo "<div class=\"\">";
            echo "<h2 class=\"warenkorb\">Warenkorb</h2>";
            echo "<ul class=\"cart-list\">";
            foreach ( $query as $row) {
                echo " <li><span><strong>" .$row['name'] . "</strong></span><span>" .$row['grosse']. "</span><span>" .$row['stuck'] ."Stuck". "</span><span>" .$row['total'] ."€" 
                . "</span>"."</li>";
            }
            echo "</ul>";
            $sum = $pdo->prepare("SELECT SUM(total) as total_sum FROM warenkorb");
            $sum->execute();
            $result = $sum->fetch();
            $totalSum = $result['total_sum'];
            
            echo "<p class= \"warenkorb-preis\">Total: $totalSum €</p>";

            echo "<div class=\"cart-button\">";
            echo "<button>⟪ Weiter einkaufen</button>";
            echo "<button>Zur Kasse ⟫</button>";
            echo "</div>";
            echo "</div>";
    ?>

    



  
<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recommendation.php"?>
<?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/reise.php"?>
        </main>
        <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/footer.php" ?>
</div>
    </body>
</html>
