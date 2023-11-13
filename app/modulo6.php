<?php

    session_start();
    include '../db/conexion.php';
    
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $usuario = $_SESSION['usuario'];
    $email = $_SESSION['email'];

    $nombre_completo = $nombre.' '.$apellido; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/ico/logo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Vidrio y Divisiones</title>
</head>
<body>
    <section id="general_section">
        <div class="left_menu">
            <menu-main></menu-main>
        </div>

        <div class="center_menu">
            <div id="modulo6">
                <h1>COTIZACION DE DE VIDRIO </h1>
                <p>Selecciona las  características y las medidas en centímetros del vidrio que  deseas  cotizar</p>
                <div>
                    <form class="formu" action="" method="POST" >
                        <fieldset>
                            <div class="column">
                                <label for="clase">Clase de vidrio</label>
                                <select name="clase" id="clase">
                                    <option value="tr">Transparente</option>
                                    <option value="br">Bronce</option>
                                    <option value="az">Azul</option>
                                </select> 
                                <label for="calibre">Calibre de vidrio</label>
                                <select name="calibre" id="calibre">
                                    <option value="6">6 mm</option>
                                    <option value="8">8 mm</option>
                                    <option value="10">10 mm</option>
                                </select> 
                                <label for="alto">Altura en cm</label>
                                <input type="number" name="alto"id="alto"step="any" value="" required>
                                
                            </div>
                            <div class="column">
                                
                                <label for="acabado">Tipo de vidrio</label>
                                <select name="acabado" id="acabado">
                                    <option value="crudo">Crudo</option>
                                    <option value="templado">Templado</option>
                                </select>
                                <label for="diseno">Diseño</label>
                                <select name="diseno" id="diseno">
                                    <option value="sindiseno">Sin diseño</option>
                                    <option value="sanblasting">Sanblasting</option>
                                    <option value="pintado">Pintado</option>
                                </select>
                                <label for="ancho">Ancho en cm</label>
                                <input type="number" name="ancho"id="ancho"step="any"value="" required>
                                
                            </div>
                           
                            <br>
                            <button class="boton" type="submit" name="cotizar" >Cotizar</button> 
                            
                        </fieldset>
                    </form>
                    <?php 

                        if (isset($_POST['cotizar'])) {
                            $clase = $_POST['clase'];
                            $acabado = $_POST['acabado'];
                            $calibre =    $_POST['calibre'];
                            $diseno =   $_POST['diseno'];  
                            $alto = $_POST['alto'];
                            $ancho =  $_POST['ancho'];

                            $medir = ($alto / 100) * ($ancho / 100);
                            
                            switch ($clase) {
                                case 'tr':
                                    $clases = 90000 ;
                                    $vidrio = ' transparente ';
                                    break;
                                
                                case 'br':
                                    $clases = 120000 ;
                                    $vidrio = ' bronce ';
                                    break;

                                case 'az':
                                    $clases = 120000 ;
                                    $vidrio = ' azul ';
                                    break;  
                                }
                            
                            switch ($acabado) {
                                case 'crudo':
                                    $acabados = 0 ;
                                    $acabadov = ' crudo';
                                    break;
                                
                                case 'templado':
                                    $acabados = 50000 ;
                                    $acabadov = ' templado ';
                                    break;
                                }

                            switch ($calibre) {
                                case '6':
                                    $calibres = 0 ;
                                    $calibrev = ' 6mm ';
                                    break;
                                
                                case '8':
                                    $calibres = 60000 ;
                                    $calibrev = ' 8 mm ';
                                    break;

                                case '10':
                                    $calibres = 120000 ;
                                    $calibrev = ' 10 mm ';
                                    break;  
                                }

                            switch ($diseno) {
                                case 'sindiseno':
                                    $disenos = 0 ;
                                    $disenov = 'limpio ';
                                    break;

                                case 'sanblasting':
                                    $disenos = 40000 ;
                                    $disenov = ' sanblasting ';
                                    break;
                                
                                case 'pintado':
                                    $disenos = 60000 ;
                                    $disenov = ' pintado ';
                                    break;    
                            }

                            $total = ($clases + $acabados + $calibres + $disenos) * $medir;

                        $valor = '<h3> El vidrio ' .$vidrio.''.$acabadov. ' de calibre '.$calibrev.' con  diseño '.$disenov.' de '.$alto.' cm de alto y '.$ancho.' cm de ancho tiene un valor de ' .$total. ' pesos.</h3>';   
                        echo $valor;

                        }
                    
                     
                    ?>
                </div>
            </div>
            
            

        </div>
        <div class="right_menu">
            <div class="profile">
                <img src="https://thispersondoesnotexist.com/" alt="foto perfil">
                <p><?php  echo  $nombre_completo ?></p>
                <span><?php echo $email ?></span>
                <hr class="div_profile">
            </div>
            <div class="ultima_transaccion">
                <h2>Ultimos movimientos</h2>
                <div class="t_i">
                    <span>19/10/2023</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus reprehenderit, iure labore inventore reiciendis totam</p>
                </div>
                <div class="t_i">
                    <span>19/10/2023</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus reprehenderit, iure labore inventore reiciendis totam</p>
                </div>
                <div class="t_i">
                    <span>19/10/2023</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus reprehenderit, iure labore inventore reiciendis totam</p>
                </div>
                <div class="t_i">
                    <span>19/10/2023</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus reprehenderit, iure labore inventore reiciendis totam</p>
                </div>
            </div>
        </div>
        


    </section>
    <script src="../js/component_menu.js"></script>
    
</body>
</html>

<?php  




?>
