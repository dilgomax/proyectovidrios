<?php
    include '../../../db/conexion.php'; 

    session_start();
    $usuario = $_SESSION['usuario'];
    
    if (isset($_POST['plan_cat'])) {
        $valor_plan = $_POST['valor_plan'];
        $cat = $_POST['cat'];
        $month_plan = $_POST['month_plan'];

        $date_final = date("Y-m-d", strtotime($month_plan));

        //echo $valor_plan.'<br>'.$cat.'<br>'.$month_plan.'<br>'.$usuario;

      
        $a_p = mysqli_query($conexion, "INSERT INTO plan 
        (month_plan, value_plan, id_category, id_person) VALUES
        ('$month_plan', '$valor_plan', '$cat', '$usuario')");

        header('location:../../../app/modulo1.php');     

    }

?>