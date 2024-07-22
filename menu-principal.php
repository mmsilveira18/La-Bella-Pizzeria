<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Bella Pizzeria</title>
    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="La Bella Pizzeria">
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

    <!-- PHP - Conexão com o Banco de Dados -->
    <?php
    // Arquivo de conexão com o banco de dados
    include 'db_connect.php';
    ?>
</head>

<body>
	<div class="body">

		<?php include 'cabecalho.php' ?>


		<?php

		//salgada
		$calabresa = array(
			"sabor" => "Calabresa",
			"descricao" => "",
		);

		$coracao = array(
			"sabor" => "Coração",
			"descricao" => "",
		);

		$strogonoff = array(
			"sabor" => "Strogonoff",
			"descricao" => "",
		);

		$quatroQueijos = array(
			"sabor" => "4 queijos",
			"descricao" => "",
		);

		$portuguesa = array(
			"sabor" => "Portuguesa",
			"descricao" => "",
		);

		$marguerita = array(
			"sabor" => "Marguerita",
			"descricao" => "",
		);

		$lombo = array(
			"sabor" => "Lombo Canadense",
			"descricao" => "",
		);

		//doce

		$chocolate = array(
			"sabor" => "Chocolate",
			"descricao" => "",
		);

		$chocolateBranco = array(
			"sabor" => "Chocolate Branco",
			"descricao" => "",
		);

		$mms = array(
			"sabor" => "M&M's",
			"descricao" => "",
		);

		$prestigio = array(
			"sabor" => "Prestígio",
			"descricao" => "ganache de chocolate meio amargo, beijinho, outra camada de ganache de chocolate meio amargo , coco ralado e cerejas",
		);

		$morangoChocolate = array(
			"sabor" => "Morango com Chocolate",
			"descricao" => "",
		);

		$brigadeiro = array(
			"sabor" => "Brigadeiro",
			"descricao" => "brigadeiro mole e chocolate granulado",
		);

		$pacoca = array(
			"sabor" => "Paçoca",
			"descricao" => "",
		);

		?>

		<div role="main" class="main">

			<section class="section section-with-shape-divider section-height-5 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="img/demos/restaurant/backgrounds/fundo.jpg">
				<div class="container position-relative py-5 mb-5">
					<div class="row align-items-center h-100 mb-4">
						<div class="col text-center">
							<div class="text-color-primary d-inline-flex align-items-center custom-font-secondary text-4">
								<div class="custom-line appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="600"></div>
								<div class="overflow-hidden">
									<span class="d-block positive-ls-2 font-weight-medium text-4 px-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Bem-vindos</span>
								</div>
								<div class="custom-line appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="600"></div>
							</div>
							<h1 class="text-color-light font-weight-bold positive-ls-1 line-height-1 custom-big-font-size-1 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="700">La Bella Pizzeria</h1>

							<a href="#menu
							" class="btn btn-light btn-outline text-2-5 text-color-light border-color-light-2 font-weight-medium positive-ls-2 text-color-hover-dark px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="2200">VER MENU</a>
						</div>
					</div>
				</div>
				<a href="#aboutus" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-dark text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
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

			<div id="aboutus" class="container py-5 mt-3 mb-5">
				<div class="row row-gutter-sm align-items-center justify-content-center">
					<div class="col-6 col-md-4 col-lg-3 align-self-start">
						<img src="img/demos/restaurant/generic/fundo3.jpg" class="img-fluid box-shadow-4 rounded-0" alt="Restaurant inside showcase 1" />
					</div>
					<div class="col-6 col-md-4 col-lg-3 align-self-start mb-5 mb-lg-0">
						<img src="img/demos/restaurant/generic/fundo2.jpg" class="img-fluid box-shadow-4 rounded-0 mb-3 mb-sm-4" alt="Restaurant inside showcase 2" />
						<img src="img/demos/restaurant/generic/fundo4.jpg" class="img-fluid box-shadow-4 rounded-0" alt="Restaurant inside showcase 3" />
					</div>
					<div class="col-lg-6 ps-lg-3 ps-xl-5">
						<h2 class="text-color-primary positive-ls-3 text-4 line-height-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Sobre nós</h2>
						<h3 class="text-color-dark text-transform-none text-9 line-height-3 font-weight-medium mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Utilizando os <span class="highlight highlight-primary highlight-bg-opacity highlight-animated" data-appear-animation="highlight-animated-start" data-appear-animation-delay="1200" data-plugin-options="{'flagClassOnly': true}">melhores ingredientes</span> aos quais temos acesso.</h3>
						<p class="text-3-5 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Contamos com amplo espaço em um ambiente intimista e acolhedor, fazendo jus a herança das nossas famílias e ancestrais: trabalho, dedicação, amor e gastronomia.
							Oferecemos pizzas para todos os paladares, dos sabores tradicionais aos mais elaborados. Contamos também com uma variada carta de vinhos, cervejas e diversas outras bebidas. </p>
						<a href="#conheca" class="btn btn-dark font-weight-medium text-3 btn-px-4 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">Mais sobre nós</a>
					</div>
				</div>
			</div>


			<section class="section section-height-2 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '130%', 'fadeIn': true}" data-image-src="img/demos/restaurant/backgrounds/background-2.jpg">
				<div class="container py-5 my-5" id="menu">
					<div class="row justify-content-center mb-5">
						<div class="col-lg-10 text-center">
							<h2 class="text-color-primary positive-ls-3 text-4 line-height-3 mb-2">O que oferecemos</h2>
							<h3 class="text-color-dark text-transform-none text-9 line-height-3 font-weight-medium mb-4">Nosso cardápio</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 mb-4 mb-lg-0">
							<h4 class="text-color-dark font-weight-bold positive-ls-3 mb-3">Pizzas Salgadas</h4>
							<hr class="custom-divider-size-1 bg-color-grey-scale-2 mt-2 mb-4">
							<div class="pt-2">

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
										<p class="text-2-5 line-height-4">Includes bread and butter</p>
									</div>
								</div>

								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title">
											<h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $coracao['sabor'] ?></h5>
										</div>
										<div class="custom-menu-item-line opacity-4"></div>
										<div class="custom-menu-item-price">
											<strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
												<span class="text-2-5">$</span>10
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Includes bread and butter</p>
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
												<span class="text-2-5">$</span>8.50
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Includes bread and butter</p>
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
												<span class="text-2-5">$</span>16
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Includes bread and butter</p>
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
												<span class="text-2-5">$</span>10
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Includes bread and butter</p>
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
												<span class="text-2-5">$</span>8.50
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Includes bread and butter</p>
									</div>
								</div>

								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title">
											<h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $lombo['sabor'] ?></h5>
										</div>
										<div class="custom-menu-item-line opacity-4"></div>
										<div class="custom-menu-item-price">
											<strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
												<span class="text-2-5">$</span>16
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Includes bread and butter</p>
									</div>
								</div>



							</div>

						</div>
						<div class="col-lg-6 mb-4 mb-lg-0">
							<h4 class="text-color-dark font-weight-bold positive-ls-3 mb-3">Pizzas Doces</h4>
							<hr class="custom-divider-size-1 bg-color-grey-scale-2 mt-2 mb-4">
							<div class="pt-2">

								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title">
											<h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $chocolate['sabor'] ?></h5>
										</div>
										<div class="custom-menu-item-line opacity-4"></div>
										<div class="custom-menu-item-price">
											<strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
												<span class="text-2-5">$</span>32
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Served with chopped liver, swiss cheese, french fries, baked beans, cole slaw</p>
									</div>
								</div>

								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title">
											<h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $chocolateBranco['sabor'] ?></h5>
										</div>
										<div class="custom-menu-item-line opacity-4"></div>
										<div class="custom-menu-item-price">
											<strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
												<span class="text-2-5">$</span>15
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Sauerkraut and nippy cheese grilled on rye</p>
									</div>
								</div>

								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title">
											<h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $mms['sabor'] ?></h5>
										</div>
										<div class="custom-menu-item-line opacity-4"></div>
										<div class="custom-menu-item-price">
											<strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
												<span class="text-2-5">$</span>42
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Boiled chicken with matzo ball, noodles, vegetable and delicious broth </p>
									</div>
								</div>


								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title">
											<h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $morangoChocolate['sabor'] ?></h5>
										</div>
										<div class="custom-menu-item-line opacity-4"></div>
										<div class="custom-menu-item-price">
											<strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
												<span class="text-2-5">$</span>42
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Boiled chicken with matzo ball, noodles, vegetable and delicious broth </p>
									</div>
								</div>


								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title">
											<h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $brigadeiro['sabor'] ?></h5>
										</div>
										<div class="custom-menu-item-line opacity-4"></div>
										<div class="custom-menu-item-price">
											<strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
												<span class="text-2-5">$</span>42
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Boiled chicken with matzo ball, noodles, vegetable and delicious broth </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title">
											<h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $pacoca['sabor'] ?></h5>
										</div>
										<div class="custom-menu-item-line opacity-4"></div>
										<div class="custom-menu-item-price">
											<strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
												<span class="text-2-5">$</span>42
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Boiled chicken with matzo ball, noodles, vegetable and delicious broth </p>
									</div>
								</div>
								<div class="custom-menu-item">
									<div class="custom-menu-item-details">
										<div class="custom-menu-item-title">
											<h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0"><?= $chocolate['sabor'] ?></h5>
										</div>
										<div class="custom-menu-item-line opacity-4"></div>
										<div class="custom-menu-item-price">
											<strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
												<span class="text-2-5">$</span>42
											</strong>
										</div>
									</div>
									<div class="custom-menu-item-desc">
										<p class="text-2-5 line-height-4">Boiled chicken with matzo ball, noodles, vegetable and delicious broth </p>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="row pt-2 mt-4">
					<div class="col text-center">
						<a href="salgadas.php" class="btn btn-dark custom-btn-style-1 font-weight-medium text-3 btn-px-5 py-3"><span>Pizzas Salgadas</span></a>
					</div>
					<div class="col text-center">
						<a href="doces.php" class="btn btn-dark custom-btn-style-1 font-weight-medium text-3 btn-px-5 py-3"><span>Pizzas Doces</span></a>
					</div>
				</div>
		</div>
		</section>

		<section  id="conheca" class="section section-height-3 bg-color-grey-scale-1 border-0 m-0">
			<div class="container pt-2">
				<div class="row">
					<div class="col text-center">
						<h2 class="text-color-primary positive-ls-3 text-4 line-height-1 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Conheça</h2>
						<h3 class="text-color-dark text-transform-none text-9 line-height-3 font-weight-medium mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">A La Bella Pizzeria</h3>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<h3 class="text-color-dark text-transform-none text-5 line-height-3 font-weight-medium mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">La Bella Pizzeria é mais do que uma simples pizzaria, é um santuário da autêntica culinária italiana, onde cada fatia conta uma história de tradição e paixão. Fundada por uma família de amantes da gastronomia italiana, nossa missão é oferecer aos nossos clientes uma experiência gastronômica memorável, repleta de sabores autênticos e ingredientes frescos. Com uma variedade de pizzas artesanais, massas delicadamente preparadas e uma seleção cuidadosa de vinhos, nosso ambiente acolhedor e serviço excepcional garantem que cada visita seja uma celebração da cozinha italiana e da convivência familiar. Na La Bella Pizzeria, estamos comprometidos em criar momentos inesquecíveis ao redor da mesa, onde cada mordida é uma viagem à ensolarada Itália.</h3>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
						<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
							<div class="owl-carousel-wrapper" style="height: 329.77px;">
								<div class="carousel-half-full-width-wrapper carousel-half-full-width-right">
									<div class="owl-carousel owl-theme carousel-half-full-width-right carousel-shadow-1 nav-bottom nav-bottom-align-left nav-style-1 nav-arrows-thin nav-dark nav-font-size-lg mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '576': {'items': 2}, '768': {'items': 3}, '992': {'items': 4}, '1200': {'items': 4}}, 'loop': false, 'nav': true, 'dots': false, 'margin': 20}">
										<div>
											<a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/demos/restaurant/generic/galeria-1.jpg">
												<img src="img/demos/restaurant/generic/galeria-1.jpg" class="img-fluid box-shadow-4 rounded-0" alt="Restaurant interior showcase 1" />
											</a>
										</div>
										<div>
											<a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/demos/restaurant/generic/galeria-2.jpg">
												<img src="img/demos/restaurant/generic/galeria-2.jpg" class="img-fluid box-shadow-4 rounded-0" alt="Restaurant interior showcase 1" />
											</a>
										</div>
										<div>
											<a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/demos/restaurant/generic/galeria-3.jpg">
												<img src="img/demos/restaurant/generic/galeria-3.jpg" class="img-fluid box-shadow-4 rounded-0" alt="Restaurant interior showcase 1" />
											</a>
										</div>
										<div>
											<a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/demos/restaurant/generic/galeria-4.jpg">
												<img src="img/demos/restaurant/generic/galeria-4.jpg" class="img-fluid box-shadow-4 rounded-0" alt="Restaurant interior showcase 1" />
											</a>
										</div>
										<div>
											<a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/demos/restaurant/generic/galeria-1.jpg">
												<img src="img/demos/restaurant/generic/galeria-1.jpg" class="img-fluid box-shadow-4 rounded-0" alt="Restaurant interior showcase 1" />
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<div class="container pt-4 pb-3 my-5">
			<div class="row">
				<div class="col text-center">
					<h1 class="text-color-primary positive-ls-3 text-4 line-height-1 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">PERGUNTAS FREQUENTES</h1>

				</div>
			</div>
			<br>
			<div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow" id="accordion200">
				<div class="card card-default">
					<div class="card-header" id="collapse200HeadingOne">
						<h4 class="card-title m-0">
							<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200One" aria-expanded="false" aria-controls="collapse200One">
								Quais são as opções da La Bella Pizzeria ?
							</a>
						</h4>
					</div>
					<div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne" data-bs-parent="#accordion20" style="">
						<div class="card-body pt-0">
							<p class="mb-0">A casa possui um cardápio variado com sabores de pizzas salgadas e pizzas doces.</p>
						</div>
					</div>
				</div>
				<div class="card card-default">
					<div class="card-header" id="collapse200HeadingTwo">
						<h4 class="card-title m-0">
							<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200Two" aria-expanded="false" aria-controls="collapse200Two">
								A La Bella Pizzeria serve pizzas à la carte?
							</a>
						</h4>
					</div>
					<div id="collapse200Two" class="collapse" aria-labelledby="collapse200HeadingTwo" data-bs-parent="#accordion200">
						<div class="card-body pt-0">
							<p class="mb-0">Não servimos pizzas à la carte, somente rodízio.</p>
						</div>
					</div>
				</div>
				<div class="card card-default">
					<div class="card-header" id="collapse200HeadingThree">
						<h4 class="card-title m-0">
							<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200Three" aria-expanded="false" aria-controls="collapse200Three">
								Qual o horário de atendimento via telefone?
							</a>
						</h4>
					</div>
					<div id="collapse200Three" class="collapse" aria-labelledby="collapse200HeadingThree" data-bs-parent="#accordion200">
						<div class="card-body pt-0">
							<p class="mb-0">Atendemos nossos clientes de terça à domingo das 17:30 às 22h no telefone via Whatsapp.

							</p>
						</div>
					</div>
				</div>
				<div class="card card-default">
					<div class="card-header" id="collapse200HeadingFour">
						<h4 class="card-title m-0">
							<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200Four" aria-expanded="false" aria-controls="collapse200Four">
								Quais cartões a casa aceita?
							</a>
						</h4>
					</div>
					<div id="collapse200Four" class="collapse" aria-labelledby="collapse200HeadingFour" data-bs-parent="#accordion200">
						<div class="card-body pt-0">
							<p class="mb-0">Aceitamos cartão Visa (crédito e débi,, MasterCard (crédito e débito), American Express, Elo, HiperCard e Barinsul (débito).</p>
						</div>
					</div>
				</div>
				<div class="card card-default">
					<div class="card-header" id="collapse200HeadingFive">
						<h4 class="card-title m-0">
							<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200Five" aria-expanded="false" aria-controls="collapse200Five">
								A La Bella Pizzeria aceita vale refeição ou alimentação?
							</a>
						</h4>
					</div>
					<div id="collapse200Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-bs-parent="#accordion200">
						<div class="card-body pt-0">
							<p class="mb-0">Aceita os dois</p>
						</div>
					</div>
				</div>

				<div class="card card-default">
					<div class="card-header" id="collapse200HeadingSix">
						<h4 class="card-title m-0">
							<a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200Six" aria-expanded="false" aria-controls="collapse200Six">
								A casa possui espaço estacionamento?
							</a>
						</h4>
					</div>
					<div id="collapse200Six" class="collapse" aria-labelledby="collapse1HeadingSix" data-bs-parent="#accordion200">
						<div class="card-body pt-0">
							<p class="mb-0">Possuímos estacionamento terceirizado com manobrista e tempo livre. O valor do estacionamento é R$ 15,00.</p>
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