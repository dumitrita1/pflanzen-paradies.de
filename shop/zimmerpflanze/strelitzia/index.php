<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
    </head>
    <body>
        <?php include "../../../includes/header.php" ?>

        <main>
            <h1>
                Strelitzia
            </h1>

            <form>
                <label>
                    Größe
                </label>
                
                <select>
                    <option value="small">Klein</option>
                    <option value="medium">Mittel</option>
                    <option value="large" selected>Groß</option>
                </select>

                <label>
                    Stück
                </label>

                <input type="number" value="10">

                <button>
                    Zum Warenkorb hinzufügen
                </button>
            </form>
        </main>

        <?php include "../../../includes/footer.php" ?>

    </body>
</html>