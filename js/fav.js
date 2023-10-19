var namePlants = document.querySelectorAll('.favorit');
var favoritPage = document.getElementById('favoritPage');
var favoritList = document.querySelector('.favorit-list');

let favDB = [];

if (!favoritPage.classList.contains('js-processed')) {
    displayValue();

    function displayValue() {
        let favItems = JSON.parse(window.localStorage.getItem("favoriten"));
        if (favItems == null) {favItems= [];}

        favoritList.innerHTML = '';

        for (let i = 0; i < favItems.length; i++) {
            let newFav = document.createElement('li');
            let newText = document.createTextNode(favItems[i]);
            newFav.appendChild(newText);

            let btn = document.createElement("button");
            btn.innerHTML = "X";
            btn.addEventListener('click', function () {
                removeFavorite(favItems[i]);
            });
            newFav.appendChild(btn);
            favoritList.appendChild(newFav);
    
        }
    }

    function addFavorit(name) {
        let favDB = JSON.parse(window.localStorage.getItem("favoriten"))  ;// intreaba daca a fost deja in Local ceva
        
        if (favDB == null) {favDB= [];}

        if (!favDB.includes(name)) {
            favDB.push(name);
            localStorage.setItem('favoriten', JSON.stringify(favDB));
            favDB = JSON.parse(window.localStorage.getItem("favoriten"));
            displayValue();
        }
    }

    function removeFavorite(name) {
        let favDB = [];
        favItems = JSON.parse(window.localStorage.getItem("favoriten"));
        for (let i = 0; i < favItems.length; i++) {
            if(favItems[i] != name){
                favDB.push(favItems[i]);
            }
        }
        localStorage.setItem('favoriten', JSON.stringify(favDB));
        displayValue();

    }


    function handleButtonFavClick(event) {
        event.preventDefault();
        const name = event.currentTarget.getAttribute('data-name');
        addFavorit(name);
    }

    for (let i = 0; i < namePlants.length; i++) {
        const namePlant = namePlants[i];
        namePlant.addEventListener('click', handleButtonFavClick);
    }

    favoritPage.classList.add("js-processed");

}