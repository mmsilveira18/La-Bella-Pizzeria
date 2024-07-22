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

<body>

	<?php
	// Verifica se o formulário foi submetido
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Inclui o arquivo de conexão com o banco de dados
		require_once "db_connect.php";

		// Define as variáveis e protege contra SQL injection
		$nome = mysqli_real_escape_string($conn, $_POST['nome']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$mensagem = mysqli_real_escape_string($conn, $_POST['mensagem']);

		// Query para inserir os dados na tabela de items
		$sql = "INSERT INTO items (nome, descricao, email) VALUES (?, ?, ?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sss", $nome, $mensagem, $email);

		if ($stmt->execute()) {
			// Mensagem enviada com sucesso
			echo '<script>
                document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("alertSuccess").classList.remove("d-none");
                    document.getElementById("contactForm").reset();
                });
              </script>';
		} else {
			// Erro ao enviar a mensagem
			echo '<script>
                document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("alertError").classList.remove("d-none");
                });
              </script>';
		}

		// Fecha a conexão com o banco de dados
		$stmt->close();
		$conn->close();
	}
	?>

	<div class="body">
		<?php include 'cabecalho.php'; ?>

		<div role="main" class="main">

			<section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="img/demos/restaurant/backgrounds/contato.jpg">
				<div class="container pt-3 pb-5 mb-5">
					<div class="row mb-3">
						<div class="col">
							<ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
								<li><a href="demo-restaurant.html" class="text-decoration-none opacity-hover-8">Home</a></li>
								<li class="active text-color-primary">Contato</li>
							</ul>
							<h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Contato</h1>
						</div>
					</div>
				</div>
				<a href="#contact" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-dark text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
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

			<div class="container py-5 my-5">
				<div class="row row-gutter-sm align-items-lg-center">
					<div class="col-12 col-lg-8">
						<!-- Formulário de contato -->
						<form id="contactForm" action="contato.php" method="post">
							<h2 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-5-5 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="250">Entre em Contato Conosco</h2>

							<!-- Campo de nome -->
							<div class="form-group mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="450">
								<label for="nome" class="text-color-dark text-3">Nome:</label>
								<input type="text" class="form-control custom-border-radius-1" id="nome" name="nome" required>
							</div>

							<!-- Campo de email -->
							<div class="form-group mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="650">
								<label for="email" class="text-color-dark text-3">Email:</label>
								<input type="email" class="form-control custom-border-radius-1" id="email" name="email" required>
							</div>

							<!-- Campo de mensagem -->
							<div class="form-group mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850">
								<label for="mensagem" class="text-color-dark text-3">Mensagem:</label>
								<textarea class="form-control custom-border-radius-1" id="mensagem" name="mensagem" rows="5" required></textarea>
							</div>

							<!-- Botão de envio -->
							<button type="submit" class="btn btn-primary custom-btn-style-1 font-weight-medium text-3 ws-nowrap px-4 px-md-5 py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1050">Enviar Mensagem</button>
						</form>
						<!-- Fim do formulário de contato -->

						<!-- Alertas de feedback -->
						<div id="alertSuccess" class="alert alert-success mt-4 d-none" role="alert">
							Mensagem enviada com sucesso!
						</div>
						<div id="alertError" class="alert alert-danger mt-4 d-none" role="alert">
							Houve um erro ao enviar a mensagem. Por favor, tente novamente.
						</div>
					</div>
				</div>
			</div>

			<!-- jQuery (necessário para AJAX) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

			<script>
				$(document).ready(function() {
					$('#contactForm').submit(function(e) {
						e.preventDefault(); // Evita o envio padrão do formulário

						// Serialize o formulário para enviar via AJAX
						var formData = $(this).serialize();

						// Envio via AJAX
						$.ajax({
							type: 'POST',
							url: 'contato.php', // Substitua 'contato.php' pelo script de processamento real
							data: formData,
							success: function(response) {
								// Limpa os campos do formulário (opcional)
								$('#nome').val('');
								$('#email').val('');
								$('#mensagem').val('');

								// Exibe o alerta de sucesso
								$('#alertSuccess').removeClass('d-none').addClass('d-block');

								// Esconde o alerta de erro, caso esteja visível
								$('#alertError').removeClass('d-block').addClass('d-none');
							},
							error: function(xhr, status, error) {
								// Exibe o alerta de erro
								$('#alertError').removeClass('d-none').addClass('d-block');

								// Esconde o alerta de sucesso, caso esteja visível
								$('#alertSuccess').removeClass('d-block').addClass('d-none');
							}
						});
					});
				});
			</script>

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
