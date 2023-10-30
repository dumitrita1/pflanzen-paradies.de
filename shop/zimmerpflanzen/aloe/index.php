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
                    <img class="product-card__container-img"src="/img/planta6.jpg" alt="Grönskan">
                </div>
                <div class="product-card__container">
                    <h1 class="product-card__container-name">
                    Aloe <button class="zu-wissen"> 25€❕<span class="zu-wissen__tip">Alle Preise verstehen sich zzgl. MwSt. </span></button>
                    </h1> 
                    <p class="product-card__container-text"> Du suchst was fürs Herz? Dann bist du bei unserer Herzblattblume genau richtig. 
                    Grund dafür sind ihre wunderschönen herzförmigen Blätter, die einfach jedes Herz zum Schmelzen bringen!
                    </p>
                    <form>
                        <label>
                            Größe
                        </label>
                        
                        <select class="size" >
                            <option  value="Klein">Klein</option>
                            <option  value="Mittel">Mittel</option>
                        </select>

                        <label>
                            Stück
                        </label>

                        <input id="stuck"type="number" name="stuck" min="1" max="10" value="">
                        <div class="product-form__button">
                        <button class="favorit" data-name="Aloe" data-price="25€">
                                Love it!
                            </button>
                            <button class="corb" data-name="Aloe" data-price="25€">
                                In den Warenkorb
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        <div class="plant-needs">
            <p class="plant-needs__title">
            Was braucht deine Flaingoblume?
            </p>
    
            <ol>
                <li>
                   <strong>Nettes Plätzchen </strong>
                   Steht gerne hell bis halbschattig ohne direkte Sonne. 
                </li>
                <li>
                    <strong>Mäßig durstig </strong>
                    Circa 1x in der Woche gießen. Die obere Schicht Erde sollte bereits trocken sein.  
                </li>
                <li>
                    <strong>Hohe Luftfeuchtigkeit  </strong>
                    Liebt es, regelmäßig mit weichem, handwarmem Wasser besprüht zu werden.  

                </li>
                <li>
                    <strong>Regelmäßig Nährstoffe</strong>
                    Von April-September alle 3-4 Wochen mit einem Grünpflanzendünger versorgen.
                </li>
                <li>
                    <strong>Umtopfen nicht vergessen!</strong>
                    Nach Bedarf ca. 3-4 Jahre in einen größeren Topf umsetzen. 
                </li>
                <li>
                    <strong>Keine teure Frisur  </strong>
                    Rückschnitt ist nicht notwendig.   
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