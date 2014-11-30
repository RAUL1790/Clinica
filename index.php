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
      <div class="col-md-12">
         <h1>Providing You with Health Care at Home.</h1> 
                                         <br/>
      <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.​</p> 
      <p>This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.</p>
      </div>
    </div>
      <div class="container-fluid" id="informacion">
      <div class="row">
           <div class="col-md-6">
              <h3>Services</h3>
            <p>Grace Homecare provides these medically supervised services to the patient at home:</p>
              <ul>
               <li>Skilled Nursing Care</li>
               <li>Infusion Therapy</li>
               <li>Physical Therapy</li>
               <li>Accupational Therapy</li>
               <li>Speech Therapy</li>
               <li>And many other services See more >></li>
              </ul>
            </div>
            <div class="col-md-6">
               <h3>Rentals</h3>
              <p>Rent a large range of medical equipment including:</p>
                <ul>
	              <li>Stair-Lift Rental</li>
	              <li>Wheelchair Rental</li>
				  <li>Hospital Bed Rental</li>
				  <li>Mobility Scooters</li>
				  <li>Respiratory Therapy</li>
				  <li>And many other options See more >></li>
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