<!DOCTYPE html>
<html lang="es">
<head>
	<title>PayPal: Cartera</title>
	<meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    
        <!-- jQuery -->
        <script crossorigin="anonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
        </script>
        <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="resources/navbar2/navbar2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="resources/global/global.css">
    <link rel="stylesheet" type="text/css" href="resources/navbar2/navbar2.css">
    <link rel="stylesheet" type="text/css" href="resources/global/listado_tarjetas.css">
</head>
<body>
	<header class="fijado">
	<?php include("components/navbar2.php"); ?>
    </header>
    <section class="contenedor container">
        <div class="row contenido">
            <div class="col-sm-4"> <!-- Inicia Columna 1 -->
                <div class="row">
                    <a class="btn" href="../banking_services/bank_account.php">
                        <img src="resources/icons/addBankIcon_fiList.svg">
                        <h4 class="h4" style="font-size: 13px; color: #0070ba; margin-top: 20px;">Asociar una cuenta bancaria</h4>
                    </a>
                    <a class="btn" href="../banking_services/add_card.php">
                        <img src="resources/icons/addCardIcon.svg">
                        <h4 class="h4" style="font-size: 13px; color: #0070ba; margin-top: 20px;">Asociar tarjeta</h4>
                    </a>
                </div>
                <div style="margin-top: 50px">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-bank-list" data-toggle="list" href="#list-bank" role="tab" aria-controls="card">
                            <div class="row">
                                <div class="col-4" style="margin-top: 5px">
                                    <img src="resources/images/generic_bank.webp" height="30px">
                                </div>
                                <div class="col-8" style="margin-left: -30px; margin-top: 5px">
                                    <h6>BANCO <span>SANTANDER</span></h6>
                                    <p style="font-size: 11px; margin-top: -8px; margin-bottom: 2px">Cuenta ••••5430</p>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-card-list" data-toggle="list" href="#list-card" role="tab" aria-controls="card">
                            <div class="row">
                                <div class="col-4" style="margin-top: 5px">
                                    <img src="resources/images/mastercard.png" height="30px">
                                </div>
                                <div class="col-8" style="margin-left: -30px; margin-top: 5px">
                                    <h6>Tarjeta <span>MasterCard</span></h6>
                                    <p style="font-size: 11px; margin-top: -8px; margin-bottom: 2px">••••3312</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> <!-- Termina Columna 1 -->
            <div class="col-sm-8"> <!-- Inicia Columna 2 -->
                <div style="margin-top: 30px">
                    <div class="tab-content" id="nav-tabContent">
<!-- Cuenta Bancaria --><div class="tab-pane fade show active" id="list-bank" role="tabpanel" aria-labelledby="list-bank-list">
                            <div style="display: grid; place-items:center;">
                                <div class="info_bank"> 
                                    <h6 style="bottom: 2px; left:15px;position: absolute;">••••5430</h6>
                                </div>
                            </div>
                            <div style="margin-top: 50px; text-align: center;">
                                <h4 class="display-4" style="font-size: 20px">BANCO SANTANDER</h4>
                                <h4 class="display-4" style="font-size: 20px; margin-bottom: 30px">Cuenta ••••5430</h4>
                                <hr style="width: 55%">
                                <h4 class="h4" style="font-size: 14px;">Transferencias automáticas<p class="display-4" style="font-size: 20px;">si</p></h4>
                                <label><a href="#">Actualización</a><a href="#" style="margin-left: 20px">Eliminar</a></label>
                                <hr style="width: 55%">
                            </div>
                        </div>
<!-- Para la Tarjeta --><div class="tab-pane fade" id="list-card" role="tabpanel" aria-labelledby="list-card-list">
                            <div style="display: grid; place-items:center;">
                                <div class="info_tarjeta">
                                    <img style="position: absolute; top: 65px; left: 110px" src="resources/images/mastercard.png" height="50px">
                                    <h6 style="bottom: 2px; left:15px;position: absolute;color: white">••••3312</h6>
                                </div>
                            </div>
                            <div style="margin-top: 50px; text-align: center;">
                                <h4 class="display-4" style="font-size: 25px">Tarjeta MasterCard</h4>
                                <h4 class="display-4" style="font-size: 20px; margin-bottom: 30px;">••••3312</h4>
                                <hr style="width: 55%">
                                <h4 class="h4" style="font-size: 14px;">Fecha de vencimiento<p class="display-4" style="font-size: 20px;">03/28</p></h4>
                                <h4 class="h4" style="font-size: 14px;">Preferida</h4>
                                <label><a href="#">Actualización</a><a href="#" style="margin-left: 20px">Eliminar</a></label>
                                <hr style="width: 55%">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Termina Columna 2 -->
        </div>
    </section>
</body>
</html>