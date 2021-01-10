<?php
include('Conexion.php');

if(isset($_POST['txtEmail'])){
    $Correo = $_POST['txtEmail'];
    $Nombre = $_POST['txtNombre'];
    $Contraseña = $_POST['txtPassword'];
    $Vcontraseña = $_POST['txtVpassword'];
    $Contraseña_h = md5($Contraseña);
    $Direccion = $_POST['txtDireccion'];
    $Colonia = $_POST['txtColonia'];
    $Codigo_postal = $_POST['txtCodPostal'];
    $Ciudad = $_POST['txtCiudad'];
    $Estado = $_POST['selEstados'];
    $id_h = md5($Correo);     
    if($_POST['txtTipoCuenta']==1){
        $TipoCuenta="Personal";
        $Num_telefono = $_POST['txtTelefono'];
        $Ap_Pat = $_POST['txtApellidoP'];
        $Ap_Mat = $_POST['txtApellidoM'];
        $Fecha_nacimiento = $_POST['dateFechaNac'];        
        $sql= "INSERT INTO registro_usuario(Num_telefono,Correo,Nombre,Ap_pat,Ap_mat,Contraseña,Fecha_nacimiento,Direccion,Colonia,Codigo_postal,Ciudad,Estado,Tipo_Cuenta,id_h) 
        VALUES ('$Num_telefono','$Correo','$Nombre','$Ap_Pat','$Ap_Mat','$Contraseña_h','$Fecha_nacimiento','$Direccion','$Colonia','$Codigo_postal','$Ciudad','$Estado','$TipoCuenta','$id_h')";    
        if ($conn->query($sql)===TRUE) {
            header("Location:../signin.php");
        }else{
            $_SESSION['error']="Ha ocurrido un error al registrar su cuenta, intentelo de nuevo.";
            header('Location:../welcome/signup_personal.php');
        }
    }else{
        $TipoCuenta="Empresarial";
        $RFC = $_POST['txtRFC'];
        $MSI = $_POST['selMSI'];
        if ($MSI==TRUE) {
            $MSIR = '1';
        }else {
            $MSIR = '0';
        }
        $VentasMensuales = $_POST['selVentas'];
        $sql= "INSERT INTO registro_usuario(Correo,Nombre,Contraseña,Direccion,Colonia,Codigo_postal,Ciudad,Estado,Tipo_Cuenta,id_h,Ventas_Mensuales,MSI,RFC) 
        VALUES ('$Correo','$Nombre','$Contraseña_h','$Direccion','$Colonia','$Codigo_postal','$Ciudad','$Estado','$TipoCuenta','$id_h','$VentasMensuales','$MSIR','$RFC')";    
        if ($conn->query($sql)===TRUE) {
            header("Location:../signin.php");
        }else{
            $_SESSION['error']="Ha ocurrido un error al registrar su cuenta, intentelo de nuevo.";
           header('Location:../welcome/signup_personal.php');
        }
    }
    
}
?>