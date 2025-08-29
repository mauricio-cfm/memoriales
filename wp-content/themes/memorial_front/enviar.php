<?php 

	setlocale(LC_ALL, 'es_CL');
	date_default_timezone_set("America/Santiago");

	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];		
	
// Varios destinatarios
$para  = 'wroblero@museodelamemoria.cl' . ', '; // atención a la coma
$para .= 'areati@museodelamemoria.cl';

// título
$título = 'Contacto Interactivo Memoriales MMDH';

// mensaje
$mensaje = '
<html>
<head>
<title>Contacto Interactivo Memoriales MMDH</title>
</head>
<body>
  <p>Este mail fue generado desde el formulario de contacto del Interactivo Memoriales MMDH</p>
  <table>
    <tr>
      <td>Nombre: </td>
	  <td>'.$nombre.'</td>
	</tr>
    <tr>
      <td>Mail: </td>
	  <td>'.$mail.'</td>
    </tr>
    <tr>
      <td>Asunto: </td>
	  <td>'.$asunto.'</td>
    </tr>
    <tr>
      <td>Mensaje: </td>
	  <td>'.$mensaje.'</td>
    </tr>
  </table>
  
  <p>Por favor no responder este mail.</p>
  
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: Interactivo Memoriales <interactivo.memoriales@museodelamemoria.cl>' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
	
	
?>
	<script languaje="javascript">
    alert("Mensaje enviado con exito!");	
	window.location = "https://interactivos.museodelamemoria.cl/memoriales/";
    </script>

