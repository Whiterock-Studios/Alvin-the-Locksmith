document.addEventListener('DOMContentLoaded', function () {

var menuOpen = 0,
    burger = document.querySelector(".header__nav__burger"),
    navUl = document.querySelector(".header__nav").querySelector("ul");

function openMenu () {
  burger.classList.add("header__nav__burger--open");
  navUl.style.top = "0";
  menuOpen = 1;
}

function closeMenu () {
  burger.classList.remove("header__nav__burger--open");
  navUl.style.top = "-100%";
  menuOpen = 0;
}

function menuOpenClose () {
  if ( menuOpen == 0 ) {
    // if menu is not open already
    openMenu();
  } else {
    // if menu is already open
    closeMenu();
  }
}

burger.addEventListener('click', function() {
  menuOpenClose()
});

window.onresize = function () {
  var windowWidth = window.innerWidth;
  closeMenu();

  if ( windowWidth > 1100 ) {
    navUl.style.top = 0;
  }
}

}) // end of DOMContentLoaded
