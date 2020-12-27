<?php
include('Conexion.php');
if (isset($_POST['txtTelefono'])) {
    $Num_telefono = $_POST['txtTelefono'];
    $Correo = $_POST['txtEmail'];
    $Nombre = $_POST['txtNombre'];
    $Ap_Pat = $_POST['txtApellidoP'];
    $Ap_Mat = $_POST['txtApellidoM'];
    $Contraseña = $_POST['txtPassword'];
    $Vcontraseña = $_POST['txtVpassword'];
    $Fecha_nacimiento = $_POST['dateFechaNac'];
    $Direccion = $_POST['txtDireccion'];
    $Colonia = $_POST['txtColonia'];
    $Codigo_postal = $_POST['txtCodPostal'];
    $Ciudad = $_POST['txtCiudad'];
    $Estado = $_POST['selEstados'];
    $password_hash = md5($Contraseña);
    $sql= "INSERT INTO registro_usuario(id,Num_telefono,Correo,Nombre,Ap_pat,Ap_mat,Contraseña,Fecha_nacimiento,Direccion,Colonia,Codigo_postal,Ciudad,Estado) 
    VALUES ('1','$Num_telefono','$Correo','$Nombre','$Ap_Pat','$Ap_Mat','$Contraseña','$Fecha_nacimiento','$Direccion','$Colonia','$Codigo_postal','$Ciudad','$Estado')";
    if ($conn->query($sql)===TRUE) {
        echo "HECHO";
    }
} 
?>