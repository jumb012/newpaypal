<!DOCTYPE html>
<html lang="es">
<head>
	<title>PayPal: lista de contactos</title>
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
        <li class="nav-item eys-op">
          <a class="nav-link btn" href="request.php">Solicitar</a>
        </li>
        <li class="nav-item eys-op actual">
          <a class="nav-link btn" href="contact-list.php" style="color: #0070ba"><h4 style="font-size: 18px; margin-top: 11px;margin-left: -10px">Contactos</h4></a>
        </li>
    </ul>
    <section class="contenedor container">                
        <div class="row contenido" style="margin-top: -70px">
            <div class="col-sm-7"> <!-- Inicia Columna 1 -->
                <div class="row" style="background-color: white; height: 100%; border-radius: 5px;">
                    <div class="col" style="margin: 30px;">
                    <form class="form-group" style="margin-top: 10px">
                        <input class="form-control" style="height: 50px" type="text" placeholder="Buscar">
                    </form></div>
                </div>
            </div> <!-- Termina Columna 1 -->
            <div class="col-sm-4" style="margin-left: 20px"> <!-- Inicia Columna 2 -->
                <div class="row" style="background-color: white; height: 100%; border-radius: 5px;">
                    <div class="col" style="margin: 20px">
                        <h6 class="h4" style="text-align: center; font-size: 15px">Su perfil</h6>
                        <hr>
                        <div style="display: grid; place-items:center;">
                            <img src="https://ui-avatars.com/api/?name=Jassiel+Martinez&background=random" style="border-radius: 50%; margin-top: 20px">
                        </div>
                        <h4 class="display-4" style="text-align: center; font-size: 22px; margin-top: 20px">Jassiel Martinez</h4>
                        <h4 class="h4" style="color: #0070ba;text-align: center; font-size: 15px">@JassielMartinez</h4>
                        <h4 style="text-align: center; margin-top: 30px">
                            <button class="btn btn-outline-primary" style="border-radius: 30px" data-toggle="modal" data-target="#PaypalMeModal">Administrar perfil</button>
                        </h4>
                    </div>
                </div>
                <div class="modal fade" id="PaypalMeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Su PayPal.Me</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                             </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Termina Columna 2 -->
        </div>
    </section>
</body>
</html>