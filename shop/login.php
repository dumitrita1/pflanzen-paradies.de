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
        <h2 class = "text"> Pflanzen Paradies </h2>
<?php 
session_start();
 
if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $password = $_POST["password"];
    $statement = $pdo->prepare("SELECT * FROM registriren WHERE email = :email");
    $result = $statement->execute(array(':email' => $email));
    $user = $statement->fetch();
        
    if ($user !== false && password_verify($password, $user['password'])) {
        $_SESSION['userid'] = $user['id'];
        die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
    
}
?>
 
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

<form action="?login=1" method="post">
<input type="email" name="email" placeholder="E-mail Adresse">
<input type="password" name="password" placeholder="Passwort"><br>
 
<input type="submit" value="Anmelden ">
</form>
<form action= "anmeldung.php">
<input type="submit" value="Jetzt regiestrieren">
</form>
</main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
</div>
</body>
</html>