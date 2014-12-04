<?php
session_start();
$_SESSION['lugar']= "index";
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
        <!--               CARROUSEL                    -->


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/clinica.jpg" alt="...">
      <div class="carousel-caption" style="background-color:black; color:white; opacity:0.8;">
          <p>Clínica Universitaria Margarita</p>
      </div>
    </div>
    <div class="item">
      <img src="img/instalacion2.jpg" alt="...">
        <div class="carousel-caption" style="background-color:black; color:white; opacity:0.8;">
          <p>Equipos tecnológicos</p>
      </div>
    </div>
    <div class="item">
      <img src="img/estudiantes.jpg" alt="...">
      <div class="carousel-caption" style="background-color:black; color:white; opacity:0.8;">
          <p>Carreras universitarias relacionadas a la institucion</p>
      </div>
    </div>
    <div class="item">
      <img src="img/canchas.jpg" alt="...">
      <div class="carousel-caption" style="background-color:black; color:white; opacity:0.8;">
          <p>Zonas de entretenimiento</p>
       
      </div>
    </div>
     <div class="item">
      <img src="img/paneles.jpg" alt="...">
      <div class="carousel-caption" style="background-color:black; color:white; opacity:0.8;">
          <p>Energía obtenida de paneles solares</p>
      </div>
    </div>

    <div class="item">
      <img src="img/social.jpg" alt="...">
      <div class="carousel-caption" style="background-color:black; color:white; opacity:0.8;">
          <p>Compromiso gratuito con los más necesitados</p>
       
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     </div>
     

     <div class="container-fluid" id="mensaje">
       <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
               <h1>Comprometidos con el desarrollo Tecnológico, Educacional y Saludable de la nación.</h1> <br/>
                 <p style="text-align:justify;text-indent:40px;">La clínica Universitaria Margarita es una organización constituida por un equipo médico altamente especializado que cuenta con el apoyo del mejor personal auxiliar (Bioanalistas, Técnicos Radiólogos, Enfermeras profesionales y Auxiliares, entre otros) y un personal administrativo y obrero de alta calidad profesional y humana, que juntos son el pilar fundamental de una adecuada asistencia a nuestros pacientes.</p>
                 <p style="text-align:justify;text-indent:40px;">Contamos con una emergencia capacitada y bien dotada que se encargar de atender a todos nuestros pacientes de manera oportuna y adecuada, ofrecemos la Unidad de Emergencia y Terapia Intensiva de Adultos, además de un servicio especializado de Emergencias Pediátricas, también Contamos con 60 amplios quirófanos de última generación, 20 salas de parto, 30 sala de recuperación anestésica, la mas moderna central de esterilización y el más sofisticado apoyo tecnológico en equipamiento e instrumental. Todos nuestros médicos están altamente calificados y comprometidos con su bienestar por que en la Clínica Universitara Margaria lo primero es su salud estamos ubicados en el Sector Punta Arenas,Municipio Península de Macanao, Nueva Esparta.</p> 
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
      <div class="container-fluid" id="informacion">
      <div class="row">
           <div class="col-md-6">
              <h3>Servicios</h3>
              <br>
              <ul>
              <li>Emergencia.</li>
              <li>Terapia intensiva.</li>
              <li>Unidad quirúrgica.</li>
              <li>Radiología e imagenes.</li>
              <li>Cardiologia y hemodinamia.</li>
              <li>Laboratorios.</li>
              <li>Hospitalización y admisión.</li>
              <li>Campús deportivo y habitacional.</li>
                 </ul>
            </div>
            <div class="col-md-6">
               <h3>Ofrecemos: </h3>
              <br>
              <ul>
	              <li>Complejo Habitacional De Profesores y estudiantes.</li>
                <li>Universidad especializada en medicina.</li>
                <li>Complejo deportivo.</li>
                <li>Centro comercial.</li>
                <li>Aeropuerto privado.</li>
			        </ul>
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