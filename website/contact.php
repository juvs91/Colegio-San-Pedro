<!--PHP para enviar correo de más informaci+on-->


<?php
/*header('Content-Type: text/xml; charset=ISO-8859-1'); */

	header('Content-Type: text/html; charset=ISO-8859-1');

if(isset($_REQUEST['enviar_contacto'])){
	$email_from = $_POST['email'];
	$contacto = $_REQUEST['nombre_input'];
	$contacto_email = $_REQUEST['email'];
	$msg = 'Colegio San Pedro | Contacto'."\r\n\n\n".'------------------------------'."\r\n\n".'Asunto: '.$_REQUEST["asunto_input"]."\r\n".'Nombre: '.$_REQUEST["nombre_input"]."\r\n".'Email: '.$_REQUEST['email']."\r\n".'Mensaje: '.$_REQUEST['mensaje_input'];
	$headers = 'From: '.$email_from."\r\n";
	$msg2 = $contacto.','."\r\n\n".'Gracias por tomarnos en cuenta, nosotros nos pondremos en contacto contigo lo más pronto posible.'."\r\n\n".'--'."\n".'Colegio San Pedro';
	
	
	@mail('rms.julle@gmail.com ','Systheam|Contacto',$msg,$headers);
	
	@mail($contacto_email,'Colegio San Pedro',$msg2,$headers);
	
}


echo "  <script language='JavaScript'> 
		alert('Nosotros nos pondremos en contacto contigo lo mas pronto posible.');
		location.href='index.php';
        </script>";
					
?>