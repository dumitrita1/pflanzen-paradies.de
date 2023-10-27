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
                <img class="product-card__container-img"src="/img/planta3.jpg" alt="Monstera">
            </div>
            <div class="product-card__container">
                <h1 class="product-card__container-name">
                    Monstera <button class="zu-wissen"> 70€❕<span class="zu-wissen__tip">Alle Preise verstehen sich zzgl. MwSt. </span></button>
                </h1> 
                <p class="product-card__container-text"> Benötigen Sie eine Zimmerpflanze, die das ganze Jahr über die Vegetation aufrechterhält und mit sehr großen,
                        dunkelgrünen Blättern schmückt, die eine Länge von bis zu 90 cm erreichen können?
                        Dann brauchen Sie Monstera!
                </p>
                <form>
                        <label>
                            Größe
                        </label>
                        <select class="size" >
                            <option  value="Klein">Klein</option>
                            <option  value="Mittel">Mittel</option>
                            <option value ="groß"> Groß</option>
                        </select>

                        <label>
                            Stück
                        </label>

                        <input id="stuck"type="number" name="stuck" min="1" max="10" value="">
                        <div class="product-form__button">
                        <button class="favorit" data-name="Monstera" data-price="70€">
                                Love it!
                            </button>
                            <button class="corb" data-name="Monstera" data-price="70€">
                                In den Warenkorb
                            </button>
                        </div>
                    </form>
            </div>
        </div>
        <div class="plant-needs">
            <p class="plant-needs__title">
             Was braucht deine Monstera deliciosa?
            </p>
    
            <ol>
                <li>
                   <strong>Helles Plätzchen</strong>
                   Mag's gerne hell. Mittagssonne geht auch, aber bitte vorsichtig daran gewöhnen.
                </li>
                <li>
                    <strong>Mäßig durstig</strong>
                    Circa 1x in der Woche gießen. Die erste Schicht Erde sollte bereits trocken sein.

                </li>
                <li>
                    <strong>Hohe Luftfeuchtigkeit</strong>
                    Liebt es ab und an ausgiebig zu duschen und regelmäßig besprüht zu werden.

                </li>
                <li>
                    <strong>Regelmäßig Nährstoffe</strong>
                    April bis September alle 2 – 3 Wochen mit Grünpflanzendünger versorgen.
                </li>
                <li>
                    <strong>Umtopfen nicht vergessen!</strong>
                    Alle 2-3 Jahre in einen größeren Topf umsetzen oder die Wurzeln kürzen. 
                </li>
                <li>
                    <strong>Rückschnitt möglich </strong>
                    Kann bei Bedarf zurückgeschnitten werden.  
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