<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
        <?php include "../../includes/meta.php" ?>
    </head>
    <body>
    <div class="document">
        <?php include "../../includes/header.php" ?>

        <main>
        <div class="product">
        <div class="product-card">
            <div class="product-card__container">
                <img src="/img/topf.jpg" width="350px" alt="Blumentopf">
            </div>
            <div class="product-card__container">
            <h1>
                Blumentopf
            </h1>
            <p>Eine schöne Pflanze verdient natürlich auch einen schönen Blumentopf, der ihr gerecht wird.</p>
            <form>
                  <select>
                    <option value="option1">Weiß</option>
                    <option value="option2">Braun</option>
                    <option value="option3">Schwarz</option>
                </select>
                <label>
                    Stück
                </label>

                <input type="number" >

                <button>
                    Zum Warenkorb hinzufügen
                </button>
            </form>
            </div>
        </div>
        </div>
            <?php include "../../includes/reise.php"?>
        </main>

        <?php include "../../includes/footer.php" ?>

</div>
    </body>
</html>