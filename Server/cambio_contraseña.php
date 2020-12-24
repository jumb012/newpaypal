<?php

include('Conexion.php');
session_start();

if (isset($_POST['cambio'])) {

    $Email = $_POST['Email'];
    $Contraseña = $_POST['Contraseña'];
    
 
    $query = $connection->prepare("UPDATE registro_usuario set Contraseña=:Contraseña WHERE Email=:Email");
    	$query->bindParam("Email", $Email, PDO::PARAM_STR);
        $query->bindParam("Contraseña", $Contraseña, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Tu registro fue exitoso!</p>';
            return ;
        }
        else {
            echo '<p class="error">Algo fue mal!</p>';
        }
    }

?>