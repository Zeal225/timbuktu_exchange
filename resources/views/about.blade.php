<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>About - QuickCash</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/about.css") }}">
    <link rel="stylesheet" href="{{ asset("css/header.css") }}">
    <link rel="stylesheet" href="{{ asset("css/footer.css") }}">
    <link rel="stylesheet" href="{{ asset("css/reset.css") }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:300,400,500,600,700|Montserrat:300,400,500,600,700|Muli:300,400,600,700&display=swap" rel="stylesheet">
</head>

<body>
<header id="header">
    <section id="container-logo">
        <div class="block-logo">
            <a href="/">
                <img class="img-logo-1" src="{{ asset("img/pimg/logo.png") }}" />
            </a>
        </div>
        <nav class="menu">
            <p id="menu-mobile" class="menu-mobile">menu</p>
            <img src="{{ asset("img/baseline-close-24px.svg") }}" alt="" id="fechar-menu" class="fechar-menu" />
            <ul class="menu-list">
                <a href="/about" class="menu-item" id="menu-item">
                    <li class="menu-item">Qui Sommes-Nous ?</li>
                </a>
                <a href="#container-products" class="menu-item" id="menu-item1">
                    <li class="menu-item">Nos Offres</li>
                </a>
                <a href="#Contacts" class="menu-item" id="menu-item2">
                    <li class="menu-item">Contacts</li>
                </a>
                {{--<ul class="menu-lang-mobile">
                    <a class="item-lang" href="">
                        <li class="ingles-en">EN</li>
                    </a>
                    <a class="item-lang" href="">
                        <li class="ingles-fr"> /FR</li>
                    </a>
                </ul>--}}
            </ul>
            {{--<ul class="box-lang">
                <a class="item-lang" href="">
                    <li class="ingles-en">EN</li>
                </a>
                <a class="item-lang" href="">
                    <li class="ingles-fr"> /FR</li>
                </a>
                </a>
            </ul>--}}
        </nav>
        <nav class="boxmenu-mobile">
            <a href="#" class="box-menu">MENU</a>
        </nav>
    </section>
</header>

<main id="main">
    <section id="about">
        <div class="wrapper-content">
            <div class="about-box-container">
                <h1 class="title-about">A propos de Timbuctu Exchange</h1>
                <div class="circle-two"></div>
                <div class="circle-one"></div>
                <div class="container-figures">
                    <div class="box-figure">
                        <img class="img-about" src="{{ asset("img/pimg/image1.png") }}" alt="">
                        <img class="img-about" src="{{ asset("img/pimg/image2.jpeg") }}" alt="">
                        <img class="img-about" src="{{ asset("img/pimg/image3.jpeg") }}" alt="">
                        <img class="img-about" src="{{ asset("img/pimg/image2.png") }}" alt="">
                    </div>
                    <div class="box-text">
                        <div class="box-text-about">

                            <p class="p-about" data-translatable>
                                Timbuctu Exchange est une compagnie Malienne de transfert d’argent, Spécialisée dans le paiement électronique. Elle a su développer une solide expertise dans les offres de produits et services favorisant l’inclusion financière des populations rurales et celles exerçant dans le secteur informel, en marge de la bancarisation.
                            </p>

                            <p class="p-about" data-translatable>
                                Depuis 2010, elle continue de renforcer ses liens avec les africains de la Diaspora, notamment la diaspora Malienne, dans la confiance et la proximité.
                            </p>

                            <p class="p-about" data-translatable>
                                <b>Notre Vision :</b> Être l’acteur principal dans le développement de l’Afrique à travers sa diaspora.
                            </p>

                            <p class="p-about" data-translatable>
                                <b>Notre Mission :</b> Fournir des solutions financières innovantes, accessibles et adaptées à toutes les couches sociales. Notamment celle en marge des systèmes financiers standards.
                            </p>

                            <p class="p-about" data-translatable>
                                <b>Notre Philosophie :</b> Nous assistons en Afrique à une révolution économique et technologique, avec les taux de croissance les plus élevés en PIB et dans le Mobile. Le moment est donc propice pour améliorer significativement le taux de l’inclusion financière, et adopter de nouvelles habitudes dans le cadre de la dématérialisation de la <monnaie class=""></monnaie>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="values">
        <div class="wrapper-values">
                <span class="span-values-principal ">
                  <h2 class="title-values-principal" data-translatable>Nos Valeurs</h2>
                </span>
            <div class="box-values-principal">
                <div class="container-values">
                    <figure class="seta-mobile">
                        <img src="{{ asset("img/noun_Arrow_2427329%20(1).svg") }}" onclick="plusDivs(1)">
                    </figure>
                    <div class="container-values-items values-right slide-box">
                        <img class="img-values" src="{{ asset("img/solidarity.svg") }}" alt="Solidarity">
                        <div class="values-items-texts">
                            <h2 class="title-values" data-translatable>Solidarité</h2>
                            <p class="p-values" data-translatable>
                                Parce qu’il s’agit de la plus belle des valeurs Africaines et qu’elle mérite d’être répandue.
                                A Timbuctu Exchange, nous sommes solidaires les uns des autres, ce qui fait de nous une vraie équipe famille.
                                Nous nous sentons aussi solidaires de chaque africain.
                                C’est pourquoi nous travaillons à offrir des services accessibles à tout point de vue.
                            </p>
                        </div>
                    </div>
                    <div class="container-values-items slide-box">
                        <img class="img-values img-values-attentiveness" src="{{ asset("img/attentiveness.svg") }}" alt="Attentiveness">
                        <div class="values-items-texts">
                            <h2 class="title-values" data-translatable>Ecoute</h2>
                            <p class="p-values" data-translatable>
                                Parce que l’écoute clientèle revêt une importance capitale pour nous,
                                chaque client trouvera chez Timbuctu Exchange une oreille attentive à ses préoccupations.
                            </p>
                        </div>
                    </div>
                    <div class="container-values-items values-right slide-box">
                        <img class="img-values" src="{{ asset("img/responsibility.svg") }}" alt="Responsibility">
                        <div class="values-items-texts">
                            <h2 class="title-values" data-translatable>Responsabilité</h2>
                            <p class="p-values" data-translatable>
                                Nous avons la pleine mesure de notre responsabilité vis-à-vis de nos clients et de nos partenaires.
                                C’est pourquoi au quotidien, toutes nos actions sont guidées par notre volonté de tenir nos engagements
                            </p>
                        </div>
                    </div>
                    <div class="container-values-items slide-box">
                        <img class="img-values" src="{{ asset("img/Willingness.svg") }}" alt="Willingness">
                        <div class="values-items-texts">
                            <h2 class="title-values" data-translatable>Volonté</h2>
                            <p class="p-values" data-translatable>
                                De faire toujours plus pour vous satisfaire.
                            </p>
                        </div>
                    </div>
                    <div class="container-values-items values-right slide-box">
                        <img class="img-values" src="{{ asset("img/innovation.svg") }}" alt="Innovation">
                        <div class="values-items-texts">
                            <h2 class="title-values" data-translatable>Innovation</h2>
                            <p class="p-values" data-translatable>
                                Nous sommes de façon permanente à la recherche de nouvelles techniques pour vous proposer des services révolutionnaires.
                            </p>
                        </div>
                    </div>
                    <div class="container-values-items slide-box">
                        <img class="img-values" src="{{ asset("img/reactivity.svg") }}" alt="Reactivity">
                        <div class="values-items-texts">
                            <h2 class="title-values" data-translatable>Réactivité</h2>
                            <p class="p-values" data-translatable>Pour répondre avec promptitude à toutes vos préoccupations.</p>
                        </div>
                    </div>
                    <figure class="seta-mobile">
                        <img src="{{ asset("img/noun_Arrow_2427329.svg") }}" onclick="plusDivs(-1)">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="container-our-board">
        <div class="wrapper-board">
                <span class="span-board">
          <h2 class="title-board" data-translatable>Notre Administration</h2>
        </span>
            <div class="our-board-content">
                <div class="box-board">
                    <div class="box-img-board">
                        <img class="img-board" src="{{ asset("img/pimg/diawara.jpg") }}" alt="CONSTANTIN SALAMEH">
                        <h2 class="subtitle-board" data-translatable>Fatoumata Diawara</h2>
                        <h3 class="p-board" data-translatable>Présidente </h3>
                    </div>
                    <div class="box-txt-board">
                        <p class="p-txt-board" data-translatable>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </p>
                    </div>
                </div>
                <div class="box-board">
                    <div class="box-img-board">
                        <img class="img-board" src="{{ asset("img/pimg/sissoko.jpg") }}" alt="NIRMALA REDDY">
                        <h2 class="subtitle-board" data-translatable>Hamadi Sissoko</h2>
                        <h3 class="p-board" data-translatable>Vice-Président </h3>
                    </div>
                    <div class="box-txt-board">
                        <p class="p-txt-board" data-translatable>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </div>
                </div>
                <div class="box-board">
                    <div class="box-img-board">
                        <img class="img-board" src="{{ asset("img/patricia.png") }}" alt="PATRICIA ZOUNDI YAO">
                        <h2 class="subtitle-board" data-translatable>SIRA KONE Epse Sissoko</h2>
                        <h3 class="p-board" data-translatable>Directrice Générale .</h3>
                    </div>
                    <div class="box-txt-board">
                        <p class="p-txt-board" data-translatable>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </p>
                    </div>
                </div>

                <div class="box-board">
                    <div class="box-img-board">
                        <img class="img-board" src="{{ asset("img/pimg/alhassane.jpg") }}" alt="PATRICIA ZOUNDI YAO">
                        <h2 class="subtitle-board" data-translatable>Alhassane Coulibaly </h2>
                        <h3 class="p-board" data-translatable>Business développement </h3>
                    </div>
                    <div class="box-txt-board">
                        <p class="p-txt-board" data-translatable>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<footer id="footer">
    <div class="footer-content">
        <div class="wrapper-footer">
            <div id="Contacts" class="box-grand-circle">
                <div class="grand-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="474.196" height="472.419" viewBox="0 0 474.196 472.419">
                        <g id="detalhe_footer_grande" transform="translate(-1770.804 -5448.162)">
                            <path id="Caminho_235" data-name="Caminho 235" d="M259.289,601.741a85.248,85.248,0,1,0,85.248,85.248A85.246,85.246,0,0,0,259.289,601.741Z" transform="translate(1900.464 5148.345)" fill="#ffa50099"/>
                            <path id="Caminho_236" data-name="Caminho 236" d="M208.941,740.3a67.488,67.488,0,1,0-67.488-67.488A67.491,67.491,0,0,0,208.941,740.3Z" transform="translate(1771.434 5162.523)" fill="#ffa50099"/>
                            <path id="Caminho_237" data-name="Caminho 237" d="M162.532,708.359A49.728,49.728,0,1,0,112.8,658.631,49.726,49.726,0,0,0,162.532,708.359Z" transform="translate(1658 5176.702)" fill="#ffa50099"/>
                            <path id="Caminho_238" data-name="Caminho 238" d="M245.11,705.924a67.49,67.49,0,1,0-67.488-67.488A67.491,67.491,0,0,0,245.11,705.924Z" transform="translate(1914.643 5026.402)" fill="#ffa50099"/>
                            <circle id="Elipse_28" data-name="Elipse 28" cx="53.281" cy="53.281" r="53.281" transform="translate(1923.451 5615.468) rotate(-4.065)" fill="#ffa50099"/>
                            <circle id="Elipse_29" data-name="Elipse 29" cx="35.52" cy="35.52" r="35.52" transform="translate(1779.782 5635.465) rotate(-9.217)" fill="#ffa50099"/>
                            <circle id="Elipse_30" data-name="Elipse 30" cx="49.729" cy="49.729" r="49.729" transform="translate(2111.799 5448.162)" fill="#ffa50099"/>
                            <path id="Caminho_239" data-name="Caminho 239" d="M183.418,614.771A35.522,35.522,0,1,0,147.9,579.246,35.524,35.524,0,0,0,183.418,614.771Z" transform="translate(1796.956 4918.642)" fill="#ffa50099"/>
                            <path id="Caminho_240" data-name="Caminho 240" d="M144.1,598.8a26.64,26.64,0,1,0-26.642-26.642A26.641,26.641,0,0,0,144.1,598.8Z" transform="translate(1676.431 4925.734)" fill="#ffa50099"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="container-footer">
                <div class="box-footer-center">
                    <div class="box-footer">
                        <div class="text-footer">
                            <figure>
                                <img style="width: 100px;" src="{{ asset("img/pimg/logo.png") }}" class="img-logo-footer" a href="../css/style.css"></a>
                            </figure>
                            <ul class="list-contact">
                                <li class="contact-item">
                                    <img src="{{ asset("img/baseline-location_on-24px.svg") }}" class="info-footer-img" alt="">
                                    <p class="p-info-footer">Niarela, Hamdallaye ACI 2000</p>
                                </li>
                                <li class="contact-item">
                                    <img src="{{ asset("img/baseline-phone-24px%20(1).svg") }}" class="info-footer-img" alt="">
                                    <p class="p-info-footer">Tel : (+225) 07 77 08 47 08 </p>
                                </li>
                                <li class="contact-item">
                                    <img src="{{ asset("img/baseline-email-24px.svg") }}" class="info-footer-img" alt="">
                                    <p class="p-info-footer">Email : contact@timbuktu-exchange.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="box-copyright-desktop">
                            <p class="copyright">Copyright © 2019 Timbuctu Exchange - All Rights Reserved </p>
                        </div>
                    </div>
                </div>
                <nav class="menu-secundario">
                    <ul class="list-menu-secundario">
                        <a href="">
                            <li class="item-menu-footer">Qui Sommes-Nous ?</li>
                        </a>
                        <a href="">
                            <li class="item-menu-footer">Nos Produits</li>
                        </a>
                        <a href="#news" class="menu-footer-news">
                            <li class="item-menu-footer menu-footer-news">Actualités</li>
                        </a>
                        <a href="#Contacts">
                            <li class="item-menu-footer">Contact</li>
                        </a>
                    </ul>
                    <img class="img-circle-whith" src="img/detalhe_footer_pequeno.svg" alt="">
                </nav>
                <div class="box-copyright-mobile">
                    <p class="copyright tex-wite">Copyright © 2019 Timbuctu Exchange - All Rights Reserved </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset("js/main.js") }}"></script>
<script>
    let slideIndex = 1;
    let mediaSize = window.matchMedia("(max-width: 768px)")

    console.log('mediaSize', mediaSize.matches)

    showDivs(slideIndex);

    function plusDivs(number) {
        showDivs(slideIndex += number);
    }

    function showDivs(number) {
        let i;
        let x = document.getElementsByClassName("slide-box");
        if (number > x.length) {
            slideIndex = 1
        }
        if (number < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            if (mediaSize.matches) {
                x[i].style.display = "none";
            }
        }

        x[slideIndex - 1].style.display = "flex";
    }

    window.onload = function() {
        document.body.addEventListener('resize', function() {
            if (mediaSize.matches) {
                showDivs(slideIndex);
            }
        })
    }
</script>
</body>

</html>
