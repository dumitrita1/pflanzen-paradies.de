const originalPlants = document.querySelectorAll('.shop-list__link');
const plantList = document.querySelector('.display-flex-shop');
const categoryFilter = document.querySelector('.filter-form__option');


categoryFilter.addEventListener('change', function () {
    sortPlantsOrt();
   // sortPlantsSize();
});

function sortPlantsOrt() {
    const categoryValue = categoryFilter.value;

    document.querySelectorAll('.shop-list__link').forEach(plant => {
        const dataOrt = plant.getAttribute('data-ort');
    
        if (categoryValue == 'total' || dataOrt == categoryValue) {
            plant.style.display = 'block'; 
        } else {
            plant.style.display = 'none'; 
        }
    });
}

/*function sortPlantsSize() {
    const categoryValueSize = categoryFilter.value;

    originalPlants.forEach(plant => {
        const dataSize = plant.getAttribute('data-size');
        if (categoryValueSize == 'alle' || dataSize == categoryValueSize) {
            plant.style.display = 'block';
        } else {
            plant.style.display = 'none';
        }
    });
}*/
