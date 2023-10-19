var navButtons = Array.from(document.querySelectorAll('.nav__button'));
var navDropdowns = Array.from(document.querySelectorAll('.nav__dropdown'));

function handleButtonClick(event) {
    var navButton = event.currentTarget;
    var index = navButtons.indexOf(navButton);
    var navDropdown = navDropdowns[index];

    navDropdowns.forEach(function(dropdown) {
        dropdown.classList.remove('opened');
    });

    if (!navDropdown.classList.contains('opened')) {
        navDropdown.classList.add('opened');
    } 
}
for (var i = 0; i < navButtons.length; i++) {
    var navButton = navButtons[i];
    navButton.addEventListener('click', handleButtonClick);
}