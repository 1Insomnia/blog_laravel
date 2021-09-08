require("./bootstrap");

// require('alpinejs');

// Burger Menu : Mobile - Tablet
const burger = document.querySelector("#burger");
const navMobile = document.querySelector("#navMobile");

burger.addEventListener("click", (e) => {
    e.preventDefault();

    burger.classList.toggle("nav-is-open");
    burger.classList.toggle("no-hover");

    navMobile.classList.toggle("nav-mobile-hidden");
    navMobile.classList.toggle("nav-mobile-active");
});
