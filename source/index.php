<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webcreator - Artyom Volkov</title>
    <link rel="preload" href="fonts/roboto-v20-latin_cyrillic-regular.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="fonts/roboto-v20-latin_cyrillic-500.woff2" as="font" crossorigin="anonymous">
    <link href="css/style.min.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'mail.php'; ?>
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <header class="header">
      <img class="header__logo" src="img/logo_white.svg" width="230" height="60" alt="Logotype">
      <nav class="main-nav">
        <ul class="main-nav__list">
          <li class="main-nav__item">
            <a href="#about" class="main-nav__item-link">About</a>
          </li>
          <li class="main-nav__item">
            <a href="#portfolio" class="main-nav__item-link">Portfolio</a>
          </li>
          <li class="main-nav__item main-nav__item--blog">
            <a href="">Blog</a>
          </li>
          <li class="main-nav__item">
            <a href="#contact" class="main-nav__item-link">Contact</a>
          </li>
        </ul>
      </nav>
      <button class="header__menu-toggle" type="button">
          <span class="visually-hidden">Открыть меню</span>
        </button>
      <div class="menu-mobile menu-mobile--closed">
        <div class="menu-mobile__top">
          <button class="header__toggle header__toggle--close" type="button">
            <span class="visually-hidden">Close menu</span>
          </button>
        </div>
        <ul class="menu-mobile__inner">
          <li>
            <a class="menu__item__inner main-nav__item-link" href="index.php">MAIN</a>
          </li>
          <li>
            <a  class="menu__item__inner main-nav__item-link" href="index.php#about">ABOUT</a>
          </li>
          <li>
            <a class="menu__item__inner main-nav__item-link" href="index.php#portfolio">PORTFOLIO</a>
          </li>
          <li>
            <a class="menu__item__inner main-nav__item-link" href="index.php#contact">CONTACT</a>
          </li>
        </ul>
      </div>
    </header>
    <main class="main">
      <section class="offer">
        <h1 class="offer__title"><span class="offer__title--colored">Hello!</span> My name is Artyom. I design and create convenient and <span class="offer__title--colored">modern websites or interfaces.</span></h1>
        <div id="particles-js" class="particles"></div>
      </section>
      <section class="about">
        <h2 class="about__title" id="about">
          Something about me
        </h2>
        <img class="about__photo" src="img/my_photo.png" alt="My photo" width="195" height="220">
        <p class="about__desc">
          <span class="about__desc--colored">I am frontend developer</span> from Nur-Sultan(Astana), Kazakhstan. Before webdev, I worked for five years as a system administrator and a head of customer service in a large IT company. I got tired of this and decided to radically change my role in life.
        </p>
        <p class="about__desc">
          I enjoy creating web services, platforms, online stores and simple one page websites. I have been in web development not long ago, but I am very actively working and strive to become the best in my field. I am always looking for more interesting projects.
        </p>
        <p class="about__desc">
          <span class="about__desc--colored">My skills:</span> HTML5, CSS3, JS, Semantic / responsive / valid / cross-browser layout.
        </p>
        <p class="about__desc">
          <span class="about__desc--colored">Technologies:</span> Gulp, Sass, Less, Git, BEM, Mobile First. I am not chasing the amount of technology, but I am good at solving business problems.
        </p>
      </section>
      <section class="portfolio">
        <h2 class="portfolio__title" id="portfolio">
          My works
        </h2>
        <p class="portfolio__desc">
          Interested in the entire <span class="portfolio__desc--colored">frontend</span> spectrum and working on ambitious projects with positive people.
        </p>
        <div class="portfolio__cards">
          <button class="portfolio__cards-button portfolio__cards-button--nda">
            <img src="img/portfolio_mini_1.jpg" alt="Portfolio image mini" width="360" height="200">
            <div class="portfolio__cards-titles">
              <p>National Digital Aggregator</p>
            </div>
          </button>
          <button class="portfolio__cards-button portfolio__cards-button--fantshop">
            <img src="img/portfolio_mini_2.jpg" alt="Portfolio image mini" width="360" height="200">
            <div class="portfolio__cards-titles">
              <p>Fanttex Shop</p>
            </div>
          </button>
          <button class="portfolio__cards-button portfolio__cards-button--ostltd">
            <img src="img/portfolio_mini_3.jpg" alt="Portfolio image mini" width="360" height="200">
            <div class="portfolio__cards-titles">
              <p>OSTLtd Company</p>
            </div>
          </button>
          <button class="portfolio__cards-button portfolio__cards-button--rapid">
            <img src="img/portfolio_mini_4.jpg" alt="Portfolio image mini" width="360" height="200">
            <div class="portfolio__cards-titles">
              <p>Rapid Company</p>
            </div>
          </button>
          <button class="portfolio__cards-button portfolio__cards-button--ae">
            <img src="img/portfolio_mini_5.jpg" alt="Portfolio image mini" width="360" height="200">
            <div class="portfolio__cards-titles">
              <p>American Education Company</p>
            </div>
          </button>
          <button class="portfolio__cards-button portfolio__cards-button--book">
            <img src="img/portfolio_mini_6.jpg" alt="Portfolio image mini" width="360" height="200">
            <div class="portfolio__cards-titles">
              <p>Keksobooking</p>
            </div>
          </button>
        </div >
      </section>
      <section class="portfolio">
        <h2 class="portfolio__title" id="portfolio">
          My certificates
        </h2>
        <p class="portfolio__desc">
          I am constantly learning and gaining knowledge not only in courses, but also in <span class="portfolio__desc--colored">official</span> documentations, articles, podcasts, meetups and conferences.
        </p>
        <div class="portfolio__cards portfolio__cards--cert">
          <a href="https://assets.htmlacademy.ru/certificates/intensive/89/693011.pdf" class="portfolio__cards-button portfolio__cards-button--cert" target="_blank">
            <img src="img/crt1.jpg" alt="Certificate image mini" width="213" height="300">
            <div class="portfolio__cards-titles portfolio__cards-titles--cert">
              <p>HTML Academy</p>
            </div>
          </a>
          <a href="https://assets.htmlacademy.ru/certificates/intensive/113/693011.pdf" class="portfolio__cards-button portfolio__cards-button--cert"  target="_blank">
            <img src="img/crt2.jpg" alt="Certificate image mini" width="213" height="300">
            <div class="portfolio__cards-titles portfolio__cards-titles--cert">
              <p>HTML Academy</p>
            </div>
          </a>
          <a href="https://assets.htmlacademy.ru/certificates/intensive/167/693011.pdf" class="portfolio__cards-button portfolio__cards-button--cert"  target="_blank">
            <img src="img/crt3.jpg" alt="Portfolio image mini" width="213" height="300">
            <div class="portfolio__cards-titles portfolio__cards-titles--cert">
              <p>HTML Academy</p>
            </div>
          </a>
          <a href="img/volkov_diploma-1.jpg" class="portfolio__cards-button portfolio__cards-button--cert portfolio__cards-button--cert-wayup"  target="_blank">
            <img src="img/crt4.jpg" alt="Portfolio image mini" width="300" height="180">
            <div class="portfolio__cards-titles portfolio__cards-titles--certwayup">
              <p>WayUp</p>
            </div>
          </a>
        </div >
      </section>
      <section class="contact">
        <h2 class="contact__title" id="contact">
          Contact me
        </h2>
        <p class="contact__desc">
          Thanks for taking the time to reach out. How can I help you today?
        </p>
        <form class="contact__form" action="" method="post">
          <fieldset class="contact__fields" title="Form fields">
            <div class="contact__wrapper">
              <input type="text" class="contact__input" placeholder="Name" name="name" required autocomplete="off">
              <input type="email" class="contact__input contact__input--mail" name="email" placeholder="Email" required autocomplete="off">
              <textarea class="contact__input contact__input--message" name="message" placeholder="Message" maxlength="500" required autocomplete="off"></textarea>
            </div>
          </fieldset>
          <div class="captcha" style="display: flex;justify-content: center;margin: 20px;">
            <div class="g-recaptcha" data-sitekey="6LcTx9EZAAAAALBHPXzglvsMb0yCSqoKTWQdeeI0" data-theme="dark"></div>
          </div>
          <button class="contact_button" type="submit" name="submit">
            Send message
          </button>
        </form>
      </section>
    </main>
    <footer class="footer">
        <div class="footer__copyright">
          <p class="footer__text">
            Hand-crafted with love by Artyom Volkov.
          </p>
          <div class="footer__tech">
            <p class="footer__text footer__text--tech">
              Used technologies
            </p>
            <img class="footer__logo" src="img/logo1.png" alt="HTML,CSS,JS logotypes" width="76" height="30">
            <span class="footer__text footer__text--tech">+</span>
            <img class="footer__logo" src="img/logo2.png" alt="Sass logotype" width="40" height="30">
            <img class="footer__logo" src="img/logo3.png" alt="Gulp logotype" width="14" height="30">
            <!-- <img class="footer__logo" src="img/logo4.png" alt="NodeJS logotype" width="49" height="30"> -->
            <img class="footer__logo" src="img/logo5.png" alt="Git logotype" width="69" height="30">
          </div>
          <p class="footer__text footer__text--rights">
            © 2020 Artyom Volkov. All rights reserved.
          </p>
        </div>
        <div class="footer__social">
          <a class="footer__item footer__item--mail" href="mailto:admin@webcreator.top" target="_blank">
            <span class="visually-hidden">Send email</span>
            <svg width="40" height="40" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <path d="M40 32.647V7.35292C40 6.8846 39.8197 6.45872 39.5268 6.137C39.5224 6.13175 39.5174 6.12677 39.5128 6.12152C39.1821 5.76659 38.7122 5.54297 38.19 5.54297H1.80995C1.28842 5.54297 0.819095 5.76605 0.488507 6.12016C0.483439 6.12595 0.477919 6.13148 0.472941 6.13727C0.180181 6.45899 0 6.88478 0 7.35292V32.647C0 33.1155 0.180362 33.5415 0.473394 33.8632C0.477376 33.868 0.4819 33.8725 0.486063 33.8772C0.816742 34.2328 1.28715 34.457 1.80995 34.457H38.19C38.7122 34.457 39.1821 34.2334 39.5128 33.8784C39.5174 33.8732 39.5224 33.8683 39.5268 33.863C39.8197 33.5412 40 33.1154 40 32.647ZM8.8724 25.2542C8.51195 24.908 7.939 24.9197 7.59285 25.2803L1.80995 31.3029V8.69709L12.6628 20L9.73113 23.0533C9.38498 23.4137 9.39665 23.9867 9.75719 24.3328C9.93258 24.5012 10.1584 24.5851 10.3838 24.5851C10.6215 24.5851 10.859 24.4919 11.0367 24.3069L13.9175 21.3067L18.0937 25.6561C18.5994 26.1828 19.2764 26.4728 20 26.4728C20.7236 26.4728 21.4006 26.1827 21.9063 25.6561L26.0825 21.3067L36.9715 32.647H3.02851L8.89837 26.5337C9.24452 26.1733 9.23285 25.6003 8.8724 25.2542ZM20.6008 24.4025C20.4396 24.5704 20.2262 24.6629 20 24.6629C19.7738 24.6629 19.5605 24.5704 19.3992 24.4025L3.02851 7.35292H36.9714L20.6008 24.4025ZM27.3372 20L38.19 8.69709L38.1902 31.3031L27.3372 20Z"/>
            </svg>
          </a>
          <a class="footer__item footer__item--github" href="https://github.com/volkov85" target="_blank">
            <span class="visually-hidden">My github</span>
            <svg width="30" height="30" viewbox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 0C6.76117 0 0 6.76117 0 15C0 22.0306 4.93332 28.4171 11.4844 30V25.0374C10.8353 25.1795 10.2379 25.1836 9.5771 24.9889C8.69064 24.7272 7.97035 24.1367 7.43568 23.2363C7.09488 22.6614 6.49086 22.0379 5.86075 22.0837L5.70625 20.3327C7.06879 20.216 8.24753 21.1629 8.94722 22.3384C9.25804 22.8612 9.61578 23.1676 10.0749 23.3031C10.5187 23.4338 10.9953 23.3711 11.5505 23.175C11.6899 22.0633 12.1992 21.6472 12.5839 21.0612V21.0603C8.67691 20.4776 7.11983 18.4048 6.50185 16.7688C5.68291 14.5965 6.12236 11.8826 7.5705 10.1676C7.59865 10.1342 7.64946 10.0468 7.62978 9.98566C6.96579 7.97997 7.77489 6.3208 7.80464 6.14479C8.57094 6.37138 8.69545 5.91682 11.1333 7.39792L11.5546 7.65106C11.7309 7.75612 11.6755 7.69615 11.8517 7.68288C12.8696 7.40639 13.9426 7.25372 14.9998 7.23999C16.065 7.25372 17.1311 7.40639 18.1911 7.69409L18.3275 7.70782C18.3156 7.70599 18.3646 7.69913 18.4467 7.65015C21.492 5.80559 21.3826 6.40846 22.1992 6.14296C22.2288 6.3192 23.0271 8.00537 22.3702 9.98566C22.2816 10.2585 25.0104 12.7572 23.4979 16.7681C22.8799 18.4048 21.3231 20.4776 17.4161 21.0603V21.0612C17.9169 21.8246 18.5186 22.2306 18.5154 23.8053V30C25.0667 28.4171 29.9998 22.0306 29.9998 15C30 6.76117 23.2388 0 15 0V0Z"/>
            </svg>
          </a>
          <a class="footer__item footer__item--vk" href="https://vk.com/volkov.creator" target="_blank">
            <span class="visually-hidden">Vkontakte</span>
            <svg width="50" height="50" viewbox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
              <path d="M44.5058 29.9512L44.4787 29.9259C44.0518 29.5311 42.7442 28.256 42.3032 27.6988C41.7855 27.0035 41.9049 26.5479 42.2929 25.8653C42.7831 25.0026 43.7654 23.6794 44.8049 22.2782C48.1343 17.7917 50.2839 14.6858 49.8414 12.4797L49.603 11.3013L37.3071 11.3067C37.2639 11.4229 36.6223 14.2471 33.9146 19.0561C31.9512 22.5431 30.6634 23.6385 30.2098 23.8319L30.1396 23.8105C29.992 23.6278 29.7341 23.1347 29.6281 21.8639C29.5174 20.5326 29.6155 18.9208 29.7104 17.3621C29.8215 15.5344 29.9172 13.9558 29.6879 12.8264L29.3145 10.9864C28.8632 10.9141 27.2111 10.2755 22.6079 10.2269C18.6226 10.186 17.4519 10.7628 16.877 11.2711L14.9754 12.9525L17.379 13.7628C18.2938 14.0712 18.5975 14.4271 18.8465 16.191C19.0091 17.3407 19.0941 19.2728 18.9186 20.9978C18.6665 23.4711 18.0619 23.9313 18.0306 23.9557C17.9264 23.9202 17.0433 23.533 15.5102 20.2853C14.4467 18.0329 13.5144 15.3685 12.833 13.423C12.0533 11.1951 12.1937 11.6694 11.7981 10.6168L-0.0976562 10.6164L0.672151 12.6116C3.88146 20.9374 6.82603 27.4393 10.7666 32.1092C15.1203 37.2687 20.5311 39.9702 27.8195 39.9702H29.2843V38.5025C29.2843 37.1303 29.3976 36.1423 29.6406 35.3932C29.789 34.9368 29.9863 34.5596 30.1934 34.164C30.5009 33.5815 30.8015 33.3319 30.9655 33.2948C31.1143 33.2608 31.3759 33.3701 31.6659 33.5868C32.4982 34.2087 33.1589 35.0259 33.8586 35.8912C34.8679 37.1399 35.9116 38.4306 37.5676 39.2757C38.4724 39.7374 40.1311 39.9706 41.0439 39.9706C41.2854 39.9706 49.8918 39.9702 49.9024 39.9702L49.8395 38.4421C49.7457 36.1572 47.9508 33.3002 44.5058 29.9512ZM41.1008 37.0348H41.0771C40.4477 37.0451 39.2464 36.8383 38.897 36.6602C37.7961 36.0984 37.0267 35.1463 36.1352 34.0439C35.3528 33.0758 34.5437 32.0748 33.4172 31.2335C32.5062 30.5528 31.6788 30.3536 31.0219 30.3536C30.7595 30.3536 30.5237 30.3854 30.3216 30.4312C29.559 30.6032 28.4684 31.1529 27.6013 32.796C27.3568 33.2635 27.0794 33.7928 26.8548 34.4854C26.6194 35.2101 26.4729 36.0154 26.4031 36.995C20.9107 36.6824 16.6249 34.5053 13.0039 30.2141C9.63747 26.2242 6.98892 20.6434 4.18397 13.5507C4.38691 13.5507 9.47229 13.5514 9.77251 13.5514C9.86445 13.8102 9.96363 14.0938 10.0689 14.3942C10.8032 16.493 11.8092 19.3668 12.9944 21.8176C14.6916 25.3271 16.2415 26.8923 18.0195 26.8923C18.9072 26.8923 19.7033 26.5154 20.3217 25.8018C21.2033 24.7848 21.7152 23.1061 21.8869 20.6694C22.0223 18.748 21.8964 16.8343 21.7476 15.7797C21.6248 14.9121 21.4497 14.0013 21.0225 13.1853C22.8432 13.1031 25.2812 13.233 26.8258 13.4551C26.9662 14.2211 26.8746 15.7266 26.7861 17.1832C26.5721 20.7019 26.3512 24.333 28.2101 26.0319C28.537 26.3308 28.8838 26.491 28.8937 26.4975L29.8398 26.7883C30.2048 26.6756 32.3193 27.7504 36.3232 20.7493C37.6061 18.5061 38.8005 15.9212 39.4437 14.2329C40.9352 14.2299 46.0168 14.2356 46.6138 14.2364C45.7681 16.1012 43.7638 18.761 42.4539 20.5265C41.3117 22.0653 40.3256 23.3943 39.7469 24.4125C38.672 26.3041 38.8528 27.99 39.9724 29.4772L39.9899 29.5002C40.6148 30.2971 42.1578 31.7724 42.4779 32.0698C44.7965 34.3253 45.9138 35.9455 46.4456 37.0344H41.1008V37.0348Z"/>
            </svg>
          </a>
          <a class="footer__item footer__item--instagram" href="https://instagram.com/volkov.creator/" target="_blank">
            <span class="visually-hidden">Instagram</span>
            <svg width="30" height="30" viewbox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.39453 30H25.6055C28.0286 30 30 28.0286 30 25.6055V4.39453C30 1.97136 28.0286 0 25.6055 0H4.39453C1.97136 0 0 1.97136 0 4.39453V25.6055C0 28.0286 1.97136 30 4.39453 30ZM1.75781 4.39453C1.75781 2.94067 2.94067 1.75781 4.39453 1.75781H25.6055C27.0593 1.75781 28.2422 2.94067 28.2422 4.39453V25.6055C28.2422 27.0593 27.0593 28.2422 25.6055 28.2422H4.39453C2.94067 28.2422 1.75781 27.0593 1.75781 25.6055V4.39453Z"/>
              <path d="M15 22.9102C19.3616 22.9102 22.9102 19.3616 22.9102 15C22.9102 10.6384 19.3616 7.08984 15 7.08984C10.6384 7.08984 7.08984 10.6384 7.08984 15C7.08984 19.3616 10.6384 22.9102 15 22.9102ZM15 8.84766C18.3925 8.84766 21.1523 11.6075 21.1523 15C21.1523 18.3925 18.3925 21.1523 15 21.1523C11.6075 21.1523 8.84766 18.3925 8.84766 15C8.84766 11.6075 11.6075 8.84766 15 8.84766Z"/>
              <path d="M23.7891 8.84766C25.2429 8.84766 26.4258 7.66479 26.4258 6.21094C26.4258 4.75708 25.2429 3.57422 23.7891 3.57422C22.3352 3.57422 21.1523 4.75708 21.1523 6.21094C21.1523 7.66479 22.3352 8.84766 23.7891 8.84766ZM23.7891 5.33203C24.2736 5.33203 24.668 5.72639 24.668 6.21094C24.668 6.69548 24.2736 7.08984 23.7891 7.08984C23.3045 7.08984 22.9102 6.69548 22.9102 6.21094C22.9102 5.72639 23.3045 5.33203 23.7891 5.33203Z"/>
            </svg>
          </a>
          <a class="footer__item footer__item--facebook" href="https://www.facebook.com/volkov.creator" target="_blank">
            <span class="visually-hidden">Facebook</span>
            <svg width="30" height="30" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.39453 30H14.1797V19.3359H10.6641V15.8203H14.1797V11.4258C14.1797 9.00261 16.151 7.03125 18.5742 7.03125H22.9688V10.5469H19.4531C18.4838 10.5469 17.6953 11.3354 17.6953 12.3047V15.8203H22.8101L22.2242 19.3359H17.6953V30H25.6055C28.0286 30 30 28.0286 30 25.6055V4.39453C30 1.97136 28.0286 0 25.6055 0H4.39453C1.97136 0 0 1.97136 0 4.39453V25.6055C0 28.0286 1.97136 30 4.39453 30ZM1.75781 4.39453C1.75781 2.94067 2.94067 1.75781 4.39453 1.75781H25.6055C27.0593 1.75781 28.2422 2.94067 28.2422 4.39453V25.6055C28.2422 27.0593 27.0593 28.2422 25.6055 28.2422H19.4531V21.0938H23.7133L24.8852 14.0625H19.4531V12.3047H24.7266V5.27344H18.5742C15.1817 5.27344 12.4219 8.03329 12.4219 11.4258V14.0625H8.90625V21.0938H12.4219V28.2422H4.39453C2.94067 28.2422 1.75781 27.0593 1.75781 25.6055V4.39453Z"/>
            </svg>
          </a>
        </div>
    </footer>
    <div class="portfolio__darker portfolio__darker--nda">
      <div class="portfolio__card-inner">
        <div class="portfolio__card-images">
          <a href="img/portfolio_full_2.jpg" target="blank">
            <img src="img/portfolio_maxi_2_1.jpg" alt="Portfolio image" width="230" height="176">
          </a>
          <a href="img/portfolio_full_2.jpg" target="blank">
            <img src="img/portfolio_maxi_2_2.jpg" alt="Portfolio image" width="230" height="215">
          </a>
          <a href="img/portfolio_full_2.jpg" target="blank">
            <img src="img/portfolio_maxi_2_3.jpg" alt="Portfolio image" width="230" height="175">
          </a>
          <a href="img/portfolio_full_2.jpg" target="blank">
            <img src="img/portfolio_maxi_2_4.jpg" alt="Portfolio image" width="230" height="188">
          </a>
        </div>
        <div class="portfolio__card-descs">
          <button class="portfolio__button-close">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="23.2759" y="24.9999" width="32.9169" height="2.43829" transform="rotate(-135 23.2759 24.9999)" fill="#FFA04A"/>
              <rect y="23.2758" width="32.9169" height="2.43829" transform="rotate(-45 0 23.2758)" fill="#FFA04A"/>
            </svg>
          </button>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Organization:</span> National Digital Aggregator
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Links:</span> <a class="portfolio__card-link" href="https://ndawp.webcreator.top" target="blank">ndawp.webcreator.top</a>
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">My role in the project:</span> Frontend development
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Technologies and tools:</span> Figma, HTML5, CSS3, JS, PHP, SASS, Gulp, WordPress
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Description:</span> This site was created for a company that distributes popular Russian music on various platforms. The site is fully responsive, correctly displayed in all possible resolutions and has support for Retina and 4k displays.
          </p>
        </div>
      </div>
    </div>
    <div class="portfolio__darker portfolio__darker--fantshop">
      <div class="portfolio__card-inner">
        <div class="portfolio__card-images">
          <a href="img/portfolio_full_3.jpg" target="blank">
            <img src="img/portfolio_maxi_3_1.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_3.jpg" target="blank">
            <img src="img/portfolio_maxi_3_2.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_3.jpg" target="blank">
            <img src="img/portfolio_maxi_3_3.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_3.jpg" target="blank">
            <img src="img/portfolio_maxi_3_4.jpg" alt="Portfolio image" width="230" height="250">
          </a>
        </div>
        <div class="portfolio__card-descs">
          <button class="portfolio__button-close">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="23.2759" y="24.9999" width="32.9169" height="2.43829" transform="rotate(-135 23.2759 24.9999)" fill="#FFA04A"/>
              <rect y="23.2758" width="32.9169" height="2.43829" transform="rotate(-45 0 23.2758)" fill="#FFA04A"/>
            </svg>
          </button>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Organization:</span> Fanttex Company
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Links:</span>
            <a class="portfolio__card-link" href="https://fantshop.webcreator.top" target="blank">fantshop.webcreator.top</a>, <a class="portfolio__card-link" href="https://fantshop.webcreator.top/index-mobile.html" target="blank">fantshop.webcreator.top - mobile</a>
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">My role in the project:</span> Frontend development
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Technologies and tools:</span> Photoshop, HTML5, CSS3, JS, Pug, SASS, Gulp, JS Libraries
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Description:</span> This site is for a company that is engaged in the wholesale of luxury fabrics. The site is fully responsive, correctly displayed at any resolution and has a separate mobile version. Much attention was paid to optimization, validation in PageSpeed Insights and micro-markup.
          </p>
        </div>
      </div>
    </div>
    <div class="portfolio__darker portfolio__darker--ostltd">
      <div class="portfolio__card-inner">
        <div class="portfolio__card-images">
          <a href="img/portfolio_full_1.jpg" target="blank">
            <img src="img/portfolio_maxi_1.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_1.jpg" target="blank">
            <img src="img/portfolio_maxi_2.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_1.jpg" target="blank">
            <img src="img/portfolio_maxi_3.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_1.jpg" target="blank">
            <img src="img/portfolio_maxi_4.jpg" alt="Portfolio image" width="230" height="250">
          </a>
        </div>
        <div class="portfolio__card-descs">
          <button class="portfolio__button-close">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="23.2759" y="24.9999" width="32.9169" height="2.43829" transform="rotate(-135 23.2759 24.9999)" fill="#FFA04A"/>
              <rect y="23.2758" width="32.9169" height="2.43829" transform="rotate(-45 0 23.2758)" fill="#FFA04A"/>
            </svg>
          </button>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Organization:</span> OSTLtd Company
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Links:</span> <a class="portfolio__card-link" href="https://ostltd.kz" target="blank">ostltd.kz</a>, <a class="portfolio__card-link" href="https://ost.webcreator.top" target="blank">ost.webcreator.top</a>
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">My role in the project:</span> Full cycle - from a prototype to a functioning website.
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Technologies and tools:</span> Figma, HTML5, CSS3, JS, PHP, SASS, Gulp
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Description:</span> This site for a company that is engaged in wholesale and retail sale of materials for the creation of advertising structures. The main priority is bright colors, modern design, easy navigation, structured catalog, feedback.
          </p>
        </div>
      </div>
    </div>
    <div class="portfolio__darker portfolio__darker--rapid">
      <div class="portfolio__card-inner">
        <div class="portfolio__card-images">
          <a href="img/portfolio_full_4.jpg" target="blank">
            <img src="img/portfolio_maxi_4_1.jpg" alt="Portfolio image" width="230" height="200">
          </a>
          <a href="img/portfolio_full_4.jpg" target="blank">
            <img src="img/portfolio_maxi_4_2.jpg" alt="Portfolio image" width="230" height="200">
          </a>
          <a href="img/portfolio_full_4.jpg" target="blank">
            <img src="img/portfolio_maxi_4_3.jpg" alt="Portfolio image" width="230" height="200">
          </a>
          <a href="img/portfolio_full_4.jpg" target="blank">
            <img src="img/portfolio_maxi_4_4.jpg" alt="Portfolio image" width="230" height="200">
          </a>
        </div>
        <div class="portfolio__card-descs">
          <button class="portfolio__button-close">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="23.2759" y="24.9999" width="32.9169" height="2.43829" transform="rotate(-135 23.2759 24.9999)" fill="#FFA04A"/>
              <rect y="23.2758" width="32.9169" height="2.43829" transform="rotate(-45 0 23.2758)" fill="#FFA04A"/>
            </svg>
          </button>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Organization:</span> Rapid Company
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Links:</span>
            <a class="portfolio__card-link" href="https://rapidcard.webcreator.top" target="blank">rapidcards.webcreator.top</a>
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">My role in the project:</span> Frontend development
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Technologies and tools:</span> Figma, HTML5, CSS3, JS, SASS, Gulp, JS Libraries
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Description:</span> This interface was created for a startup that plans to organize a social network. The peculiarity of this social network is the exchange of business cards and the establishment of contacts between businessmen with a modern interface. This interface is adaptive on all types of devices and has form validation.
          </p>
        </div>
      </div>
    </div>
    <div class="portfolio__darker portfolio__darker--ae">
      <div class="portfolio__card-inner">
        <div class="portfolio__card-images">
          <a href="img/portfolio_full_5.jpg" target="blank">
            <img src="img/portfolio_maxi_5_1.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_5.jpg" target="blank">
            <img src="img/portfolio_maxi_5_2.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_5.jpg" target="blank">
            <img src="img/portfolio_maxi_5_3.jpg" alt="Portfolio image" width="230" height="227">
          </a>
          <a href="img/portfolio_full_5.jpg" target="blank">
            <img src="img/portfolio_maxi_5_4.jpg" alt="Portfolio image" width="230" height="250">
          </a>
        </div>
        <div class="portfolio__card-descs">
          <button class="portfolio__button-close">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="23.2759" y="24.9999" width="32.9169" height="2.43829" transform="rotate(-135 23.2759 24.9999)" fill="#FFA04A"/>
              <rect y="23.2758" width="32.9169" height="2.43829" transform="rotate(-45 0 23.2758)" fill="#FFA04A"/>
            </svg>
          </button>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Organization:</span> American Education Company
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Links:</span>
            <a class="portfolio__card-link" href="https://volkov85.github.io/american-education/" target="blank">volkov85.github.io/american-education</a>
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">My role in the project:</span> Full cycle - from a prototype to a functioning website.
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Technologies and tools:</span> Photoshop, HTML5, CSS3, JS, PHP
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Description:</span> This site was developed for American Education. The site has sections about US universities, summer camps for children, teaching English. The site has a feedback form. There is support for the mobile version.
          </p>
        </div>
      </div>
    </div>
    <div class="portfolio__darker portfolio__darker--book">
      <div class="portfolio__card-inner">
        <div class="portfolio__card-images">
          <a href="img/portfolio_full_6.jpg" target="blank">
            <img src="img/portfolio_maxi_6_1.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_6.jpg" target="blank">
            <img src="img/portfolio_maxi_6_1.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_6.jpg" target="blank">
            <img src="img/portfolio_maxi_6_1.jpg" alt="Portfolio image" width="230" height="250">
          </a>
          <a href="img/portfolio_full_6.jpg" target="blank">
            <img src="img/portfolio_maxi_6_1.jpg" alt="Portfolio image" width="230" height="250">
          </a>
        </div>
        <div class="portfolio__card-descs">
          <button class="portfolio__button-close">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="23.2759" y="24.9999" width="32.9169" height="2.43829" transform="rotate(-135 23.2759 24.9999)" fill="#FFA04A"/>
              <rect y="23.2758" width="32.9169" height="2.43829" transform="rotate(-45 0 23.2758)" fill="#FFA04A"/>
            </svg>
          </button>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Organization:</span> Keksobooking educational project
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Links:</span>
            <a class="portfolio__card-link" href="https://volkov85.github.io/693011-keksobooking-20/" target="blank">volkov85.github.io/693011-keksobooking-20</a>
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">My role in the project:</span> JavaScript development
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Technologies and tools:</span> Vanilla JavaScript
          </p>
          <p class="portfolio__card-desc">
            <span class="portfolio__card-desc--title">Description:</span> Training project - service for placing and viewing ads "Keksobooking". The service provides users with the ability to post ads about their real estate or view already posted ads. The JavaScript code that implements different functionality of the service is split into corresponding independent modules (IIFEs are used). Sending and receiving data from the server is implemented using AJAX (interaction with the server without page reloading).
          </p>
        </div>
      </div>
    </div>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particlesJS.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
