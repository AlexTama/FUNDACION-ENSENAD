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
	<!-- menu and header -->
	<!-- *************************************** -->
	<section class="container-fluid auditorio-profile full-screen">
		<div class="row">
			<div class="col-md-12" style="padding:25% 0 0;">
				
				<!-- MENU -->
				<?php include 'includes/menu.php'; ?>

				<h1 class="text-center lead title-size" style="color:#FFB700;"><b>Auditorio Diocesáno</b></h1>
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- TITLE -->
	<!-- *************************************** -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center" style="background-color:#eeeeee; color:#8e8e8c; padding:20px 0 20px;">
				<h3><b>CONFERENCIAS</b></h3>
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- SECOND SECTION -->
	<!-- Background and description -->
	<!-- *************************************** -->
	<section class="container-fluid auditorio-casa-retiro-1 full-screen">
		<div class="row">
			<div class="col-md-12 text-center text-align-profile">
				<h3><b>CAPACIDAD PARA MÁS DE 1200 PERSONAS <br><br>
				AMPLIO Y MODERNO LOBBY</b>

				</h3>

			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- THIRD SECTION -->
	<!-- Background and description -->
	<!-- *************************************** -->
	<section class="container-fluid auditorio-casa-retiro-2 full-screen">
		<div class="row">
			<div class="col-md-12 text-center text-align-profile">
				<h3><b>SALA VIP	 		<br><br>
					SALA DE SERVICIOS 	<br><br>
					ZONAS VERDES</b> 		<br><br>		

				</h3>
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- FOURTH SECTION -->
	<!-- Background and description -->
	<!-- *************************************** -->
	<section class="container-fluid auditorio-casa-retiro-3 full-screen">
		<div class="row">
			<div class="col-md-12 text-center text-align-profile">
				<h3><b>SERVICIO DE CATERING <br><br>
						PARQUEADERO CON CAPACIDAD PARA 200 VEHÍCULOS</b>
				</h3>
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- GALLERY BUTTON -->
	<!-- *************************************** -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center" style="padding:10% 0 10%">
				<button type="button" class="ghost-button-profile" data-toggle="modal" data-target=".bs-example-modal-lg"><b>VER GALERÍA</b></button>
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- LINKS -->
	<!-- BETANIA - AUDITORIO -->
	<!-- *************************************** -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-6 santa-maria">
				<div class="row">
					<div class="index-button profile text-center">
						<h3 class="lead"><b>SANTA MARÍA DE LOS ÁNGELES</b></h3>
					<a href="santa_maria.php" class="ghost-button-links"><b>VISITAR SITIO</b></a>
					</div>
				</div>
			</div>

			<div class="col-md-6 betania">
				<div class="row">
					<div class="index-button profile text-center">
						<h3 class="lead"><b>BETANIA</b></h3>
						<a href="betania.php" class="ghost-button-links"><b>VISITAR SITIO</b></a>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- ***************************************************************** -->
	<!-- FOOTER -->
	<!-- ***************************************************************** -->
	<?php include 'includes/footer.php'; ?>
	
	<!-- SCRIPTS FOR ANIMATION -->
	<?php include 'includes/scripts.php'; ?>
	
	<!-- ***************************************************************** -->
	<!-- MODAL TEMPLATE FOR SLIDE -->
	<!-- ***************************************************************** -->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="modal-header">
	    			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    			<h4 class="modal-title text-center" id="myModalLabel">AUDITORIO DIOCESÁNO</h4>
	    		</div>

				<div class="modal-body">

					<!-- SLIDER -->
		    		<div id="carousel-c" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">

							<!-- INTERACTIVE INDICATORS -->
							<?php include 'includes/indicadores_auditorio.php'; ?>
										
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							
							<!-- INTERACTIVE GALLERY -->
							<?php include 'includes/auditorio_slide.php'; ?>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-c" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-c" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						</a>
					</div>
					
				</div>

				
			</div>
		</div>
	</div>
</body>
</html>