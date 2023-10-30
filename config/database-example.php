<html>
    <head>
        <title>PP</title>
    </head>
    <body>

<?php

$host = 'db';
$dbname = 'db';
$username = 'db';
$password = 'db';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $sql = "SELECT * FROM `produkt` order by `name`";
    $query = $pdo->query($sql);

    /*
    echo "<pre>";
     var_dump($host);
    echo "</pre>";
    */
    
    echo "<ul>";
    foreach ( $query as $row) {
       echo "<li>" . $row['id'] . </li>
    };
    echo "</ul>";



} catch (PDOException $e) {
    print_r($e->getMessage());
}

?>

</body>
</html>
