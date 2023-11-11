<?php

    session_start();
    include '../db/conexion.php';
    
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $usuario = $_SESSION['usuario'];
    $email = $_SESSION['email'];

    $nombre_completo = $nombre.' '.$apellido; 

    $query_category = mysqli_query($conexion, "SELECT * FROM category_user
    WHERE id_person = $usuario AND status_category = '1'");
    $query_category2 = mysqli_query($conexion, "SELECT * FROM category_user
    WHERE id_person = $usuario AND status_category = '1'");
 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/ico/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <link rel="stylesheet" href="../css/style_app.css">
    <title>Vidrio y Divisiones</title>
</head>
<body>
    <section id="general_section">
        <div class="left_menu">
            <menu-main></menu-main>
        </div>

        <div class="center_menu">  
                <h1>REGISTRO DE INGRESO Y GASTOS </h1>
                <hr class="sepa" >
                <div id="container">
                <form class="formu2" action="../back/back_app/modulo2/ingresos_gastos.php" method="POST" >
                        <fieldset>
                            <div class="column2">
                                <h2>Reportar Gasto</h2>
                                <label for="category">Categoria</label>
                                    <select name="cat" id="category" required>
                                        <option value="">seleccione una categoria</option>
                                        <?php
                                        while ($datos = mysqli_fetch_array($query_category)){
                                            $id_cat = $datos['id_category'];
                                            $name_cat = $datos['category_name'];
                                            echo
                                            '<option value="'.$id_cat.'">'.$name_cat.'</option>';
                                        }?>
                                    </select>
                                <label for="valor">Valor</label>
                                    <input type="number" name="valor"id="valor" placeholder="Digite un valor del gasto" required>
                               
                                <button class="boton" type="submit" name="gasto" >Guardar</button> 
                                
                            </div>
                        </fieldset>
                </form>
                <form class="formu2" action="../back/back_app/modulo2/ingresos_gastos.php" method="POST" >
                        <fieldset>
                            <div class="column2">
                                <h2>Reportar Ingreso</h2>
                                <label for="categoy">Categoria</label>
                                    <select name="cat" id="category" required>
                                        <option value="">seleccione una categoria</option>
                                        <?php
                                        while ($datos2 = mysqli_fetch_array($query_category2)){
                                            $id_cat = $datos2['id_category'];
                                            $name_cat = $datos2['category_name'];
                                            echo
                                            '<option value="'.$id_cat.'">'.$name_cat.'</option>';
                                        }?>
                                </select>
                                <label for="valor">Valor</label>
                                <input type="number" name="valor"id="valor" placeholder="Digite un valor del ingreso" required>

                                <button class="boton" type="submit" name="ingreso" >Reportar</button> 
                                
                            </div>
                           
                           
                        </fieldset>
                    </form>
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