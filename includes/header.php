<header class="site-header">
    <a href="/" class="site-header__logo">
        Pflanzen Paradies
    </a>
    <nav class="site-header__navigation">
        <div class="nav">
            <a href="/ueber-uns/" class="nav__link">
                <p class="nav__text">Über uns</p>
            </a>

            <a href="/shop/"class="nav__link">
                <p class="nav__text">Shop</p>
            </a>
            <a href="/deko/"class="nav__link">
                <p class="nav__text">Deko</p>
            </a>
            <a href="/lernen/" class="nav__link">
                <p class="nav__text" >Lernen</p>
            </a>
        </div>

        <div class="nav">
        <input type="text" placeholder="Suche">
            <button class="nav__button">
                <img src="/img/search.png" alt="Search">
            </button>
            <?php include __DIR__ . "/search.php" ?>
            
            <button class="nav__button">
                <img src="/img/heart.png" alt="Love">
            </button>
            <?php include __DIR__ . "/fav.php" ?>

            <button class="nav__button">
                <img src="/img/purchase.png" alt="Corb">
            </button>
            <?php include __DIR__ . "/cart.php" ?>
        </div>
    </nav>
</header>