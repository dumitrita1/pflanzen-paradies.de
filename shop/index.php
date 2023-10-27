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
                            <option value="alle">Alle</option>
                            <option value="zimmerpflanze">Zimmerpflanze</option>
                            <option value="gartenpflanze">Gartenpflanze</option>
                        </select>
                    </form>
                    <form class="filter-form">
                        <select class= "filter-form__option-price">
                            <option value="alle">Alle Preise</option>
                            <option value="niedrigster">Preis:niedrigster zuerst</option>
                            <option value="höchster">Preis:höchster zuerst</option>
                        </select>
                    </form>
                    <form class="filter-form">
                        <select class= "filter-form__option-size">
                            <option value="alle" >Alle Größen</option>
                            <option value="klein">Klein</option>
                            <option value="mittel">Mittel</option>
                            <option value="groß" >Groß</option>
                        </select>
                    </form>
                </div>
                <div class="display-flex-shop">                   
                        <li class="shop-list__link" data-ort="zimmerpflanze" data-size="groß" data-price="25">
                            <a href="/shop/zimmerpflanze/strelitzia">
                                <img src="/img/planta1.jpg" alt="Strelitzia">                    
                                <p class="shop-list__link-text"> Strelitzia</p>
                                <p class="shop-list__link-text"> 25€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze" data-size="klein" data-price="65">
                        <a href="/shop/zimmerpflanze/epipremnum-aureum">
                                <img src="/img/planta8.jpg" alt="Epipremnum aureum">
                                <p class="shop-list__link-text"> Epipremnum aureum</p>
                                <p class="shop-list__link-text"> 65€</p>
                        </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze" data-size="klein" data-price="70">
                            <a href="/shop/zimmerpflanze/monstera">
                                <img src="/img/planta3.jpg" alt="Monstera">
                                <p class="shop-list__link-text">Monstera</p>
                                <p class="shop-list__link-text"> 70€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze" data-size="klein" data-price="15">
                            <a href="/shop/zimmerpflanze/zamioculcas">
                                <img src="/img/planta4.jpg" alt="Zamioculcas">
                                <p class="shop-list__link-text">Zamioculcas</p>
                                <p class="shop-list__link-text"> 15€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze"data-size="klein"data-price="35">
                            <a href="/shop/zimmerpflanze/flamingoblumen">
                                <img src="/img/planta5.jpg" alt="Flamingoblumen">
                                <p class="shop-list__link-text">Flamingoblumen</p>
                                <p class="shop-list__link-text"> 35€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze"data-size="groß"data-price="25">
                            <a href="/shop/zimmerpflanze/gronskan" >
                                <img src="/img/planta6.jpg" alt="Grönskan">
                                <p class="shop-list__link-text">Aloe</p>
                                <p class="shop-list__link-text"> 25€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze" data-size="groß" data-price="38">
                            <a href="/shop/zimmerpflanze/areca-palme">
                                <img src="/img/planta7.jpg" alt="Areca Palme">
                                <p class="shop-list__link-text">Areca Palme</p>
                                <p class="shop-list__link-text"> 38€</p>
                            </a>
                        </li>
                        <li class="shop-list__link" data-ort="zimmerpflanze"data-size="klein" data-price="15">
                        <a href="/shop/zimmerpflanze/spathiphyllum">
                                <img src="/img/planta22.jpg" alt="Spathiphyllum">
                                <p class="shop-list__link-text">Spathiphyllum</p>
                                <p class="shop-list__link-text"> 15€</p>
                        </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze"data-size="groß" data-price="45">
                        <a href="/shop/gartenpflanze/hortensie" >
                                <img src="/img/hr.jpg" alt="Hochstämmige Rispenhortensie">
                                <p class="shop-list__link-text">Hochstämmige</p>
                                <p class="shop-list__link-text"> 45€</p>
                        </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze"data-size="klein" data-price="20">
                            <a href="/shop/zimmerpflanze/sansevieria-trifasciata">
                                <img src="/img/planta10.jpg" alt="SANSEVIERIA TRIFASCIATA ">
                                <p class="shop-list__link-text">"SANSEVIERIA  </p>
                                <p class="shop-list__link-text"> 20€</p>
                            </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze" data-size="mittel" data-price="200">
                            <a href="/shop/gartenpflanze/bonsai">
                                <img src="/img/bonsai.jpg"  alt="Bonsai">
                                <p class="shop-list__link-text">Bonsai</p>
                                <p class="shop-list__link-text"> 200€</p>
                            </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze"data-size="mittel" data-price="205">
                            <a href="/shop/gartenpflanze/kamile">
                                <img src="/img/kamille.jpg"  alt="Kamile">
                                <p class="shop-list__link-text">Kamile</p>
                                <p class="shop-list__link-text"> 205€</p>
                            </a>    
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze"data-size="mittel" data-price="80">
                            <a href="/shop/gartenpflanze/lavender">
                                <img src="/img/lavander.jpg"  alt="Lavander">
                                <p class="shop-list__link-text">Lavander</p>
                                <p class="shop-list__link-text"> 80€</p>
                            </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze" data-size="groß" data-price="25">
                            <a href="/shop/gartenpflanze/magnolia">
                                <img src="/img/magnolia.jpg"  alt="Magnolia">
                                <p class="shop-list__link-text"> Magnolia</p>
                                <p class="shop-list__link-text"> 25€</p>
                            </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze" data-size="klein" data-price="180">
                            <a href="/shop/gartenpflanze/olivenbaum">
                                <img src="/img/olivenbaum.jpg" alt="Olivenbaum">
                                <p class="shop-list__link-text">Olivenbaum</p>
                                <p class="shop-list__link-text"> 180€</p>
                            </a>
                        </li>
                        <li class="shop-list__link"data-ort="gartenpflanze"data-size="klein" data-price="55">
                            <a href="/shop/gartenpflanze/rebe">
                                <img src="/img/vinesplant.jpg" alt="Kanadische Rebe">
                                <p class="shop-list__link-text">Kanadische Rebe</p>
                                <p class="shop-list__link-text"> 55€</p>
                            </a>
                        </li>

                        <li class="shop-list__link"data-ort="zimmerpflanze" data-size="mittel" data-price="65">
                        <a href="/shop/zimmerpflanze/zamioculcas-zamiifolia">
                                <img src="/img/planta9.jpg" alt="Zamioculcas zamiifolia">
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