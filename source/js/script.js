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
const mainNavItemLink = document.querySelectorAll('.main-nav__item-link');

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
mainNavItemLink.forEach(item => {
  item.addEventListener('click', (evt) => {
    if (evt.target.hash !== "") {
      evt.preventDefault();
      let hash = evt.target.hash;
      document.querySelector(hash).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
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
    const openerClass = 'portfolio__darker--opened';
    const containClass = 'portfolio__cards-button';

    switch (true) {
      case item.classList.contains(`${containClass}--ostltd`):
        portfolioDarkerOstltd.classList.add(openerClass);
        break;
      case item.classList.contains(`${containClass}--nda`):
        portfolioDarkerNda.classList.add(openerClass);
        break;
      case item.classList.contains(`${containClass}--fantshop`):
        portfolioDarkerFant.classList.add(openerClass);
        break;
      case item.classList.contains(`${containClass}--rapid`):
        portfolioDarkerRapid.classList.add(openerClass);
        break;
      case item.classList.contains(`${containClass}--ae`):
        portfolioDarkerAe.classList.add(openerClass);
        break;
      case item.classList.contains(`${containClass}--book`):
        portfolioDarkerBook.classList.add(openerClass);
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
