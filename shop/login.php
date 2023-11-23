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
        <h2 class="text"> Pflanzen Paradies </h2>
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
                header('Location: geheim.php');
                exit();
            } else {
                $errorMessage = "Achtung:E-Mail oder Passwort war ungültig<br>";
            }
            
        }
        ?>
         
        <?php 
        if(isset($errorMessage)) {
            echo $errorMessage;
        }
        ?>

        <form class="anmeldung-form" action="?login=1" method="post">
            <input type="email" name="email" placeholder="E-mail Adresse">
            <input type="password" name="password" placeholder="Passwort"><br>
             
            <input type="submit" value="Anmelden ">
        </form>
        <p class="nicht-registrirt"> Sind Sie noch nicht registriert? Dann registrieren Sie sich hier:</p>
        <form class="anmeldung-form" action="anmeldung.php">
            <input type="submit" value="Jetzt regiestrieren">
        </form>
        </main>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recommendation.php"?>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ?>
    </div>
</body>
</html>
