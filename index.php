<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>Inicio - Solventa</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="/src/css/main.min.css">
	<link rel="stylesheet" href="/src/libs/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="/src/libs/owl-carousel/owl.theme.default.min.css">
</head>
<body>
	<div class="container-fluid">
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/header.php' ?>
		<main class="row">
			<div class="col-12">

				<section id="formulario-container" class="row align-items-center justify-content-center">
					<svg class="btn-close" viewBox="0 0 24 24">
						<path d="M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V5H19V19M17,8.4L13.4,12L17,15.6L15.6,17L12,13.4L8.4,17L7,15.6L10.6,12L7,8.4L8.4,7L12,10.6L15.6,7L17,8.4Z" />
					</svg>

					<div class="col-10 col-md-8">
						<div class="row justify-content-center">

							<form method="post" action="/" id="form" class="validate">
								<div class="form-field">
									<input type="text" name="full-name" id="full-name" placeholder="Nombre" required />
								</div>
								<div class="form-field">
									<input type="email" name="email-input" id="email-input" placeholder="Correo" required />
								</div>
								<div class="form-field">
									<input type="password" name="password-input" id="password-input" required placeholder="Contraseña" />
								</div>
								<div class="form-field">
									<input  value="Envía tus datos" class="btn-enviar"/>
								</div>
							</form>
						</div>
					</div>

				</section>

				<section class="row align-items-center" id="section-cta">
					<div class="col-4 triangle">
						<div class="row" >
							
						</div>
					</div>
					<div class="col-12 col-md-8" style="background: #FFFFFFbc;border-radius: 5px; padding: 10px;">
						<h4>¡Solicita tus beneficios!</h4>
						<p>
							Dejános tus datos y haremos el resto por tí.
						</p>
						<a class="btn btn-CTA">DA CLIC AQUÍ</a>
					</div>
				</section>

				<section class="row align-items-center" id="landing-content">
					<div class="col-12 col-md-4">
						<h3>Lo que nos diferencia</h3>
						<p>Te contamos por qué tenemos los mejores <br> <b>Préstamos de dinero en Colombia.</b></p>
					</div>
					<div class="col-12 col-md-8">
						<div class="row pos-relative align-items-center">

							<div class="owl-carousel" id="beneficios-carousel">
								<div class="card p-2">
									<svg class="card-svg" viewBox="0 0 24 24">
										<path d="M12,6V9L16,5L12,1V4A8,8 0 0,0 4,12C4,13.57 4.46,15.03 5.24,16.26L6.7,14.8C6.25,13.97 6,13 6,12A6,6 0 0,1 12,6M18.76,7.74L17.3,9.2C17.74,10.04 18,11 18,12A6,6 0 0,1 12,18V15L8,19L12,23V20A8,8 0 0,0 20,12C20,10.43 19.54,8.97 18.76,7.74Z" />
									</svg>
									<h4>Renovación con beneficios</h4>
									<p>En cada nuevo Préstamo tendrás monto extra y más beneficios</p>
									<p><b>¡Te damos más beneficios!</b></p>
								</div>
								<div class="card p-2">
									<svg class="card-svg" viewBox="0 0 24 24">
										<path d="M12,16A3,3 0 0,1 9,13C9,11.88 9.61,10.9 10.5,10.39L20.21,4.77L14.68,14.35C14.18,15.33 13.17,16 12,16M12,3C13.81,3 15.5,3.5 16.97,4.32L14.87,5.53C14,5.19 13,5 12,5A8,8 0 0,0 4,13C4,15.21 4.89,17.21 6.34,18.65H6.35C6.74,19.04 6.74,19.67 6.35,20.06C5.96,20.45 5.32,20.45 4.93,20.07V20.07C3.12,18.26 2,15.76 2,13A10,10 0 0,1 12,3M22,13C22,15.76 20.88,18.26 19.07,20.07V20.07C18.68,20.45 18.05,20.45 17.66,20.06C17.27,19.67 17.27,19.04 17.66,18.65V18.65C19.11,17.2 20,15.21 20,13C20,12 19.81,11 19.46,10.1L20.67,8C21.5,9.5 22,11.18 22,13Z" />
									</svg>
									<h4>Velocidad en el desembolso</h4>
									<p>Enviamos el desembolso a tu banco enmenos de 3 horas.</p>
									<p><b>¡Créditos Rápido Colombia!</b></p>
								</div>
								<div class="card p-2">
									<svg class="card-svg" viewBox="0 0 24 24">
										<path d="M24 17V19H21V17C21 15.45 20.3 14.06 19.18 13.06C24 13.55 24 17 24 17M18 5C19.66 5 21 6.34 21 8C21 9.66 19.66 11 18 11C17.69 11 17.38 10.95 17.1 10.86C17.67 10.05 18 9.07 18 8C18 6.94 17.67 5.95 17.1 5.14C17.38 5.05 17.69 5 18 5M13 5C14.66 5 16 6.34 16 8C16 9.66 14.66 11 13 11C11.34 11 10 9.66 10 8C10 6.34 11.34 5 13 5M19 17V19H7V17C7 14.79 9.69 13 13 13C16.31 13 19 14.79 19 17M13 7C12.45 7 12 7.45 12 8C12 8.55 12.45 9 13 9C13.55 9 14 8.55 14 8C14 7.45 13.55 7 13 7M13 15C10.79 15 9 15.9 9 17H17C17 15.9 15.21 15 13 15M.464 13.12L2.59 11L.464 8.88L1.88 7.46L4 9.59L6.12 7.46L7.54 8.88L5.41 11L7.54 13.12L6.12 14.54L4 12.41L1.88 14.54Z" />
									</svg>
									<h4>No utilizamos intermediarios</h4>
									<p>El único medio para solicitar tu Préstamo es a través de nuestra web.</p>
									<p><b>¡Somos el Préstamo más seguro!</b></p>
								</div>
								<div class="card p-2">
									<svg class="card-svg" viewBox="0 0 24 24">
										<path d="M3 6V18H13.32C13.1 17.33 13 16.66 13 16H7C7 14.9 6.11 14 5 14V10C6.11 10 7 9.11 7 8H17C17 9.11 17.9 10 19 10V10.06C19.67 10.06 20.34 10.18 21 10.4V6H3M12 9C10.3 9.03 9 10.3 9 12C9 13.7 10.3 14.94 12 15C12.38 15 12.77 14.92 13.14 14.77C13.41 13.67 13.86 12.63 14.97 11.61C14.85 10.28 13.59 8.97 12 9M21.63 12.27L17.76 16.17L16.41 14.8L15 16.22L17.75 19L23.03 13.68L21.63 12.27Z" />
									</svg>
									<h4>Pago anticipado</h4>
									<p>Puedes cancelar antes tu Préstamo y disfrutar de mejores montos y cuotas.</p>
									<p><b>¡Somos el Préstamo más flexible!</b></p>
								</div>
								<div class="card p-2">
									<svg class="card-svg" viewBox="0 0 24 24">
										<path d="M18.5,16.8C17.8,16.8 17.3,16.2 17.3,15.6C17.3,14.9 17.9,14.4 18.5,14.4C19.1,14.4 19.7,15 19.7,15.6C19.8,16.2 19.2,16.8 18.5,16.8M18.5,12C16.6,12 15,13.6 15,15.5C15,18.1 18.5,22 18.5,22C18.5,22 22,18.1 22,15.5C22,13.6 20.4,12 18.5,12M14.9,11.3C14.6,10 13.4,9 12,9C10.3,9 9,10.3 9,12C9,13.7 10.3,15 12,15C12.4,15 12.7,14.9 13,14.8C13.2,13.4 13.9,12.2 14.9,11.3M13,16H7A2,2 0 0,0 5,14V10A2,2 0 0,0 7,8H17A2,2 0 0,0 19,10C19,10 20,10 21,10.6V6H3V18H13.5C13.3,17.3 13.1,16.7 13,16Z" />
									</svg>
									<h4>Pagas desde donde quieras</h4>
									<p>Puedes pagar en efectivo o en línea desde tu cuenta de usuario.</p>
									<p><b>¡Somos el Préstamo más fácil!</b></p>
								</div>
								
							</div>

							<div class="btn-container">
								<div id="beneficios-btn-izq">
									<svg class="arrow" viewBox="0 0 24 24">
										<path d="M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M14,7L9,12L14,17V7Z" />
									</svg>
								</div>
								<div id="beneficios-btn-der">
									<svg class="arrow" viewBox="0 0 24 24">
										<path d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M10,17L15,12L10,7V17Z" />
									</svg>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="row justify-content-around py-3" id="prestamos-section">
					<div class="col-12">
						<div class="row justify-content-center">
							<h5 class="cipher-title">¡Préstamos rápidos en Colombia!</h5>
						</div>
					</div>
					<div class="col-12 col-md-3 text-center">
							<span class="cipher">
							<svg class="cipher-svg" viewBox="0 0 24 24">
								<path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
							</svg>	
							13.000</span>
							<p class="cipher-description">Préstamos otorgados</p>
					</div>
					<div class="col-12 col-md-3 text-center">
							<span class="cipher">
							<svg class="cipher-svg" viewBox="0 0 24 24">
								<path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
							</svg>
							9.000</span>
							<p class="cipher-description">Clientes satisfechos</p>
					</div>
					<div class="col-12 col-md-3 text-center">
							<span class="cipher">
								<svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" />
								</svg><svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" />
								</svg><svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" />
								</svg><svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" />
								</svg><svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M12,15.4V6.1L13.71,10.13L18.09,10.5L14.77,13.39L15.76,17.67M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z" />
								</svg>
							</span>
							<p class="cipher-description">Estrellas en Google</p>
					</div>
				</section>
			</div>
		</main>
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/footer.php' ?>
	</div>

	<script src="/src/libs/jquery/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
	<script src="/src/js/general-script.min.js"></script>
	<script src="/src/libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="/src/libs/notify/notify.min.js"></script>
	<script src="/src/libs/sweetalert/sweetalert.min.js"></script>
</body>
</html>