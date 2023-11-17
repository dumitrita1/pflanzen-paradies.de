<?php
include $_SERVER['DOCUMENT_ROOT'] . "/config/database.php";
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

        <?php
        session_start();

        $userid = $_SESSION['userid'];
        
        echo "<p class\"hallo\"> Hallo </p>";
        

        $showFormular = true;

        $checkSql = "SELECT COUNT(*) FROM personaldaten WHERE benutzer = '$userid'";
        $result = $pdo->query($checkSql);

        if ($result->fetchColumn() > 0) {
            $showFormular = false;

            $sql = $pdo->prepare("SELECT firstname, nachname FROM personaldaten WHERE benutzer = :userid");
            $sql->bindParam(':userid', $userid, PDO::PARAM_STR);
            $sql->execute();                
            $query = $sql->fetchAll();

            foreach ($query as $row) {
                echo "<p class=setting-name>"  . $row['firstname'] ." " . $row['nachname'] . "</p>";
            }
            echo "<p class=\"link\"><a href=\"/shop/favorit.php\">Hier</a> finden Sie Ihre aktuellen Daten zu den Pflanzen, die Sie kaufen möchten.</p>";
        }


        if ($showFormular) {

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['firstname']) && isset($_POST['lastname'])) {
                $vorname = $_POST['firstname'];
                $nachname = $_POST['lastname'];

                $sql = "INSERT INTO personaldaten (benutzer, firstname, nachname) VALUES ('$userid', '$vorname', '$nachname')";
            }

            ?>
        <div class="setting">
            <p class="setting-text">Meine persönlichen Daten </p>
            <button class= setting-button>
                <img class="setting-img" src="/img/cog.svg" alt="setting">
                Ändern
            </button>
        </div>
            <form id="toggle-form" action="?register=1" method="post">
                <label for="firstname">First name:</label>
                <input type="text" value="<?php echo isset($vorname) ? $vorname : ''?>" name="firstname">
                <label for="lastname">Last name:</label>
                <input type="text" value="<?php echo isset($nachname) ? $nachname : ''?>" name="lastname">
                <input type="submit" value="Speichern ">
            </form>
            <?php
        }
        ?>
        
      
        
        <p class="logout"><a href="log-out.php">Log out</a></p>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
</body>
</html>
