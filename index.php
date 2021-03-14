<?php

    $age = date("Y") - 2003;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Dany.01000110 - Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="#" class="logo">Dany.</a>
        <ul>
          <li><a href="#banner">Accueil</a></li>
          <li><a href="#about">À propos</a></li>
          <li><a href="#projects">Mes projets</a></li>
          <li><a href="#">Compétences</a></li>
          <li><a href="#">Me contacter</a></li>
        </ul>
    </header>
    
    <section id="banner" class="banner">
        <h1>Dany.01000110</h1>
        <h2>Développeur web ⠂Graphiste</h2>
    </section>

    <section id="about">
        <div class="title-section">
            <div class="logo-title-info"></div>
            <h1>À propos</h1>
        </div>

        <div class="content-section-info">
            <div class="photo-section">
                <img src="img/photo_of_me.jpg" alt="Ma photo" title="Ma photo">
            </div>
            <div class="txt">
                <p>Salut ! Je suis Dany, j'ai <?= $age ?> ans, je suis Développeur Web front-end et graphiste "Flat Design" depuis maintenant <?= date('Y') - 2019 ?> ans je compte vouloir en vivre quand j'aurai fini mes études concernant l'une de ces professions !</p>
                <p>Travaillant sur divers projets web (open-source en majorité), je suis ouvert à toute discussion sur d'éventuel projet. Pour ce qui est du graphisme, je travaille essentiellement pour des serveurs Discord et pour moi-même en faisant des designs de t-shirt sur <a href="https://www.spreadshirt.fr/" target="_blank">SpreadShirt <i class="fas fa-external-link-alt fa-xs"></i></a>.</p>
                <p>Je peux également vous conseiller et vous aider à débuter dans le développement web (HTML, CSS et PHP uniquement) ainsi que vous aider à trouver vos logiciels pour travailler dans le graphisme que ce soit en amateur ou en professionnel.</p>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="title-section title-projects">
            <div class="logo-title-projects"></div>
            <h1>Mes projets</h1>
        </div>
        <div class="content-section-projects">
            <div class="wrapper">
                <div class="content-wrapper one-content-grid">
                    <div class="title-content-wrapper"><i class="fas fa-book"></i> Portfolio</div>
                    <div class="language"><i class="fas fa-code"></i> HTML - CSS - PHP</div>
                    <div class="description-content-wrapper">Mon portfolio, présentant tout ce qui a à savoir sur moi.</div>
                    <div class="links links-one">
                        <ul>
                            <li class="github-section-projects"><a href="https://github.com/Dany01000110/portfolio" target="_blank"><i class="fab fa-github"></i> Github</a></li>
                            <li class="stagazers-section-projects"><i class="fas fa-star"></i> 0 étoiles</li>
                            <li class="forks-section-projects"><i class="fas fa-code-branch"></i> 0 forks</li>
                        </ul>
                    </div>
                </div>
                <div class="content-wrapper two-content-grid">
                    <div class="title-content-wrapper"><i class="fas fa-book"></i> Geopol-RP</div>
                    <div class="language"><i class="fas fa-code"></i> HTML - CSS - PHP</div>
                    <div class="description-content-wrapper">Site complet pour un serveur Discord RP géopolitique.</div>
                    <div class="links links-two">
                        <ul>
                            <li class="github-section-projects"><a href="https://github.com/Dany01000110/portfolio" target="_blank"><i class="fab fa-github"></i> Github</a></li>
                            <li class="stagazers-section-projects"><i class="fas fa-star"></i> 0 étoiles</li>
                            <li class="forks-section-projects"><i class="fas fa-code-branch"></i> 0 forks</li>
                        </ul>
                    </div>
                </div>
                <div class="content-wrapper three-content-grid">
                    <div class="title-content-wrapper"><i class="fas fa-book"></i> Logo projet Discord</div>
                    <div class="language"><i class="fas fa-palette"></i></i> Graphisme</div>
                    <div class="description-content-wrapper">Logo d'un futur projet Discord</div>
                    <div class="content-img"></div>
                    <div class="links">
                        <ul>
                            <li class="discord-section-projects discord-clipboard" data-clipboard-text="Dany01000110#3355" data-title="Cliquer pour copier"><i class="fab fa-discord"></i> Dany01000110#3355</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
          var header = document.querySelector("header");
          header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
    <script type="text/javascript">
        var clipboard = new ClipboardJS('.discord-clipboard');
        var ele1 = document.getElementsByClassName('discord-clipboard');

        clipboard.on('success', function(e) {
            
        });

        clipboard.on('error', function(e) {
            
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
</body>
</html>