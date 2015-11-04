<?php 
/******************************************************/
/* CONSTANTES DE RUTA, NOMBRE Y EXRENSIÓN */
/******************************************************/

define("RUTA", "img/auditorio");
define("EXTENSION", ".jpg");
define("NOMBRE", "5736c9_");

/******************************************************/
/* IMPRESIÓN DINÁMICA DE FOTOS E INDICADORES */
/******************************************************/

for ($i = 0; $i < 7; $i++) { 
	$imagen = NOMBRE.($i + 1).EXTENSION;

	if ($i == 0) {
		echo '<div class="item active">
				<img img="img-responsive" src="'.RUTA."/".$imagen.'">
			</div>';
	} 

	else {
		echo '<div class="item">
				<img img="img-responsive" src="'.RUTA."/".$imagen.'">
			</div>';
	}

}



 ?>