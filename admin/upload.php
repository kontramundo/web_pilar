<?php

$input  = trim($_POST['input']);
$folder = trim($_POST['folder']);
$uniqid = trim($_POST['uniqid']);

$server = $_SERVER['DOCUMENT_ROOT'].parse_url('http://labs.kontramundo.com/pilar/', PHP_URL_PATH);

//Ruta donde se guardan los archivos
$folder = $server.'/'.$folder;

if (!empty($_FILES))
{
	//nombre Temporal
	$tmp_file = $_FILES['archivo']['tmp_name'];
	$file = $_FILES['archivo']['name'];
	$file_type = $_FILES['archivo']['type'];

	//Formatos permitidos
	$types_permitidos = array("image/jpeg");

	if (in_array($file_type,$types_permitidos))
	{
		//ID UNICO ARCHIVO
		$uniqid_archivo=$uniqid;

		//Genera nuevo nombre de archivo
		$nuevo_nombre=strtolower($uniqid_archivo.".jpg");
		$folder=rtrim($folder,'/') . '/' .$nuevo_nombre;

		if (move_uploaded_file($tmp_file, $folder))
		{
			?>
			<button type="button" class="btn btn-success btn-large" style="cursor: default"><i class="fa fa-check"></i></button>
			<?php
			
		}
		else
		{
			?>
			<button type="button" class="btn btn-warning btn-large" style="cursor: default"><i class="fa fa-exclamation-triangle"></i></button>
			<?php
		}
	}
	else
	{
		?>
		<button type="button" class="btn btn-warning btn-large" style="cursor: default"><i class="fa fa-times"></i></button>
		<?php
	}
}