var zoomInImg = document.querySelector('.product-card__container-img');

function handleClick() {
    var zoomIn = zoomInImg.classList.contains('zoomed');

    if (zoomIn) {
       zoomInImg.classList.remove('zoomed');
    } else {
       zoomInImg.classList.add('zoomed');
    }
}

 zoomInImg.addEventListener('click', handleClick);

