<?php
define('USER', 'ybNq4cirus');
define('PASSWORD', 's00IjwuIE3');
define('HOST', 'remotemysql.com');
define('DATABASE', 'ybNq4cirus');

    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>