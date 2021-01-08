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
</head>
<body>
	<header class="fijado">
	<?php include("components/navbar2.php"); ?>
    </header>
    <section class="contenedor container">
        <div class="row contenido">
            <div class="col-sm-4"> <!-- Inicia Columna 1 -->
                <div class="row">
                    <a class="btn" href="#addBanco">
                        <img src="resources/icons/addBankIcon_fiList.svg">
                        <h4 class="h4" style="font-size: 13px; color: #0070ba; margin-top: 20px;">Asociar una cuenta bancaria</h4>
                    </a>
                    <a class="btn" href="#addTarjeta">
                        <img src="resources/icons/addCardIcon.svg">
                        <h4 class="h4" style="font-size: 13px; color: #0070ba; margin-top: 20px;">Asociar tarjeta</h4>
                    </a>
                </div>
                <div class="row" style="margin-top: 50px">
                    <div class="list-group" id="list-tab" role="tablist" style="width: 90%">
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
            <div class="col-sm-8" style="background-color: white; margin-top: -50px"> <!-- Inicia Columna 2 -->
                <div class="row" style="margin-top: 60px">
                    <div class="tab-content" id="nav-tabContent" style="width: 100%">
                        <div class="tab-pane fade show active" id="list-bank" role="tabpanel" aria-labelledby="list-bank-list">
                            <div style="
                            height: 200px;
                            width: 340px;
                            background-image: url('resources/images/generic_bank.webp');
                            background-size: cover;
                            background-position: right;
                            background-repeat: no-repeat;
                            border-radius: 20px;
                            border: 2px solid black;
                            margin-left: 150px;
                            margin-top: 20px;
                            position: relative;
                            ">
                                <h6 style="bottom: 2px; left:15px;position: absolute;">••••5430</h6>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-card" role="tabpanel" aria-labelledby="list-card-list">Tarjeta</div>
                    </div>
                </div>
            </div> <!-- Termina Columna 2 -->
        </div>
    </section>
</body>
</html>