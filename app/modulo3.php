<?php
    session_start();
    include '../db/conexion.php';
    
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $usuario = $_SESSION['usuario'];
    $email = $_SESSION['email'];

    $nombre_completo = $nombre.' '.$apellido;
    
    $query_category = mysqli_query($conexion, "SELECT *FROM category_user WHERE id_person = $usuario" );

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/ico/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
            <h1>ADMINISTRA TUS PROPIAS CATEGORIAS</h1>
            <hr class="sepa" >
            <div class="add_category">
                <h2>Agregar categorias</h2>
                <form class="formu" action="..\back\backapp\modulo3\add_category.php" method="POST" >
                        <fieldset>
                            <div class="column2">
                                <label for="nombre_cat">Nombre de la categoria</label>
                                <input type="text" name="name_category"id="nombre_cat"       placeholder="Escriba la categoria" required> 
                                <label for=""></label>
                                <select name="status" id="estado"placeholder="Seleciones una opcion">
                                    <option value="" >Selecciones una opción</option>
                                    <option value="1">Habilitado</option>
                                    <option value="0">Deshabilitado</option>
                                </select> 
                                    
                            </div>
                           
                            <br>
                            <button class="boton" type="submit" name="add_cate" >agregar</button> 
                            
                        </fieldset>
                </form>
            </div>
            <div class="update_category">
                <h2>Estado de categorias</h2>

                <div class="tablet">
                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nombre categoria</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Cambiar estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php
                        while ($datos = mysqli_fetch_array($query_category)) {
                        $id_cat = $datos['id_category'];
                        $status_cat = $datos['status_category'];
                        $name_cat = $datos['category_name'];

                        if ($status_cat == 1) {
                            $status_cat_s = 'Habilitado';

                        }else{
                            $status_cat_s = 'Deshabilitado';

                        }
                        

                        echo '<tr>
                                <td>'.$name_cat.'</td>
                                <td>'.$status_cat_s.'</td>
                                <td>
                                    <form action="..\back\backapp\modulo3\update_category.php" method="POST">
                                    <input type="hidden" name="id_cat" value='.$id_cat.'>
                                    <input type="hidden" name="status_cat" value='.$status_cat.'>
                                    <button type="submit" name="change" ><i class="bi bi-arrow-repeat"></i> </button>
                                    
                                    </form>
                                
                                </td>
                            
                            </tr>';
                
                        //echo $id_cat. '<br> '.$status_cat.'<br>'.$name_cat;
                         }  

                        ?>
                        <!--<button type="submit" name="change" ><i class="bi bi-arrow-repeat"></i> </button>-->
                        </tbody>
                    </table>
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