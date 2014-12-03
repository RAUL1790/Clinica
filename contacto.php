<?php
session_start();
$_SESSION['lugar']= "contacto";
?>

<!DOCTYPE html>
<html lang="es">
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clinica Universitaria Margarita</title>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
     <div class="container-fluid" id="cabecera">
           <?php include('menu.php'); ?>
     </div>
     <div id="contenedor">
     <div class="container-fluid" id="central">
      <div class="row">
          <div class="col-md-12">
              <div class="text-center">
              <h3 style="margin-top:50px;">Si usted tiene alguna pregunta o desea obtener más información, nuestros consejeros estarán encantados de ayudarle.</h3>
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h1 style="margin-top:50px; text-align:left;">Contáctenos</h1>
          <h4 style="margin-top:30px;">Para consultas generales llamar al N° <strong>0295-2222222</strong></br>
          O rellene nuestro formulario de contacto:</h4>
          <form role="form" style="margin-top:50px;">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Apellido</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Apellido">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Correo electrónico</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo eléctronico">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Asunto</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Asunto">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Mensaje</label>
              <textarea class="form-control" rows="3" placeholder="Por favor, escriba su mensaje"></textarea>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>
          </form>
 
        </div>
        <div class="col-md-6">
            <h4 style="margin-top:120px;">También puede contactarnos personalmente. Estamos ubicados en:</br>
                  <p></br></br></br><strong>Sector Punta Arenas</br>
                  Municipio Península de Macanao, Nueva Esparta</br>
                  </strong></br></p></br>
              </h4>
        </div>
      </div>



     </div>
   </div>
     <div class="container-fluid" id="pie">
         <div class="col-md-12" >
                  </br><h6>© 2014 by Udone. Creado por Estudiantes de Informática</h6></br>
            </div>
</div>
</body>
</html>