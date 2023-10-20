var namePlants = document.querySelector('.corb');
let newSize = document.querySelector('.size');
if(newSize !== null){
    var valueSize = newSize.value;
}

let newStuck = document.getElementById('stuck');
var cartPage = document.getElementById('cartPage');
var cartList = document.querySelector('.cart-list');

console.log(namePlants)

let cartDB = {};
cartDB.namePlant
console.log(cartDB);

if (!cartPage.classList.contains('js-processed')) {
    displayValue();

    function displayValue() {
        let cartItems = JSON.parse(window.localStorage.getItem("producten"));
        if (cartItems == null) {cartItems= {};}

        cartList.innerHTML = '';

        for(produkt_name in cartItems) {
            
            let newProductCart = document.createElement('li');
            let newText = document.createTextNode(produkt_name);
            newProductCart.appendChild(newText);

            let newPriceTag = document.createElement('span');
            let newPrice = document.createTextNode(cartItems[produkt_name].price); 
            newPriceTag.appendChild(newPrice);
            newProductCart.appendChild(newPriceTag);

            let newSizeP = document.createTextNode(cartItems[produkt_name].size);
            newProductCart.appendChild(newSizeP);

            let newStuckP = document.createTextNode(cartItems[produkt_name].stuck);
            newProductCart.appendChild(newStuckP);

            let btn = document.createElement("button");
            btn.innerHTML = "X";
            btn.addEventListener('click', function () {
                removeCart(produkt_name);
            });

            newProductCart.appendChild(btn);
            cartList.appendChild(newProductCart);
            
    
        }
    }

    function addProductCorb(name, price, size, stuck) {

        let cartDB= {};
         cartDB= JSON.parse(window.localStorage.getItem("producten")) ; 
        
        if (cartDB == null){
            cartDB = {};
        }

        let product = {
            'price': price,
            'size': size, 
            'stuck': stuck, 
          }

        cartDB[name] = product;

        localStorage.setItem('producten', JSON.stringify(cartDB)); 

        console.log(cartDB)  

        displayValue();

            
    }
    
  
    function removeCart(name) {
        let cartItems = JSON.parse(window.localStorage.getItem("producten"));
        delete cartItems[name];
        localStorage.setItem('producten', JSON.stringify(cartItems));
        displayValue();
    }


    function handleButtonCartClick(event) {
        event.preventDefault();
        const name = event.currentTarget.getAttribute('data-name');
        console.log(name)
        const price = event.currentTarget.getAttribute('data-price');
        console.log(price)
        let selectSize = document.querySelector('.size');
        const size = selectSize.value;
        console.log(size)
        const stuck = document.getElementById("stuck").value;
        console.log(stuck)
        addProductCorb(name, price, size, stuck);
    }
if (namePlants !==null){
    for (let i = 0; i < namePlants.length; i++) {
    
        const namePlant = namePlants[i];
        namePlant.addEventListener('click', handleButtonCartClick);
        
    }
    namePlants.addEventListener('click', handleButtonCartClick);
    cartPage.classList.add("js-processed");

}
}
   