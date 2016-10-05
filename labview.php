<?php 
	include_once('labview/clFile.php');
	include_once('labview/cllabview.php');

	if (isset($_FILES['archivo']) && isset($_POST['password'])) {
		if (!empty($_FILES['archivo']) && !empty($_POST['password']) && isset($_POST['check'])) {	
			$dir_subida = getcwd() . 'labview/temporary/';
			$fichero_subido = $dir_subida . basename($_FILES['archivo']['name']);

			if(move_uploaded_file($_FILES["archivo"]["tmp_name"], $fichero_subido)) {
				$file = new clFile();
				$file->readFromFile($fichero_subido); //- open File
				$newPassword = $_POST['password'];

				$FReader = $file->getFileReader();

				//- create a Labview class to controle the process
				$LV = new clLabView($FReader);

				//- read .VI File
				if ($LV->readVI()){

				    //- Password
					$BDPW = $LV->getBDPW();
				  	$BDPW->setPassword($newPassword); //- set the new password

					//- Version + Library Password
					$LVSR = $LV->getLVSR();
					$LVSR->setLibraryPassword($newPassword); //- set the new Library Password

				    // - save the .VI (this will calculate the password hash)
					if (!$LV->store($fichero_subido)){
						echo '<b>Error: </b><pre>'. $LV->getErrorStr() .'</pre>';
					}else{
						echo "<a href='labview/download.php?file=" . $_FILES['archivo']['name'] . "' >Download</a>";
					}
				} 
			}
		}else{
			$mensaje = "Por favor complete lo siguiente: <br/>";
			if(empty($_FILES['archivo']['name'])){
				$mensaje .= "- Escoja un archivo. <br/>";
			}
			if(empty($_POST['password'])){
				$mensaje .= "- Escriba una contraseña <br/>";
			}
			if(!isset($_POST['check'])){
				$mensaje .= "- Acepte las condiciones del servicio <br/>";
			}
		}
	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="archivo">
		<input type="password" name="password">
		<input type="checkbox" name="check" value="yes">
		<input type="submit" value="Enviar">
	</form>
	<?php if(isset($mensaje)) echo $mensaje ?> 
</body>
</html>