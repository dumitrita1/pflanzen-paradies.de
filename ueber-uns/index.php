<?php include "../config/database.php" ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
        <?php include "../includes/meta.php" ?>
    </head>
    <body>
        <div class="document">
        <?php include "../includes/header.php" ?>
        <main>
        <div class="uber-uns">
        <img class="uber-uns__img" src="/img/plant-haus.jpg" width="1280px" height="auto" alt="Haus">  
            <h1 class="uber-uns__text">
            Wir sind Pflanzen Paradis
            </h1>
            </div>
        <div class="two-containers">
            <div class="collagen-flex">
                <div class="collagen">
                    <div class="collagen-haus">  
                        <img src="/img/haus.jpg" alt="Girl in a jacket" width="550" > 
                    </div> 
                    <div class="collagen-frau ">
                        <img src="/img/frau.jpg" alt="Girl in a jacket" width="300" >
                    </div>
                    <div class="collagen-colectiv "> 
                        <img src="/img/colectiv.jpg" alt="Girl in a jacket" width="350" > 
                    </div>
                    <div class="collagen-copil "> 
                        <img src="/img/copil.jpg" alt="Girl in a jacket" width="200" >
                    </div>
                </div>
            </div>
            <div class="collagen-flex">
                <p class= "collagen-text">Seit mehr als 85 Jahren beliefert das Traditionsunternehmen Pflanzen-Paradies unsere 
                Hansestadt mit Schnittblumen und Wohnzimmerpflanzen aller Art. 
                Der Florist stellt auch Blumensträuße für jeden Anlass her.
                Neben verschiedenen Wochenmärkten können Sie an vier Standorten in Bremen 
                durch das grüne Sortiment stöbern und sich von den Düften verzaubern 
                lassen oder sich die Fairtrade-Blumen bequem nach Hause liefern lassen.
                </p>
            </div>
        </div>
            <div class="tabs-container"> 
                <ul class="tabs">
                        <li> 
                            <button id="button-pflanzen" class="tab"> Finde den passenden Pflanzen-Buddy!</button>
                        </li>
                        <li>
                            <button id="button-keinPlan" class="tab">Von Pflanzen hast du noch keinen Plan?</button>
                        </li>
                    </ul>
                    <section id="pflanzen-buddy" class="tab-panel">
                        <p>Du hast auch manchmal Probleme dich zu entscheiden? Mit unserem Pflanzenfinder findest du im 
                            Handumdrehen dein perfektes Pflanzen-Match! Damit du auch genau mit der Pflanze nach Hause gehst, 
                            die zu dir und deinem Lebensstil passt.
                        </p>
                    </section>
                    <section id="kein-plan" class="tab-panel">
                        <p>Kein Problem, bei uns wird niemand ins kalte Wasser geworfen. 
                            Wir lieben unsere Pflanzen und möchten, dass diese ein langes, 
                            glückliches Leben bei dir führen können. Wichtig zu wissen: 
                            Unsere grünen Lieblinge haben fast die gleichen Bedürfnisse wie wir!
                            Sie wollen einen gemütlichen Platz - am liebsten mit ein paar Kumpels zusammen,
                            sie brauchen Luft zum Atmen und haben wie wir, regelmäßig Hunger und Durst.
                            Bevor du deiner Pflanze jetzt aber einen gesunden Smoothie mixt oder ihr womöglich 
                            noch einen leckeren Salat vorsetzt, lies dir lieber immer unsere Pflegetipps 
                            zu deinem neuen Mitbewohner durch!
                        </p>
                    </section>
            </div>
             <?php include "../includes/personal.php"?>
             <div class="plant-addiction">
                <div class="plant-addiction__text">
                    <h3 class="text">Das ist Plantaddiction</h3>
                    <p class="text-paragraf"> Wir lieben Pflanzen und wollen diese Liebe mit jedem Plantaddict und allen,
                    die es noch werden wollen, teilen</p>
                </div>
                <div class="plant-addiction__list">
                    <ol class="plant-addiction__list-style">
                        <li class="plant-addiction__list-text">
                            Dein Pflanzen-Match 🪴
                        </li>
                        <li class="plant-addiction__list-text">
                            Konstenlose Lieferung 🆓🚘
                        </li>
                        <li class="plant-addiction__list-text">
                            Unsere liebevolle Pflanzenstube 🏡
                        </li>
                        <li class="plant-addiction__list-text">
                            Wir sind immer für dich da 🏪☎️
                        </li>
                    </ol>
                </div>    
            </div>
        </main>

        <?php include "../includes/footer.php" ?>
    </div>
    </body>
</html>