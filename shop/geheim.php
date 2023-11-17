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
        <h2 class = "text">  Mein Konto </h2>

<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}
 
$userid = $_SESSION['userid'];
 
echo "Hallo : ".$userid;
?>

<a href="log-out.php">Log out</a>

</main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
</div>
</body>
</html>
