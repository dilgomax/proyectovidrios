<?php
    session_start();
    include '../db/conexion.php';
    
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $usuario = $_SESSION['usuario'];
    $email = $_SESSION['email'];

    $nombre_completo = $nombre.' '.$apellido;
    
    $query_category = mysqli_query($conexion, "SELECT *FROM category_user WHERE id_person = $usuario AND status_category = '1'" );

    $query_plan = mysqli_query($conexion, "SELECT *FROM plan WHERE id_person = $usuario ");

  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/ico/logo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_app.css">
    <title>Vidrio y Divisiones</title>
</head>
<body>
    <section id="general_section">
        <div class="left_menu">
            <menu-main></menu-main>
        </div>

        <div class="center_menu">
            <h1>PLANEACION PRESUPUESTAL DEL MES</h1>
            <hr class="sepa" >
            <form class="formu" action="..\back\backapp\modulo1\add_plan.php" method="POST" >
                        <fieldset>
                            <div class="column2">
                                <label for="month_plan">Mes de  palneación</label>
                                <input type="month" name="month_plan"id="month_plan" required> 

                                <label for="category">Categoria</label>
                                <select name="cat" id="category"placeholder="Seleciones una opcion" required>
                                    <option value="" >Selecciones una opción</option>

                                    <?php
                                    while ($datos = mysqli_fetch_array($query_category)) {
                                        $id_cat = $datos['id_category'];
                                        $name_cat = $datos['category_name'];

                                        echo '
                                        <option value='.$id_cat.'>'.$name_cat.'</option>';

                                    }

                                    ?>

                                </select> 
                                <label for="valor">valor</label>
                                <input type="number"step="any" name="valor_plan"id="valor"placeholder="Ingrese el valor de la planeación para la categoria"required> 
                                
                                
                            </div>
                           
                            <br>
                            <button class="boton" type="submit" name="plan_cat" >Guardar</button> 
                            
                        </fieldset>
                </form>
                <div class="tablet">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Mes</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Categorio</th>
                                </tr>
                            </thead>
                            <tbody>

                    <?php
                        while ($datos2 = mysqli_fetch_array($query_plan)){
                            $month_p = $datos2['month_plan'];
                            $value_p = $datos2['value_plan'];
                            $id_c = $datos2['id_category'];
            
                            $month_p = date("F", strtotime($month_p)); 
                            $value_p = number_format($value_p, 0, ',', '.');
            
                            $query_category2 = mysqli_query($conexion, "SELECT * FROM category_user
                            WHERE id_category = $id_c AND id_person = $usuario");
            
                            while ($datos3 = mysqli_fetch_array($query_category2)){
                                $name_cat = $datos3['category_name'];
                            }
            
                            echo '
                            <tr>
                                <td>'.$month_p.'</td>
                                <td>$ '.$value_p.'</td>
                                <td>'.$name_cat.'</td>
                            </tr>';
            
                        }    

                    ?>
                            </tbody>
                        </table>
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

