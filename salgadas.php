<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Bella Pizzeria</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/demos/favicon/pizza.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/demos/favicon/pizza.ico">


    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLora:400,500,700&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demos/demo-restaurant.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-restaurant.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

</head>
<?php

//salgada
$calabresa = array(
    "sabor" => "Calabresa",
    "descricao" => "mussarela, linguiça calabresa e cebola",
);

$coracao = array(
    "sabor" => "Coração",
    "descricao" => "",
);

$strogonoff = array(
    "sabor" => "Strogonoff",
    "descricao" => "mussarela, champignon, strogonoff de frango e batata palha",
);

$quatroQueijos = array(
    "sabor" => "4 queijos",
    "descricao" => "mussarela, provolone, parmesão e catupiry",
);

$portuguesa = array(
    "sabor" => "Portuguesa",
    "descricao" => "mussarela, ovos, palmito, pimentão, ervilha, presunto e cebola",
);

$marguerita = array(
    "sabor" => "Marguerita",
    "descricao" => "mussarela, rodelas de tomate e manjericão",
);

$lombo = array(
    "sabor" => "Lombo Canadense",
    "descricao" => "mussarela, lombo, champignon, palmito e catupiry",
);

$atum = array(
    "sabor" => "Atum",
    "descricao" => "mussarela, atum e cebola e orégano",
);

$siciliana = array(
    "sabor" => "Siciliana",
    "descricao" => "mussarela, bacon e champignon ao molho rose",
);

$gorgonzola = array(
    "sabor" => "Gorgonzola",
    "descricao" => "gorgonzola, tomate, orégano e azeitonas",
);

$bacon = array(
    "sabor" => "Bacon",
    "descricao" => "mussarela coberta com bacon e orégano",
);

$frangoCatupiry = array(
    "sabor" => "Frango com Catupiry",
    "descricao" => "molho de tomate, mussarela, frango e catupiry",
);

$havaiana = array(
    "sabor" => "Havaiana",
    "descricao" => "mussarela, lombo e abacaxi",
);

$pepperoni = array(
    "sabor" => "Pepperoni ",
    "descricao" => "mussarela, pepperoni e cebola",
);

$alhoOleo = array(
    "sabor" => "Alho e óleo",
    "descricao" => "mussarela, alho e queijo parmesão",
);

$bauru = array(
    "sabor" => "Bauru",
    "descricao" => "presunto, mussarela, tomate, orégano e azeitonas",
);

?>

<body>
    <div class="body">
        <?php include 'cabecalho.php'; ?>
        <div role="main" class="main">

            <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="img/demos/restaurant/backgrounds/fundo-salgada.jpg">
                <div class="container pt-3 pb-5 mb-5">
                    <div class="row mb-3">
                        <div class="col">
                            <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                                <li><a href="demo-restaurant.html" class="text-decoration-none opacity-hover-8">Home</a></li>
                                <li class="active text-color-primary">Pizzas Salgadas</li>
                            </ul>
                            <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Pizzas Salgadas</h1>
                        </div>
                    </div>
                </div>
                <a href="#menu" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-dark text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
                    <i class="icons icon-arrow-down font-weight-bold"></i>
                </a>
                <div class="shape-divider shape-divider-bottom shape-divider-reverse-y" style="height: 116px;">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 116" preserveAspectRatio="xMinYMin">
                        <path fill="#FFF" d="M453,92c11.7-4.87,28.46-11.43,49-18c42.29-13.52,76.36-19.33,115-25c51.58-7.57,100.28-14.72,171-20
								c24.87-1.86,82.88-5.76,158-6c69.99-0.23,122.54,2.82,159,5c51.18,3.06,95.17,5.69,155,14c71.5,9.94,115.42,21.02,127,24
								c33.7,8.68,61.62,17.79,82,25C1130.33,91.33,791.67,91.67,453,92z" />
                        <rect y="90" fill="#FFF" width="1920" height="26" />
                    </svg>
                </div>
            </section>

            <div id="menu" class="container py-4 my-5">
                <div class="row justify-content-center justify-content-lg-start">
                    <div class="col-md-10 col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850">
                        <img src="img/demos/restaurant/menu/calabresa.jpg" class="img-fluid box-shadow-4" alt="Starters Menu Background Image" />
                    </div>
                </div>
                <div class="row justify-content-center justify-content-lg-start custom-negative-margin-top-1">
                    <div class="col-md-10 col-lg-7 ms-lg-auto appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="500">
                        <div class="card box-shadow-4 border-0 rounded-0">
                            <div class="card-body p-5">
                                <!-- <h4 class="text-color-dark font-weight-bold positive-ls-3 mb-3">APPETIZERS</h4> -->
                                <hr class="custom-divider-size-1 bg-color-grey-scale-2 mt-2 mb-4">

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $calabresa['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>16
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $calabresa['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $strogonoff['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>10
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $strogonoff['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $quatroQueijos['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>8.50
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $quatroQueijos['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $portuguesa['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>16
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $portuguesa['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $marguerita['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>10
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $marguerita['descricao'] ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center justify-content-lg-start pt-4 mt-5">
                    <div class="col-md-10 col-lg-6 ms-lg-auto appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="550">
                        <img src="img/demos/restaurant/menu/portuguesa.jpg" class="img-fluid box-shadow-4" alt="Mains Menu Background Image" />
                    </div>
                </div>
                <div class="row justify-content-center justify-content-lg-start custom-negative-margin-top-1 pb-4 mb-5">
                    <div class="col-md-10 col-lg-7 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                        <div class="card box-shadow-4 border-0 rounded-0">
                            <div class="card-body p-5">
                                <!--      <h4 class="text-color-dark font-weight-bold positive-ls-3 mb-3">MAIN MENU</h4> -->
                                <hr class="custom-divider-size-1 bg-color-grey-scale-2 mt-2 mb-4">

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $lombo['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>32
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $lombo['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $atum['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>15
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $atum['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $siciliana['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>42
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $siciliana['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $gorgonzola['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>32
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $gorgonzola['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $bacon['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>15
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $bacon['descricao'] ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center justify-content-lg-start">
                    <div class="col-md-10 col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="550">
                        <img src="img/demos/restaurant/menu/havaiana.jpg" class="img-fluid box-shadow-4" alt="Dessert Menu Background Image" />
                    </div>
                </div>
                <div class="row justify-content-center justify-content-lg-start custom-negative-margin-top-1">
                    <div class="col-md-10 col-lg-7 ms-lg-auto appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                        <div class="card box-shadow-4 border-0 rounded-0">
                            <div class="card-body p-5">
                                <!--  <h4 class="text-color-dark font-weight-bold positive-ls-3 mb-3">DESSERT</h4> -->
                                <hr class="custom-divider-size-1 bg-color-grey-scale-2 mt-2 mb-4">

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $frangoCatupiry['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>9
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $frangoCatupiry['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $havaiana['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>7
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $havaiana['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $pepperoni['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>8
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $pepperoni['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $bauru['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>9
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $bauru['descricao'] ?></p>
                                    </div>
                                </div>

                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title">
                                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $alhoOleo['sabor'] ?></h5>
                                        </div>
                                        <div class="custom-menu-item-line opacity-4"></div>
                                        <div class="custom-menu-item-price">
                                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                                <span class="text-2-5">$</span>7
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2-5 line-height-4"><?= $alhoOleo['descricao'] ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'rodape.php' ?>

    </div>

    <!-- Vendor -->
    <script src="vendor/plugins/js/plugins.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

</body>

</html>