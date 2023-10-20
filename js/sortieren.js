const originalPlants = document.querySelectorAll('.shop-list__link');
const plantList = document.querySelector('.display-flex-shop');
const categoryFilter = document.querySelector('.filter-form__option');
const sizeFilter = document.querySelector ('.filter-form__option-size');
const priceFilter = document.querySelector ('.filter-form__option-price');




if(categoryFilter !==null ){
    categoryFilter.addEventListener('change', function () {
        sortPlantsOrt();
    });
}

if (sizeFilter !==null){
    sizeFilter.addEventListener('change', function () {

        sortPlantsSize();
    });
}

if (priceFilter !==null){
    priceFilter.addEventListener('change', function () {

        sortPlantsPrice();
    });
}


function sortPlantsOrt() {
    const categoryValue = categoryFilter.value;
    const sizeValue = sizeFilter.value;

    originalPlants.forEach(plant => {
        const dataOrt = plant.getAttribute('data-ort');
        const dataSize = plant.getAttribute('data-size');
    
        if (categoryValue == 'alle' || (dataOrt == categoryValue && (dataSize == sizeValue || sizeValue == 'alle')) ) {
            plant.style.display = 'block'; 
        } else {
            plant.style.display = 'none'; 
        }
    });
}

function sortPlantsSize() {
    const sizeValue = sizeFilter.value; 
    const ortValue = categoryFilter.value;
    
   
    originalPlants.forEach(

        plant => {
            const dataOrt = plant.getAttribute('data-ort');
            const dataSize = plant.getAttribute('data-size');
        if (sizeValue == 'alle' || (dataSize == sizeValue && (dataOrt == ortValue || ortValue == 'alle'))) {
            plant.style.display = 'block';
        } else {
            plant.style.display = 'none';
        }
    });
    
    
}

function sortPlantsPrice(){
    const priceValue = priceFilter.value;

    const preisArray = Array.from(originalPlants);

    preisArray.sort((a, b) => {
        const priceA = parseInt(a.getAttribute('data-price'));
        const priceB = parseInt(b.getAttribute('data-price'));

        if (priceValue == 'niedrigster') {
            return priceA - priceB;
        } else if (priceValue == 'höchster') {
            return priceB - priceA;
        } else {
            return 0;
        }
    });

    const container = plantList;
    container.innerHTML = '';

    preisArray.forEach(product => {
        container.appendChild(product);
    });
  
} 



