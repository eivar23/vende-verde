<?php
	
include_once 'php/user.php';
include_once 'php/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
	//echo "Hay sesión";
	$user->setUser($userSession->get_current_user());
	include_once ' vistas/home.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){
	//echo "validacion de login";

	$userForm = $_POST['username'];
	$passForm = $_POST['password'];

	if ($user->userExists($userForm, $passForm)) {
		//echo "usuario vaidado";
        
		$userSession->setCurrentUser($userForm);
		$user->setUser($userForm);

		include_once 'vistas/home.php';
	}else{
		//echo "nombre de usuario o contraseña incorrecto";
		$errorLogin = "nombre de usuario y/o pass es incorrecto";
		include_once 'vistas/home.php';

	}

}else{
	include_once 'vistas/home.php';
}


?>