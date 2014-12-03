<?php
session_start();
$_SESSION['lugar']= "acerca";
?>
<!DOCTYPE html>
<html lang="es">
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

	<title>Clinica Universitaria Margarita</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>


     <script src="http://maps.googleapis.com/maps/api/js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" 
           src="https://maps.googleapis.com/maps/api/js?v=3.exp">
    </script>

<script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})


</script>


  <script type="text/javascript">

        function llamar_modal(){

        $('#exampleModal').modal('show.bs.modal') 

       }



        var map;
       function inicializar(location)
       {
        var nueva_esparta =  new google.maps.LatLng(10.961573, -64.096157);
           var mapOptions =
            {
               zoom: 10,
               center: nueva_esparta,
               mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            map = new google.maps.Map(document.getElementById("central"), mapOptions);

             /*           PONER MARCADOR             */
          
         var macanao =  new google.maps.LatLng(10.993793, -64.265954);
          var marker = new google.maps.Marker({
           position : macanao,
           map : map,
           title:"Clinica",
           animation: google.maps.Animation.DROP
         }); 

          /*              MOSTRAR MENSAJE AL HACER CLIK EN EL MARKER*/
           var informacion = new google.maps.InfoWindow({
               content: "Clinica Universitaria Margarita"
           });

           google.maps.event.addListener(marker, 'click', function() {
               informacion.open(map,marker);
          });

          /*      HACER ZOOOM AL HACER CLICK SOBRE EL MARCADOR*/
            google.maps.event.addListener(map, 'center_changed', function() {
                // 5 seconds after the center of the map has changed, pan back to the
                // marker.
                window.setTimeout(function() {
                  map.panTo(marker.getPosition());
                }, 5000);
              });

          google.maps.event.addListener(marker, 'click', function() {
            map.setZoom(12);
            map.setCenter(marker.getPosition());
             llamar_modal();
          });

       }
       </script>



</head>
<body onload="inicializar()">
     <div class="container-fluid" id="cabecera">
         <?php include('menu.php'); ?>
     </div>

     <div class="container-fluid" id="central">
        <!--               CARROUSEL                    -->
     </div>
     

     <div class="container-fluid" id="mensaje">
      <div class="col-md-2"></div>
      <div class="col-md-8">
         <h1>Clínica Universitaria Margarita</h1> <br/>
       <p style="text-align:justify;text-indent:40px;">La clínica Universitaria Margarita es una organización constituida por un equipo médico altamente especializado que cuenta con el apoyo del mejor personal auxiliar (Bioanalistas, Técnicos Radiólogos, Enfermeras profesionales y Auxiliares, entre otros) y un personal administrativo y obrero de alta calidad profesional y humana, que juntos son el pilar fundamental de una adecuada asistencia a nuestros pacientes.</p>
       <p style="text-align:justify;text-indent:40px;">Contamos con una emergencia capacitada y bien dotada que se encargar de atender a todos nuestros pacientes de manera oportuna y adecuada, ofrecemos la Unidad de Emergencia y Terapia Intensiva de Adultos, además de un servicio especializado de Emergencias Pediátricas, también Contamos con 60 amplios quirófanos de última generación, 20 salas de parto, 30 sala de recuperación anestésica, la mas moderna central de esterilización y el más sofisticado apoyo tecnológico en equipamiento e instrumental. Todos nuestros médicos están altamente calificados y comprometidos con su bienestar por que en la Clínica Universitara Margaria lo primero es su salud estamos ubicados en el Sector Punta Arenas,Municipio Península de Macanao, Nueva Esparta.</p> 
      </div>
       <div class="col-md-2"></div>
    </div>
         <div class="container-fluid" id="informacion">
      <div class="row">
        <div class="col-md-4">
              <h3>Visión</h3>
            <p style="text-align:justify;text-indent:20px;">Hacer de la Clínica Universitaria Margarita una institución primera en su tipo por:</p>
              <ul>
               <li>La superación de las expectativas de sus pacientes.</li>
               <li>La extraordinaria prestación de servicios de todos sus integrantes.</li>
               <li>Su adecuación a los avances tecnológicos.</li>
               <li>Su capacidad de respuesta a las exigencias del mercado.</li>
               <li>La mejor relación precio-valor de sus servicios</li>
              </ul>
            </div>
           <div class="col-md-4">
              <h3>Misión</h3>
             <p style="text-align:justify;text-indent:20px;">La Clínica Universitaria Margarita es una institución privada que proporciona a sus médicos el lugar idóneo para promover y restablecer la salud mediante su alta calidad científica y ética, basándose en el mejoramiento continuo de la tecnología y del capital humano de la organización, con el propósito de garantizar la satisfacción del paciente y aumentar su valor patrimonial.</p>

            </div>
            <div class="col-md-4">
               <h3>Valores</h3>
                <ul>                
                      <li>Honestidad</li>
                      <li>Respeto</li>
                      <li>Trabajo en equipo</li>
                      <li>Excelencia</li>
                      <li>Convicción</li>
                      <li>Mística</li>
                      <li>Lealtad</li>          
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
