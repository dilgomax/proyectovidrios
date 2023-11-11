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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/ico/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_app.css">
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Vidrio y Divisiones</title>
</head>
<body>
    <section id="general_section">
        <div class="left_menu">
            <menu-main></menu-main>
        </div>

        <div class="center_menu">
            <h1>CALCULADORA DE INTERES COMPUESTO</h1>
            <hr class="sepa" >
            <form class="formu" action="modulo4.php" method="POST" >
                        <fieldset>
                            <div class="column2">
                                <label for="cap_ini">Capital inicial</label>
                                <input type="number" name="cap_ini"id="cap_ini" placeholder="Capital inicial" required> 
                                <label for="tasa_int">Tasa de interes</label>
                                <input type="number"step="any" name="tasa_int"id="tasa_int"placeholder="Tasa de interés "required> 
                                <label for="time_ahorro">Periodo de ahorro</label>
                                <input type="number" name="time_ahorro"id="time_ahorro"placeholder="Tiempo de ahorro "required> 
                                
                            </div>
                           
                            <br>
                            <button class="boton" type="submit" name="calcular" >calcular</button> 
                            
                        </fieldset>
                </form>

                <?php
                        if (isset($_POST['calcular'])) {
                            $cap_ini =    $_POST['cap_ini'];
                            $tasa_int =    $_POST['tasa_int'];
                            $time_ahorro = $_POST['time_ahorro'];
                            $tasa_int = $tasa_int / 100;

                            

                            echo '
                            <div class="tablet">
                            <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Capital inicial</th>
                                <th scope="col">tasa de interes</th>
                                <th scope="col">Periodo de ahorro</th>
                                <th scope="col">Capital final</th>
                            </tr>
                        </thead>
                        <tbody>';

                            for ($i = 1 ; $i <= $time_ahorro; $i++){
                                $capital_final = $cap_ini *((1 + $tasa_int)** $i);
                                $capital_final = round($capital_final, 0);

                                echo '<div class="cont_table"
                            <tr>
                            <td>'.$cap_ini.'</td>
                            <td>'.$tasa_int.'</td>
                            <td>'.$i.'</td>
                            <th scope="row">'.$capital_final.'</th>
                            </tr>
                            
                            ';
                            }
                        }    
                        echo '    
                        </tbody>
                        </table>
                        </div>
                        ';

                    ?>

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