<?php
 
include('Conexion.php');
session_start();
 
if (isset($_POST['registro'])) {
 
    $Num_telefono = $_POST['Num_telefono'];
    $Correo = $_POST['Correo'];
    $Nombre = $_POST['Nombre'];
    $Ap_Pat = $_POST['Ap_Pat'];
    $Ap_Mat = $_POST['Ap_Mat'];
    $Contraseña = $_POST['Contraseña'];
    $Fecha_nacimiento = $_POST['Fecha_nacimiento'];
    $Direccion = $_POST['Direccion'];
    $Colonia = $_POST['Colonia'];
    $Codigo_postal = $_POST['Codigo_postal'];
    $Ciudad = $_POST['Ciudad'];
    $Estado = $_POST['Estado'];
    $password_hash = password_hash($Contraseña, PASSWORD_BCRYPT);
 
    $query = $connection->prepare("SELECT * FROM registro_usuario WHERE Correo=:Correo");
    $query->bindParam("Correo", $Correo, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">La dirección de correo ya ha sido registrada!</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO registro_usuario(Num_telefono,Correo,Nombre,Ap_pat,Ap_mat,Contraseña,Fecha_nacimiento,Direccion,Colonia,Codigo_postal,Ciudad,Estado) VALUES (:Num_telefono, :Correo, :Nombre, :Ap_pat, :Ap_mat,:password_hash, :Fecha_nacimiento, :Direccion, :Colonia, :Codigo_postal, :Ciudad, :Estado)");
        $query->bindParam("Num_telefono", $Num_telefono, PDO::PARAM_STR);
        $query->bindParam("Correo", $Correo, PDO::PARAM_STR);
        $query->bindParam("Nombre", $Nombre, PDO::PARAM_STR);
        $query->bindParam("Ap_Pat", $Ap_pat, PDO::PARAM_STR);
        $query->bindParam("Ap_Mat", $Ap_mat, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("Fecha_nacimiento", $Fecha_nacimiento, PDO::PARAM_STR);
        $query->bindParam("Direccion", $Direccion, PDO::PARAM_STR);
        $query->bindParam("Colonia", $Colonia, PDO::PARAM_STR);
        $query->bindParam("Codigo_postal", $Codigo_postal, PDO::PARAM_STR);
        $query->bindParam("Ciudad", $Ciudad, PDO::PARAM_STR);
        $query->bindParam("Estado", $Estado, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Tu registro fue exitoso!</p>';
            return 
        } else {
            echo '<p class="error">Algo fue mal!</p>';
        }
    }
}
 
?>