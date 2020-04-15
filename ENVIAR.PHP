<? // Datos
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$asunto=$_POST["asunto"];
$mensaje=$_POST["mensaje"];

//fin de recepcion de datos
/// accion de envio
///-----/
$para="siralex747@gmail.com"
$menssage"
mensaje de:
".$nombre."
correo:

".$correo."
Asunto:
".$asunto."
Mensaje de:
".$mensaje."
";
$desde"from:".$correo."siralex747@gmail.com";
ini_set(sendmail_from,siralex@gmail.com);
mail($para)
	
	
	
	