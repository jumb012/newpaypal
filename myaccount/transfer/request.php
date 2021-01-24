<!DOCTYPE html>
<html lang="es">
<head>
	<title>PayPal: solicitar pago</title>
	<meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    
        <!-- jQuery -->
        <script crossorigin="anonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
        </script>
        <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="../resources/navbar2/navbar2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../resources/global/global.css">
    <link rel="stylesheet" type="text/css" href="../resources/navbar2/navbar2.css">
</head>
<body>
	<header class="fijado">
	<?php include("components/navbar2.php"); ?>
    </header>
    <ul class="nav justify-content-center nav_eys">
        <li class="nav-item eys-op" style="margin-left: 0px;">
          <a class="nav-link btn" href="pay.php">Enviar</a>
        </li>
        <li class="nav-item eys-op actual">
          <a class="nav-link btn" href="request.php" style="color: #0070ba"><h4 style="font-size: 18px; margin-top: 11px;">Solicitar</h4></a>
        </li>
        <li class="nav-item eys-op">
          <a class="nav-link btn" href="contact-list.php">Contactos</a>
        </li>
    </ul>
    <section class="contenedor container">                
        <div class="row contenido" style="margin-top: -70px">
            <div class="col-sm-7"> <!-- Inicia Columna 1 -->
                <div class="row" style="background-color: white; height: 100%; border-radius: 5px;">
                    <div class="col" style="margin: 30px;">
                    <h5 class="h5" style="color: #333;">Solicite un pago a cualquier persona</h5>
                    <label style="margin-top: 10px">Simplemente use su correo electrónico o número de celular para solicitar el pago.</label>
                    <form class="form-group" style="margin-top: 10px">
                        <input class="form-control" style="height: 50px" type="text" placeholder="Nombre, correo electrónico o número de celular">
                        <div class="row" style="position: relative; margin-top: 30px;">
                            <button class="btn btn-primary" type="summit" style="margin-left: 15px; border-radius: 30px; height: 50px; width: 120px;">Siguiente</button>
                        </div>
                    </form></div>
                </div>
            </div> <!-- Termina Columna 1 -->
            <div class="col"></div>
            <div class="col-sm-4"> <!-- Inicia Columna 2 -->
                <a href="../invoice/manage.php">
                    <div class="row">
                    <div class="col-2">
                        <img src="../resources/icons/invoice.svg" height="40px" style="border: 2px solid; border-radius: 50%;">
                    </div>
                    <div class="col" style="color: black;">
                        <h6>Crear formato de pago</h6>
                        <p style="font-size: 14px">Personalice, rastree y envíe formatos de pago.</p>
                    </div></div>
                </a>
            </div> <!-- Termina Columna 2 -->
        </div>
    </section>
</body>
</html>