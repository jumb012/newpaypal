<?php
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) {
if (empty($_POST['Email']) || empty($_POST['Contraseña'])) {
$error = "Email o contraseña incorrectos";
}
else
{
// Define $username y $password
$Email=$_POST['Email'];
$Contraseña=$_POST['Contraseña'];
// Estableciendo la conexion a la base de datos
include("Conexion.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos

// Para proteger de Inyecciones SQL 
$Email = mysqli_real_escape_string($con,(strip_tags($Email,ENT_QUOTES)));
$Contraseña =  password_hash($Contraseña, PASSWORD_BCRYPT);


$sql = "SELECT Email, Contraseña FROM registro_usuario WHERE Email = '" . $Email . "' and Contraseña='".$Contraseña."';";
$query=mysqli_query($con,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$Email; // Iniciando la sesion
		header("location: profile.php"); // Redireccionando a la pagina profile.php
	
	
} else {
$error = "El correo electrónico o la contraseña es inválida.";	
}
}
}
?>