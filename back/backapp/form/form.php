<?php
    include '../../../db/conexion.php'; 

    session_start();
    $usuario = $_SESSION['usuario'];
    
    if (isset($_POST['cotiza'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $ciudad = $_POST['city'];
        $direccion = $_POST['address'];
        $correo = $_POST['email'];
        $proyecto = $_POST['Description_proyect'];

       
        //echo $valor_plan.'<br>'.$cat.'<br>'.$month_plan.'<br>'.$usuario;

      
        $c_t = mysqli_query($conexion, "INSERT INTO cotiza 
        (nombre, apellido, telefono, ciudad, direccion, correo, proyecto) VALUES
        ('$nombre', '$apellido', '$telefono', '$ciudad', '$direccion', '$correo','$proyecto')");

        header('location:../../../index.php#cotizar');     

    }

?>