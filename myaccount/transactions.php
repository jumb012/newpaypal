<!DOCTYPE html>
<html lang="es">
<head>
	<title>PayPal: Resumen</title>
	<meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    
        <!-- jQuery -->
        <script crossorigin="anonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
        </script>
        <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="resources/navbar2/navbar2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="resources/global/global.css">
    <link rel="stylesheet" type="text/css" href="resources/navbar2/navbar2.css">
</head>
<body>
	<script type="text/javascript">
		$(function () {
  			$('[data-toggle="popover"]').popover()
		})
		$('.popover-dismiss').popover({
  			trigger: 'focus'
		})
	</script>
	<header class="fijado">
	<?php include("components/navbar2.php"); ?>
    </header>
    <section class="contenedor container">
        <div class="row contenido">
            <div class="col-12"> <!-- Inicia Columna 1 -->
                <form>
                <div class="row">
                	<div class="col-sm-2">
                		<label class="form-check-label">Del</label>
                		<input type="date" class="form-control">
                	</div>
                	<div class="col-sm-2">
                		<label class="form-check-label">Al</label>
                		<input type="date" class="form-control">
                	</div>    
                	<div class="col-sm-5"><br>
                	<div class=" input-group mb-4">
  						<input type="text" class="form-control" placeholder="Buscar movimientos" aria-describedby="button-addon2">
  						<div class="input-group-append">
    						<button class="btn btn-outline-primary" type="summit" id="button-addon2"><i class="bi bi-search"></i></button>
 						</div>
					</div></div>
					<div class="col-sm"> 
						<br>
						<a class="btn btn-outline-primary">Filtros</a>
						<a class="btn btn-outline-primary">Estado de cuentas</a>
					</div>
                </div>
                </form>
                <div style="background-color: white; width: 100%; margin: 2px; border-radius: 10px; border: 1px solid #80808066; padding: 20px; margin-top: 30px">
                	<h4 class="text-center">Sin transacciones todavía.</h4>
                	<p class="text-center">¿Desea intentarlo de nuevo con otras fechas?</p>
                </div>
            </div> <!-- Termina Columna 1 -->
        </div>
    </section>
</body>
</html>