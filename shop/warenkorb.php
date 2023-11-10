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
    $name = $_POST["name"];
    $grosse = $_POST["grosse"];
    $stuck = $_POST["stuck"];
    $preis = $_POST["preis"];

    $total_ausrechnen = $pdo->prepare("SELECT (stuck * preis) AS total FROM warenkorb");
    $total_ausrechnen->execute(); 

    $total = $total_ausrechnen->fetchColumn();
    $sql = $pdo->prepare("INSERT INTO warenkorb (name, grosse, stuck, preis, total) VALUES (?, ?, ?, ?, ?)");
        $sql->bindParam(1, $name, PDO::PARAM_STR);
        $sql->bindParam(2, $grosse, PDO::PARAM_STR);
        $sql->bindParam(3, $stuck, PDO::PARAM_INT);
        $sql->bindParam(4, $preis, PDO::PARAM_INT);
        $sql->bindParam(5, $total, PDO::PARAM_INT);
    
    $sql->execute();
}


    
?>

  
<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recommendation.php"?>
<?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/reise.php"?>
        </main>
        <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/footer.php" ?>
</div>
    </body>
</html>
