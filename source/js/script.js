'use strict';

const portfolioData = {
  nda: {
    organization: 'National Digital Aggregator',
    links: [
      {
        href: 'https://ndawp.webcreator.top',
        label: 'ndawp.webcreator.top'
      }
    ],
    role: 'Frontend development',
    technologies: 'Figma, HTML5, CSS3, JS, PHP, SASS, Gulp, WordPress',
    description: 'This site was created for a company that distributes popular Russian music on various platforms. The site is fully responsive, correctly displayed in all possible resolutions and has support for Retina and 4k displays.',
    images: [
      { href: 'img/portfolio_full_2.jpg', src: 'img/portfolio_maxi_2_1.jpg', width: 230, height: 176 },
      { href: 'img/portfolio_full_2.jpg', src: 'img/portfolio_maxi_2_2.jpg', width: 230, height: 215 },
      { href: 'img/portfolio_full_2.jpg', src: 'img/portfolio_maxi_2_3.jpg', width: 230, height: 175 },
      { href: 'img/portfolio_full_2.jpg', src: 'img/portfolio_maxi_2_4.jpg', width: 230, height: 188 }
    ]
  },
  fantshop: {
    organization: 'Fanttex Company',
    links: [
      {
        href: 'https://fantshop.webcreator.top',
        label: 'fantshop.webcreator.top'
      },
      {
        href: 'https://fantshop.webcreator.top/index-mobile.html',
        label: 'fantshop.webcreator.top - mobile'
      }
    ],
    role: 'Frontend development',
    technologies: 'Photoshop, HTML5, CSS3, JS, Pug, SASS, Gulp, JS Libraries',
    description: 'This site is for a company that is engaged in the wholesale of luxury fabrics. The site is fully responsive, correctly displayed at any resolution and has a separate mobile version. Much attention was paid to optimization, validation in PageSpeed Insights and micro-markup.',
    images: [
      { href: 'img/portfolio_full_3.jpg', src: 'img/portfolio_maxi_3_1.jpg', width: 230, height: 250 },
      { href: 'img/portfolio_full_3.jpg', src: 'img/portfolio_maxi_3_2.jpg', width: 230, height: 250 },
      { href: 'img/portfolio_full_3.jpg', src: 'img/portfolio_maxi_3_3.jpg', width: 230, height: 250 },
      { href: 'img/portfolio_full_3.jpg', src: 'img/portfolio_maxi_3_4.jpg', width: 230, height: 250 }
    ]
  },
  rapid: {
    organization: 'Rapid Company',
    links: [
      {
        href: 'https://rapidcard.webcreator.top',
        label: 'rapidcards.webcreator.top'
      }
    ],
    role: 'Frontend development',
    technologies: 'Figma, HTML5, CSS3, JS, SASS, Gulp, JS Libraries',
    description: 'This interface was created for a startup that plans to organize a social network. The peculiarity of this social network is the exchange of business cards and the establishment of contacts between businessmen with a modern interface. This interface is adaptive on all types of devices and has form validation.',
    images: [
      { href: 'img/portfolio_full_4.jpg', src: 'img/portfolio_maxi_4_1.jpg', width: 230, height: 200 },
      { href: 'img/portfolio_full_4.jpg', src: 'img/portfolio_maxi_4_2.jpg', width: 230, height: 200 },
      { href: 'img/portfolio_full_4.jpg', src: 'img/portfolio_maxi_4_3.jpg', width: 230, height: 200 },
      { href: 'img/portfolio_full_4.jpg', src: 'img/portfolio_maxi_4_4.jpg', width: 230, height: 200 }
    ]
  }
};

const particlesConfig = {
  particles: {
    number: {
      value: 80,
      density: {
        enable: true,
        value_area: 800
      }
    },
    color: {
      value: '#de9654'
    },
    shape: {
      type: 'circle',
      stroke: {
        width: 0,
        color: '#000000'
      },
      polygon: {
        nb_sides: 5
      },
      image: {
        src: 'img/github.svg',
        width: 100,
        height: 100
      }
    },
    opacity: {
      value: 0.5,
      random: false,
      anim: {
        enable: false,
        speed: 1,
        opacity_min: 0.1,
        sync: false
      }
    },
    size: {
      value: 3,
      random: true,
      anim: {
        enable: false,
        speed: 40,
        size_min: 0.1,
        sync: false
      }
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: '#855555',
      opacity: 0.4,
      width: 1
    },
    move: {
      enable: true,
      speed: 2,
      direction: 'none',
      random: false,
      straight: false,
      out_mode: 'out',
      bounce: false,
      attract: {
        enable: false,
        rotateX: 600,
        rotateY: 1200
      }
    }
  },
  interactivity: {
    detect_on: 'window',
    events: {
      onhover: {
        enable: false,
        mode: 'repulse'
      },
      onclick: {
        enable: false,
        mode: 'push'
      },
      resize: true
    },
    modes: {
      grab: {
        distance: 400,
        line_linked: {
          opacity: 1
        }
      },
      bubble: {
        distance: 400,
        size: 40,
        duration: 2,
        opacity: 8,
        speed: 3
      },
      repulse: {
        distance: 100,
        duration: 0.4
      },
      push: {
        particles_nb: 4
      },
      remove: {
        particles_nb: 2
      }
    }
  },
  retina_detect: true
};

const portfolioModal = document.querySelector('#portfolio-modal');
const portfolioImages = document.querySelector('#portfolio-modal-images');
const portfolioTitle = document.querySelector('#portfolio-modal-title');
const portfolioLinks = document.querySelector('#portfolio-modal-links');
const portfolioRole = document.querySelector('#portfolio-modal-role');
const portfolioTechnologies = document.querySelector('#portfolio-modal-technologies');
const portfolioDescription = document.querySelector('#portfolio-modal-description');
const portfolioButtons = document.querySelectorAll('[data-portfolio]');
const portfolioCloseButton = document.querySelector('.portfolio__button-close');
const menuOpener = document.querySelector('.header__menu-toggle');
const menuCloser = document.querySelector('.header__toggle--close');
const menuMobile = document.querySelector('.menu-mobile');
const mainNavItemLink = document.querySelectorAll('.main-nav__item-link');
const copyrightDate = document.querySelector('#copyright');
const particlesRoot = document.querySelector('#particles-js');
const contactForm = document.querySelector('.contact__form');

const updateCopyright = () => {
  if (!copyrightDate) {
    return;
  }

  const currentDate = new Date().getFullYear();
  copyrightDate.textContent = `©${currentDate} Artyom Volkov. All rights reserved.`;
};

const closeMenu = () => {
  if (!menuMobile || !menuOpener) {
    return;
  }

  menuMobile.classList.add('menu-mobile--closed');
  menuMobile.setAttribute('aria-hidden', 'true');
  menuOpener.setAttribute('aria-expanded', 'false');
};

const openMenu = () => {
  if (!menuMobile || !menuOpener) {
    return;
  }

  menuMobile.classList.remove('menu-mobile--closed');
  menuMobile.setAttribute('aria-hidden', 'false');
  menuOpener.setAttribute('aria-expanded', 'true');
};

const createPortfolioLink = (link, index) => {
  const anchor = document.createElement('a');
  anchor.className = 'portfolio__card-link';
  anchor.href = link.href;
  anchor.target = '_blank';
  anchor.rel = 'noopener noreferrer';
  anchor.textContent = link.label;

  if (index > 0) {
    const separator = document.createTextNode(', ');
    portfolioLinks.appendChild(separator);
  }

  portfolioLinks.appendChild(anchor);
};

const renderPortfolioImages = (images) => {
  portfolioImages.innerHTML = '';

  images.forEach((image) => {
    const anchor = document.createElement('a');
    const img = document.createElement('img');

    anchor.href = image.href;
    anchor.target = '_blank';
    anchor.rel = 'noopener noreferrer';

    img.src = image.src;
    img.alt = `${portfolioTitle.textContent} image`;
    img.width = image.width;
    img.height = image.height;
    img.loading = 'lazy';
    img.decoding = 'async';

    anchor.appendChild(img);
    portfolioImages.appendChild(anchor);
  });
};

const openPortfolioModal = (portfolioKey) => {
  const currentPortfolio = portfolioData[portfolioKey];

  if (!currentPortfolio || !portfolioModal) {
    return;
  }

  portfolioTitle.textContent = currentPortfolio.organization;
  portfolioRole.textContent = currentPortfolio.role;
  portfolioTechnologies.textContent = currentPortfolio.technologies;
  portfolioDescription.textContent = currentPortfolio.description;
  portfolioLinks.textContent = '';

  currentPortfolio.links.forEach((link, index) => {
    createPortfolioLink(link, index);
  });

  renderPortfolioImages(currentPortfolio.images);

  portfolioModal.classList.add('portfolio__darker--opened');
  document.body.style.overflow = 'hidden';
};

const closePortfolioModal = () => {
  if (!portfolioModal) {
    return;
  }

  portfolioModal.classList.remove('portfolio__darker--opened');
  document.body.style.overflow = '';
};

const initSmoothScroll = () => {
  mainNavItemLink.forEach((item) => {
    item.addEventListener('click', (evt) => {
      const hash = evt.currentTarget.hash;

      if (!hash) {
        closeMenu();
        return;
      }

      const section = document.querySelector(hash);

      if (!section) {
        return;
      }

      evt.preventDefault();
      section.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
      closeMenu();
    });
  });
};

const initPortfolioModal = () => {
  if (!portfolioModal || !portfolioCloseButton) {
    return;
  }

  portfolioButtons.forEach((button) => {
    button.addEventListener('click', () => {
      openPortfolioModal(button.dataset.portfolio);
    });
  });

  portfolioCloseButton.addEventListener('click', closePortfolioModal);

  portfolioModal.addEventListener('click', (evt) => {
    if (evt.target === portfolioModal) {
      closePortfolioModal();
    }
  });

  document.addEventListener('keydown', (evt) => {
    if (evt.key === 'Escape') {
      closePortfolioModal();
      closeMenu();
    }
  });
};

const initMenu = () => {
  if (!menuOpener || !menuCloser) {
    return;
  }

  menuOpener.addEventListener('click', openMenu);
  menuCloser.addEventListener('click', closeMenu);
};

const setContactFormStatus = (statusNode, type, message) => {
  if (!statusNode) {
    return;
  }

  statusNode.textContent = message;
  statusNode.classList.remove('contact__status--success', 'contact__status--error');

  if (type) {
    statusNode.classList.add(`contact__status--${type}`);
  }
};

const initContactForm = () => {
  if (!contactForm) {
    return;
  }

  const submitButton = contactForm.querySelector('.contact_button');
  const statusNode = contactForm.querySelector('.contact__status');

  contactForm.addEventListener('submit', async (evt) => {
    evt.preventDefault();

    if (!contactForm.checkValidity()) {
      contactForm.reportValidity();
      return;
    }

    if (!contactForm.action || contactForm.action.includes('/your-form-id')) {
      setContactFormStatus(statusNode, 'error', 'Add a real form endpoint in the form action attribute.');
      return;
    }

    const defaultButtonText = submitButton ? submitButton.textContent : '';

    if (submitButton) {
      submitButton.disabled = true;
      submitButton.textContent = 'Sending...';
    }

    setContactFormStatus(statusNode, '', 'Sending your message...');

    try {
      const response = await fetch(contactForm.action, {
        method: contactForm.method || 'POST',
        body: new FormData(contactForm),
        headers: {
          Accept: 'application/json'
        }
      });

      if (!response.ok) {
        throw new Error(`Request failed with status ${response.status}`);
      }

      contactForm.reset();
      setContactFormStatus(statusNode, 'success', 'Thanks. Your message has been sent.');
    } catch (error) {
      setContactFormStatus(statusNode, 'error', 'Failed to send the form. Check the endpoint and try again.');
      window.console.error('Contact form submit failed:', error);
    } finally {
      if (submitButton) {
        submitButton.disabled = false;
        submitButton.textContent = defaultButtonText;
      }
    }
  });
};

const loadParticles = () => {
  if (!particlesRoot) {
    return;
  }

  const prefersReducedMotion = window.matchMedia &&
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (prefersReducedMotion || window.innerWidth <= 768) {
    return;
  }

  const initParticles = () => {
    const particlesScript = document.createElement('script');
    particlesScript.src = 'js/particles.min.js';
    particlesScript.async = true;
    particlesScript.onload = () => {
      if (window.particlesJS) {
        window.particlesJS('particles-js', particlesConfig);
      }
    };
    document.body.appendChild(particlesScript);
  };

  if ('requestIdleCallback' in window) {
    window.requestIdleCallback(initParticles, {timeout: 1500});
    return;
  }

  window.setTimeout(initParticles, 400);
};

updateCopyright();
initSmoothScroll();
initPortfolioModal();
initMenu();
initContactForm();
window.addEventListener('load', loadParticles, {once: true});
