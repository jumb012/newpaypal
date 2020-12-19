<?php
include('config.php');
session_start();
 
if (isset($_POST['logear'])) {
 
    $Correo = $_POST['Correo'];
    $Contrasena = $_POST['Contrasena'];
    $password_hash = password_hash($Contrasena, PASSWORD_BCRYPT);
 
    $query = $connection->prepare("SELECT * FROM registro_usuario WHERE Correo=:Correo");
    $query->bindParam("Correo", $Correo, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password_hash, $result['Contraseña'])) {
            $_SESSION['id'] = $result['id'];
            header("index.php");
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}

?>