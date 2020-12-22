<?php

include('Conexion.php');
session_start();
 
if (isset($_POST['cambio'])) {
 
$Email=$_POST["Email"];
$Contraseña=$_POST["Contraseña"];

$connection=mysqli_connect($db_host, $db_user, $db_password, $db_name);

$query="UPDATE registro_usuario SET Contraseña='$Contraseña' WHERE Email=$Email";

$recordset=mysqli_query($connection, $query);

echo "Operacion exitosa.";

?>