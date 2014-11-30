 <?php
session_start();
?>
  <div class="container-fluid" id="navegacion">
                <div class="row">
                      <div class="col-md-12">
                       <div class="col-md-2"></div>
	                    <div class="col-md-5">  
	                         LOGO
	                    </div>
	                    <div class="col-md-5">  
	                          <ul class="nav nav-tabs" id="subir">
                              <li role="presentation" <?php if($_SESSION['lugar'] == "index"){ echo "class='active'"; }?> ><a href="index.php">Inicio</a></li>
                                  <li role="presentation" <?php if($_SESSION['lugar'] == "info"){ echo "class='dropdown active'"; }else{ echo "class='dropdown'"; }?> >
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                      Información <span class="caret" ></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="info.php#especialidades">Especialidades</a></li>
                                      <li><a href="info.php#carreras">Carreras</a></li>
                                      <li><a href="info.php#instalaciones">Instalaciones</a></li>
                                      <li><a href="info.php#entretenimiento">Entretenimiento</a></li>
                                      <li><a href="info.php#energia">Energía</a></li>
                                      <li><a href="info.php#compromiso">Compromiso social</a></li>
                                    </ul>
                               </li>
                              <li role="presentation" <?php if($_SESSION['lugar'] == "acerca"){ echo "class='active'"; }?>><a href="acerca.php">Acerca de</a></li>
                              <li role="presentation" <?php if($_SESSION['lugar'] == "contacto"){ echo "class='active'"; }?>><a href="contacto.php">Contactanos</a></li>
                            </ul>
	                    </div>
                   </div>
                </div>                 
            </div>