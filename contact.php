<?
echo "1";
if ($_POST){
    //Estoy recibiendo el formulario, compongo el cuerpo
    $cuerpo = "Formulario enviado\n";
    $cuerpo .= "Nombre: " . $_POST["name"] . "\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\n";
    $cuerpo .= "Website: " . $_POST["website"] . "\n";
    $cuerpo .= "Comentarios: " . $_POST["message"] . "\n";

	//para el envío en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	
	//dirección del remitente
	$headers .= "From: dateelcapricho <dateelcapricho@dateelcapricho.es>\r\n";
	
	//dirección de respuesta, si queremos que sea distinta que la del remitente
	$headers .= "Reply-To: dateelcapricho@dateelcapricho.es\r\n";
	
	//ruta del mensaje desde origen a destino
	$headers .= "Return-path: dateelcapricho@dateelcapricho.es\r\n";
	
    //mando el correo...
    mail("dateelcapricho@dateelcapricho.es",$_POST["subject"],$cuerpo,$headers);

    //doy las gracias por el envío
    echo "Gracias por rellenar el formulario. Se ha enviado correctamente.\n\n" . $_POST["subject"] . "\n" . $cuerpo;
}
?>
