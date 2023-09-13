<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
    </head>
    <body>
        <?php include "../../../includes/header.php" ?>

        <main>
            
            <img src="strelitzia/img/planta1.jpg" width="350px" alt="Strelizia">

            <h1>
            Strelitzia
            </h1>
            <p> Richtig gelesen, so nennt man die Baum-Strelitzie im englischsprachigen Raum! Welcher Name 
                wird ihr wohl eher gerecht? Beide treffen jedenfalls zu, auch wenn der Englische sooo viel schöner klingt!
                 Sie ist die größte aller Strelitzien-Arten und bekommt wunderschöne Blüten, die an Vogelschnäbel erinnern. 
                 Ein echter Paradiesvogel eben!
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
            <?php include "../../../includes/empfohlene-produkte.php"?>
            <?php include "../../../includes/reise.php"?>
        </main>

        <?php include "../../../includes/footer.php" ?>

    </body>
</html>