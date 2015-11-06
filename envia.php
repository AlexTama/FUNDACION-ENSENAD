<?php
//comprueba que exista la petición y no está vacío el arreglo

if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]) {

	/**************************************************************************/
	/* CONTROL DE SPAM CON EL SISTEMA DE RECAPTCHA */
	/**************************************************************************/

	$secret_key = "6LdJVxATAAAAADNL4J2Qct5L9483Me-xrqz5gPq6";
	$ip 		= $_SERVER["REMOTE_ADDR"];			//ip del usuario de la aplicación
	$captcha	= $_POST["g-recaptcha-response"];	//captura los datos de validación
	$result		= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$captcha&remoteid=$ip");

	if ($result) {

		if (isset($_POST["enviar"])) {

			/**************************************************************************/
			/* CAPTURA DE DATOS DEL USUARIO PARA EL ENVÍO DEL FORMULARIO */
			/**************************************************************************/

			@$nombre 	= $_POST["nombre"];
			@$asunto 	= $_POST["asunto"];
			@$email 		= $_POST["email"];
			@$mensaje 	= $_POST["mensaje"];
			
			/**************************************************************************/
			/* ENVÍO DE DATOS AL CORREO */
			/**************************************************************************/

			$to 		= "alextamayop@gmail.com";
			$subject 	= $asunto;
			$message	= $mensaje;
			$headers	= "From: ".$nombre." ".$email;

			
			include 'gracias.php' ;

			/*if (@mail($to, $subject, $message, $headers)) {
				include '../gracias.php';
			}

			else {

			}*/

		}

	} 

	else {
		echo "falló envío";
	}
}

 ?>