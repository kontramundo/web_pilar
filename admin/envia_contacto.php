<?php
include_once 'phpmailer/PHPMailerAutoload.php';

//Recibe variables POST
$asunto=trim($_POST['asunto']);
$nombre=trim($_POST['nombre']);
$telefono=trim($_POST['telefono']);
$email=trim($_POST['email']);
$mensaje=trim($_POST['mensaje']);

if (!get_magic_quotes_gpc())
{
	$asunto  = addslashes($asunto);
	$nombre  = addslashes($nombre);
	$telefono  = addslashes($telefono);
	$email   = addslashes($email);
	$mensaje = addslashes($mensaje);
}


//MENSAJE
$mensaje=utf8_decode('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>[SUBJECT]</title>
	<style type="text/css">

@media screen and (max-width: 600px) {
    table[class="container"] {
        width: 95% !important;
    }
}

	#outlook a {padding:0;}
		body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
		.ExternalClass {width:100%;}
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
		#backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
		img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
		a img {border:none;}
		.image_fix {display:block;}
		p {margin: 1em 0;}
		h1, h2, h3, h4, h5, h6 {color: black !important;}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

		h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
			color: red !important; 
		 }

		h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
			color: purple !important; 
		}

		table td {border-collapse: collapse;}

		table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

		a {color: #000;}

		@media only screen and (max-device-width: 480px) {

			a[href^="tel"], a[href^="sms"] {
						text-decoration: none;
						color: black; /* or whatever your want */
						pointer-events: none;
						cursor: default;
					}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
						text-decoration: default;
						color: orange !important; /* or whatever your want */
						pointer-events: auto;
						cursor: default;
					}
		}


		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
			a[href^="tel"], a[href^="sms"] {
						text-decoration: none;
						color: blue; /* or whatever your want */
						pointer-events: none;
						cursor: default;
					}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
						text-decoration: default;
						color: orange !important;
						pointer-events: auto;
						cursor: default;
					}
		}

		@media only screen and (-webkit-min-device-pixel-ratio: 2) {
			/* Put your iPhone 4g styles in here */
		}

		@media only screen and (-webkit-device-pixel-ratio:.75){
			/* Put CSS for low density (ldpi) Android layouts in here */
		}
		@media only screen and (-webkit-device-pixel-ratio:1){
			/* Put CSS for medium density (mdpi) Android layouts in here */
		}
		@media only screen and (-webkit-device-pixel-ratio:1.5){
			/* Put CSS for high density (hdpi) Android layouts in here */
		}
		/* end Android targeting */
		h2{
			color:#181818;
			font-family:Helvetica, Arial, sans-serif;
			font-size:22px;
			line-height: 22px;
			font-weight: normal;
		}
		a.link1{

		}
		a.link2{
			color:#fff;
			text-decoration:none;
			font-family:Helvetica, Arial, sans-serif;
			font-size:16px;
			color:#fff;border-radius:4px;
		}
		p{
			color:#555;
			font-family:Helvetica, Arial, sans-serif;
			font-size:16px;
			line-height:160%;
		}
	</style>

<script type="colorScheme" class="swatch active">
  {
    "name":"Default",
    "bgBody":"ffffff",
    "link":"fff",
    "color":"555555",
    "bgItem":"ffffff",
    "title":"181818"
  }
</script>

</head>
<body>
	<!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
	<table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class="bgBody">
	<tr>
		<td>
	<table cellpadding="0" width="620" class="container" align="center" cellspacing="0" border="0">
	<tr>
		<td>
		<!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->
		

		<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
			<tr>
				<td class="movableContentContainer bgItem">

					<div class="movableContent">
						<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" class="container">
							<tr height="30">
								<td width="200">&nbsp;</td>
								<td width="200">&nbsp;</td>
								<td width="200">&nbsp;</td>
							</tr>
							<tr>
								<td width="200" valign="top">&nbsp;</td>
								<td width="200" valign="top" align="center">
									<div class="contentEditableContainer contentImageEditable">
					                	<div class="contentEditable" align="center" >
					                  		<img src="http://labs.kontramundo.com/pilar/assets/img/logo_grande.jpg"  width="300" alt="Logo"  data-default="placeholder" />
					                	</div>
					              	</div>
								</td>
								<td width="200" valign="top">&nbsp;</td>
							</tr>

						</table>
					</div>

					<div class="movableContent">
						<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
							<tr>
								<td width="100%" colspan="3" align="center" style="padding-bottom:10px;padding-top:20px;">
									<div class="contentEditableContainer contentTextEditable">
					                	<div class="contentEditable" align="center" >
					                  		<h2 >Contacto</h2>
					                	</div>
					              	</div>
								</td>
							</tr>
							<tr>
								<td width="100">&nbsp;</td>
								<td width="500" align="center">
									<div class="contentEditableContainer contentTextEditable">
					                	<div class="contentEditable" align="left" >
					                		<p><b>Asunto:</b> '.$asunto.'</p>
					                  		<p><b>Nombre:</b> '.$nombre.'</p>
					                  		<p><b>Tel&eacute;fono:</b> '.$telefono.'</p>
					                  		<p><b>Email:</b> '.$email.'</p>
					                  		<p><b>Mensaje:</b> '.$mensaje.'</p>
					                	</div>
					              	</div>
								</td>
								<td width="100">&nbsp;</td>
							</tr>
						</table>

					</div>


					<div class="movableContent">
						<table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
							<tr>
								<td width="100%" colspan="2" style="padding-top:65px;">
									<hr style="height:1px;border:none;color:#333;background-color:#ddd;" />
								</td>
							</tr>
							<tr>
								<td width="70%" height="70" valign="middle" style="padding-bottom:20px;">
									<div class="contentEditableContainer contentTextEditable">
					                	<div class="contentEditable" align="left" >
					                  		<span style="font-size:13px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%;">Pilar El&eacute;ctrica S.A. de C.V.</span>
											<br/>
											<span style="font-size:11px;color:#555;font-family:Helvetica, Arial, sans-serif;line-height:200%;">Guillermo Prieto, Loma Bonita, 54759 Cuautitl&aacute;n Izcalli, Estado de M&eacute;xico</span>
											<br/>
					                	</div>
					              	</div>
								</td>
								<td width="30%" height="70" align="right" align="left" style="padding-bottom:20px;">
									<div class="contentEditableContainer contentTextEditable">
					                	<div class="contentEditable" align="left" >
					                  		<span style="font-size:13px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%;">Tel&eacute;fonos</span>
											<br/>
											<span style="font-size:11px;color:#555;font-family:Helvetica, Arial, sans-serif;line-height:200%;">5870-6083 / 2620-3025 / 5870-4823</span>
											<br/>
					                	</div>
					              	</div>
									</table>
								</td>
							</tr>
						</table>
					</div>


				</td>
			</tr>
		</table>

		
		

	</td></tr></table>
	
		</td>
	</tr>
	</table>
	<!-- End of wrapper table -->
</body>
</html>
');

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Configuracion
$mail->isSMTP();


//Set the hostname of the mail server
$mail->Host = 'smtp.live.com ';
$mail->Port = 25;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "heisenb3rg@outlook.com";
$mail->Password = "chapulin8";

//Set who the message is to be sent from
$mail->setFrom('heisenberg@kontramundo.com', utf8_decode('Pilar Eléctrica'));
$mail->addReplyTo('heisenberg@kontramundo.com', utf8_decode('Pilar Eléctrica'));
$mail->addAddress('heisenb3rg@gmail.com', utf8_decode('Pilar Eléctrica'));
$mail->addCC('chavadorsj@hotmail.com');

//Set the subject line
$mail->Subject = 'Contacto';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($mensaje);


//send the message, check for errors
if ($mail->send()) 
{
    echo "1";
}
?>