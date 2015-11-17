<?php
//comprueba que exista la petición y no está vacío el arreglo

if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"] && $_POST["enviar"]) 
{

	/**************************************************************************/
	/* CONTROL DE SPAM CON EL SISTEMA DE RECAPTCHA */
	/**************************************************************************/

	$secret_key = "6LeQJBETAAAAAJbzkU2zmjUSNvjh7CnKLtZkHynm";
	//$ip 		= $_SERVER["REMOTE_ADDR"];			//ip del usuario de la aplicación &remoteid=$ip
	$captcha	= $_POST["g-recaptcha-response"];	//captura los datos de validación
	$result		= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$captcha");

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

	if (!($result)) 
	{
		if (@mail($to, $subject, $message, $headers))
		{
			include 'gracias.php';
		}

		else 
		{
			echo "no envio correo por no estar en servudor remto";
		}
	}

	else
	{
		echo "Puedo enviar el correo";
	}

}

else 
{
	include 'ERROR.php';
}

 ?>