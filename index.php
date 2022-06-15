<?php 

    include('functions/age.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Dªny.</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <div class="nav">
        <a href="" class="logo">
            <span>Dªny.</span>
        </a>
        <ul class="nav-items">
            <a href="" class="nav-item" id="home-icon">
                <li>Accueil</li>
            </a>
            <a href="#about-me" class="nav-item" id="about-icon">
                <li>À propos</li>
            </a>
            <a href="#portfolio" class="nav-item" id="portfolio-icon">
                <li>Portfolio</li>
            </a>
            <a href="#contact" class="nav-item" id="contact-icon">
                <li>Contact</li>
            </a>
        </ul>
        <div class="menu-mobile-button"></div>
    </div>
    <div class="home-screen">
        <div class="left">
            <h1 id="tip-title">Mes domaines de prédilection :
                <div id="tip-text">Développement web</div>
            </h1>
        </div>
        <div class="right">
            <div class="character"></div>
            <div class="back__character"></div>
        </div>
        <div class="mouse__down"></div>
    </div>
    <div class="top__section">
        <svg viewBox="0 0 1440 185" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M241.271 52.853C-132.495 -66.0662 -12.732 52.853 -12.732 52.853V185H1453.26V52.853C1453.26 52.853 1571.91 -62.6451 1198.24 52.853C824.564 168.351 615.038 171.772 241.271 52.853Z" fill="#01161E"/>
        </svg>
    </div>
    <section id="about-me">
        <div class="title">
            <div class="round-title"></div>
            <span><span id="grade">1</span> À propos de moi</span>
            <div class="points__title"></div>
        </div>
        <div class="content-about-me">
            Je m'appelle Dany, j'ai <?= get_age('2003') ?> ans et je vie actuellement en France, en région <b>Centre-Val de Loire</b>. Je suis actuellement en <b>Licence d'Histoire</b> à l'Université de Tours dans l'Indre-et-Loire. Mon passe temps, le <b>développement web, le web design et la recherche d'un interface parfait pour ses utilisateurs</b>. Donc comme vous avez pu le comprendre, le développement web, pour moi, c'est une <b>pation</b> avant tout mais aussi une <b>ressource économique</b> chère à mes yeux tant le challenge des missions que j'ai pu relever ont été interressants.
            <br>
            <br>
            Fière de cette expérience acquise au fil du temps, je suis près à vous accompagner dans vos projets les plus embitieux et les plus complexes. Je vous invite à me contacter pour toute demande de devis ou de renseignements.
        </div>
        <div class="subtitle">
            <div class="round-title"></div>
            <span>Mes réseau sociaux :</span>
        </div>
        <div class="socials">
            <div class="social-network twitter" onclick="window.open('https:\/\/twitter.com/dany_frg')">
                <div class="logo">
                    <svg width="25" height="21" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.4302 5.06025C22.446 5.28232 22.446 5.50444 22.446 5.72651C22.446 12.5 17.2906 20.3045 7.86802 20.3045C4.96509 20.3045 2.26841 19.4638 0 18.0044C0.412451 18.052 0.808984 18.0679 1.2373 18.0679C3.63257 18.0679 5.83755 17.2589 7.59834 15.8788C5.3458 15.8312 3.45811 14.356 2.80771 12.3255C3.125 12.373 3.44224 12.4048 3.77539 12.4048C4.2354 12.4048 4.69546 12.3413 5.12373 12.2303C2.77603 11.7544 1.01519 9.69224 1.01519 7.20176V7.13833C1.69727 7.51904 2.49048 7.75698 3.33115 7.78867C1.95107 6.8686 1.04692 5.29819 1.04692 3.52153C1.04692 2.56978 1.30068 1.69731 1.74487 0.935889C4.26709 4.04502 8.05835 6.07544 12.3096 6.29756C12.2303 5.91685 12.1827 5.52031 12.1827 5.12373C12.1827 2.3001 14.4669 0 17.3064 0C18.7816 0 20.1141 0.618652 21.05 1.61802C22.208 1.39595 23.3184 0.967627 24.302 0.380713C23.9212 1.57046 23.1122 2.56982 22.0494 3.2043C23.0805 3.09331 24.0799 2.80771 24.9999 2.41118C24.302 3.42637 23.4295 4.33052 22.4302 5.06025Z" fill="#EFF6E0"/>
                    </svg>                        
                </div>
                <div class="text">
                    @dany_frg
                </div>
            </div>

            <div class="social-network discord" onclick="window.open('https:\/\/dsc.bio/dany_')">
                <div class="logo">
                    <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.1636 1.575C19.5701 0.845999 17.8614 0.308906 16.0749 0.00129041C16.0424 -0.00464648 16.0099 0.0101901 15.9931 0.039864C15.7733 0.429575 15.5299 0.937984 15.3595 1.33759C13.4379 1.05075 11.5262 1.05075 9.64408 1.33759C9.47359 0.929101 9.22134 0.429575 9.0006 0.039864C8.98384 0.0111802 8.95134 -0.00365641 8.9188 0.00129041C7.13324 0.307923 5.42454 0.845016 3.83014 1.575C3.81634 1.58093 3.80451 1.59083 3.79666 1.60368C0.555616 6.43162 -0.33224 11.1409 0.103313 15.7918C0.105283 15.8145 0.118094 15.8363 0.135831 15.8501C2.27418 17.4159 4.34553 18.3665 6.37842 18.9965C6.41095 19.0064 6.44542 18.9946 6.46613 18.9679C6.94701 18.3131 7.37567 17.6227 7.7432 16.8966C7.76489 16.8541 7.74419 16.8036 7.69986 16.7868C7.01993 16.5297 6.3725 16.2161 5.74972 15.86C5.70046 15.8313 5.69651 15.7611 5.74183 15.7275C5.87289 15.6295 6.00398 15.5277 6.12912 15.4248C6.15176 15.406 6.18331 15.402 6.20993 15.4139C10.3013 17.2765 14.7308 17.2765 18.7739 15.4139C18.8005 15.4011 18.8321 15.405 18.8557 15.4238C18.9809 15.5267 19.1119 15.6295 19.244 15.7275C19.2893 15.7611 19.2863 15.8313 19.2371 15.86C18.6143 16.223 17.9669 16.5297 17.2859 16.7858C17.2416 16.8027 17.2219 16.8541 17.2436 16.8966C17.619 17.6216 18.0477 18.3121 18.5197 18.9669C18.5394 18.9946 18.5749 19.0064 18.6074 18.9965C20.6501 18.3665 22.7215 17.4159 24.8598 15.8501C24.8786 15.8363 24.8904 15.8155 24.8924 15.7928C25.4136 10.4158 24.0193 5.74517 21.1961 1.60466C21.1892 1.59083 21.1774 1.58093 21.1636 1.575ZM8.35419 12.9599C7.1224 12.9599 6.10743 11.8323 6.10743 10.4475C6.10743 9.0627 7.10271 7.93511 8.35419 7.93511C9.61549 7.93511 10.6206 9.0726 10.6009 10.4475C10.6009 11.8323 9.60563 12.9599 8.35419 12.9599ZM16.6612 12.9599C15.4294 12.9599 14.4145 11.8323 14.4145 10.4475C14.4145 9.0627 15.4097 7.93511 16.6612 7.93511C17.9225 7.93511 18.9276 9.0726 18.908 10.4475C18.908 11.8323 17.9225 12.9599 16.6612 12.9599Z" fill="white"/>
                    </svg>                                             
                </div>
                <div class="text">
                    Dªny#4418
                </div>
            </div>
        </div>
    </section>
    <div class="bottom__section">
        <svg width="1440" height="52" viewBox="0 0 1440 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-6.5 52L1434 2L1440.5 0.5H-6.5V52Z" fill="#01161E"/>
        </svg>            
    </div>
    <section id="portfolio">
        <div class="title">
            <div class="round-title"></div>
            <span><span id="grade">2</span> Mon portfolio</span>
            <div class="points__title"></div>
        </div>

        <!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
        <div class="swiper-slide">
            <div class="img" style="background-image:url('img/banner_card.png');"></div>
            <div class="title">Titre</div>
            <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam corporis dignissimos eveniet nisi delectus ut, et, nihil nam eum hic culpa aliquam soluta quia, ab quibusdam obcaecati. Fugiat, hic cumque?</div>
            <div class="more">En savoir plus ...</div>
        </div>
        <div class="swiper-slide">
            <div class="img" style="background-image:url('img/banner_card.png');"></div>
            <div class="title">Titre</div>
            <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam corporis dignissimos eveniet nisi delectus ut, et, nihil nam eum hic culpa aliquam soluta quia, ab quibusdam obcaecati. Fugiat, hic cumque?</div>
            <div class="more">En savoir plus ...</div>
        </div>
        <div class="swiper-slide">
            <div class="img" style="background-image:url('img/banner_card.png');"></div>
            <div class="title">Titre</div>
            <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam corporis dignissimos eveniet nisi delectus ut, et, nihil nam eum hic culpa aliquam soluta quia, ab quibusdam obcaecati. Fugiat, hic cumque?</div>
            <div class="more">En savoir plus ...</div>
        </div>
        <div class="swiper-slide">
            <div class="img" style="background-image:url('img/banner_card.png');"></div>
            <div class="title">Titre</div>
            <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam corporis dignissimos eveniet nisi delectus ut, et, nihil nam eum hic culpa aliquam soluta quia, ab quibusdam obcaecati. Fugiat, hic cumque?</div>
            <div class="more">En savoir plus ...</div>
        </div>
        <div class="swiper-slide">
            <div class="img" style="background-image:url('img/banner_card.png');"></div>
            <div class="title">Titre</div>
            <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam corporis dignissimos eveniet nisi delectus ut, et, nihil nam eum hic culpa aliquam soluta quia, ab quibusdam obcaecati. Fugiat, hic cumque?</div>
            <div class="more">En savoir plus ...</div>
        </div>
        <div class="swiper-slide">
            <div class="img" style="background-image:url('img/banner_card.png');"></div>
            <div class="title">Titre</div>
            <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam corporis dignissimos eveniet nisi delectus ut, et, nihil nam eum hic culpa aliquam soluta quia, ab quibusdam obcaecati. Fugiat, hic cumque?</div>
            <div class="more">En savoir plus ...</div>
        </div>
        <div class="swiper-slide">
            <div class="img" style="background-image:url('img/banner_card.png');"></div>
            <div class="title">Titre</div>
            <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam corporis dignissimos eveniet nisi delectus ut, et, nihil nam eum hic culpa aliquam soluta quia, ab quibusdam obcaecati. Fugiat, hic cumque?</div>
            <div class="more">En savoir plus ...</div>
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
    </section>
    <div class="top__section contact__topsection">
        <svg viewBox="0 0 1440 182" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-13.1006 0V128.848C-13.1006 128.848 -131.753 244.346 241.921 128.848C615.595 13.3501 825.122 9.92899 1198.89 128.848C1572.65 247.767 1452.89 128.848 1452.89 128.848V0H-13.1006Z" fill="#000B0F"/>
        </svg>            
    </div>
    <section id="contact">
        <div class="title">
            <div class="round-title"></div>
            <span><span id="grade">3</span> Contact</span>
            <div class="points__title"></div>
        </div>

        <form action="functions/mailer_Contact.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" required>
                <label for="name">Nom</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" required>
                <label for="email">Adresse mail</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="title_message" name="title_message" required>
                <label for="title_message">Titre de votre message</label>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </section>

    <footer>
        <div class="logo">Dany.
            <div class="underline"></div>
        </div>
        <div class="copy">Tous droits réservés — Fait avec le <div class="heart"></div> par Dªny</div>
    </footer>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="https://unpkg.com/jquery@3/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.6/dist/js/splide.min.js" integrity="sha256-XZpu4rL0Lni1cA4tXuP+FEodi6B7ZcoIV6/y6uA2fQY=" crossorigin="anonymous"></script>
    <script>
        if (CSS && 'paintWorklet' in CSS) CSS.paintWorklet.addModule('https://unpkg.com/smooth-corners@1/lib/paint.js')

        var app = document.getElementById('tip-text');

        var typewriter = new Typewriter(app, {
            loop: true
        });

        typewriter.typeString('Développement web')
        .pauseFor(2500)
        .deleteAll()
        .typeString('Web design')
        .pauseFor(2500)
        .deleteAll()
        .typeString('UX/UI design')
        .pauseFor(2500)
        .start();

        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: false,
            slidesPerView: 2,
            spaceBetween: 20,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },

            breakpoints: {
                620: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 75,
                },
                1920: {
                    slidesPerView: 6,
                    spaceBetween: 75,
                },
            },
        });

        $('.menu-mobile-button').click(function(e) {
            e.preventDefault();
            $('.nav-items').toggleClass('is-open');
            $('.menu-mobile-button').toggleClass('is-open');
            $('.nav .logo').toggleClass('is-open');
        });
    </script>
</body>
</html>