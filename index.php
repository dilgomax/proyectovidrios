<?php

if (isset ($_GET['status'])){
  if ($_GET['status'] == 1) {
      echo '<script>alert("registro exitoso");</script>';
  }
  if ($_GET['status'] == 2) {
      echo '<script>alert("El usuario ya existe");</script>';
  }
  if ($_GET['status'] == 3) {
    echo '<script>alert("Acceso denegado");</script>';
  }

}
  
?>

<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ico/logo.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>VIDRIOS Y DIVISIONES</title>
</head>
<body id="bg">
    <header>
        <img id="inicio" class="animacionLogo" src="img/ico/logo.png" alt="">
            <button class="abrir-menu" id="abrir" ><i class="bi bi-list"></i></button>

            <nav class="nav" id="nav" >
                <button class="cerrar-menu" id="cerrar" ><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#servicio">Servicios</a></li>
                <li><a href="#cotizar">Cotizar</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
      
        <script src="js/main.js"></script>
    </header>
    <h1>VIDRIOS Y DIVISIONES</h1>
        <section class="container">
             
            <article>
                <p>En Vidrio y Divisiones nos enorgullece servir a nuestra comunidad en Fontibón y sus alrededores. Con una ubicación conveniente en el corazón de la ciudad, estamos comprometidos en proporcionarte soluciones en vidrio de alta calidad. 

                    Desde ventanas elegantes hasta espejos personalizados y diseños decorativos únicos, ofrecemos una amplia gama de productos y servicios para embellecer tus espacios.
                    
                    Ya sea que estés buscando mejorar tu hogar, tu negocio o tu oficina, estamos aquí para ayudarte. <br>
                    
                </p>

                <div id="btn">
                        <button  type="button" class="boton"data-toggle="modal" data-target="#login_modal">Ingresa</button>
                        <button type="button" class="boton  " data-toggle="modal" data-target="#register_modal">Registrate</button>



<!-- Modal REGISTRO-->
                    <div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="register_modalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="register_modalLabel">Registro de usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="back/register.php" method="POST">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputnombres">Nombres</label>
                                  <input type="text" class="form-control" name="names" id="inputnombres" required >
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputapellidos">Apellidos</label>
                                  <input type="text" class="form-control" name="lastname" id="inputapellidos" required >
                                </div>
                              </div>
                              
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputfecha_nacimiento">Fecha de Nacimiento</label>
                                  <input type="date" class="form-control" name="birth" id="inputfecha_nacimiento" required >
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputnumero_id">Numero de  identificación (Usuario)</label>
                                  <input type="number" class="form-control" name="id_person" id="inputnumero_id" required >
                                </div>
                                
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputemail">Correo</label>
                                  <input type="email" class="form-control" name="email" id="inputemail" required >
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputcontra">Contraseña</label>
                                  <input type="password" class="form-control" name="pass" id="inputcontra" required >
                                </div>
                                <div class="modal-footer">
                                  <button  type="submit" name="register_btn" class="boton">Registrate</button>
                                  <button type="reset" class="boton">Limpiar</button>
                                </div>
                            </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <!--MODAL DE LOGIN     -->
                    
                </div>  
                
                <!--MODAL DE LOGIN     -->

                <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="login_modalLabel">Inicio de cesion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="back/login.php" method="POST">
                              
                              
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputemail">Numero de  identificación (Usuario)</label>
                                  <input type="number" class="form-control" name="id_person" id="inputnumero_id" required >
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputcontra">Contraseña</label>
                                  <input type="password" class="form-control" name="pass" id="inputcontra" required >
                                </div>
                                <div class="modal-footer">
                                  <button  type="submit" name="login_btn" class="boton">Iniciar</button>
                                  
                                </div>
                            </form>
                          </div>
                          
                        </div>
                      </div>
                  </div>
                    
            </article>
            
           
            <img src="img/fachada.jpg" alt="fachada en vidrio templado">
            <div class="redes">
                <ul>
                    <li><a href="#inicio"><i class="bi bi-house-up-fill"></i></a></i></li>
                    <li><a href="https://www.youtube.com/ " target="_blank"><i class="bi bi-youtube"></i></a></li>
                    <li><a href="https://es-la.facebook.com/"target="_blank"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/"target="_blank"><i class="bi bi-instagram"></a></i></li>
                    <li><a href="https://wa.link/hd6yal"target="_blank"><i class="bi bi-whatsapp"></a></i></li>
                    
            </div>
        </section>
        
            <hr>
            <h2 id="servicio" >SERVICIOS</h2>
            <section id="container2">
                <p>Nuestra vidriería se especializa en ofrecer una amplia gama de servicios de vidrio para satisfacer tus necesidades y elevar la estética de tus espacios. Desde ventanas y puertas de cristal hasta espejos personalizados y diseños decorativos, estamos comprometidos en brindar soluciones de alta calidad.
                    <br>
                    En nuestra vidriería, la atención al cliente es fundamental. Nuestro equipo de expertos te guiará en la elección de los productos adecuados y te brindará asesoramiento técnico. Nuestra prioridad es garantizar tu satisfacción y la belleza duradera de tus espacios.
                </p>
            <figure>
                <img src="img/corte.jpg" alt="corte de vidrio">
                <figcaption>Corte de vidrio</figcaption>
            </figure>
            <figure>
                <img src="img/templado.jpg" alt="Vidrio templado">
                <figcaption>Vidrio templado</figcaption>
            </figure>
            <figure>
                <img src="img/division.jpg" alt="Diseño de divisiones">
                <figcaption>Diseño de divisiones</figcaption>
            </figure>
            <figure>
                <img src="img/repisa.jpg" alt="Diseño de repisa">
                <figcaption>Diseño de repisa</figcaption>
            </figure>
            <figure>
                <img src="img/espejo.jpg" alt="Diseño de espejos">
                <figcaption>Diseño de espejos</figcaption>
            </figure>
            <figure>
                <img src="img/sanblasting.jpg" alt="Sanblasting">
                <figcaption>Sanblasting</figcaption>
            </figure>
            <figure>
                <img src="img/accesorios.jpg" alt="Accesorios">
                <figcaption>Accesorios</figcaption>
            </figure>
            <figure>
                <img src="img/pintura.jpg" alt="Pintura de vidrio">
                <figcaption>Pintura de vidrio</figcaption>
            </figure>
        </section>
        <hr>
        <h2 id="cotizar" >COTIZAR</h2>
        <section class="cotizar" >
            
            
            <p> Si estás interesado en nuestros servicios, no dudes en contactarnos para obtener una cotización personalizada. Nuestro equipo te proporcionará un presupuesto detallado de acuerdo a tus necesidades específicas. <br> Te invitamos a solicitar tu presupuesto sin ningún compromiso ni costo alguno. Solo tienes que dejar tus datos en el formulario de contacto que ves en esta página y rápidamente atenderemos tu solicitud. 
                </p>
            
                <form class="formu" action="https://formsubmit.co/neocrazymax@hotmail.com" method="POST" >
        <fieldset>
            <legend>LLENA EL FORMULARIO Y RECIBIRAS TU COTIZACION:</legend>
            <div class="column">

                <label for="nombre">Nombre :</label>
                <input type="text" name="nombre"id="nombre"required>
                <label for="telefono">Teléfono :</label>
                <input type="tel" name="telefono"id="telefono"required>
                    
                <label for="addres">Dirección :</label>
                <input type="text" name="addres"id="addres"required>
                
            </div>
            <div class="column">
                
                <label for="apellido">Apellido :</label>
                <input type="text" name="apellido"id="apellido"required >
                <label for="city">Ciudad :</label>
                <input type="text" name="city"id="city"required>
                <label for="email">Correo :</label>
                <input type="email" name="email"id="email"required>
                
            </div>
            <label  class="lades"for="proyect">Describa su proyecto :</label>
            <textarea name="Description_proyect" id="proyect" cols="65" rows="2" placeholder="Proporcione una Breve Descripción de su Proyecto"></textarea>
           
            <br>
            <button class="boton" type="submit" name="cotizar" >Cotizar</button> 
            <input type="hidden" name="_captcha" value="http://vidriosydivisiones.my-style.in">
            <input type="hidden" name="next" value="false">
             
        </fieldset>
    </form>
            
        </section>
        
       <footer >
        <h2 id="contacto" >CONTACTO</h2>
        <address>
            <h3><i class="bi bi-telephone-fill"></i><span>Telefono</span> : 9999999999</h3><br>
            <h3><i class="bi bi-signpost-2-fill"></i><span>Dirección</span> : Calle 35 # 98b - 26 </h3><br>
            <h3><i class="bi bi-envelope-at-fill"></i><span>Correo</span> : <a href="mailto:ogeidalejandro@gmail.com">ogeidalejandro@gmail.com</a></h3><br>
            <h3><i class="bi bi-alarm"></i><span>Horario</span> : lunes a viernes 8am a 5pm</h3><br>
        </address>
        <div>

            <h2>Ubicación en Fontibon</h2>
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1405.9233171533697!2d-74.1414980445795!3d4.6737182280090375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1695778522951!5m2!1ses-419!2sco"></iframe>
        </div>
       </footer>

      
    
</body>
</html>