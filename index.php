<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--==================== UNICONS ====================-->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="" />

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title><?php $title = "Danila Belyi"; echo $title ?></title>
  </head>
  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">Danila</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list grid">
            <li class="nav__item">
              <!-- <a href="#home" class="nav__link active-link"> -->
              <a href="<?php echo '#home'; ?>" class="<?php echo 'nav__link active-link'; ?>">
                <i class="uil uil-estate nav__icon"></i> Home
              </a>
            </li>
            <li class="nav__item">
              <!-- <a href="#about" class="nav__link"> -->
              <a href="<?php echo '#about'; ?>" class="<?php echo 'nav__link'; ?>">
                <i class="uil uil-user nav__icon"></i> About
              </a>
            </li>
            <li class="nav__item">
              <!-- <a href="#skills" class="nav__link"> -->
              <a href="<?php echo '#skills'; ?>" class="<?php echo 'nav__link'; ?>">
                <i class="uil uil-file-alt nav__icon"></i> Skills
              </a>
            </li>
            <!-- <li class="nav__item">
                            <a href="#services" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i> Services
                            </a>
                        </li> -->
            <!-- <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i> Portfolio
                            </a>
                        </li> -->
            <li class="nav__item">
              <!-- <a href="#contact" class="nav__link"> -->
              <a href="<?php echo '#contact'; ?>" class="<?php echo 'nav__link'; ?>">
                <i class="uil uil-message nav__icon"></i> Contact me
              </a>
            </li>
          </ul>
          <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <div class="nav__btns">
          <!-- Theme change button -->
          <i class="uil uil-moon change-theme" id="theme-button"></i>

          <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-apps"></i>
          </div>
        </div>
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__content grid">
            <div class="home__social">
              <a
                href="https://t.me/smthinthwewayy"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-telegram-alt"></i>
              </a>

              <a
                href="https://hh.ru/resume/d5dbab25ff092fcfe00039ed1f426b57567765"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-hospital-square-sign"></i>
              </a>

              <a
                href="https://github.com/"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-github-alt"></i>
              </a>
            </div>

            <div class="home__img">
              <svg
                class="home__blob"
                viewBox="0 0 200 187"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <mask id="mask0" mask-type="alpha">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                </mask>
                <g mask="url(#mask0)">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                  <image
                    class="home__blob-img"
                    x="-75"
                    xlink:href="assets/img/perfil.png"
                  />
                </g>
              </svg>
            </div>

            <div class="home__data">
              <h1 class="home__title">Hi, I'am Danila</h1>
              <h3 class="home__subtitle">IOS developer</h3>
              <p class="home__description">
                High level experience in IOS development knowledge, producing
                quality work.
              </p>
              <a href="#contact" class="button button--flex">
                Contact Me <i class="uil uil-message button__icon"></i>
              </a>
            </div>
          </div>

          <div class="home__scroll">
            <a href="#about" class="home__scroll-button button--flex">
              <i class="uil uil-mouse-alt home__scroll-mouse"></i>
              <span class="home__scroll-name">Scroll down</span>
              <i class="uil uil-arrow-down home__scroll-arrow"></i>
            </a>
          </div>
        </div>
      </section>

      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <h2 class="section__title">About Me</h2>
        <span class="section__subtitle">My introduction</span>

        <div class="about__container container grid">
          <img src="assets/img/about2.png" alt="" class="about__img" />

          <div class="about__data">
            <p class="about__description">
              Well-versed with Swift, Objective-C, and most of the Apple
              frameworks.
            </p>

            <div class="about__info">
              <div>
                <span class="about__info-title">08+</span>
                <span class="about__info-name"
                  >Years <br />
                  experience</span
                >
              </div>

              <div>
                <span class="about__info-title">20+</span>
                <span class="about__info-name"
                  >Completed <br />
                  project</span
                >
              </div>

              <div>
                <span class="about__info-title">05+</span>
                <span class="about__info-name"
                  >Companies <br />
                  worked</span
                >
              </div>
            </div>

            <div class="about__buttons">
              <a
                download=""
                href="assets/pdf/Danila-Cv.pdf"
                class="button button--flex"
              >
                Download CV<i class="uil uil-download-alt buttom__icon"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!--==================== SKILLS ====================-->
      <section class="skills section" id="skills">
        <h2 class="section__title">Skills</h2>
        <span class="section__subtitle">My technical level</span>

        <div class="skills__container container grid">
          <div>
            <!--==================== SKILLS 1 ====================-->
            <div class="skills__content skills__open">
              <div class="skills__header">
                <i class="uil uil-brackets-curly skills__icon"></i>

                <div>
                  <h1 class="skills__title">IOS developer</h1>
                  <span class="skills__subtitle">More then 4 years</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Swift</h3>
                    <span class="skills__number">90%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__swift"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">IOS SDK</h3>
                    <span class="skills__number">75%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__ios"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Objective-C</h3>
                    <span class="skills__number">60%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__objective-c"></span>
                  </div>
                </div>
              </div>
            </div>

            <!--==================== SKILLS 2 ====================-->
            <div class="skills__content skills__close">
              <div class="skills__header">
                <i class="uil uil-brackets-curly skills__icon"></i>

                <div>
                  <h1 class="skills__title">Backend developer</h1>
                  <span class="skills__subtitle">More then 2 years</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">PHP</h3>
                    <span class="skills__number">80%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__php"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">C/C++</h3>
                    <span class="skills__number">75%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__cpp"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">SQL</h3>
                    <span class="skills__number">65%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__sql"></span>
                  </div>
                </div>
              </div>
            </div>

            <!--==================== SKILLS 3 ====================-->
            <div class="skills__content skills__close">
              <div class="skills__header">
                <i class="uil uil-brackets-curly skills__icon"></i>

                <div>
                  <h1 class="skills__title">Frontend developer</h1>
                  <span class="skills__subtitle">More then 1 years</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">HTML</h3>
                    <span class="skills__number">90%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__html"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">CSS</h3>
                    <span class="skills__number">80%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__css"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">JavaScript</h3>
                    <span class="skills__number">60%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__js"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== QUALIFICATION ====================-->
      <section class="qualification section" id="qualification">
        <h2 class="section__title">Qualification</h2>
        <span class="section__subtitle">My personal journey</span>

        <div class="qualification__container container">
          <div class="qualification__tabs">
            <div
              class="qualification__button button--flex qualification__active"
              data-target="#education"
            >
              <i class="uil uil-graduation-cap qualification__icon"></i>
              Education
            </div>

            <div class="qualification__button button--flex" data-target="#work">
              <i class="uil uil-briefcase-alt qualification__icon"></i>
              Work
            </div>
          </div>

          <div class="qualification__sections">
            <!--==================== QUALIFICATION CONTENT 1 ====================-->
            <div
              class="qualification__content qualification__active"
              data-content
              id="education"
            >
              <!--==================== QUALIFICATION 1 ====================-->
              <div class="qualification__data">
                <div>
                  <h3 class="qualification__title">Computer Enginneer</h3>
                  <span class="qualification__subtitle"
                    >Moscow Polytechnic University</span
                  >
                  <div class="qualification__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2021 - 2025
                  </div>
                </div>

                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
              </div>

              <!--==================== QUALIFICATION 2 ====================-->
              <div class="qualification__data">
                <div></div>

                <div>
                  <span class="qualification__rounder"></span>
                  <!-- <span class="qualification__line"></span> -->
                </div>

                <div>
                  <h3 class="qualification__title">IOS developer</h3>
                  <span class="qualification__subtitle"
                    >School 21 in Moscow
                  </span>
                  <div class="qualification__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2021 - 2023
                  </div>
                </div>
              </div>
            </div>

            <!--==================== QUALIFICATION CONTENT 2 ====================-->
            <div class="qualification__content" data-content id="work">
              <!--==================== QUALIFICATION 1 ====================-->
              <div class="qualification__data">
                <div>
                  <h3 class="qualification__title">Tutor/Coach</h3>
                  <span class="qualification__subtitle"
                    >Shkolkovo - Moscow</span
                  >
                  <div class="qualification__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2021 - 2022
                  </div>
                </div>

                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== SERVICES ====================-->
      <!-- <section class="services section" id="services"> -->

      <!-- </section> -->

      <!--==================== PORTFOLIO ====================-->
      <!-- <section class="portfolio section" id="portfolio"> -->

      <!-- </section> -->

      <!--==================== PROJECT IN MIND ====================-->
      <!-- <section class="project section"> -->

      <!-- </section> -->

      <!--==================== TESTIMONIAL ====================-->
      <!-- <section class="testimonial section"> -->

      <!-- </section> -->

      <!--==================== CONTACT ME ====================-->
      <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">Get in touch</span>

        <div class="contact__container container grid">
          <div>
            <div class="contact__information">
              <i class="uil uil-phone contact__icon"></i>

              <div>
                <h2 class="contact__title">Call Me</h2>
                <span class="contact__subtitle">999-777-666</span>
              </div>
            </div>

            <div class="contact__information">
              <i class="uil uil-envelope contact__icon"></i>

              <div>
                <h2 class="contact__title">Email</h2>
                <span class="contact__subtitle">danila@email.com</span>
              </div>
            </div>

            <div class="contact__information">
              <i class="uil uil-map-marker contact__icon"></i>

              <div>
                <h2 class="contact__title">Location</h2>
                <span class="contact__subtitle"
                  >Moscow, Malaya Semyonovskaya, 12</span
                >
              </div>
            </div>
          </div>

          <form action="" class="contact__form grid">
            <div class="contact__inputs grid">
              <div class="contact__content">
                <label for="" class="contact__label">Name</label>
                <input type="text" class="contact__input" />
              </div>

              <div class="contact__content">
                <label for="" class="contact__label">Email</label>
                <input type="email" class="contact__input" />
              </div>
            </div>

            <div class="contact__content">
              <label for="" class="contact__label">Message</label>
              <textarea
                name=""
                id=""
                cols="0"
                rows="7"
                class="contact__input"
              ></textarea>
            </div>

            <div>
              <a href="#" class="button button--flex">
                Send Message
                <i class="uil uil-message button__icon"></i>
              </a>
            </div>
          </form>
        </div>
      </section>

      <section class="photos section">
        <?php
          $s = date('s');
          $os = $s % 2;

          if( $os === 0 )
            $name='assets/img/perfil.png';
          else
            $name='assets/img/about2.png';

          echo '<p class="photo__p"><img src="' . $name . '" width="150" alt="Меняющаяся фотография"></p>';
        ?>
      </section>

      <section class="hobbies__list section">
        <ul class="hobbies__ul">
          <?php
            $hobbies = array('programming', 'basketball', 'skateboard');

            for ($i = 0; $i < count($hobbies); $i++) {
              echo '<li>' . $hobbies[$i] . ' </li>';
            }
          ?>
        </ul>
      </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__bg">
        <div class="footer__container container grid">
          <div>
            <h1 class="footer__title">Danila</h1>
            <span class="footer__subtitle">IOS developer</span>
          </div>

          <ul class="footer__links">
            <li>
              <a href="#skills" class="footer__link">Skills</a>
            </li>

            <li>
              <a href="#qualification" class="footer__link">Qualification</a>
            </li>

            <li>
              <a href="#contact" class="footer__link">Contact me</a>
            </li>
          </ul>

          <div class="footer__socials">
            <a
              href="https://t.me/smthinthwewayy"
              target="_blank"
              class="footer__social"
            >
              <i class="uil uil-telegram-alt"></i>
            </a>

            <a
              href="https://www.instagram.com/smthinthewayyy/"
              target="_blank"
              class="footer__social"
            >
              <i class="uil uil-instagram"></i>
            </a>

            <a
              href="https://vk.com/smthinthewayyy"
              target="_blank"
              class="footer__social"
            >
              <i class="uil uil-vk"></i>
            </a>
          </div>
        </div>
        image.png
        <p class="footer__copy">&#169; Danila Belyi. All right reserved</p>

        <p class="footer__formed">
          <?php 
          echo "Formed " . date("Y-m-d") . " at " . date("H:i:s");
          ?>
        </p>
      </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src=""></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
