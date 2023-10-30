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
                <img class="product-card__container-img"src="/img/planta4.jpg" alt="Zamioculcas">
            </div>
            <div class="product-card__container">
                <h1 class="product-card__container-name">
                Zamioculcas <button class="zu-wissen"> 15€❕<span class="zu-wissen__tip">Alle Preise verstehen sich zzgl. MwSt. </span></button>
                </h1>

                <p class="product-card__container-text"> Die Zamioculcas zamiifolia gilt als härteste Zimmerpflanze der Welt. Adjektive wie
                    'unverwüstlich' und 'robust' werden gerne mit ihr assoziiert. 
                    In Deutschland wird sie gerne Glücksfeder genannt. Ob das wohl daher rührt, 
                    dass diese pflegeleichte Pflanze gerade auch Menschen ohne grünen Daumen glücklich macht?
                </p>
                <form>
                    <label>
                        Größe
                    </label>
                    
                    <select>
                        <option value="small">Klein</option>
                        <option value="medium">Mittel</option>
                    </select>

                    <label>
                        Stück
                    </label>

                    <input type="number">
                    <div class="product-form__button">
                        <button>
                            Love it!
                        </button>
                        <button>
                            In den Warenkorb
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="plant-needs">
            <p class="plant-needs__title">
            Was braucht deine Glücksfeder?
            </p>
    
            <ol>
                <li>
                   <strong>Nettes Plätzchen  </strong>
                   Die Glücksfeder kann hell bis schattig stehen, nur die pralle Mittagssonne verträgt sie nicht.   
                </li>
                <li>
                    <strong>Selten durstig</strong>
                    Wenig Gießen, erst wenn die Erde wieder fast trocken ist, erneut gießen. 
                </li>
                <li>
                    <strong>Niedrige Luftfeuchtigkeit</strong>
                    Kommt mir trockener Luft gut klar.    
                </li>
                <li>
                    <strong>Wenig Nährstoffe</strong>
                    Von April bis September einmal im Monat mit Grünpflanzendünger versorgen.  
                </li>
                <li>
                    <strong>Mag es eng! </strong>
                    Nicht zu früh umtopfen, die Zamioculcas mag es eng und darf sogar den Topf ausbeulen.    
                </li>
                <li>
                    <strong>Bitte nicht zurückschneiden!</strong>
                    Das führt zu unschönen braunen Stellen.      
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