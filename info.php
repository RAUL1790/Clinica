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
              Contamos con los mejores especialistas nacionales e internacionales en cada una de sus ramas, capacitados para enfrentar cualquier caso y dar un diagnóstico
              acertado a los pacientes y las pautas para llevar a cabo el correspondiente tratamiento médico.</br>
          <p style="text-align:justify; text-indent:40px;">
              Abarcamos una gran gama de especialidades médicas: <strong>Cardiología, Cirugías, Gastroenterología, Ginecología, Neonatología, Neumonología, Nutrición, 
              Neurología, Oftalmología, Oncología, Ortopedia general e infantil, Otorrinolaringología, Psiquiatría, Pediatría, Urología y más. </strong> 
          </p>
          <p style="text-align:justify; text-indent:40px;">
              Si desea obtener información más detallada, consultar disponibilidad médica o buscar información sobre un servicio específico
              puede <a href="contacto.php"><em><strong>contactarnos aquí.</strong></em></a>
          </p>
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
                  Ofrecemos titulos universitarios de las carreras asociadas a la clínica: <strong>Medicina general y una variada gama de especializaciones, carreras de gerencia y 
                  administración</strong>, entre otros.
                  <p style="text-align:justify; text-indent:40px;">
                  Disponemos de los espacios necesarios para dictar las clases, en perfecto estado, con el fin de cumplir todas las necesidades y prácticas que cada carrera
                  requiere : <strong>Laboratorios para prácticas médicas y de informática, bibliotecas, posibilidad de cumplir pasantias en nuestras instalaciones y más. </strong>
                  El personal docente está conformado por los mejores profesionales en sus áreas, capácitados para transmitir todos los conocimientos necesarios a los estudiantes
                  para su desarrollo profesional.

                  <p style="text-align:justify; text-indent:40px;">
                  Los mejores estudiantes egresados, tienen la oportunidad de ser absorbidos por la clínica si estos lo desean, brindandoles la oportunidad de ejercer su profesión
                  en nuestras instalaciones médicas o formar parte del equipo docente encargado de dictar las carreras.
              </p>
              </p>
             </p>
        </div>
      </div> <!-- fin row -->


      <div class="row">
        <div class="col-md-6" id="instalaciones">
          <h3 style="margin-top:80px; text-align:left; margin-bottom:30px;"><strong>Modernas Instalaciones</strong></h3>
          <p style="text-align:justify; text-indent:40px;">
              Nuestras instalaciones son modernas y están a la vanguardia de los equipos médicos actuales disponibles en el país. La clínica esta perfectamente distribuida por sectores
              dedicados a cada una de las especialidades : <strong>Quirófanos, salas de emergencia, consultorios médicos, habitaciones para pacientes.</strong> Además, contamos con  
              equipos médicos de última tecnología y especializados, para hacer frente a cualquier diagnóstico y realización de exámenes sin la necesidad de abandonar la isla: <strong>exámenes
              para diagnóstico de cancer, quimioterapias, diálisis, radiología, laboratorio digital y resonancia magnética nuclear.</strong>
          <p style="text-align:justify; text-indent:40px;">
              Si desea obtener información más detallada sobre nuestros servicios, exámenes y/o diagnósticos, puede <a href="contacto.php"><em><strong>contactarnos aquí.</strong></em></a>
          </p>
          <p style="text-align:justify; text-indent:40px;">
              También contamos con modernos conjuntos residenciales tipo <strong>Penhouse</strong> dando la posibilidad a nuestro personal médico y estudiantes, de alojarse cerca de nuestras
              instalaciones en espacios cómodos y de calidad.
          </p>
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
                    Nuestras instalaciones poseen también de espacios para el entretenimiento y recreación tanto de nuestro personal como de nuestros huespedes y los estudiantes. Contamos con canchas de futbol y tenis con grama artificial, asi como con 
                    instructores de estas disciplinas que puedan ofrecer clases, entrenamientos y prácticas a  nuestros usuarios. 
                    <p style="text-align:justify; text-indent:40px;">
                    Aparte contamos con un moderno <strong>centro comercial que alberga una gran cantidad de tiendas variadas</strong>, un supermercado, ferias de comida, un pequeño teatro y un cine. Todo esto con la finalidad de facilitar todos los servicios posibles a nuestros 
                    clientes, al alcance de su mano, evitando que estos tomen largos viajes hacia las ciudades principales.
                    <p style="text-align:justify; text-indent:40px;">
                    Disponemos también de un <strong>helipuerto y un puerto para embarcaciones</strong>, colocandonos en contacto directo y al alcance directo para que las personas de fuera de la isla y del país puedan visitarnos y disfrutar de los diferentes 
                    servicios que ofrecemos.      
              </p>
                    
              </p>
              </p>
        </div>
      </div> <!-- fin row -->

      <div class="row">
        <div class="col-md-6" id="energia">
          <h3 style="margin-top:80px; text-align:left; margin-bottom:30px;"><strong>Energía : Paneles solares</strong></h3>
          <p style="text-align:justify; text-indent:40px;">
              En la <strong>Clínica Universitaria Margarita</strong>, procuramos aprovechar todo el potencial del sitio donde nos encontramos ubicados: <strong>El municipio Península de Macanao</strong>. No solo aprovechamos sus amplios espacios sub-utilizados, sino que tambien valoramos
              potencial en cuanto a materia energética se refiere. Por eso contamos con <strong>panales solares</strong>, capaces de dotar de energía electrica a todas nuestras instalaciones, debido al aprovechamiento de la gran cantidad de luz solar con la que cuenta el municipio.
              <p style="text-align:justify; text-indent:40px;">
              Además, como plus ecológico, estamos sacando provecho de la energía solar logrando un impacto sustancial en la reducción de elementos contaminantes en el aire que respiramos día a día. Este tipo de acciones son de <strong>importancia vital para nuestro planeta.</strong>
               
          </p>
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
               Estamos totalmente comprometidos con la comunidad y los planes preventivos que en materia de salubridad se desarrollan en conjunto con entes gubernamentales y la empresa privada. Ofrecemos <strong>gratuitamente</strong> para los más necesitados
               <strong>planes de vacunación, consultas médicas, jornadas de salud pública, planes de prevención y diagnóstico</strong>, con la finalidad de contribuir en el desarrollo  y beneficio de la isla.
               <p style="text-align:justify; text-indent:40px;">
               También se ofrecen oportunidades de trabajo para las personas que habitan en nuestras instalaciones, de acuerdo a su preparación y capacidades : Jardineros y personal de aseo y mantenimiento de las instalaciones, ayudantes de cocina, vigilantes, entre otros, contando además con 
               beneficios que les son otorgados por trabajar con nosotros: <strong>seguros médicos, becas de estudio para sus  hijos o algún otro pariente, entre otros.</strong>
          </p>
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