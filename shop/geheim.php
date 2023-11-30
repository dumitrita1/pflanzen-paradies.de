<?php
include $_SERVER['DOCUMENT_ROOT'] . "/config/database.php";
session_start(); 

if (!isset($_SESSION['userid'])) {
    
    header('Location: login.php');
    exit; 
   
}
$userid = $_SESSION['userid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pflanzen Paradies</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/meta.php" ?>
</head>
<body>
    <div class="document">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php" ?>
        
        <h1 class="text">Mein Konto</h1>

<p class="hallo"> Hallo </p>

<?php

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $showFormular = true;
    $checkSql = "SELECT COUNT(*) FROM personaldaten WHERE benutzer = :userid";
    $result = $pdo->prepare($checkSql);
    $result->bindParam(':userid', $userid);
    $result->execute();

    if ($result->fetchColumn() > 0) {
        $showFormular = false;
        $sql = $pdo->prepare("SELECT firstname, nachname FROM personaldaten WHERE benutzer = :userid");
        $sql->bindParam(':userid', $userid, PDO::PARAM_STR);
        $sql->execute();
        $query = $sql->fetchAll();

        foreach ($query as $row) {
            echo "<p class=\"setting-name\">" . $row['firstname'] . " " . $row['nachname'] . "</p>";
        }
        
    }
    echo "<p class=\"link\"><a href=\"/shop/favorit.php\">Hier</a> finden Sie Ihre aktuellen Daten zu den Pflanzen, die Sie kaufen möchten.</p>";
    if ($showFormular) {
    if ($showFormular && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['firstname']) && isset($_POST['lastname'])) {
        $vorname = $_POST['firstname'];
        $nachname = $_POST['lastname'];
        $checkSql = "SELECT COUNT(*) FROM personaldaten WHERE benutzer = :userid";
        $stmt = $pdo->prepare($checkSql);
        $stmt->bindParam(':userid', $userid);
        $stmt->execute();
        if ($stmt->fetchColumn() == 0) {
            $insertSql = "INSERT INTO personaldaten (benutzer, firstname, nachname) VALUES (:userid, :vorname, :nachname)";
            $sql = $pdo->prepare($insertSql);
            $sql->bindParam(':userid', $userid);
            $sql->bindParam(':vorname', $vorname);
            $sql->bindParam(':nachname', $nachname);
            $sql->execute();
        } else {
            
            $updateSql = "UPDATE personaldaten SET firstname = :vorname, nachname = :nachname WHERE benutzer = :userid";
            $sql = $pdo->prepare($updateSql);
            $sql->bindParam(':userid', $userid);
            $sql->bindParam(':vorname', $vorname);
            $sql->bindParam(':nachname', $nachname);
            $sql->execute();
        }
    }

?>

            
            <p class="setting-text">Meine persönlichen Daten hinzufügen </p>
            <form  class="personaldaten-form" id="toggle-form" action="?register=1" method="post">
                <label for="firstname">First name:</label>
                <input type="text" value="<?php echo isset($vorname) ? $vorname : ''; ?>" name="firstname">
                <label for="lastname">Last name:</label>
                <input type="text" value="<?php echo isset($nachname) ? $nachname : ''; ?>" name="lastname">
                <input type="submit" value="Speichern ">
            </form>
    
            <?php } 
            ?>

        <p class="logout"><a href="log-out.php">Log out</a></p>
    
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recommendation.php"?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
    </div>
</body>
</html>