let burger = document.querySelector('#burger');
let menuContainer = document.querySelector('#menu-container');
burger.addEventListener('click',function(){
    if(burger.classList.contains('is-active')){
        // hide main menu
        menuContainer.classList.add('is-hidden-mobile');
        // deactivate
        burger.classList.remove('is-active');
    } else {
        // show main menu
        menuContainer.classList.remove('is-hidden-mobile');
        // activate
        burger.classList.add('is-active')
    }
});
