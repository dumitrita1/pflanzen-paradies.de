<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pflanzen Paradies</title>
        <?php include "../includes/meta.php" ?>
    </head>
    <body>
        <?php include "../includes/header.php" ?>

        <main> 
    <div class="document">
            <div class="shop-header">
                <h1 class="text">Unsere Pflanzen </h1>
                <p class="text">〰️〰️</p>
                <p class="shop-header_text">
                Schöne, lebendige und harmonische Pflanzen eignen sich hervorragend zur Dekoration und Veränderung des Stils jedes Ortes. Sie können sogar Lärm absorbieren und eine Umgebung würzen. Nachfolgend finden Sie eine Liste von über 20 Pflanzen, die Ihr Zuhause oder Ihren Garten bunter machen können.
                </p>
            </div>
                <div class="shop">
                <h2 class= "filter-text"> Sortieren <h2>
                    <div class="filter-shop">
                    <form class="filter-form">
                        <select class= "filter-form__option">
                            <option value="total">Alle</option>
                            <option value="zimmerpflanze">Zimmerpflanze</option>
                            <option value="gartenpflanze">Gartenpflanze</option>
                        </select>
                    </form>
                    <form class="filter-form">
                        <select class= "filter-form__option">
                            <option value="alle">Alle Preise</option>
                            <option value="niedrigster">Preis:niedrigster zuerst</option>
                            <option value="höchster">Preis:höchster zuerst</option>
                        </select>
                    </form>
                    <form class="filter-form">
                        <select class= "filter-form__option">
                            <option value="alle" >Alle Größen</option>
                            <option value="small">Klein</option>
                            <option value="medium">Mittel</option>
                            <option value="large" >Groß</option>
                        </select>
                    </form>
                </div>
                <div class="display-flex-shop">                   
                        <li class="shop-list__link" data-ort="zimmerpflanze" data-size="groß">
                            <a href="/shop/zimmerpflanze/strelitzia">
                                <img src="/shop/img/planta1.jpg" alt="Strelitzia">                    
                                <p class="shop-list__link-text"> Strelitzia</p>
                                <p class="shop-list__link-text"> 25€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze" data-size="klein">
                        <a href="/shop/zimmerpflanze/epipremnum-aureum">
                                <img src="/shop/img/planta8.jpg" alt="Epipremnum aureum">
                                <p class="shop-list__link-text"> Epipremnum aureum</p>
                                <p class="shop-list__link-text"> 65€</p>
                        </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze" data-size="klein">
                            <a href="/shop/zimmerpflanze/monstera">
                                <img src="/shop/img/planta3.jpg" alt="Monstera">
                                <p class="shop-list__link-text">Monstera</p>
                                <p class="shop-list__link-text"> 70€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze" data-size="klein">
                            <a href="/shop/zimmerpflanze/zamioculcas">
                                <img src="/img/planta4.jpg" alt="Zamioculcas">
                                <p class="shop-list__link-text">Zamioculcas</p>
                                <p class="shop-list__link-text"> 15€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze"data-size="klein">
                            <a href="/shop/zimmerpflanze/flamingoblumen">
                                <img src="/shop/img/planta5.jpg" alt="Flamingoblumen">
                                <p class="shop-list__link-text">Flamingoblumen</p>
                                <p class="shop-list__link-text"> 35€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze"data-size="groß">
                            <a href="/shop/zimmerpflanze/gronskan" >
                                <img src="/shop/img/planta6.jpg" alt="Grönskan">
                                <p class="shop-list__link-text">Grönskan</p>
                                <p class="shop-list__link-text"> 25€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze" data-size="groß">
                            <a href="/shop/zimmerpflanze/areca-palme">
                                <img src="/shop/img/planta7.jpg" alt="Areca Palme">
                                <p class="shop-list__link-text">Areca Palme</p>
                                <p class="shop-list__link-text"> 38€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze"data-size="klein">
                        <a href="/shop/zimmerpflanze/spathiphyllum">
                                <img src="/shop/img/planta2.jpg" alt="Spathiphyllum">
                                <p class="shop-list__link-text">Spathiphyllum</p>
                                <p class="shop-list__link-text"> 15€</p>
                        </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze"data-size="groß">
                        <a href="/shop/gartenpflanze/hortensie" >
                                <img src="/shop/img/hr.jpg" alt="Hochstämmige Rispenhortensie">
                                <p class="shop-list__link-text">Hochstämmige</p>
                                <p class="shop-list__link-text"> 45€</p>
                        </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze"data-size="klein">
                            <a href="/shop/zimmerpflanze/sansevieria-trifasciata">
                                <img src="/shop/img/planta10.jpg" alt="SANSEVIERIA TRIFASCIATA ">
                                <p class="shop-list__link-text">"SANSEVIERIA  </p>
                                <p class="shop-list__link-text"> 20€</p>
                            </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze" data-size="mittel">
                            <a href="/shop/gartenpflanze/bonsai">
                                <img src="/shop/img/bonsai.jpg"  alt="Bonsai">
                                <p class="shop-list__link-text">Bonsai</p>
                                <p class="shop-list__link-text"> 200€</p>
                            </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze"data-size="mittel">
                            <a href="/shop/gartenpflanze/kamile">
                                <img src="/shop/img/kamille.jpg"  alt="Kamile">
                                <p class="shop-list__link-text">Kamile</p>
                                <p class="shop-list__link-text"> 205€</p>
                            </a>    
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze"data-size="mittel">
                            <a href="/shop/gartenpflanze/lavender">
                                <img src="/shop/img/lavander.jpg"  alt="Lavander">
                                <p class="shop-list__link-text">Lavander</p>
                                <p class="shop-list__link-text"> 80€</p>
                            </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze" data-size="groß">
                            <a href="/shop/gartenpflanze/magnolia">
                                <img src="/shop/img/magnolia.jpg"  alt="Magnolia">
                                <p class="shop-list__link-text"> Magnolia</p>
                                <p class="shop-list__link-text"> 25€</p>
                            </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze" data-size="klein">
                            <a href="/shop/gartenpflanze/olivenbaum">
                                <img src="/shop/img/olivenbaum.jpg" alt="Olivenbaum">
                                <p class="shop-list__link-text">Olivenbaum</p>
                                <p class="shop-list__link-text"> 180€</p>
                            </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze"data-size="klein">
                            <a href="/shop/gartenpflanze/rebe">
                                <img src="/shop/img/Vinesplant.jpg" alt="Kanadische Rebe">
                                <p class="shop-list__link-text">Kanadische Rebe</p>
                                <p class="shop-list__link-text"> 55€</p>
                            </a>
                        </li>

                        <li class="shop-list__link"data-ort="zimmerpflanze" data-size="mittel">
                        <a href="/shop/zimmerpflanze/zamioculcas-zamiifolia">
                                <img src="/shop/img/planta9.jpg" alt="Zamioculcas zamiifolia">
                                <p class="shop-list__link-text">Zamioculcas zamiifolia</p>
                                <p class="shop-list__link-text"> 65€</p>
                        </a>
                        </li> 
                </div>
            </div>
            <?php include "../includes/reise.php"?>
        </main>

        <?php include "../includes/footer.php" ?>
    </div>
    </body>
</html>