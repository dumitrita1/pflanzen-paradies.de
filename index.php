<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
        <?php include "includes/meta.php" ?>
    </head>
    <body>
        <div class="document">
            <?php include "includes/header.php" ?>
            <main>
                <?php include "includes/call-to-action.php" ?>
                <?php include "includes/empfohlene-produkte.php" ?>

                <p class=textperssonal>
                    Die Menschen, die dafür sorgen, dass die Pflanzen sicher bei Ihnen ankommen
                </p>        
                <ul class="perssonal">
                    <li class="flip-card">
                        <div class="flip-card__inner">
                            <div class="flip-card__front">
                                <img src="img/SuniLee.jpg" alt="Suni Lee- Floristin">
                            </div>
                            <div class="flip-card__back">
                                <strong>Suni Lee</strong>
                                <p>Unser Florist kombiniert künstlerisches Talent mit einem tiefen Wissen über Pflanzen, 
                                    um üppige Blumenarrangements zu kreieren, 
                                    die Emotionen hervorrufen und kunstrelevante Anlässe unvergesslich machen.</p>
                            </div>
                        </div>
                    </li>
                    <li class="flip-card">
                        <div class="flip-card__inner">
                        <div class="flip-card__front">
                            <img src="img/MatthiasMüller.jpg" alt="Matthias Müller - Designer">
                        </div>
                        <div class="flip-card__back">
                        <strong>Matthias Müller</strong>
                            <p>Unser Designer, der tiefes botanisches Wissen mit einem ausgeprägten Sinn für Ästhetik verbindet. 
                                Er schafft harmonische Landschaften und verwandelt jeden Raum in ein Meisterwerk..</p>
                         </div>
                        </div>
                    </li>
                    <li class="flip-card">
                        <div class="flip-card__inner">
                            <div class="flip-card__front">
                            <img src="img/johnDeo.jpg" alt="John Doe- Gärtner">
                            </div>
                        <div class="flip-card__back">
                             <strong>John Doe</strong>
                                <p>Unser Gärtner verbindet tiefes Pflanzenwissen mit ästhetischem Gespür,
                                     handwerklichem Können und einem starken Engagement für Nachhaltigkeit,
                                     um Gärten zum Blühen zu bringen und die Wünsche der Kunden meisterhaft umzusetzen.</p>
                        </div>
                        </div>
                    </li>
                </ul>

                <div class= "footerbild">
                    <ol class="miniplant">
                        <div class="first-column">
                            <li>
                                Gratisversand
                            </li>
                            <li>
                                Schnelle Lieferung
                            </li>
                            <li>
                                Rabatte
                            </li>
                        </div>
                        <div class="second-column">
                            <li>
                                Die beste Qualität
                            </li>
                            <li>
                                Garantie
                            </li>
                            <li>
                                Gute Preise
                            </li>
                        </div>
                    </ol>
                </div>
                <?php include "includes/reise.php"?>
            </main>
            <?php include "includes/footer.php" ?>
        </div>
    </body>
</html>