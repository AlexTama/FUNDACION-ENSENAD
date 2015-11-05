<!DOCTYPE html>
<html lang="es">
<head>
	<!-- META TAGS AND CSS STYLE FOR THE WEB SITE -->
	<?php include 'includes/headers.php'; ?>

	<title>Santa María de los Ángeles | Fundación Id y Enseñad</title>
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
				<form>
					<div class="form-group">
						<input type="text" class="form-control input-style-reset" id="exampleInputEmail1" placeholder="NOMBRE">
					</div>
				  	<div class="form-group">				    	
				    	<input type="text" class="form-control input-style-reset" id="exampleInputPassword1" placeholder="ASUNTO">
				  	</div>
				  	<div class="form-group">
					    <input type="email" class="form-control input-style-reset" id="exampleInputEmail1" placeholder="CORREO">
					 </div>
					 <textarea class="form-control input-style-reset" rows="6" placeholder="MENSAJE" style="resize:none;" ></textarea>
					
					<div style="padding: 20px" class="text-center">
						<p>Espacio para el recaptcha de google</p>
					</div>
						
					<div class="text-center">					 	
						<a class="ghost-button-profile" style="letter-spacing:5px;" href=""><b>ENVIAR</b></a>
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