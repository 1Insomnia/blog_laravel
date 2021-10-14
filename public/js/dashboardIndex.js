/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/dashboardIndex.js ***!
  \****************************************/
var tabButtons = document.querySelectorAll(".tab-button");
var tabContent = document.querySelectorAll(".tab-content");
tabButtons.forEach(function (button) {
  button.addEventListener('click', function (e) {
    // Current Target
    var target = document.querySelector(button.dataset.tabTarget); // Hide all tab content

    tabContent.forEach(function (tab) {
      return tab.classList.add('hidden');
    }); // Remove active class for each button

    tabButtons.forEach(function (button) {
      return button.classList.remove('bg-accent-2');
    }); // Display current tab

    target.classList.remove('hidden'); // Add active class for current button

    button.classList.add('bg-accent-2');
  });
});
/******/ })()
;