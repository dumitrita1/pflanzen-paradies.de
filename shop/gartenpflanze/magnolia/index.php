<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
    </head>
    <body>
        <?php include "../../../includes/header.php" ?>

        <main>
        <img src="magnolia/img/magnolia.jpg" width="350px" alt="Magnolia">
            <h1>
                Magnolia
            </h1>
            <p> Dieser duftende Bonsai ist wirklich außergewöhnlich.
                 Er ist auch bekannt unter dem Namen Chinesischer Pfeffer(Zanthoxylum). 
                 Er kann drinnen und draußen hingestellt werden und eignet sich sehr gut für beginnende Bonsailiebhaber. 
                Die Blätter sind glänzend grün und verströmen ein zartes Zitrusaroma, wenn man daran reibt. 
            </p>
            <form>
                <label>
                    Größe
                </label>
                
                <select>
                    <option value="medium">Mittel</option>
                    <option value="large" selected>Groß</option>
                </select>

                <label>
                    Stück
                </label>

                <input type="number" >

                <button>
                    Zum Warenkorb hinzufügen
                </button>
            </form>
            
            <?php include "../../../includes/empfohlene-produkte.php"?>
            <?php include "../../../includes/reise.php"?>
        </main>

        <?php include "../../../includes/footer.php" ?>

    </body>
</html>