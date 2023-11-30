<div class="text-reise">
    <p>
        Die Reise zu deiner neuen Pflanze Stressfrei deine Zimmerpflanze online bestellen
    </p>
</div>

<?php
$sql= $pdo->prepare("SELECT name, img FROM reise");
$sql->execute();
$query = $sql->fetchAll();
echo "<ul class=\"trip-plant\">";

foreach ($query as $row){
    echo "<li class=\"trip-plant__list\">";
    echo "<a class=\"trip-plant__list-text\"> <img class=\"trip-plant__list-img\" src=\"/img/" . $row['img'] . "\">" .$row['name'] ."</a>";
    echo "</li>" ;
}
    echo "</ul>"; 
?>