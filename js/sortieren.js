
const plantList = document.querySelector('.display-flex-shop');
const plantsOrt = document.querySelectorAll('.shop-list__link');
const plants = Array.from(plantsOrt);
console.log(plants)
const categoryFilter = document.querySelector('.filter-form__option');

categoryFilter.addEventListener('change', function () {
    sortPlantsOrt();
});



function sortPlantsOrt() {
    const categoryValue = categoryFilter.value;
    const filteredPlantsOrt = plants.filter(plant => {
    const dataOrt = plant.getAttribute('data-ort');
    if(categoryValue == 'alle' || dataOrt == categoryValue){
        return (categoryValue)
    }
    });

    plantList.innerHTML = '';

    filteredPlantsOrt.forEach(plant => {
        plantList.appendChild(plant);
    });
}




