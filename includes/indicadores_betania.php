<?php 
/****************************************************************/
/* IMPRESIÓN INTERACTIVA DE LOS INDICADORES */
/****************************************************************/

for ($i = 0; $i   < 7; $i ++) { 
	if ($i == 0) {
		echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'" class="active"></li>';
	}
	else{
		echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'"></li>';
	}
}



 ?>