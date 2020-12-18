'use strict';

/**
 * Animate value from 0 to value
 * @param {Object} elmnt - counter element
 * @param {number} value - final counter value
 * @param {number} duration - animation duration
 */
function animateValue(elmnt, value, duration) {
  var current = 0;
  var increment = value > 0 ? 1 : -1;
  var stepTime = Math.abs(Math.floor(duration / value));
  var timer = setInterval(function () {
    current += increment;
    elmnt.textContent = current;

    if (current === value) {
      clearInterval(timer);
    }
  }, stepTime);
}

;
/**
 * Smooth scrolling script
 */

$("a").on("click", function (evt) {
  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    evt.preventDefault();
    var hash = this.hash;
    $("html, body").animate({
      scrollTop: $(hash).offset().top
    }, 800, function () {
      // Add hash (#) to URL when done scrolling (default click behavior)
      if (hash !== "#top") {
        window.location.hash = hash;
      }
    });
  }
});


if(window.history.replaceState){
  window.history.replaceState(null, null, window.location.href);
}
var alertClose = document.querySelector('.alert__close');
if (alertClose) {
  alertClose.addEventListener('click', function (evt) {
      var alertPopup = document.querySelector('.alert-success');
      alertPopup.style = 'visibility: hidden;';
      });
}

let portfolioCards = document.querySelectorAll('.portfolio__cards-button');
let portfolioDarkerOstltd = document.querySelector('.portfolio__darker--ostltd');
let portfolioDarkerNda = document.querySelector('.portfolio__darker--nda');
let portfolioDarkerFant = document.querySelector('.portfolio__darker--fantshop');
let portfolioDarkerRapid = document.querySelector('.portfolio__darker--rapid');
let portfolioButtonClose = document.querySelectorAll('.portfolio__button-close');
let portfolioDarker = document.querySelectorAll('.portfolio__darker');

portfolioButtonClose.forEach(function(item) {
  item.addEventListener('click', function(evt) {
    evt.preventDefault();
    portfolioDarker.forEach(function(item) {
      item.classList.remove('portfolio__darker--opened');
    })
  });
});

portfolioCards.forEach(function(item) {
  item.addEventListener('click', function(evt) {
    evt.preventDefault();
    if (item.classList.contains('portfolio__cards-button--ostltd')) {
      portfolioDarkerOstltd.classList.add('portfolio__darker--opened');
    }
    if (item.classList.contains('portfolio__cards-button--nda')) {
      portfolioDarkerNda.classList.add('portfolio__darker--opened');
    }
    if (item.classList.contains('portfolio__cards-button--fantshop')) {
      portfolioDarkerFant.classList.add('portfolio__darker--opened');
    }
    if (item.classList.contains('portfolio__cards-button--rapid')) {
      portfolioDarkerRapid.classList.add('portfolio__darker--opened');
    }
  });
});
