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
	<section class="container-fluid header-index header-index-color" style="height:100%; width:100%;">
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
					<a class="ghost-button" style="letter-spacing:5px;" href="" data-toggle="modal" data-target="#myModal"><b>SERVICIOS</b></a>

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
	

	<section class="container-fluid" style="height:100%; width:100%;">
		<div class="row">
				<div class="col-md-6 header-index">
					<div class="row">
						sta. maria
					</div>
				</div>

				<div class="col-md-6">
					<div class="row azul" >
						betania
					</div>
					<div class="row verde">
					 	auditorio
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
		        	<h4 class="modal-title text-center" id="myModalLabel">NUESTRA HISTORIA</h4>
		      	</div>
		      	<div class="modal-body">		      
		        	<p>
		        		A partir de una inquietud sentida durante su vida sacerdotal y de muchos años de lucha, el padre Nicalás Nicolaes logra fundar en el año 1955 una institución evangelizadora dentro de la Iglesia Católica, llamada Fraternidad Misionera de la Cruz.
		        		<br><br>
		        		La razón de ser de esta fundación es la santificación de los miembros y la difusión del evangelio en los ambientes del mundo actual, saliendoal encuentro de las personas necesitadas de Dios. Sin ruido, sin renombre, sin distintivo. Como levadura en la masa.
		        		<br><br>
						Durante 50 años la <b>FMC</b> siguiendo las inspiraciones del fundador ha sido un ejército de vanguardia en la misión evangelizadora de la Iglesia Católica.
						<br><br>
						Para el padre Nicolás Nicolaes la tecnología moderna constituye un instrumento por excelencia de evangelización. El se preocuoa por utilizar los medios masivos sin descuidar el contacto de persona a persona. Todos los momentos y espacios de la vida cotidiana han de ser aprovechados por la difusión del mensaje de Cristo. Solo así, la <b>FMC</b> logrará realizar su carisma.
						<br><br>
						A la luz de Jesús en la Cruz y bajo la protección de Nuestra Señora de los Dolores, la <b>FMC</b> continúa hoy su misión evangelizadora al servicio de Cristo y su Iglesia.
						<br><br>
						Damos gracias al Creador por sus bendiciones en los 50 años de nuestra fundación.
		        	</p>
		      	</div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      	</div>
	    	</div>
	  	</div>
	</div>





	
	<!-- SCRIPTS FOR ANIMATION -->
	<?php include 'includes/scripts.php'; ?>

</body>
</html>