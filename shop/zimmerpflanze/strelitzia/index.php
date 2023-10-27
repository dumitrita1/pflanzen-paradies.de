<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
        <?php include "../../../includes/meta.php" ?>
    </head>
    <body>
    <div class="document">
        <?php include "../../../includes/header.php" ?>

        <main>
        <div class="product">
        <div class="product-card">
            <div class="product-card__container">
                <img class="product-card__container-img"src="/img/planta1.jpg" alt="Strelizia">
            </div>
            <div class="product-card__container">
            <h1 class="product-card__container-name">
                Strelitzia <button class="zu-wissen"> 25€❕<span class="zu-wissen__tip">Alle Preise verstehen sich zzgl. MwSt. </span></button>
                </h1>
                <p class="product-card__container-text"> Richtig gelesen, so nennt man die Baum-Strelitzie im englischsprachigen Raum! Welcher Name 
                    wird ihr wohl eher gerecht? Beide treffen jedenfalls zu, auch wenn der Englische sooo viel schöner klingt!
                    Sie ist die größte aller Strelitzien-Arten und bekommt wunderschöne Blüten, die an Vogelschnäbel erinnern. 
                    Ein echter Paradiesvogel eben!
                </p>
                <form>
                        <label>
                            Größe
                        </label>
                        
                        <select class="size" >
                            <option  value="Klein">Klein</option>
                            <option  value="Mittel">Mittel</option>
                            <option  value="Groß">Groß</option>
                        </select>

                        <label>
                            Stück
                        </label>

                        <input id="stuck"type="number" name="stuck" min="1" max="10" value="">
                        <div class="product-form__button">
                        <button class="favorit" data-name="Strelitzia" data-price="25€">
                                Love it!
                            </button>
                            <button class="corb" data-name="Strelitzia" data-price="25€">
                                In den Warenkorb
                            </button>
                        </div>
                    </form>
            </div>
        </div>
        <div class="plant-needs">
            <p class="plant-needs__title">
            Was braucht deine Strelitzia?
            </p>
    
            <ol>
                <li>
                   <strong>Helles Plätzchen </strong>
                   Mag's gerne hell, aber bitte keine pralle Sonne!   
                </li>
                <li>
                    <strong>Mäßig durstig  </strong>
                    Circa 1x in der Woche gießen. Die Erde sollte vorher leicht angetrocknet sein. Staunässe mag sie gar nicht.   
                </li>
                <li>
                    <strong>Kleiner Wellnesslover</strong>
                    Hüpft gerne mal mit unter die Dusche - einfach sanft abbrausen, 
                    den Topf dabei aber bitte einpacken! Alternativ die Blätter mit einem feuchten Tuch abwischen.   
                </li>
                <li>
                    <strong>Regelmäßig Nährstoffe</strong>
                    April bis September alle 4 Wochen mit Grünpflanzendünger versorgen 
                </li>
                <li>
                    <strong>Umtopfen nicht vergessen!  </strong>
                    Alle 2-3 Jahre in einen etwas größeren Topf umsetzen. 
                    Dabei darauf achten, dass man ihre fleischigen Wurzeln nicht verletzt.    
                </li>
                <li>
                    <strong>Keine teure Frisur  </strong>
                    Nicht notwendig, braune/vertrocknete Blätter können einzeln entfernt werden.     
                </li>

            </ol>
        </div>
        </div>
            <?php include "../../../includes/recommendation.php"?>
            <?php include "../../../includes/reise.php"?>
        </main>

        <?php include "../../../includes/footer.php" ?>
    </div>
    </body>
</html>