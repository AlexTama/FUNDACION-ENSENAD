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
	<section class="container-fluid betania-profile full-screen">
		<div class="row">
			<div class="col-md-12" style="padding:25% 0 0;">
				
				<!-- MENU -->
				<?php include 'includes/menu.php'; ?>

				<h1 class="text-center lead title-size" style="color:#ffffff;">Betania</h1>
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- TITLE -->
	<!-- *************************************** -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center" style="background-color:#eeeeee; color:#8e8e8c; padding:20px 0 20px;">
				<h3 style="letter-spacing:5px;"><b>CASA DE RETIRO</b></h3>
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- SECOND SECTION -->
	<!-- Background and description -->
	<!-- *************************************** -->
	<section class="container-fluid betania-casa-retiro-1 full-screen">
		<div class="row">
			<div class="col-md-12 text-center margin-corrector full-screen">

				<div class="col-md-6 back-color">
					<h3>HOSPEDAJE CON CAPACIDAD HASTA 70 PERSONAS <br><br>
						AMPLIAS ZONAS VERDES

					</h3>	
				</div>

			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- THIRD SECTION -->
	<!-- Background and description -->
	<!-- *************************************** -->
	<section class="container-fluid betania-casa-retiro-2 full-screen">
		<div class="row">
			<div class="col-md-12 text-center">
				
				<div class="col-md-offset-6 col-md-6 back-color">

					<h3> 2 SALONES DE CONFERENCIA <br><br>
						HERMOSA CAPILLA PARA CELEBRACIONES LITÚRGICAS

					</h3>
						
				</div>

			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- FOURTH SECTION -->
	<!-- Background and description -->
	<!-- *************************************** -->
	<section class="container-fluid betania-casa-retiro-3 full-screen">
		<div class="row">
			<div class="col-md-12 text-center">
				
				<div class="col-md-6 back-color">
					<h3>SERVICIO DE RESTAURANTE Y AMPLIO PARQUEADERO</h3>

				</div>

			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- GALLERY BUTTON -->
	<!-- *************************************** -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center" style="padding:10% 0 10%">
				<button type="button" class="ghost-button-profile" data-toggle="modal" data-target=".bs-example-modal-lg">VER GALERÍA</button>
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- LINKS -->
	<!-- SANTA MARÍA DE LOS ÁNGELES - AUDITORIO -->
	<!-- *************************************** -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center margin-corrector">
				<!-- SANTA MARÍA DE LOS ÁNGELES -->
				<div class="col-md-6 santa-maria profile">
					<h3 class="lead">SANTA MARÍA DE LOS ÁNGELES</h3>
					<a href="santa_maria.php" class="ghost-button-links">VISITAR SITIO</a>
				</div>

				<!-- AUDITORIO DIOCESÁNO -->
				<div class="col-md-6 auditorio profile">
					<h3 class="lead">AUDITORIO DIOCESÁNO</h3>
					<a href="auditorio.php" class="ghost-button-links">VISITAR SITIO</a>
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
	    			<h4 class="modal-title text-center" id="myModalLabel">CASA DE RETIROS BETANIA</h4>
	    		</div>

				<div class="modal-body">

					<!-- SLIDER -->
		    		<div id="carousel-c" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">

							<!-- INTERACTIVE INDICATORS -->
							<?php include 'includes/indicadores_betania.php'; ?>
										
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							
							<!-- INTERACTIVE GALLERY -->
							<?php include 'includes/betania_slide.php'; ?>
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