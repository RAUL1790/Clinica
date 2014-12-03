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
      <p style="text-align:justify;text-indent:40px;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.​</p> 
      <p style="text-align:justify;text-indent:40px;">This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.</p>
      </div>
       <div class="col-md-2"></div>
    </div>
     <div class="container-fluid">
        <div class="col-md-12"></div>
        <div class="col-md-2"></div>
           <div class="col-md-8"  style="background-color:#FFFFFF;">
           <h1>About Grace Homecare</h1>
 
<p style="text-align:justify;text-indent:40px;">
I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.

​

This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.

 

At Wix we’re passionate about making templates that allow you to build fabulous websites and it’s all thanks to the support and feedback from users like you! Keep up to date with New Releases and what’s Coming Soon in Wixellaneous in Support. Feel free to tell us what you think and give us feedback in the Wix Forum. If you’d like to benefit from a professional designer’s touch, head to the Wix Arena and connect with one of our Wix Pro designers. Or if you need more help you can simply type your questions into the Support Forum and get instant answers. To keep up to date with everything Wix, including tips and things we think are cool, just head to the Wix Blog!</p>

             
            </div>
        <div class="col-md-2"></div>
        </div>
   </div>



<div class="container-fluid" id="pie">
         <div class="col-md-12" >
                  </br><h6>© 2014 by Udone. Creado por Estudiantes de Informática</h6></br>
            </div>
</div>
</body>
</html>
