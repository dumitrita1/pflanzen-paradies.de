<?php require  $_SERVER['DOCUMENT_ROOT'] . "/config/database.php" ?>
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
        <main>
        <div class="uber-uns">
            <img class="uber-uns__img" src="/img/plant-haus.jpg" width="1280px" height="auto" alt="Haus"> 
            <?php 
                $sql = $pdo->prepare ("SELECT name FROM seite where id=2");
                $sql->execute();
                $query = $sql->fetchAll();
                foreach ($query as $row) {
                echo "<h1 class=\"uber-uns__text\">"  . $row['name'] ."</h1>";  
                }
                
            ?> 
        </div>
        <div class="two-containers">
            <?php
            echo "<div class=\"collagen-flex\">";
            echo "<div class=\"collagen\">";
                $sql=$pdo->prepare("SELECT img, class,width FROM collage");
                $sql->execute();
                $query = $sql->fetchAll();
                foreach($query as $row){
                    echo "<div class=\"" . $row['class'] . "\">";
                    echo "<img src =\"/img/" . $row['img'] ."\" width= \"" . $row['width'] ."\">";
                    echo "</div>"; 
                }

            echo "</div>" ."</div>";
            ?>
            
            <?php 
                $sql = $pdo->prepare("SELECT text1 FROM seite where id=2");
                $sql->execute();
                $query = $sql->fetchAll();
                foreach ($query as $row) {
                    echo "<div class=\"collagen-flex\">";
                    echo "<p class=\"collagen-text\">"  . $row['text1'] ."</p>" ."</div>";  
                }
            ?>
           
        </div>
        <?php 
        echo "<div class=\"tabs-container\">";
        echo "<ul class=\"tabs\">";
               $sql = $pdo->prepare("SELECT id1,id2, name, description FROM tabs_container");
               $sql->execute();
                $query = $sql->fetchAll();
               foreach ($query as $row) {        
                echo "<li><button id=" . $row['id1'] . " class=\"tab\">" . $row['name'] . "</button></li>";
               }
               echo "</ul>";

               $query2 = $sql->fetchAll();
               foreach ($query2 as $row) {
                echo "<section id=\"" . $row['id2'] . "\" class=\"tab-panel\">";
                echo "<p>" . $row['description'] ."</p>" ."</section>" ;
                
               }
              echo "</div>"; 
               
        ?>

             <?php include  $_SERVER['DOCUMENT_ROOT'] . "/includes/personal.php"?>

            <?php include  $_SERVER['DOCUMENT_ROOT'] . "/includes/plantaddiction.php"?>
        </main>

        <?php include  $_SERVER['DOCUMENT_ROOT'] ."/includes/footer.php" ?>
    </div>
    </body>
</html>