<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
    </head>
    <body>
        <?php include "../../../includes/header.php" ?>

        <main>
            
            <img src="zamioculcas/img/planta4.jpg" width="350px" alt="Zamioculcas">

            <h1>
            Zamioculcas
            </h1>
            <p> Die Zamioculcas zamiifolia gilt als härteste Zimmerpflanze der Welt. Adjektive wie
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

                <button>
                    In den Warenkorb
                </button>
                <button>
                    Love it!
                </button>
            </form>

            <p>
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
            <?php include "../../../includes/empfohlene-produkte.php"?>
            <?php include "../../../includes/reise.php"?>
        </main>

        <?php include "../../../includes/footer.php" ?>

    </body>
</html>