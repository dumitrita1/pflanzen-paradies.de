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
        <h2 class = "text"> Log out! </h2>
	
<?php
session_start();
session_destroy();
 
echo "Logout erfolgreich";
?>

</main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
</div>
</body>
</html>