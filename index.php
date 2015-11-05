<!DOCTYPE html>
<html lang="eS">
<head>

	<!-- META TAGS AND CSS STYLE FOR THE WEB SITE -->
	<?php include 'includes/headers.php'; ?>

	<title>Bienvenidos | Fundación Id y Enseñad </title>
</head>
<body>
	
	<!-- *************************************** -->
	<!-- FIRST SECTION -->
	<!-- menu, header and button for services -->
	<!-- *************************************** -->
	<section class="container-fluid header-index header-index-color full-screen">
		<div class="row">
			<div class="col-md-12 text-center">
				
				<!-- MENU - BACKGROUND - BUTTON -->
				<header>
					
					<!-- ***************** MENU ***************** -->
					<?php include 'includes/menu.php'; ?>
					
					<!-- ********** TITLES AND SERVICES BUTTON ***************** -->
					<div style="margin: 20% 0% 10%; color:#ffffff;">
						<h2><b>BIENVENIDOS A NUESTROS ESPACIOS DE RETIRO</b></h2>
						<h1>Fundación Id y Enseñad</h1>	
					</div>

				<div>

					<button type="button" style="letter-spacing:5px;" class="ghost-button" data-toggle="modal" data-target="#myModal">SERVICIOS</button>

				</div>
				</header>	
			</div>
		</div>
	</section>
	
	<!-- *************************************** -->
	<!-- TITLE -->
	<!-- *************************************** -->

	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="letter-spacing:5px;"><b>GALERÍA</b></h3>
			</div>
		</div>
	</section>

	<!-- ***************************************************************** -->
	<!-- SECOND SECTION -->
	<!-- submenu, Santa María de los Ángeles, Betania, Auditorio Diocesáno -->
	<!-- ***************************************************************** -->
	

	<section class="container-fluid">
		<div class="row">

			<div class="col-md-6 santa-index">
				<div class="row">
					<div class="text-center index-button"  style="padding:59% 0 4%;">
						<h3 class="lead" style="color:#FFB700;" ><b>SANTA MARÍA DE LOS ÁNGELES</b></h3>
						<a href="santa_maria.php" class="ghost-button-links">VISITAR SITIO</a>
					</div>
				</div>
			</div>

			<div class="col-md-6 betania-index">
				<div class="row" >
					<div class="text-center index-button"  style="padding:18% 0 4%;">
						<h3 class="lead" style="color:#FFB700;" ><b>BETANIA</b></h3>
						<a href="betania.php" class="ghost-button-links">VISITAR SITIO</a>
					</div>
				</div>
			</div>
					
			<div class="col-md-6 auditorio-index">
				<div class="row">
						<div class="text-center index-button"  style="padding:18% 0 4%;">
						<h3 class="lead" style="color:#FFB700;" ><b>AUDITORIO DIOCESÁNO</b></h3>
						<a href="auditorio.php" class="ghost-button-links">VISITAR SITIO</a>
					</div>
				</div>		
			</div>

		</div>
	</section>


	<!-- ***************************************************************** -->
	<!-- FOOTER -->
	<!-- ***************************************************************** -->
	<?php include 'includes/footer.php'; ?>
	
	<!-- ***************************************************************** -->
	<!-- ******************* MODAL WINDOW FOR SERVICES ******************* -->
	<!-- ***************************************************************** -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h4 class="modal-title text-center" id="myModalLabel"><b>LUGARES IDEALES PARA</b></h4>
		      	</div>
		      	<div class="modal-body">		      
		        	<ul>
		        		<li class="lead" >Retiros Espirituales</li>
		        		<li class="lead" >Convivencias</li>
		        		<li class="lead" >Seminarios</li>
		        		<li class="lead" >Reuniones</li>
		        		<li class="lead" >Capacitaciones</li>
		        		<li class="lead" >Congresos</li>
		        		<li class="lead" >Celebraciones Sociales y Familiares</li>
		        		<li class="lead" >Encuentros Empresariales</li>
		        		<li class="lead" >Asambleas</li>
		        		<li class="lead" >Ferias</li>
		        	</ul>
		      	</div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		      	</div>
	    	</div>
	  	</div>
	</div>





	
	<!-- SCRIPTS FOR ANIMATION -->
	<?php include 'includes/scripts.php'; ?>

</body>
</html>