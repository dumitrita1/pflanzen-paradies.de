<?php include "../config/database.php" ?>


<?php
    echo "<div class=\"recommendation\">";
    echo "<p class=\"text\"> Empfohlene Produkte </p>";
    echo "<ul class=\"recommendation-list\">";

    $sql = "SELECT id, img, name FROM produkt  WHERE id IN  (5, 6, 4)" ;
    $query = $pdo->query($sql);

    foreach ($query as $row) {
        echo "<li class=\"recommendation-list__item\">";
        echo "<a class=\"recommendation-list__item-link\" href=\"/shop/pflanze.php?id=" . $row['id'] . "\"> <img class=\"recommendation-list__item-img\" src=\"/img/" 
            . $row['img']
            . "\" alt=" 
            . $row['name'] 
            . "\">"
            . "</a>"
            . "</li>";
    }
    echo "<button class=\"slide-arrow\"> ⟫ </button>";
    echo "</ul>" ."</div>";
?>

