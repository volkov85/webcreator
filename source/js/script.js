'use strict';

const portfolioCards = document.querySelectorAll('.portfolio__cards-button');
const portfolioDarkerOstltd = document.querySelector('.portfolio__darker--ostltd');
const portfolioDarkerNda = document.querySelector('.portfolio__darker--nda');
const portfolioDarkerFant = document.querySelector('.portfolio__darker--fantshop');
const portfolioDarkerRapid = document.querySelector('.portfolio__darker--rapid');
const portfolioDarkerAe = document.querySelector('.portfolio__darker--ae');
const portfolioDarkerBook = document.querySelector('.portfolio__darker--book');
const portfolioButtonClose = document.querySelectorAll('.portfolio__button-close');
const portfolioDarker = document.querySelectorAll('.portfolio__darker');
const menuOpener = document.querySelector('.header__menu-toggle');
const menuCloser = document.querySelector('.header__toggle--close');
const menuMobile = document.querySelector('.menu-mobile');
const alertClose = document.querySelector('.alert__close');

/**
 * Animate value from 0 to value
 * @param {Object} elmnt - counter element
 * @param {number} value - final counter value
 * @param {number} duration - animation duration
 */
const animateValue = (elmnt, value, duration) =>  {
  let current = 0;
  let increment = value > 0 ? 1 : -1;
  let stepTime = Math.abs(Math.floor(duration / value));
  let timer = setInterval(() => {
    current += increment;
    elmnt.textContent = current;

    if (current === value) {
      clearInterval(timer);
    }
  }, stepTime);
};

/**
 * Smooth scrolling script
 */
$(".main-nav__item-link").on("click", function (evt) {
  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    evt.preventDefault();
    let hash = this.hash;
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

/**
 * PHPmailer popup alert hiding
 */
if (alertClose) {
  alertClose.addEventListener('click', () => {
    const alertPopup = document.querySelector('.alert-success');
    alertPopup.style = 'visibility: hidden;';
  });
}

/**
 * Portfolio popup closing event
 */
portfolioButtonClose.forEach(item => {
  item.addEventListener('click', evt => {
    evt.preventDefault();
    portfolioDarker.forEach(item => item.classList.remove('portfolio__darker--opened'));
  });
});

/**
 * Portfolio popup open event
 */
portfolioCards.forEach(item => {
  item.addEventListener('click', () => {
    switch (true) {
      case item.classList.contains('portfolio__cards-button--ostltd'):
        portfolioDarkerOstltd.classList.add('portfolio__darker--opened');
        break;
      case item.classList.contains('portfolio__cards-button--nda'):
        portfolioDarkerNda.classList.add('portfolio__darker--opened');
        break;
      case item.classList.contains('portfolio__cards-button--fantshop'):
        portfolioDarkerFant.classList.add('portfolio__darker--opened');
        break;
      case item.classList.contains('portfolio__cards-button--rapid'):
        portfolioDarkerRapid.classList.add('portfolio__darker--opened');
        break;
      case item.classList.contains('portfolio__cards-button--ae'):
        portfolioDarkerAe.classList.add('portfolio__darker--opened');
        break;
      case item.classList.contains('portfolio__cards-button--book'):
        portfolioDarkerBook.classList.add('portfolio__darker--opened');
        break;
    }
  });
});

/**
 * Mobile menu toggler
 */
menuOpener.addEventListener('click', () => {
  menuMobile.classList.remove('menu-mobile--closed');
});
menuCloser.addEventListener('click', () => {
  menuMobile.classList.add('menu-mobile--closed');
});
