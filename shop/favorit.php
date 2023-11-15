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
    $name = $_POST["name"];
    $img = $_POST["img"];
    $preis = $_POST["preis"];

    echo "Name: " . $name . "<br>";
    echo "Img: " . $img . "<br>";
    echo "Preis: " . $preis . "<br>";

        $sql = $pdo->prepare("INSERT INTO fav (name, img, preis, benutzer) VALUES (?, ?, ?) INNER JOIN fav ON ");
        $sql->bindParam(1, $name, PDO::PARAM_STR);
        $sql->bindParam(2, $img, PDO::PARAM_STR);
        $sql->bindParam(3, $preis, PDO::PARAM_STR);
        $sql->bindParam(4, $benutzer, PDO::PARAM_STR);
        $sql->execute();
}
?>


        <?php 
        $sql = $pdo->prepare ("SELECT name,img, preis
        FROM fav");
            $sql->execute();
            $query = $sql->fetchAll();
            echo "<div class=\"\">";
            echo "<h2 class=\"warenkorb\">Mein Merkzettel</h2>";
            echo "<ul class=\"cart-list\">";
            foreach ( $query as $row) {
                echo "<li><span><strong>" .$row['name'] . "</strong></span>" ."<span>" .$row['img'] ."</span>";
                echo "<span>" .$row['preis'] ."€"  . "</span>"  
                . "</span></li>";
            }
            echo "</ul>"."</h2>" ."</div>";

            echo "<div class=\"cart-button\">";
            echo "<button>⟪ Weiter einkaufen</button>";
            echo "<button>Zur Kasse ⟫</button>";
            echo "</div>";
            echo "</div>";
    ?>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recommendation.php"?>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/reise.php"?>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
</div>
</body>
</html>


<input id="name" type="hidden" name="name" value="<?php echo $row['name']; ?>">
<input id="preis" type="hidden" name="preis" value="<?php echo $row['preis']; ?>">
