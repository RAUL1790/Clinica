<?php
session_start();
$_SESSION['lugar']= "info";
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
              <h2 style="margin-top:50px;">Servicios y características de la Clínica Universitaria Margarita</h2>
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6" id="especialidades">
          <h3 style="margin-top:80px; text-align:left; margin-bottom:30px;"><strong>Los mejores especialistas</strong></h3>
          <p style="text-align:justify; text-indent:40px;">
              Grace Homecare is here to assist you with both long-term or respite solutions, providing excellent and professionally trained staff for live-in or live-out care.
              Home Care Services
               
              Live-in Home Care
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
               
              ​This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
          </p>
        </div>
        <div class="col-md-6">
            <img src="img/medicos.jpg" alt="Los mejores especialistas" class="img-thumbnail img-responsive" style="margin-top:130px;">
        </div>
      </div> <!-- fin row -->


      <div class="row">
        <div class="col-md-6" id="carreras">
            <img src="img/estudiantes.jpg" alt="Los mejores especialistas" class="img-thumbnail img-responsive" style="margin-top:130px;">
        </div>
        <div class="col-md-6">
            <h3 style="margin-top:80px; text-align:right; margin-bottom:30px;"><strong>Carreras Universitarias</strong></h3>
              <p style="text-align:justify; text-indent:40px;">
              Grace Homecare is here to assist you with both long-term or respite solutions, providing excellent and professionally trained staff for live-in or live-out care.
              Home Care Services
               
              Live-in Home Care
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
               
              ​This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
          </p>
        </div>
      </div> <!-- fin row -->


      <div class="row">
        <div class="col-md-6" id="instalaciones">
          <h3 style="margin-top:80px; text-align:left; margin-bottom:30px;"><strong>Modernas Instalaciones</strong></h3>
          <p style="text-align:justify; text-indent:40px;">
              Grace Homecare is here to assist you with both long-term or respite solutions, providing excellent and professionally trained staff for live-in or live-out care.
              Home Care Services
               
              Live-in Home Care
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
               
              ​This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
          </p>
        </div>
        <div class="col-md-6">
            <div id="carousel-info" class="carousel slide" data-ride="carousel" style="margin-top:130px; text-align:left; margin-bottom:30px;">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-info" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-info" data-slide-to="1"></li>
                    <li data-target="#carousel-info" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="img/habitacional.jpg" class="img-responsive" alt="...">
                      <div class="carousel-caption">
                        
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/instalacion1.jpg" class="img-responsive" alt="...">
                      <div class="carousel-caption">
                     
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/instalacion2.jpg" class="img-responsive" alt="...">
                      <div class="carousel-caption">
                       
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-info" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-info" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
        </div>
      </div> <!-- fin row -->

      <div class="row">
        <div class="col-md-6">
            <div id="carousel-info2" class="carousel slide" data-ride="carousel" style="margin-top:130px; text-align:left; margin-bottom:30px;">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-info2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-info2" data-slide-to="1"></li>
                    <li data-target="#carousel-info2" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="img/canchas.jpg" class="img-responsive" alt="...">
                      <div class="carousel-caption">
                        
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/tenis.jpg" class="img-responsive" alt="...">
                      <div class="carousel-caption">
                     
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/comercial.jpg" class="img-responsive" alt="...">
                      <div class="carousel-caption">
                       
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-info2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-info2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
        </div>

        <div class="col-md-6" id="entretenimiento">
            <h3 style="margin-top:80px; text-align:right; margin-bottom:30px;"><strong>Espacios para entretenimiento</strong></h3>
              <p style="text-align:justify; text-indent:40px;">
              Grace Homecare is here to assist you with both long-term or respite solutions, providing excellent and professionally trained staff for live-in or live-out care.
              Home Care Services
               
              Live-in Home Care
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
               
              ​This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
          </p>
        </div>
      </div> <!-- fin row -->

      <div class="row">
        <div class="col-md-6" id="energia">
          <h3 style="margin-top:80px; text-align:left; margin-bottom:30px;"><strong>Energía : Paneles solares</strong></h3>
          <p style="text-align:justify; text-indent:40px;">
              Grace Homecare is here to assist you with both long-term or respite solutions, providing excellent and professionally trained staff for live-in or live-out care.
              Home Care Services
               
              Live-in Home Care
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
               
              ​This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
          </p>
        </div>
        <div class="col-md-6">
            <video src="video/plantasolar.mp4" width="500px" height="280px" controls  preload  style="margin-top:130px;"> </video>
        </div>
      </div> <!-- fin row -->

      <div class="row">
        <div class="col-md-6" id="compromiso">
            <img src="img/social.jpg" alt="Los mejores especialistas" class="img-thumbnail img-responsive" style="margin-top:130px; height:300px; width:600px;">
        </div>
        <div class="col-md-6">
            <h3 style="margin-top:80px; text-align:right; margin-bottom:30px;"><strong>Compromiso social</strong></h3>
              <p style="text-align:justify; text-indent:40px;">
              Grace Homecare is here to assist you with both long-term or respite solutions, providing excellent and professionally trained staff for live-in or live-out care.
              Home Care Services
               
              Live-in Home Care
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
               
              ​This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
          </p>
        </div>
      </div> <!-- fin row -->
     </div>
   </div>
     <div class="container-fluid" id="pie">
         <div class="col-md-12" >
                  </br><h6>© 2014 by Udone. Creado por Estudiantes de Informática</h6></br>
            </div>
</div>
</body>
</html>