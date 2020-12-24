<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['Email']) || empty($_POST['Contraseña'])) {
$error = "Email o contraseña incorrectos";
}
else
{
$Email=$_POST['Email'];
$Contraseña=$_POST['Contraseña'];

include("Conexion.php");

// Para proteger de Inyecciones SQL 
$Email = mysqli_real_escape_string($con,(strip_tags($Email,ENT_QUOTES)));
$Contraseña =  password_hash($Contraseña, PASSWORD_BCRYPT);


$sql = "SELECT Email, Contraseña FROM registro_usuario WHERE Email = '" . $Email . "' and Contraseña='".$Contraseña."';";
$query=mysqli_query($con,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$Email; // Iniciando la sesion
		header("location: profile.php"); // Redireccionando a la pagina
	
	
} else {
$error = "El correo electrónico o la contraseña es inválida.";	
}
}
}
?>