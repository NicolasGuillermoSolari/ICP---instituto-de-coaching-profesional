<?php 
	$nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];


	if(mail('nyko.zolary@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>