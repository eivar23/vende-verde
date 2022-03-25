<?php
    session_start();

  $username = "root";
	$host ="localhost";
	$password = "12345678";
	$bd = "bdverde";

    $correo = $_POST['correo'];
    $pass = $_POST['password'];

	$con = new mysqli("$host", "$username", "$password", "$bd");

	if ($con->connect_error) {
		die("conexion fallida". $con->connect_error); 
	}
 
    // Consulta segura para evitar inyecciones SQL.
    // $sql = sprintf("SELECT * FROM usuarios WHERE correo='%s' AND password = %s", mysql_real_escape_string($correo), mysql_real_escape_string($pass));
 //   $sql = 'select * from usuarios where correo = "'.mysql_real_escape_string($correo).'" and pass = "'.mysql_real_escape_string($pass).'"';
    
    $sql = "SELECT * FROM `usuarios` WHERE correo = 'juana@gmail.com' AND pass = 'juana'";

    $resultado = $con->query($sql);

   
    // Verificando si el usuario existe en la base de datos.
    if($resultado){
    // Guardo en la sesión el email del usuario.
    $_SESSION['correo'] = $correo;

    while ($fila = $resultado->fetch_row()) {
        $nombre= $fila[1];
    }
    echo $nombre;

    ?>
    <script>
      document.getElementById("login-btn").innerHTML = "New text!";
    </script>
    <?php
   
  }else{
    echo 'El email o password es incorrecto, <a href="../registro.html">vuelva a intenarlo</a>.<br/>';
  }

?>
