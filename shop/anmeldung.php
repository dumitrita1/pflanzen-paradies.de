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
        $showFormular = true;
            if (isset($_GET['register'])) {
                $error = false;
                $email = $_POST["email"];
                $password = $_POST["password"];
                $password2 =$_POST["password2"];

            
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
                    $error = true;
                }  

                if(strlen($password) == 0) {
                    echo 'Bitte ein Passwort angeben<br>';
                    $error = true;
                }
                if($password != $password2) {
                    echo 'Die Passwörter müssen übereinstimmen<br>';
                    $error = true;
                }
                
                if(!$error) { 
                $statement = $pdo->prepare("SELECT  * FROM registriren WHERE email = :email");
                $result = $statement->execute(array(':email' => $email));
                $user = $statement->fetch();

                if($user !== false) {
                    echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
                    $error = true;
                }    
            }
            if(!$error) { 
                $hash_password = password_hash($password, PASSWORD_ARGON2ID);

                $statement = $pdo->prepare("INSERT INTO registriren( email, password) VALUES (:email, :password)");
                $result = $statement->execute(array(':email' => $email, ':password' => $hash_password));
                
                if($result) {        
                    echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
                    $showFormular = false;
                } else {
                    echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
                }
    } 
}
    
        if($showFormular) {
?>
        <div class= "anmeldung">
            <form class= "anmeldung-form" action="?register=1" method ="post">
                <input type="email" name="email" value="<?php echo isset($email) ? $email : ''?>" placeholder="E-mail Adresse" >
                <input type="password" name="password" placeholder="Passwort">
                <input type="password" name="password2" placeholder="Passwort wiederholen">
                <input type="submit" value="Registrieren">
            
            </form>
            <form action= "login.php">
            <input type="submit" value="Jetzt anmelden">
            </form>
            
        </div>
    <?php
    } 
    ?>
</main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
</div>
</body>
</html>
