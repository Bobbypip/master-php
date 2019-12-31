<?php

if(isset($_POST)){

	//Conexion a la base de datos
	require_once 'includes/conexion.php';

	//Iniciar sesion
	if(!isset($_SESSION)){
		session_start();
	}

	//Recoger los valores del formulario de registro
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false ;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
	$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

	//Array de errores
	$errores = array();

	//Validar los datos antes de guardarlos en la base de datos
	//Validar campo nombre
	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
		echo "El nombre es v&aacute;lido</br>";
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es v&aacute;lido";
	}

	//Validar apellidos
	if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
		echo "El apellido es v&aacute;lido</br>";
		$apellidos_validado = true;
	}else{
		$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son v&aacute;lidos";
	}

	//Validar email
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "El email es v&aacute;lido</br>";	
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es v&aacute;lido";
	}

	//Validar contraseña
	if(!empty($password)){
		echo "La contrase&ntilde;a es v&aacute;lida</br>";	
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['password'] = "El password esta v&aacute;cio";
	}

	$guardar_usuario = false;
	if(count($errores)==0){
		$guardar_usuario = true;

		//Cifrar la contraseña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

		//var_dump($password);
		//var_dump($password_segura);
		//die();

		//Insertar usuario en la tabla de usuaerios de la BBDD
		$sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
		$guardar = mysqli_query($db, $sql);

		//var_dump(mysqli_error($db));
		//die();

		if($guardar){
			$_SESSION['completado'] = "El registro se ha completado con &eacute;xito";
		}else{
			$_SESSISON['errores']['general'] = "Fallo al guardar el usuario!!";
		}

	}else{
		$_SESSION['errores'] = $errores;

	}
}

header('Location: index.php');

?>