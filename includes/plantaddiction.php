<div class="plant-addiction">
    <div class="plant-addiction__text">
        <h3 class="text">Das ist Plantaddiction</h3>
        <p class="text-paragraf"> Wir lieben Pflanzen und wollen diese Liebe mit jedem Plantaddict und allen,
            die es noch werden wollen, teilen</p>
    </div>

    <?php 
        echo "<div class=\"plant-addiction__list\">";
        echo "<ol class=\"plant-addiction__list-style\">";
        $sql = $pdo->prepare("SELECT name FROM plant_addiction");
        $sql->execute();
                $query = $sql->fetchAll();
        foreach($query as $row){
            echo "<li class=\"plant-addiction__list-text\">" .$row['name'] ."</li>";
            }
            echo "</ol>" ."</div>";
    ?>
</div>