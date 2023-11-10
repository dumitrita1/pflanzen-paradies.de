 <p class="text">Die Menschen, die dafür sorgen, dass die Pflanzen sicher bei Ihnen ankommen </p>
 <ul class="perssonal">

 <?php
$sql =$pdo->prepare("SELECT img, name, description
FROM  personal");
$sql->execute();
$query = $sql->fetchAll();

foreach ($query as $row) {
    echo "<li class=\"flip-card\">";
    echo "<div class=\"flip-card__inner\">";
    echo "<div class=\"flip-card__front\">";
    echo "<img src=\"/img/" . $row['img'] . "\" alt=\"" . $row['name'] . "\">" . "</div>";
    echo "<div class=\"flip-card__back\">
    <strong>" . $row['name'] . "</strong>"
    . "<p>" . $row['description'] . "</p>"
    . "</div>" . "</div>" . "</li>";
} 

echo   "</ul>"; 
?>