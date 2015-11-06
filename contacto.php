<!DOCTYPE html>
<html lang="es">
<head>
	<!-- META TAGS AND CSS STYLE FOR THE WEB SITE -->
	<?php include 'includes/headers.php'; ?>

	<title>Contacto | Fundación Id y Enseñad</title>
</head>
<body>

	<!-- *************************************** -->
	<!-- FIRST SECTION -->
	<!-- menu -->
	<!-- *************************************** -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="padding:12% 0 0;">
				
				<!-- MENU -->
				<?php include 'includes/menu.php'; ?>

				<h1 class="text-center" style="color:#000000; letter-spacing: 5px;"><b>CONTÁCTENOS</b></h1>
			</div>
		</div>
	</section>
	
	<!-- *************************************** -->
	<!-- SECOND SECTION -->
	<!-- contact form -->
	<!-- *************************************** -->

	<section class="container-fluid">
		<div class="row" style="padding-bottom: 5%;">
			<div class="col-md-offset-4 col-md-4">

				<form action="envia.php" method="POST">
					<div class="form-group">
						<input type="text" name="nombre" class="form-control input-style-reset" placeholder="NOMBRE">
					</div>
				  	<div class="form-group">				    	
				    	<input type="text" name="asunto" class="form-control input-style-reset" placeholder="ASUNTO">
				  	</div>
				  	<div class="form-group">
					    <input type="email" class="form-control input-style-reset" name="email" placeholder="CORREO" require>
					 </div>
					 <textarea class="form-control input-style-reset" rows="6" name="mensaje" placeholder="MENSAJE" style="resize:none;" ></textarea>
					
					<div style="padding: 20px" class="text-center">
						<div class="g-recaptcha" data-sitekey="6LdJVxATAAAAAJGNivucuYd9kDr-_TRIDy4yvxR3" require></div>
					</div>
						
					<div class="text-center">
						<input class="ghost-button-profile" type="submit" name="enviar" value="ENVIAR" style="letter-spacing:5px; font-weight:bold;">
					</div>
				</form>

			</div>
		</div>
	</section>

	<!-- ***************************************************************** -->
	<!-- FOOTER -->
	<!-- ***************************************************************** -->
	<?php include 'includes/footer.php'; ?>
	
	<!-- SCRIPTS FOR ANIMATION -->
	<?php include 'includes/scripts.php'; ?>
</body>
</html>