<div class="plant-addiction">
                <div class="plant-addiction__text">
                    <h3 class="text">Das ist Plantaddiction</h3>
                    <p class="text-paragraf"> Wir lieben Pflanzen und wollen diese Liebe mit jedem Plantaddict und allen,
                    die es noch werden wollen, teilen</p>
                </div>

                <?php 
                echo "<div class=\"plant-addiction__list\">";
                echo "<ol class=\"plant-addiction__list-style\">";
                $sql = "SELECT name FROM plant_addiction";
                $query = $pdo->query($sql);
                foreach($query as $row){
                    echo "<li class=\"plant-addiction__list-text\">" .$row['name'] ."</li>";
                }
                echo "</ol>" ."</div>";
                ?>
            </div>